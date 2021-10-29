<?php



class Supplier extends CI_Controller
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
    public function index()
    {

        $this->load->view('asset/header');
        $this->load->view('asset/sidebar');


        $this->load->view('customers');


        $this->load->view('asset/footer');
    }

    public function tambah_supplier()
    {
        $this->form_validation->set_rules('namasup', 'Nama Supplier', 'trim|required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required');
        $this->form_validation->set_rules('notelfon', 'Notelfon', 'trim|min_length[5]|max_length[14]');



        if ($this->form_validation->run() == FALSE) {

            $dariDB = $this->Supplier_model->cekkodesupplier();
            $nourut = substr($dariDB, 3, 4);
            $kodeSupplierSekarang = $nourut + 1;
            $data = array('kode_supplier' => $kodeSupplierSekarang);
            $data['titel'] = 'Tambah Supplier';

            $this->load->view('asset/header');
            $this->load->view('asset/sidebar');
            $this->load->view('tambah_supplier', $data);
            $this->load->view('asset/footer');
        } else {

            $data = [
                'id_supplier'   => null,
                'kode_supplier' => htmlspecialchars($this->input->post('kode')),
                'nama_supplier' => htmlspecialchars($this->input->post('namasup')),
                'alamat'         => htmlspecialchars($this->input->post('alamat')),
                'email'          => htmlspecialchars($this->input->post('email')),
                'no_tlp'       => $this->input->post('notelfon'),
                'kota'          => htmlspecialchars($this->input->post('kota'))
            ];

            $this->Supplier_model->insert_supplier($data);
            $this->session->set_flashdata(
                'msg',
                '<div class="alert alert-success" role="alert">
            Supplier Berhasil Ditambahkan!
            </div>'
            );
            Redirect(base_url('Supplier/tambah_supplier'));
        }
    }

    public function list_suplier()
    {
        $data['titel'] = 'List Supplier';
        $data['query'] = $this->db->get('supplier')->result_array();
        $this->load->view('asset/header');
        $this->load->view('asset/sidebar');
        $this->load->view('list_suplier', $data);
        $this->load->view('asset/footer');
    }
}


// class Supplier extends CI_Controller
// {

//     function __construct()
//     {
//         parent::__construct();
//         $this->load->model('Master_item_model');
//     }
//     public function index()
//     {
//         $this->load->helper('url');
//         $this->load->view('asset/header');
//         $this->load->view('asset/sidebar');


//         $this->load->view('customers');


//         $this->load->view('asset/footer');
//     }

//     public function tambah_supplier()
//     {
//         $data['titel'] = 'Tambah Supplier';
//         // $data['inputcustomer'] = 'Input Customers';

//         $this->load->helper('url');
//         $this->load->view('asset/header');
//         $this->load->view('asset/sidebar');


//         $this->load->view('tambah_supplier', $data);


//         $this->load->view('asset/footer');
//     }
//     public function list_suplier()
//     {
//         $data['titel'] = 'List Supplier';
//         $data['query'] = $this->db->get('suplier')->result_array();
//         $this->load->view('asset/header');
//         $this->load->view('asset/sidebar');
//         $this->load->view('list_suplier', $data);
//         $this->load->view('asset/footer');
//     }
// }
