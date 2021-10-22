<?php


class Registrasi extends CI_Controller
{
    public function index()
    {

        $this->load->view('registrasi');
        if($this->input->post('submit')==true){
            print_r($this->input->post());
            echo "<PRE>";
        }
    }
}