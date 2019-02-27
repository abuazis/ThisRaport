<?php

class Agenda extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('cookie');
        $this->load->library('form_validation');
        $this->load->model('Walikelas/Agenda_Model');
        check_session_user_walas();
    }

    public function index() {
        $data['judul'] = 'Agenda | Simanis';
        $data['agenda'] = $this->Agenda_Model->getAgenda();
        $this->load->view('walikelas/agenda/index', $data);
        $this->load->view('templates/footer');
    }

    public function buat() {
        $data['judul'] = 'Buat | Agenda';

        $this->form_validation->set_rules('judul', 'Judul Agenda', 'required|min_length[4]|max_length[50]');
        $this->form_validation->set_rules('tanggal', 'Tanggal Agenda', 'required');
        $this->form_validation->set_rules('hari', 'Hari Pertemuan', 'required|min_length[4]|max_length[7]');
        $this->form_validation->set_rules('mulai', 'Jam Mulai', 'required');
        $this->form_validation->set_rules('selesai', 'Jam Selesai', 'required');
        $this->form_validation->set_rules('lokasi', 'Lokasi Pertemuan', 'required|min_length[4]|max_length[100]');

        if ($this->form_validation->run() == TRUE) {
            $this->Agenda_Model->buatAgenda();
            $this->session->set_flashdata('agenda_walas_berhasil', 'Anda baru saja membuat agenda untuk walimurid');
            redirect('walikelas/agenda');
        } else {
            $this->load->view('walikelas/agenda/buat', $data);
            $this->load->view('templates/footer');
        }
        
    }

    public function hapus($id) {
        $this->Agenda_Model->hapusAgenda($id);
		$this->session->set_flashdata('agenda_walas_hapus', 'Anda baru saja menghapus sebuah agenda');
		redirect('walikelas/agenda');
    }

    public function update($id) {
        $data['judul'] = 'Ubah | Agenda';
        $data['hari'] = ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu'];
        $data['agenda'] = $this->Agenda_Model->GetAgendaById($id);

        $this->form_validation->set_rules('judul', 'Judul Agenda', 'required|min_length[4]|max_length[50]');
        $this->form_validation->set_rules('tanggal', 'Tanggal Agenda', 'required');
        $this->form_validation->set_rules('hari', 'Hari Pertemuan', 'required|min_length[4]|max_length[7]');
        $this->form_validation->set_rules('mulai', 'Jam Mulai', 'required');
        $this->form_validation->set_rules('selesai', 'Jam Selesai', 'required');
        $this->form_validation->set_rules('lokasi', 'Lokasi Pertemuan', 'required|min_length[4]|max_length[100]');

        if($this->form_validation->run() == TRUE) {
            $this->Agenda_Model->ubahAgenda();
            $this->session->set_flashdata('flash', 'Diubah');
            $this->session->set_flashdata('agenda_walas_edit', 'Anda baru saja mengubah sebuah agenda');
            redirect('walikelas/agenda');
        } else {
            $this->load->view('walikelas/agenda/ubah', $data);
            $this->load->view('templates/footer');
        }
    }

}

?>