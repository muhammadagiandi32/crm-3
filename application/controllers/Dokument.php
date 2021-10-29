<?php
// defined('BASEPATH') or exit('No direct script access allowed');
// encrypt_url($parameters);
// decrypt_url($parameters);

use Mpdf\Tag\Div;

class Dokument extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Master_item_model');
        $this->load->model('Dokumen_model');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->database();
        $this->load->library('encryption');
    }
    public function index()
    {
        $data['title'] = 'HAHAHAH';
        $this->load->view('asset/header');
        $this->load->view('asset/sidebar');


        $this->load->view('barang_masuk', $data);


        $this->load->view('asset/footer');
    }
    public function barang_masuk()
    {

        $this->form_validation->set_rules(
            'kode_item[]',
            'Kode Item',
            'required|trim',
            [
                'required' => '<div class="alert alert-danger" role="alert">
                                Kode Item Harus Di isi
                                </div>'
            ]
        );
        $this->form_validation->set_rules(
            'supplier[]',
            'Kode Item',
            'required|trim',
            [
                'required' => '<div class="alert alert-danger" role="alert">
                                Nama Supplier Harus Di Isi
                                </div>'
            ]
        );
        $this->form_validation->set_rules(
            'nama_barang[]',
            'Kode Item',
            'required|trim',
            [
                'required' => '<div class="alert alert-danger" role="alert">
                            Nama Barang Supplier Harus Di Isi
                            </div>'
            ]
        );
        $this->form_validation->set_rules(
            'jumlah[]',
            'Kode Item',
            'required|trim',
            [
                'required' => '<div class="alert alert-danger" role="alert">
                                Quantity Harus Di Isi
                            </div>'
            ]
        );
        $this->form_validation->set_rules(
            'unit[]',
            'Kode Item',
            'required|trim',
            [
                'required' => '<div class="alert alert-danger" role="alert">
                            Unit Harus Di Isi
                        </div>'
            ]
        );
        $this->form_validation->set_rules(
            'harga[]',
            'Kode Item',
            'required|trim',
            [
                'required' => '<div class="alert alert-danger" role="alert">
                            Harga Harus Di Isi
                        </div>'
            ]
        );




        if ($this->form_validation->run() == false) {
            $data['title'] = 'Input Barang Masuk';
            $this->load->helper('url');
            $this->load->view('asset/header');
            $this->load->view('asset/sidebar');


            $this->load->view('barang_masuk', $data);

            $this->load->view('asset/footer');
        } else {
            if ($this->input->post('submit') == true) {

                $kode_item    = $this->input->post('kode_item');
                $kode_item2   = $this->input->post('kode_item');

                $supplier    = $this->input->post('supplier');
                $nama_barang = $this->input->post('nama_barang');
                $jumlah      = $this->input->post('jumlah');
                $unit        = $this->input->post('unit');
                $harga       = $this->input->post('harga');

                $data = [];
                $index = 0; // Set index array awal dengan 0
                foreach ($kode_item as $kode_item) { // Kita buat perulangan berdasarkan kode sampai data terakhir
                    array_push($data, array(
                        'kode_item'     => $kode_item,
                        'supplier'      => $supplier[0],
                        'nama_barang'   => $nama_barang[$index],
                        'jumlah'        => $jumlah[$index],
                        'unit'          => $unit[$index],
                        'harga'         => $harga[$index],  // Ambil dan set data alamat sesuai index array dari $index
                        'tanggal_masuk' => date('Y-m-d')
                    ));

                    $index++;
                }
                // echo "<pre>";
                // print_r($nama_barang);
                // die;
                $cek_item = $this->db->query("SELECT * FROM stok WHERE kode_item = '$kode_item'")->num_rows();
                if ($cek_item > 0) {
                    $data2 = [];
                    $index2 = 0; // Set index array awal dengan 0
                    foreach ($kode_item2 as $kode_item2) { // Kita buat perulangan berdasarkan kode sampai data terakhir
                        array_push($data2, array(
                            'kode_item'        => $kode_item2,
                            'nama_barang'      => $nama_barang[$index2],
                            'qty'              => $jumlah[$index2],
                            'unit'             => $unit[$index2],
                            'harga'            => $harga[$index2],  // Ambil dan set data alamat sesuai index array dari $index
                            'nama_supplier'    => $supplier[0],
                        ));
                        $qty = $data2[$index2]['qty'];
                        $data_kodeitem = $data2[$index2]['kode_item'];
                        $query = "UPDATE stok SET qty = qty + $qty WHERE kode_item = '$data_kodeitem'" . ";";
                        $this->db->query($query);
                        $index2++;
                    }
                    // echo '<pre>';
                    // var_dump($data);
                    // die;
                    // $this->db->insert_batch('stok', $data2);
                    $this->Master_item_model->insert_item($data);
                    $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">
                    Data Berhasil Di Tambahkan
                    </div>');
                    $data['title'] = 'Input Barang Masuk';
                    $this->load->helper('url');
                    $this->load->view('asset/header');
                    $this->load->view('asset/sidebar');


                    $this->load->view('barang_masuk', $data);

                    $this->load->view('asset/footer');
                } else {
                    // $data2 = [];
                    // $index2 = 0; // Set index array awal dengan 0
                    // foreach ($kode_item2 as $kode_item2) { // Kita buat perulangan berdasarkan kode sampai data terakhir
                    //     array_push($data2, array(
                    //         'kode_item'        => $kode_item2,
                    //         'nama_barang'      => $nama_barang[$index2],
                    //         'qty'              => $jumlah[$index2],
                    //         'unit'             => $unit[$index2],
                    //         'harga'            => $harga[$index2],  // Ambil dan set data alamat sesuai index array dari $index
                    //         'nama_supplier'    => $supplier[0],
                    //     ));

                    //     $index2++;
                    // }
                    // // echo '<pre>';
                    // // var_dump($data);
                    // // die;
                    // $this->db->insert_batch('stok', $data2);
                    // $this->Master_item_model->insert_item($data);
                    $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">
                    Data Gagal Di Tambahkan Di Tambahkan, Silahkan Input Master Item Terlebih Dahulu
                    </div>');
                    $data['title'] = 'Input Barang Masuk';
                    $this->load->helper('url');
                    $this->load->view('asset/header');
                    $this->load->view('asset/sidebar');


                    $this->load->view('barang_masuk', $data);

                    $this->load->view('asset/footer');
                }
            }
        }
    }

    public function cari()
    {
        $this->load->helper('url');
        $data['title'] = 'Cari';
        $this->load->view('asset/header');
        $this->load->view('asset/sidebar');
        $this->load->view('cari', $data);
        $this->load->view('asset/footer');
        if (isset($_POST['cari'])) {
            $cari = $this->input->post('customers');
            $this->db->like('nama_customers', $cari);
            $query = $this->db->get('customers');

            // return $query->result();
            // $customers = $this->Dokumen_model->select_customers($cari);
            if ($query->num_rows() > 0) {
                foreach ($query->result() as $row) {
                    $result = $row->kode_customers;
                }
                redirect(base_url() . "dokument/input_order/" . encrypt_url($result));
                // return fasle;
                // die();
            } else {
                echo "data kosong";
            }
        }
    }
    public function userList()
    {
        // POST data
        $postData = $this->input->post();

        // Get data
        $data = $this->Dokumen_model->getUsers($postData);

        echo json_encode($data);
    }

    public function input_order()
    {
        $this->load->helper('url');
        $data['title'] = 'Input Order';
        $id = decrypt_url($this->uri->segment(3));
        // echo $id;
        // die;
        $this->db->select('*');
        $this->db->from('customers');
        $this->db->where('kode_customers', $id);

        // $this->
        $data['query'] = $this->db->get();;

        $this->load->view('asset/header');
        $this->load->view('asset/sidebar');

        $this->load->view('input_order', $data);

        $this->load->view('asset/footer');
    }

    public  function test()
    {
        $this->load->view('jajal');
    }
    function cari_item_barang()
    {
        if (isset($_GET['term'])) {
            $result = $this->Dokumen_model->cari_item($_GET['term']);
            if (count($result) > 0) {
                foreach ($result as $row)
                    $arr_result[] = [
                        'label' => $row->nama_barang,
                        'kode_item'   => $row->kode_item,
                    ];
                echo json_encode($arr_result);
            }
        }
    }

    function cari_customers()
    {
        if (isset($_GET['term'])) {
            $result = $this->db->query("SELECT * FROM customers WHERE nama_customers LIKE '%" . $_GET['term'] . "%'")->result();
            if (count($result) > 0) {
                foreach ($result as $row)
                    $arr_result[] = [
                        'label' => $row->nama_customers
                    ];
                echo json_encode($arr_result);
            }
        }
    }

    public function surat_jalan()
    {
        $this->load->helper('url');

        $data['query'] = $this->Dokumen_model->select_surat_jalan()->result_array();
        $data['title'] = 'Surat Jalan';
        $this->load->helper('url');
        $this->load->view('asset/header');
        $this->load->view('asset/sidebar');

        $this->load->view('surat_jalan', $data);

        $this->load->view('asset/footer');
    }

    public function sj()
    {
        $id_order = $this->uri->segment('3');
        $this->db->set('status', 'SURAT JALAN');
        $this->db->where('id_head_order', $id_order);
        $this->db->update('head_order'); // gives UPDATE `mytable` SET `field` = 'field+1' WHERE `id` = 2

        $invoice =  $this->db->get_where('head_order', ['id_head_order' => $id_order])->row();

        $no_invoice = substr($invoice->no_order, 2);

        $data = [
            'no_order' =>      $invoice->no_order,
            'no_invoice' => 'INV/' . $no_invoice,
            'date' => date('Y-m-d')
        ];

        $this->db->insert('invoice', $data);

        $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">
  Surat Jalan Berhasil Dijadikan Invoice
 </div>');
        redirect(base_url('Dokument/surat_jalan'));
    }
    public function invoice()
    {
        $this->load->helper('url');

        $data['query'] = $this->db->query("SELECT *, `order`.`no_order` as `no_order` FROM `order` LEFT JOIN head_order 
        ON `order`.no_order = head_order.no_order
        LEFT JOIN tagihan
        ON tagihan.no_order = head_order.no_order
        LEFT JOIN customers
        ON customers.kode_customers = `order`.kode_customers
        WHERE head_order.status = 'SURAT JALAN'
        GROUP BY `order`.no_order
        ")->result_array();
        $data['title'] = 'Surat Jalan';
        $this->load->helper('url');
        $this->load->view('asset/header');
        $this->load->view('asset/sidebar');


        $this->load->view('invoice', $data);

        $this->load->view('asset/footer');
    }

    public function invoice2()
    {
        $id =  decrypt_url($this->input->post('id'));
        $data['query'] = $this->db->query("SELECT * 
    FROM `order` LEFT JOIN head_order 
        ON `order`.no_order = head_order.no_order
    LEFT JOIN tagihan
        ON tagihan.no_order = head_order.no_order
    LEFT JOIN customers
    ON customers.kode_customers = `order`.kode_customers
    LEFT JOIN `stok` ON `stok`. `kode_item` = `order`. kode_item 
    WHERE head_order.no_order = '$id'
    ")->row();


        $data['query2'] = $this->db->query("SELECT *, `order`.`harga` as `harga` 
                FROM `order` 
                LEFT JOIN 
                `stok` ON `order`.`kode_item` = `stok`.`kode_item`
                WHERE no_order = '$id'
                ")->result_array();
        $data['query3'] = $this->db->query("SELECT *, SUM(`order`.`jumlah`) as `jumlah` 
                FROM `order` 
                LEFT JOIN 
                `stok` ON `order`.`kode_item` = `stok`.`kode_item`
                WHERE no_order = '$id'
                ")->row();
        $this->load->view('asset/header');
        $this->load->view('asset/sidebar');
        $this->load->view('invoice2', $data);

        // $this->load->view('asset/footer');
    }


    public function invoice_bayar($id_tagihan = NULL)
    {
        $query = $this->db->query("SELECT * FROM tagihan WHERE `id_order` = '$id_tagihan'")->result_array();


        $data['title'] = 'BAYAR INVOICE';
        foreach ($query as $row) {
            $data['tagihan'] = $row['total_tagihan'];
            $data['id_tagihan'] = $row['id_order'];

            // $tagihan = $row['total_tagihan'];
        }
        // $this->load->helper('url');
        $this->load->view('asset/header');
        $this->load->view('asset/sidebar');
        $this->load->view('invoice_bayar', $data);
        $this->load->view('asset/footer');
    }
    public function invoice_insert()
    {
        $this->load->helper('url');

        if ($this->input->post('submit') == TRUE) {
            // $nominal = $this->input->post('nominal');
            $data = [
                'no_order' => $this->input->post('id_tagihan'),
                'nominal'  => $this->input->post('nominal')
            ];
            print_r($data);
        }
        // echo "haha";
    }
    public function invoice_print()
    {
        // // Require composer autoload
        // // require_once __DIR__ .'/vendor/autoload.php';
        // // Create an instance of the class:

        // // $mpdf = new \Mpdf\Mpdf(['tempDir' => __DIR__ . '/vendor/autoload.php']);
        // $mpdf = new \Mpdf\Mpdf();
        // // Write some HTML code:
        // $mpdf->WriteHTML('Hello World');
        // // Output a PDF file directly to the browser
        // $mpdf->Output();
        // $this->load->view('asset/header');
        // $this->load->view('asset/sidebar');
        $this->load->view('invoice_print');
        // $this->load->view('asset/footer');
        // echo "haha";
    }

    public function printSJ()
    {
        //semangat lanjutkan terus    
        $this->load->view('asset/header');
        $this->load->view('asset/sidebar');
        $this->load->view('print_sj');
        $this->load->view('asset/footer');
    }
}
