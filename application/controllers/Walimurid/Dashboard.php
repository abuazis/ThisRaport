<?php

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('cookie');
        $this->load->library('form_validation');
        $this->load->model('Walimurid/Dashboard_Model');
        check_session_user_walmur();
    }

    public function index()
    {
        $data['judul'] = 'Dashboard | Simanis';
        $data['walimurid'] = $this->Dashboard_Model->getProfil();
        $data['kelas'] = $this->Dashboard_Model->getKelas();
        $this->load->view('walimurid/dashboard/index', $data);
        $this->load->view('templates/footer');
    }

    public function update($id)
    {
        $data['judul'] = 'Ubah Profil | Simanis';
        $data['walimurid'] = $this->Dashboard_Model->getProfilById($id);
        $data['gender'] = ['Laki-Laki', 'Perempuan'];

        $this->form_validation->set_rules('nama', 'Nama', 'required|min_length[4]|max_length[30]');
        $this->form_validation->set_rules('gender', 'Gender', 'required');
        $this->form_validation->set_rules('anak', 'Nama Anak', 'required|min_length[4]|max_length[30]');
        $this->form_validation->set_rules('nis', 'NIS', 'required|exact_length[9]');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');

        if ($this->form_validation->run() == true) {
            $this->Dashboard_Model->ubahProfil();
            $this->session->set_flashdata('flash', 'Diubah');
            $this->session->set_flashdata('ubah_walmur', 'Anda baru saja mengubah profil anda');
            redirect('walimurid/dashboard');
        } else {
            $this->load->view('walimurid/dashboard/ubah', $data);
            $this->load->view('templates/footer');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        delete_cookie('on');
        redirect('');
    }
}
 