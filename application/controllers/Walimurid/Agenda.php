<?php

class Agenda extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('cookie');
        $this->load->library('form_validation');
        $this->load->model('Walimurid/Agenda_Model');
        check_session_user_walmur();
    }

    public function index() {
        $data['judul'] = 'Agenda | Simanis';
        $data['agenda'] = $this->Agenda_Model->getAgenda();
        $this->load->view('walimurid/agenda/index', $data);
        $this->load->view('templates/footer');
    }

}

?>