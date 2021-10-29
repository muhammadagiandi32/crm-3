<?php

class Reporting extends CI_Controller
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

    public function order_payment()
    {

        $data['query'] = $this->db->query("SELECT *, sum(e.`pembayaran`) as pembayaran
        , b.`no_order` as no_order FROM `order` a 
        LEFT JOIN `head_order` b 
        ON a.`no_order` = b.`no_order` 
        LEFT JOIN `tagihan` c
        ON c.`no_order` = b.`no_order`
        LEFT JOIN `customers` d 
        ON a.`kode_customers` = d.`kode_customers`
        LEFT JOIN `pembayaran` e
        ON e.`no_order` = c.`no_order`
        GROUP BY e.`no_order`")->result_array();



        // $data['query'] = $this->db->query("SELECT * FROM invoice")->result_array();
        // $data['query2'] = $this->db->query("SELECT *, SUM(total) as total FROM kas GROUP BY status")->result_array();

        // echo"<pre>";
        // print_r( $data['month']);
        // die;
        $this->load->view('asset/header');
        $this->load->view('asset/sidebar');
        $this->load->view('order_payment', $data);
        $this->load->view('asset/footer');
    }

    public function limit_customers()
    {
        $data['query'] = $this->db->get('customers')->result_array();



        $this->load->view('asset/header');
        $this->load->view('asset/sidebar');
        $this->load->view('limit_customers', $data);
        $this->load->view('asset/footer');
    }
}
