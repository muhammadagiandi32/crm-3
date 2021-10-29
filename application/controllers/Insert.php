<?php
// defined('BASEPATH') or exit('No direct script access allowed');

class Insert extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Master_item_model');
        $this->load->model('Dokumen_model');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->database();
    }
    public function insert_input_order()
    {
        if ($this->input->post('submit') == true) {
            date_default_timezone_set('Asia/Jakarta');
            if ($this->input->post('kode_item2') == '') {
                $url   =  $this->input->post('customers');
                redirect(base_url() . 'dokument/input_order/' . encrypt_url($url[0]));
            } else {
                $url   =  $this->input->post('customers');
                $limit = $this->db->get_where('limit', ['kode_customers' => $url[0]])->row();
                $batas_limit = $this->db->get_where('customers', ['kode_customers' => $url[0]])->row();
                $input_limit =  array_sum($this->input->post('harga'));
                $jumlah_limit = $input_limit + $limit->use_limit;

                // && $limit->use_limit <= $total_harga
                echo array_sum($this->input->post('harga')) . " limit yang di input<br>";
                echo $limit->use_limit . " limit digunakan <br>";
                echo $batas_limit->limit . " batas limit <br>";
                // Kondisi ketika Jumlah Limit Lebih Besar dari Limit Customers
                if ($jumlah_limit > $batas_limit->limit) {
                    $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">
                                    jumlah limit melibih batas limit
                            </div>');
                    redirect(base_url() . 'Dokument/cari');
                } else {

                    if ($input_limit > $batas_limit->limit) {
                        $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">
                                    Limit Tidak Mencukupi 2
                            </div>');
                        redirect(base_url() . 'Dokument/cari');
                    } else {

                        $this->db->set('use_limit', $jumlah_limit);
                        $this->db->where('kode_customers', $url[0]);
                        $this->db->update('limit');
                        $kode_item   = $this->input->post('kode_item2');
                        $nama_barang = $this->input->post('nama_barang2');
                        $customers   = $this->input->post('customers');
                        $jumlah      = $this->input->post('jumlah');
                        $harga       = $this->input->post('harga');
                        $a = [];
                        foreach ($kode_item as $row) {
                            // echo "<pre>";
                            $a[] = $this->db->query("SELECT * FROM stok WHERE kode_item = '$row'")->result_array();
                        }
                        for ($i = 0; $i < count($a); $i++) {
                            // print_r($a[$i][0]['qty']);
                            // print_r($jumlah[$i]);

                            if ($a[$i][0]['qty'] < $jumlah[$i]) {
                                $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">
                                    Qty Tidak Mencukupi
                                    </div>');
                                redirect(base_url() . "Dokument/cari/");
                            } else {
                                // echo "cukup";
                                $data = array();
                                $index = 0; // Set index array awal dengan 0
                                $query = '';
                                foreach ($kode_item as $kode_item) { // Kita buat perulangan berdasarkan kode sampai data terakhir
                                    array_push($data, array(
                                        'id_order'    => null,
                                        'no_order'    => 'PO-01 ' . date('jny His'),
                                        'kode_item'   => $kode_item,
                                        'kode_customers'   => $customers[0],
                                        'nama_barang' => $nama_barang[$index],
                                        'jumlah'      => $jumlah[$index],
                                        'harga'       => $harga[$index], // Ambil dan set data alamat sesuai index array dari $index
                                    ));
                                    $qty = $data[$index]['jumlah'];
                                    $data_kodeitem = $data[$index]['kode_item'];
                                    $query = "UPDATE stok SET qty = qty - $qty WHERE kode_item = '$data_kodeitem'" . ";";
                                    $this->db->query($query);
                                    // echo $query;
                                    $index++;
                                }
                                // echo "<pre>";
                                // print_r($data);
                                // die;

                                $data_max = $this->db->query('SELECT max(id_head_order) as id_head_order FROM head_order ORDER BY id_head_order ASC')->row();
                                // echo $data_max->id_stok + 1;
                                $result_max = $this->db->query("SELECT id_head_order FROM head_order WHERE id_head_order = '$data_max->id_head_order' ORDER BY id_head_order ASC")->result_array();
                                $kode = $data_max->id_head_order + 1;
                                if (strlen($kode) == 1) {
                                    $kode_po = "PO-" . date('dmy-000') . $kode;
                                } elseif (strlen($kode) == 2) {
                                    $kode_po = "PO-" . date('dmy-00') . $kode;
                                } elseif (strlen($kode) == 3) {
                                    $kode_po = "PO-" . date('dmy-0') . $kode;
                                } elseif (strlen($kode) == 4) {
                                    $kode_po = "PO-" . date('dmy-') . $kode;
                                }
                                $queryheadorder = [
                                    'id_head_order' => null,
                                    'no_order'      => $kode_po,
                                    'tanggal_order' => date('Y-m-d'),
                                    'status'        => 'ORDER',
                                ];
                                $this->Dokumen_model->insert_head_order($queryheadorder);
                                // echo "<pre>";
                                // print_r($queryheadorder);
                                // die;
                                $kode_item   = $this->input->post('kode_item2');
                                $nama_barang = $this->input->post('nama_barang2');
                                $customers   = $this->input->post('customers');
                                $jumlah      = $this->input->post('jumlah');
                                $harga       = $this->input->post('harga');

                                $data2 = array();
                                $index2 = 0; // Set index array awal dengan 0
                                foreach ($kode_item as $kode_item) { // Kita buat perulangan berdasarkan kode sampai data terakhir
                                    array_push($data2, array(
                                        'id_order'    => null,
                                        'no_order'    => $kode_po,
                                        'kode_item'   => $kode_item,
                                        'kode_customers'   => $customers[0],
                                        'nama_barang' => $nama_barang[$index2],
                                        'jumlah'      => $jumlah[$index2],
                                        'harga'       => $harga[$index2], // Ambil dan set data alamat sesuai index array dari $index
                                    ));

                                    $index2++;
                                }
                                // echo '<pre>';
                                // var_dump($data2);
                                // echo '</pre>';
                                // die;
                                $this->Dokumen_model->insert_order($data2);
                                $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">
                            Order Berhasil Di Buat
                            </div>');
                                redirect(base_url() . 'Dokument/cari');
                            }
                        }
                        //                             // print_r($a[1][0]['qty']);
                        //                             // die;
                    }
                    // * end Kondisi ketika Jumlah Limit Lebih Besar dari Limit Customers *
                }
                // die;
            }
        }
    }


    public function insert_tagihan()
    {
        $id = decrypt_url($this->input->post('id'));
        $querytagihan = $this->db->query("SELECT * , SUM(`order`.`harga`) as total_harga
        FROM `head_order` 
        RIGHT JOIN `order`
        ON `head_order`.`no_order` = `order`.`no_order`
        WHERE `order`.`no_order` = '$id'")->result_array();
        // echo "<pre>";
        // print_r($querytagihan);
        // die;
        foreach ($querytagihan as $row) {
            $queryinserttagihan = [
                'id_tagihan' => null,
                'id_order'  =>  $row['id_head_order'],
                'no_order'  => $row['no_order'],
                'total_tagihan' => $row['total_harga'] * $row['jumlah'],
                'tanggal' => date("Y-m-d")
            ];
            // echo "<pre>";
            // print_r($queryinserttagihan);
            // die;
            $this->Dokumen_model->insert_tagihan($queryinserttagihan);
            $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">
            Tagihan Berhasil DI Buat
                </div>');
            redirect(base_url() . 'Dokument/invoice');
        }
    }
    public function pembayaran()
    {

        $this->form_validation->set_rules('no_order', 'No Order', 'required|trim');
        $this->form_validation->set_rules(
            'ip',
            'Incoming Payment',
            'required|trim|integer',
            [
                'required' => '<div class="alert alert-danger" role="alert">
                            Harus Di Isi
                            </div>',
                'integer'  => '<div class="alert alert-danger" role="alert">
                            Hanya Angka
                            </div>'
            ]
        );
        // $this->form_validation->set_rules('total', 'Incoming Payment', 'required');
        $no_order = decrypt_url($this->uri->segment(3));
        if ($this->form_validation->run() == FALSE) {
            $data['query'] = $this->db->get_where('tagihan', ['no_order' => $no_order])->result_array();
            $id = $this->db->get_where('tagihan', ['no_order' => $no_order])->result_array();
            $data['title'] = 'Pembayaran';
            $data['id'] = $this->uri->segment(3);
            $this->load->view('asset/header');
            $this->load->view('asset/sidebar');
            $this->load->view('pembayaran', $data);
            $this->load->view('asset/footer');
            //  echo $id;

        } else {
            $id = $this->db->get_where('tagihan', ['no_order' => $no_order])->result_array();
            $no_order = $this->input->post('no_order');
            $total = $this->input->post('total');
            $ip = $this->input->post('ip');
            if ($ip > $total) {
                $id = $this->uri->segment(3);
                redirect('Insert/pembayaran/' . $id);
            }
            $data = [
                'id_pembayaran' => null,
                'no_order' => $no_order,
                'pembayaran' => $ip,
                'tanggal' => date('Y-m-d:H:i:s')
            ];
            $id_customers = $id[0]['no_order'];
            $kode_customers = $this->db->query("SELECT * FROM `order` WHERE no_order = '$id_customers'")->row();

            $data_limit = $this->db->get_where('limit', ['kode_customers' => $kode_customers->kode_customers])->row();
            // echo $this->db->last_query();
            // die;

            $data_limitafterpayment = $data_limit->use_limit - $ip;
            $this->db->set('use_limit', $data_limitafterpayment);
            $this->db->where('kode_customers', $kode_customers->kode_customers);
            $this->db->update('limit');
            // echo $this->db->last_query();
            // die;
            $this->db->insert('pembayaran', $data);
            $this->db->query("UPDATE tagihan SET total_tagihan = total_tagihan - '$ip' WHERE no_order = '$no_order'");

            $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert">
            Pembayaran Berhasil Di Buat
            </div>');
            redirect(base_url('Finance/piutang_customers'));
        }
    }
}







// $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">
//                                 Limit Tidak Mencukupi
//                         </div>');