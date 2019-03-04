<?php

class Raport extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('cookie');
        $this->load->library('form_validation');
        $this->load->library('pagination');
        $this->load->model('Walimurid/Raport_Model');
        check_session_user_walmur();
    }

    public function index($nis) {
        $data = [
            'judul' => 'Raport | SIMANIS',
            'siswa' => $this->Raport_Model->getSiswa($nis),
            'raport' => $this->Raport_Model->getRaportId($nis)
        ];
        $this->load->view('walimurid/raport/index', $data);
        $this->load->view('templates/footer');
    }

    public function hasil($id) {
        $data = [
            'judul' => 'Raport | SIMANIS',
            'biodata' => $this->Raport_Model->getBiodata($id),
            'raport' => $this->Raport_Model->getNilaiRaport($id),
            'sikap' => $this->Raport_Model->getNilaiSikap($id),
            'kehadiran' => $this->Raport_Model->getKehadiran($id)
        ];
        $this->load->view('walimurid/raport/data', $data);
        $this->load->view('templates/footer');
    }

}

?>