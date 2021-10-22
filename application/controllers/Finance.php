<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Finance extends CI_Controller
{
    public function incoming_payment()
    {
        $data['query'] = $this->db->query("SELECT *, b.`no_order` as no_order 
        FROM `order` a 
        LEFT JOIN `head_order` b 
            ON a.`no_order` = b.`no_order` 
        LEFT JOIN `tagihan` c
            ON c.`no_order` = b.`no_order`
        LEFT JOIN `customers` d ON a.`kode_customers` = d.`kode_customers`
        GROUP BY b.`no_order`")->result_array();

        $this->load->view('asset/header');
        $this->load->view('asset/sidebar');


        $this->load->view('incoming_payment', $data);


        $this->load->view('asset/footer');
    }
    public function piutang_customers()
    {

        $data['query'] = $this->db->query("SELECT *, b.`no_order` as no_order FROM `order` a 
        LEFT JOIN `head_order` b 
        ON a.`no_order` = b.`no_order` 
        LEFT JOIN `tagihan` c
        ON c.`no_order` = b.`no_order`
        LEFT JOIN `customers` d ON a.`kode_customers` = d.`kode_customers`
        LEFT JOIN `pembayaran` e
        ON e.`no_order` = c.`no_order`
        GROUP BY b.`no_order`")->result_array();

        $this->load->view('asset/header');
        $this->load->view('asset/sidebar');


        $this->load->view('piutang_customers', $data);


        $this->load->view('asset/footer');
    }

    public function kas_kecil()
    {
        echo "kas Kecil";
    }
}