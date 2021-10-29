<?php
class Klaim extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->database();
    }
        public function klaim_emoney()
        {
        
            $this->load->view('asset/header');
            $this->load->view('asset/sidebar');
            $this->load->view('klaim_emoney');
            $this->load->view('asset/footer');

        }
        public function insert_emoney()
        {
            // print_r($this->input->post());
            // die;
            $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
            $this->form_validation->set_rules('tgl_permintaan', 'Tanggal permintaan', 'trim|required');
            $this->form_validation->set_rules('no_kendaraan', 'No Kendaraan', 'trim|required');
            $this->form_validation->set_rules('tujuan', 'Tujuan', 'trim|required');
            $this->form_validation->set_rules('biaya_tol', 'Biaya Tol', 'trim|required');
            $this->form_validation->set_rules('parkir', 'Parkir', 'trim|required');
            $this->form_validation->set_rules('lain_lain', 'Lain Lain', 'trim|required');
            $this->form_validation->set_rules('keterangan', 'Keterangan', 'trim|required');
            $this->form_validation->set_rules('status', 'status', 'trim');
            // $this->form_validation->set_rules('status', 'Status', 'trim|required');



            if ($this->form_validation->run() == FALSE) {
            $this->session->set_userdata('msg', '<div class="alert alert-danger" role="alert">
            Klaim E - Money Gagal Dibuat!
            </div>');
            Redirect(base_url('Klaim/klaim_emoney'));
            

            }else{
            // print_r($this->input->post());
            // echo "<pre>";
            // print_r($this->input->post());
            // die;
            $data_max = $this->db->query('SELECT max(id_kas) as id_kas FROM kas ORDER BY id_kas ASC')->row();
            // echo $data_max->id_stok + 1;
            $result_max = $this->db->query("SELECT id_kas FROM kas WHERE id_kas = '$data_max->id_kas' ORDER BY id_kas ASC")->result_array();
            $kode = $data_max->id_kas + 1;
            // echo $kode;
            // die;
            if (strlen($kode) == 1) {
                $no_permintaan = "BY-" . date('dmy-000') . $kode;
            } elseif (strlen($kode) == 2) {
                $no_permintaan = "BY-" . date('dmy-00') . $kode;
            } elseif (strlen($kode) == 3) {
                $no_permintaan = "BY-" . date('dmy-0') . $kode;
            } elseif (strlen($kode) == 4) {
                $no_permintaan = "BY-" . date('dmy-') . $kode;
            }
            $totalbiaya = $this->input->post('biaya_tol') + $this->input->post('parkir') + $this->input->post('lain_lain');
            $data=[
                'no_permintaan'     => $no_permintaan,
                'nama'              => $this->input->post('nama'),
                'tanggal'           => $this->input->post('tgl_permintaan'),
                'no_kendaraan'      => $this->input->post('no_kendaraan'),
                'tujuan'            => $this->input->post('tujuan'),
                'tol'               => $this->input->post('biaya_tol'),
                'parkir'            => $this->input->post('parkir'),
                'lain_lain'         => $this->input->post('lain_lain'),
                'ket'               => $this->input->post('keterangan'),
                'status'               => $this->input->post('status'),
                // 'status'            => $this->input->post('status'),
                'total'             => $totalbiaya
            ];
                $this->db->insert('kas',$data);
                $this->session->set_userdata('msg', '<div class="alert alert-success" role="alert">
                Klaim E - Money  Telah Dibuat
                </div>');
                Redirect(base_url('Klaim/klaim_emoney'));
            }
        }
        public function klaim_cash()
        {
        
            $this->load->view('asset/header');
            $this->load->view('asset/sidebar');
            $this->load->view('klaim_cash');
            $this->load->view('asset/footer');
        }
        public function insert_cash()
        {
            // print_r($this->input->post());
            // die;
            $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
            $this->form_validation->set_rules('tgl_permintaan', 'Tanggal permintaan', 'trim|required');
            $this->form_validation->set_rules('no_kendaraan', 'No Kendaraan', 'trim|required');
            $this->form_validation->set_rules('tujuan', 'Tujuan', 'trim|required');
            $this->form_validation->set_rules('parkir', 'Parkir', 'trim|required');
            $this->form_validation->set_rules('bahan_bakar', 'Bahan Bakar', 'trim|required');
            $this->form_validation->set_rules('lain_lain', 'Lain Lain', 'trim|required');
            $this->form_validation->set_rules('keterangan', 'Keterangan', 'trim|required');
            $this->form_validation->set_rules('status', 'status', 'trim');
            // $this->form_validation->set_rules('status', 'Status', 'trim|required');



            if ($this->form_validation->run() == FALSE) {
            $this->session->set_userdata('msg', '<div class="alert alert-danger" role="alert">
            Klaim Cash Gagal Dibuat!
            </div>');
            Redirect(base_url('Klaim/klaim_cash'));
            

            }else{
            // print_r($this->input->post());
            // echo "<pre>";
            // print_r($this->input->post());
            // die;
            $data_max = $this->db->query('SELECT max(id_kas) as id_kas FROM kas ORDER BY id_kas ASC')->row();
            // echo $data_max->id_stok + 1;
            $result_max = $this->db->query("SELECT id_kas FROM kas WHERE id_kas = '$data_max->id_kas' ORDER BY id_kas ASC")->result_array();
            $kode = $data_max->id_kas + 1;
            // echo $kode;
            // die;
            if (strlen($kode) == 1) {
                $no_permintaan = "BY-" . date('dmy-000') . $kode;
            } elseif (strlen($kode) == 2) {
                $no_permintaan = "BY-" . date('dmy-00') . $kode;
            } elseif (strlen($kode) == 3) {
                $no_permintaan = "BY-" . date('dmy-0') . $kode;
            } elseif (strlen($kode) == 4) {
                $no_permintaan = "BY-" . date('dmy-') . $kode;
            }

            $totalbiaya = $this->input->post('parkir') + $this->input->post('bahan_bakar')+ $this->input->post('lain_lain');
            $data=[
                'no_permintaan'     => $no_permintaan,
                'nama'              => $this->input->post('nama'),
                'tanggal'           => $this->input->post('tgl_permintaan'),
                'no_kendaraan'      => $this->input->post('no_kendaraan'),
                'tujuan'            => $this->input->post('tujuan'),
                'parkir'            => $this->input->post('parkir'),
                'bahan_bakar'       => $this->input->post('bahan_bakar'),
                'lain_lain'         => $this->input->post('lain_lain'),
                'ket'               => $this->input->post('keterangan'),
                'status'               => $this->input->post('status'),
                // 'status'            => $this->input->post('status'),
                'total'             => $totalbiaya
            ];

            // echo "<pre>";
            // print_r($data);
            // die;
                $this->db->insert('kas',$data);
                $this->session->set_userdata('msg', '<div class="alert alert-success" role="alert">
                Klaim Cash Telah Dibuat
                </div>');
                Redirect(base_url('Klaim/klaim_cash'));
            }
        }
        public function list_klaim()
        {
            $data['titel'] = 'List Klaim';
            $data['query'] = $this->db->get('kas')->result_array();
            $this->load->view('asset/header', $data);
            $this->load->view('asset/sidebar');
            $this->load->view('list_klaim');
            $this->load->view('asset/footer');
        }
        public function print_klaim()
        {
            $id = decrypt_url($this->uri->segment(3));
            


            $data['titel'] = 'List Klaim';
            $data['query'] = $this->db->get_where('kas',['id_kas'=>$id])->row();
            $this->load->view('asset/header', $data);
            $this->load->view('asset/sidebar');
            $this->load->view('print_klaim');
            // $this->load->view('asset/footer');
            
        }
        public function kas_kecil()
        {
            
            $data['query']=$this->db->get('tambah_kas')->result_array();
            $data['query2']=$this->db->get('kas')->result_array();
            $this->load->view('asset/header', $data);
            $this->load->view('asset/sidebar');
            $this->load->view('kas_kecil');
            $this->load->view('asset/footer');
        }

}