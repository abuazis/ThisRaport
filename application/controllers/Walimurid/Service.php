<?php

class Service extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('cookie');
        $this->load->library('form_validation');
        $this->load->model('Walimurid/Service_Model');
        check_session_user_walmur();
    }

    public function index() {
        $data['judul'] = 'Service | Simanis';
        $this->load->view('walimurid/service/index', $data);
    }

    public function aksi() {
        $this->form_validation->set_rules('nama', 'Nama Anda', 'required|min_length[4]|max_length[50]');
        $this->form_validation->set_rules('email', 'Email', 'required|min_length[4]|max_length[50]|valid_email');
        $this->form_validation->set_rules('jenis', 'Jenis Pesan', 'required');
        $this->form_validation->set_rules('pesan', 'Isi Pesan', 'required|max_length[1000]');
        
        if ($this->form_validation->run() == TRUE) {
            $this->Service_Model->kirimPesan();
            $this->session->set_flashdata('service_berhasil', 'Terima kasih, anda baru saja mengirim pesan service');
            redirect('walimurid/dashboard');
        } else {
            $this->index();
        }
        
    }

}

?>