<?php



class Transaksi extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Master_item_model');
        $this->load->model('Supplier_model');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->database();
    }

    public function list_so ()
    {
        $data['query'] = $this->db->query("SELECT * FROM head_order WHERE status = 'ORDER' ")->result_array();

        $this->load->view('asset/header');
        $this->load->view('asset/sidebar');
        $this->load->view('sales_order', $data);
        $this->load->view('asset/footer');
    }

    public function list_invoice ()
    {
        $data['query'] = $this->db->query("SELECT * FROM invoice")->result_array();

        $this->load->view('asset/header');
        $this->load->view('asset/sidebar');
        $this->load->view('list_invoice', $data);
        $this->load->view('asset/footer');
    }
}