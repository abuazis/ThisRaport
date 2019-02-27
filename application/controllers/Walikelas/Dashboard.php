<?php

class Dashboard extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->helper('cookie');
        $this->load->library('form_validation');
        $this->load->model('Walikelas/Dashboard_Model');
        check_session_user_walas();
    }

    public function index() {
        $data['judul'] = 'Dashboard | Simanis';
        $data['walikelas'] = $this->Dashboard_Model->getProfil();
        $data['kelas'] = $this->Dashboard_Model->getKelas();
        $this->load->view('templates/navbar', $data);
        $this->load->view('walikelas/dashboard/index', $data);
        $this->load->view('templates/footer');
    }

    public function update($id) {
        $data['judul'] = 'Ubah Profil | Simanis';
        $data['walikelas'] = $this->Dashboard_Model->getProfilById($id);
        $data['status'] = ['PNS', 'Honorer'];

        $this->form_validation->set_rules('nama', 'Nama', 'required|min_length[4]|max_length[30]');
        $this->form_validation->set_rules('nip', 'NIP', 'required|exact_length[18]|numeric');
        $this->form_validation->set_rules('mapel', 'Mapel', 'required');
        $this->form_validation->set_rules('status', 'Status Guru', 'required');
        $this->form_validation->set_rules('kelas', 'Kelas', 'required|max_length[10]');
        $this->form_validation->set_rules('sekolah', 'Sekolah', 'required');

        if($this->form_validation->run() == TRUE) {
            $this->Dashboard_Model->ubahProfil();
            $this->session->set_flashdata('flash', 'Diubah');
            $this->session->set_flashdata('ubah_walas', 'Anda baru saja mengubah profil anda');
            redirect('walikelas/dashboard');
        } else {
            $this->load->view('walikelas/dashboard/ubah', $data);
            $this->load->view('templates/footer');
        }
    }

    public function logout() {
        $this->session->sess_destroy();
        delete_cookie('on');
        redirect('');
    }

}

?>