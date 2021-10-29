<?php
class Supplier_model extends CI_Model
{

    public function get_supplier()
    {
        $query = $this->db->get('supplier');
        return $query->result_array();
    }

    public function insert_supplier($data)
    {
        $this->db->insert('supplier', $data);
    }
    
    public function cekkodesupplier()
    {
        $query = $this->db->query("SELECT MAX(kode_supplier) as kodesupplier from supplier");
        $hasil = $query->row();
        return $hasil->kodesupplier;
    }
}
