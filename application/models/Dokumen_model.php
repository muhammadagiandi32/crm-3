<?php

class Dokumen_model extends CI_Model
{
    public function get_last_ten_entries()
    {
        $query = $this->db->get('entries', 10);
        return $query->result();
    }
    public function insert_order($data2)
    {
        // $this->title = $_POST['title']; // please read the below note
        // $this->content = $_POST['content'];
        // $this->date = time();

        $this->db->insert_batch('order', $data2);
    }
    function cari_item($title)
    {
        $this->db->like('nama_barang', $title);
        $this->db->order_by('nama_barang', 'ASC');
        $this->db->limit(10);
        return $this->db->get('stok')->result();
    }
    public function insert_head_order($queryheadorder)
    {
        // $this->title = $_POST['title']; // please read the below note
        // $this->content = $_POST['content'];
        // $this->date = time();

        $this->db->insert('head_order', $queryheadorder);
    }

    // QUERY INSERT TABEL TAGIHAN
    public function insert_tagihan($queryinserttagihan)
    {
        $this->db->insert('tagihan', $queryinserttagihan);
    }
    //END QUERY INSERT TABEL TAGIHAN



    public function select_customers($cari)
    {
        // $this->title = $_POST['title']; // please read the below note
        // $this->content = $_POST['content'];
        // $this->date = time();

        // $this->db->select('*');
        // $this->db->from('customers');
        // $this->db->like('nama_customers', $cari);
        $this->db->like('kode_customers', $cari);
        $query = $this->db->get('customers');
        return $query->result();
    }

    public function select_surat_jalan()
    {
        $this->db->select('*, SUM(order.harga) as harga');
        $this->db->from('order');
        $this->db->join('head_order', 'head_order.no_order = order.no_order', 'left');
        $this->db->join('customers', 'order.kode_customers = customers.kode_customers', 'left');
        $this->db->where('head_order.status', 'ORDER');
        $this->db->group_by('head_order.no_order');
        $this->db->order_by('order.no_order', 'DESC');

        return $this->db->get();
    }

    function getUsers($postData)
    {

        $response = array();

        if (isset($postData['search'])) {
            // Select record
            $this->db->select('*');
            $this->db->where("nama_customers LIKE '%" . $postData['search'] . "%' ");

            $records = $this->db->get('customers')->result();

            foreach ($records as $row) {
                $response[] = array("label" => $row->nama_customers);
            }
        }

        return $response;
    }
}
