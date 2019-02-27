<?php

class Akun extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Signup/Akun_Model'); 
    }

    public function index() {
        $data['judul'] = 'Signup | Simanis';
        $data['icon'] = base_url().'';
        $this->load->view('signup/akun', $data);
    }

    public function validation() {
        $this->form_validation->set_rules('username', 'Username', 'required|trim|min_length[4]|max_length[20]|is_unique[tbl_akun.username]');
        $this->form_validation->set_rules('level', 'Status', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[tbl_akun.email]');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');
        $this->form_validation->set_rules('konfirmasi', 'Konfirmasi Password', 'required|matches[password]');

        if($this->form_validation->run() == TRUE) {
            $data_akun = [
                'username' => $this->input->post('username'),
                'level' => $this->input->post('level'),
                'akun_in' => 'akun'
            ];
            $this->session->set_userdata($data_akun);
            $this->Akun_Model->tambahAkun();

            if($this->input->post('level') == 'walikelas') {
                redirect('signup/walikelas');
            } else {
                redirect('signup/walimurid');
            }
            
        } else {
            $this->index();
        }
    }

}

?>