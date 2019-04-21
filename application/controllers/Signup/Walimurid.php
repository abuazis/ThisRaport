<?php

class Walimurid extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Signup/Walmur_Model');
        check_session_akun();
    }

    public function index()
    {
        $data['judul'] = 'SIGN UP | WALMUR';
        $this->load->view('signup/biodata_walmur');
    }

    public function validation()
    {
        $this->form_validation->set_rules('nama', 'Nama Lengkap', 'required|min_length[4]|max_length[50]');
        $this->form_validation->set_rules('gender', 'Gender', 'required');
        $this->form_validation->set_rules('anak', 'Nama Anak', 'required|min_length[4]|max_length[50]');
        $this->form_validation->set_rules('nis', 'NIS', 'required|exact_length[9]');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');

        if ($this->form_validation->run() == true) {
            $data_walmur = [
                'nama' => $this->input->post('nama'),
                'walmur_in' => 'walmur',
                'level' => 'walimurid'
            ];
            $this->session->set_userdata($data_walmur);
            $this->Walmur_Model->tambahWalmur();

            redirect('kelas/masuk');
        } else {
            $this->index();
        }
    }
}
 