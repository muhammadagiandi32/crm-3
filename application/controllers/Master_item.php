<?php
// defined('BASEPATH') or exit('No direct script access allowed');

class Master_item extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Master_item_model');
    }
    public function index()
    {
        $this->load->helper('url');
        $this->load->view('asset/header');
        $this->load->view('asset/sidebar');


        $this->load->view('master_item');


        $this->load->view('asset/footer');
    }
    public function tambah_item()
    {
        $this->load->helper('url');
        $this->load->view('asset/header');
        $this->load->view('asset/sidebar');


        $this->load->view('tambah_item');

        $this->load->view('asset/footer');

        if ($this->input->post('submit') == true) {

            // $this->db->select_max('kode_item');
            // $this->db->order_by('id_stok', 'ASC');

            $data_max=$this->db->query('SELECT max(id_stok) as id_stok FROM stok ORDER BY id_stok ASC')->row();
            // echo $data_max->id_stok + 1;
        
            $result_max=$this->db->query("SELECT kode_item FROM stok WHERE id_stok = '$data_max->id_stok' ORDER BY id_stok ASC")->result_array();
            $kode=$data_max->id_stok + 1;

            if(strlen($kode) == 1){
                $kode_item = "KD-000".$kode;
            }elseif (strlen($kode) == 2 ) {
                $kode_item = "KD-00".$kode;
            }elseif (strlen($kode) == 3 ) {
                $kode_item = "KD-0".$kode;
            }elseif (strlen($kode) == 4 ) {
                $kode_item = "KD-".$kode;
            }
            // $kode_item   = $this->input->post('kode_item');
            
            
            $nama_barang = $this->input->post('nama_barang');
            $nama_barang1= $this->input->post('nama_barang');
            $jumlah      = $this->input->post('jumlah');
            $unit        = $this->input->post('unit');
            $harga       = $this->input->post('harga');
            $satuan      = $this->input->post('satuan');

            $data = array();
            $index = 0; // Set index array awal dengan 0
            foreach ($nama_barang as $nama_barang) { // Kita buat perulangan berdasarkan kode sampai data terakhir
                array_push($data, array(
                    'kode_item'   => $kode_item,
                    'nama_barang' => strtoupper($nama_barang),
                    'satuan'      => $satuan[$index],
                    'unit'        => $unit[$index], // Ambil dan set data alamat sesuai index array dari $index
                ));

                $index++;
            }
        
            $cek_item = $this->db->query("SELECT * FROM stok WHERE kode_item = '$kode_item'")->num_rows();
            if ($cek_item > 0) {
                $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">
                Item Sudah Ada
                </div>');
                $this->load->view('asset/header');
                $this->load->view('asset/sidebar');
                $this->load->view('tambah_item');
                $this->load->view('asset/footer');
            } else {
                // echo '<pre>';
                // var_dump($data);
                // echo '</pre>';
                $data1 = array();
                $index1 = 0; // Set index array awal dengan 0
                foreach ($nama_barang1 as $nama_barang1) { // Kita buat perulangan berdasarkan kode sampai data terakhir
                    array_push($data1, array(
                        'kode_item'   => $kode_item,
                        'nama_barang' => strtoupper($nama_barang1),
                        // 'qty'         => $jumlah[$index1],
                        'unit'        => $unit[$index1],
                        'satuan'      => $satuan[$index1]
                        // 'harga'       => $harga[$index1],  // Ambil dan set data alamat sesuai index array dari $index
                    ));

                    $index1++;
                }
                // print_r($data1);
                // die;
                $this->db->insert_batch('stok', $data1);
                $this->Master_item_model->insert_item($data);
                $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">
                    Item Berhasil Di Tambahkan
                </div>');
                // echo"
                // <script type='text/javascript'>
                //     Swal.fire({
                //             type: 'error',
                //             title: 'Oops...',
                //             text: 'Something went wrong!',
                //             footer: '<a href>Ini footer!</a>'
                //         });
                // <script>";
                $this->load->view('asset/header');
                $this->load->view('asset/sidebar');
                $this->load->view('tambah_item');
                $this->load->view('asset/footer');
            }
        }
    }
}