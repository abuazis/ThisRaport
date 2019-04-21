<?php

class Walikelas extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Signup/Walas_Model');
        check_session_akun();
    }

    public function index()
    {
        $data['judul'] = 'SIGN UP | WALAS';
        $this->load->view('signup/biodata_walas');
    }

    public function validation()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|min_length[4]|max_length[30]');
        $this->form_validation->set_rules('nip', 'NIP', 'required|exact_length[18]|numeric');
        $this->form_validation->set_rules('mapel', 'Mapel', 'required');
        $this->form_validation->set_rules('status', 'Status Guru', 'required');
        $this->form_validation->set_rules('kelas', 'Kelas', 'required|max_length[10]');
        $this->form_validation->set_rules('sekolah', 'Sekolah', 'required');

        if ($this->form_validation->run() == true) {
            $data_walas = [
                'nip' => $this->input->post('nip'),
                'walas_in' => 'walas',
                'level' => 'walikelas'
            ];
            $this->session->set_userdata($data_walas);
            $this->Walas_Model->tambahWalas();

            redirect('kelas/buat');
        } else {
            $this->index();
        }
    }
}
 