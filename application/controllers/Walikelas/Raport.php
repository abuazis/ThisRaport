<?php

class Raport extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('cookie');
        $this->load->library('form_validation');
        $this->load->library('pagination');
        $this->load->model('Walikelas/Raport_Model');
        check_session_user_walas();
    }

    public function index() {
        $data['judul'] = 'Raport | SIMANIS';
        $data['siswa'] = $this->Raport_Model->getSiswa();
        if($this->input->post('cari')) {
            $data['siswa'] = $this->Raport_Model->cariSiswa();
        }
        $this->load->view('walikelas/raport/index', $data);
    }

}

?>