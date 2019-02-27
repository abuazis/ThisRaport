<?php

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Home_Model');
    }

    public function index() {
        $data['judul'] = 'SIMANIS | RAPORT DIGITAL';
        $data['testimonial'] = $this->Home_Model->getTestimonial();

        $this->load->view('templates/header', $data);
        $this->load->view('home/index', $data);
        $this->load->view('templates/footer');
    }
}

?>