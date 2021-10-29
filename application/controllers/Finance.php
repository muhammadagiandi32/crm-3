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
        // echo "<pre>";
        // print_r($data['query']);
        // die;
        $this->load->view('asset/header');
        $this->load->view('asset/sidebar');


        $this->load->view('piutang_customers', $data);


        $this->load->view('asset/footer');
    }

    public function kas_kecil()
    {
        echo "kas Kecil";
    }


    public function kwitansi()
    {
        $this->load->helper('url');

        $data['query'] = $this->db->query("SELECT *, `order`.`no_order` as `no_order` FROM `order` LEFT JOIN head_order 
        ON `order`.no_order = `head_order`.`no_order`
        LEFT JOIN tagihan
        ON `tagihan`.`no_order` = `head_order`.`no_order`
        LEFT JOIN `customers`
        ON `customers`.`kode_customers` = `order`.`kode_customers`
        WHERE `head_order`.`status` = 'SURAT JALAN'
        GROUP BY `order`.no_order
        ")->result_array();
        $data['title'] = 'Surat Jalan';
        $this->load->helper('url');
        $this->load->view('asset/header');
        $this->load->view('asset/sidebar');
        $this->load->view('kwitansi', $data);
        $this->load->view('asset/footer');
    }

    public function kwitansi_print()
    {

        // $this->load->view('kwitansi_print', $data);
        $no_order = decrypt_url($this->uri->segment(3));
        $data['query'] = $this->db->query("SELECT *, `order`.`harga` as `harga` 
        FROM `invoice` 
        LEFT JOIN `order` 
            ON `invoice`.`no_order` = `order`.`no_order` 
        LEFT JOIN `customers` 
            ON `customers`.`kode_customers` =`order`.`kode_customers` 
        LEFT JOIN `stok`
            ON `stok`.`kode_item` = `order`.`kode_item`
            WHERE `invoice`.`no_order` = '$no_order'
        GROUP BY `invoice`.`no_order`, `customers`.`kode_customers`
        ")->row();
        // echo $this->db->last_query();
        // die;
        function penyebut($nilai)
        {
            $nilai = abs($nilai);
            $huruf = array("", "SATU", "DUA", "TIGA", "EMPAT", "LIMA", "ENAM", "TUJUH", "DELAPAN", "SEMBILAN", "SEPULUH", "SEBELAS");
            $temp = "";
            if ($nilai < 12) {
                $temp = " " . $huruf[$nilai];
            } else if ($nilai < 20) {
                $temp = penyebut($nilai - 10) . " BELAS";
            } else if ($nilai < 100) {
                $temp = penyebut($nilai / 10) . " PULUH" . penyebut($nilai % 10);
            } else if ($nilai < 200) {
                $temp = " seratus" . penyebut($nilai - 100);
            } else if ($nilai < 1000) {
                $temp = penyebut($nilai / 100) . " RATUS" . penyebut($nilai % 100);
            } else if ($nilai < 2000) {
                $temp = " seribu" . penyebut($nilai - 1000);
            } else if ($nilai < 1000000) {
                $temp = penyebut($nilai / 1000) . " RIBU" . penyebut($nilai % 1000);
            } else if ($nilai < 1000000000) {
                $temp = penyebut($nilai / 1000000) . " JUTA" . penyebut($nilai % 1000000);
            } else if ($nilai < 1000000000000) {
                $temp = penyebut($nilai / 1000000000) . " MILYAR" . penyebut(fmod($nilai, 1000000000));
            } else if ($nilai < 1000000000000000) {
                $temp = penyebut($nilai / 1000000000000) . " TRILIYN" . penyebut(fmod($nilai, 1000000000000));
            }
            return $temp;
        }

        function terbilang($nilai)
        {
            if ($nilai < 0) {
                $hasil = "minus " . trim(penyebut($nilai));
            } else {
                $hasil = trim(penyebut($nilai));
            }
            return $hasil;
        }
        $data_angka = $this->db->query("SELECT *, `order`.`harga` as `harga`
        FROM `invoice` 
        LEFT JOIN `order` 
            ON `invoice`.`no_order` = `order`.`no_order` 
        LEFT JOIN `customers` 
            ON `customers`.`kode_customers` =`order`.`kode_customers` 
        LEFT JOIN `stok`
            ON `stok`.`kode_item` = `order`.`kode_item`
            WHERE `invoice`.`no_order` = '$no_order'
        GROUP BY `invoice`.`no_order`, `customers`.`kode_customers`
        ")->row();
        $angka = $data_angka->harga;
        $data['angka'] = "#" . terbilang($angka) . " RUPIAH";
        $this->load->view('print_kwitansi', $data);
    }
}
