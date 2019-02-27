<?php

class Walikelas extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Signin/Walas_Model');
        $this->load->helper('cookie');
    }

    public function index() {
        $data['judul'] = 'SIGN IN | SIMANIS';
        $this->load->view('signin/walas');
    }

    public function validation() {
        $this->form_validation->set_rules('username', 'Username', 'required|trim|min_length[4]|max_length[20]');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if($this->form_validation->run() == TRUE) {
            $username = $this->input->post('username');
            $password = $this->input->post('password');  

            if($this->Walas_Model->cekLogin($username, $password)) {
                $session_data = [
                    'username' => $username,
                    'level' => 'walikelas'
                ];
                $this->session->set_userdata($session_data);
                $cookie = [
                    'name' => $this->input->post('remember'),
                    'value' => uniqid(),
                    'expire' => 3600*24*365
                ];
                $this->input->set_cookie($cookie);
                redirect('kelas/masuk');
            } else {
                $this->session->set_flashdata('error', 'Invalid Username Or Password');
                $this->index();
            }
        } else {
            $this->index();
        }
    }

}

?>