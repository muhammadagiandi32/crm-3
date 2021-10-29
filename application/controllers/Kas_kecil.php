<?php
class Kas_kecil extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->database();
    }

    public function index()
    {
        $this->load->view('asset/header');
        $this->load->view('asset/sidebar');
        $this->load->view('kas_kecil');
        $this->load->view('asset/footer');
    }
}