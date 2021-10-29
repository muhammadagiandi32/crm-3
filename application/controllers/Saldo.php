<?php
class Saldo extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->database();
    }
        public function saldo_awal()
        {
        
            $this->load->view('asset/header');
            $this->load->view('asset/sidebar');
            $this->load->view('saldo_awal');
            $this->load->view('asset/footer');

        }
        public function insert_saldo()
        {
            // print_r($this->input->post());
            $this->form_validation->set_rules('input_saldo', 'Saldo Awal', 'trim|required');
            $this->form_validation->set_rules('tgl_saldo', 'Tanggal Awal', 'trim|required');

            if ($this->form_validation->run() == FALSE) {
            $this->session->set_userdata('msg', '<div class="alert alert-danger" role="alert">
            Saldo Awal Gagal Dibuat!
            </div>');
            Redirect(base_url('Saldo/saldo_awal'));
            

            }else{
            // print_r($this->input->post());
                $total = $this->input->post('input_saldo');
            $data=[
                'saldo_awal' => $this->input->post('input_saldo'),
                'tgl_saldo' => $this->input->post('tgl_saldo'),
                'jumlah_saldo' => $total,
            ];
                $this->db->insert('tambah_kas',$data);
                $this->session->set_userdata('msg', '<div class="alert alert-success" role="alert">
                    Saldo Awal Telah Dibuat
                </div>');
                Redirect(base_url('Saldo/saldo_awal'));
            }


        }
}