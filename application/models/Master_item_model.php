<?php
class Master_item_model extends CI_Model
{

    public $title;
    public $content;
    public $date;

    public function get_last_ten_entries()
    {
        $query = $this->db->get('entries', 10);
        return $query->result();
    }

    public function insert_item($data)
    {
        // $this->title    = $_POST['title']; // please read the below note
        // $this->content  = $_POST['content'];
        // $this->date     = time();

        $this->db->insert_batch('tambah_barang', $data);
    }

    public function update_entry()
    {
        $this->title    = $_POST['title'];
        $this->content  = $_POST['content'];
        $this->date     = time();

        $this->db->update('entries', $this, array('id' => $_POST['id']));
    }
}
