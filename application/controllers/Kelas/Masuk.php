<?php

class Masuk extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Kelas/Masuk_Model');
        // check_session_one();
    }

    public function index() {
        $data['judul'] = 'SIGN IN | SIMANIS';
        $this->load->view('kelas/masuk');
    } 

    public function validation() {
        $this->form_validation->set_rules('kode', 'Kode Kelas', 'required|trim|exact_length[6]');
        
        if($this->form_validation->run() == TRUE) {
            $kode = $this->input->post('kode');

            if($this->Masuk_Model->cekKelas($kode)) {
                $session_data = ['kode_kelas' => $kode];
                $this->session->set_userdata($session_data);

                if($this->session->userdata('level') == 'walikelas') {
                    $this->session->set_flashdata('login_walas', 'Anda Telah Berhasil Login Ke Dashboard');
                    redirect('walikelas/dashboard');
                } else {
                    $this->session->set_flashdata('login_walmur', 'Anda Telah Berhasil Login Ke Dashboard');
                    redirect('walimurid/dashboard');
                }
            } else {
                $this->session->set_flashdata('error', 'Invalid');
                $this->index();
            }
        } else {
            $this->index();
        }
    }

}

?>