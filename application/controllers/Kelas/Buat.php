<?php

class Buat extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Kelas/Buat_Model');
        check_session_walas();        
    }

    public function index() {
        $data['judul'] = 'BUAT KELAS | SIMANIS';
        $this->load->view('kelas/buat');
    }

    public function validation() {
        $this->form_validation->set_rules('nama', 'Nama Kelas', 'required|min_length[2]|max_length[10]');
        $this->form_validation->set_rules('walas', 'Nama Walas', 'required|min_length[3]|max_length[50]');
        $this->form_validation->set_rules('kode', 'Kode Kelas', 'required|exact_length[6]');
        $this->form_validation->set_rules('sekolah', 'Nama Sekolah', 'required|min_length[5]');

        if($this->form_validation->run() == TRUE) {
            $data_kelas = [
                'kode_kelas' => $this->input->post('kode'),
                'kelas_in' => 'kelas'
            ];
            $this->session->set_userdata($data_kelas);
            $this->session->set_flashdata('regis_walas', 'Anda Telah Berhasil Registrasi Sebagai Walikelas');
            $this->Buat_Model->tambahKelas();
            redirect('walikelas/dashboard');
        } else {
            $this->index();
        }
    }

}

?>