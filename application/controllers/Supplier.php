<?php


class Supplier extends CI_Controller
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


        $this->load->view('customers');


        $this->load->view('asset/footer');
    }

    public function tambah_supplier()
    {
        $data['titel'] = 'Tambah Supplier';
        // $data['inputcustomer'] = 'Input Customers';

        $this->load->helper('url');
        $this->load->view('asset/header');
        $this->load->view('asset/sidebar');


        $this->load->view('tambah_supplier', $data);


        $this->load->view('asset/footer');
    }
    public function list_suplier()
    {
        $data['titel'] = 'List Supplier';
        $data['query'] = $this->db->get('suplier')->result_array();
            $this->load->view('asset/header');
            $this->load->view('asset/sidebar');
            $this->load->view('list_suplier', $data);
            $this->load->view('asset/footer');
    }
}
