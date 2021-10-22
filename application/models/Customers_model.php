<?php
class Customers_model extends CI_Model
{

    public $title;
    public $content;
    public $date;

    public function get_customers()
    {
        $query = $this->db->get('customers');
        return $query->result_array();
    }

    public function insert_customers($data)
    {
        // $this->title    = $_POST['title']; // please read the below note
        // $this->content  = $_POST['content'];
        // $this->date     = time();

        $this->db->insert('customers', $data);
    }
}
