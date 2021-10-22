<?php


class Customers extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->database();
        $this->load->model('Customers_model');
    }
    public function index()
    {
        $this->load->helper('url');
        $this->load->view('asset/header');
        $this->load->view('asset/sidebar');


        $this->load->view('customers');


        $this->load->view('asset/footer');
    }

    public function tambah_customers()
    {


        // SET RULES FORM VALIDATION
        $this->form_validation->set_rules('namacs', 'Namacs', 'trim|required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|valid_email');
        $this->form_validation->set_rules('notelfon', 'Notelfon', 'trim|min_length[5]|max_length[14]');
        $this->form_validation->set_rules('kota', 'Kota', 'trim|required');
        $this->form_validation->set_rules('provinsi', 'Provinsi', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $data['titel'] = 'Tambah Customers';
            // $data['inputcustomer'] = 'Input Customers';
            $this->load->view('asset/header');
            $this->load->view('asset/sidebar');


            $this->load->view('tambah_customers', $data);


            $this->load->view('asset/footer');
        } else {
            $this->db->select_max('kode_customers');
            // $this->db-from('customers');
            // $this->db->where('bedrijf_id', $bedrijf_id);
            $query = $this->db->get('customers')->row();
            $array = json_decode(json_encode($query), true);

            $nambah = substr($array['kode_customers'], 2);

            $jadi = $nambah + 1;
            $kode_customers = "PL" . "000" . $jadi;

            $data = [
                'id_customers'   => null,
                'kode_customers' => $kode_customers,
                'nama_customers' => htmlspecialchars($this->input->post('namacs')),
                'alamat'         => htmlspecialchars($this->input->post('alamat')),
                'email'          => htmlspecialchars($this->input->post('email')),
                'notelfon'       => $this->input->post('notelfon'),
                'kota'           => htmlspecialchars($this->input->post('kota')),
                'provinsi'       => htmlspecialchars($this->input->post('provinsi'))
            ];

            // print_r($data);
            $this->Customers_model->insert_customers($data);
            $this->session->set_flashdata('msg', 
            '<div class="alert alert-success" role="alert">
            Customer Berhasil Ditambahkan!
            </div>');
            Redirect(base_url('Customers/tambah_customers'));
        }
    }
    
    public function list_customers()
    {
        $data['titel'] = 'List Customers';
        $data['query'] = $this->db->get('customers')->result_array();
            $this->load->view('asset/header');
            $this->load->view('asset/sidebar');
            $this->load->view('list_customers', $data);
            $this->load->view('asset/footer');
    }
}
