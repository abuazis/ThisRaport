<?php

class Kontak extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('cookie');
        $this->load->library('form_validation');
        $this->load->library('pagination');
        $this->load->model('Walikelas/Kontak_Model');
        check_session_user_walas();
    }

    public function index()
    {
        $data = [
            'judul' => 'Kontak | SIMANIS',
            'self' => $this->Kontak_Model->getSelf(),
            'kelas' => $this->Kontak_Model->getKelas(),
            'walimurid' => $this->Kontak_Model->getAllWalimurid()
        ];
        if ($this->input->post('cari')) {
            $data['walimurid'] = $this->Kontak_Model->cariKontak();
        }
        $this->load->view('walikelas/kontak/index', $data);
        $this->load->view('templates/footer');
    }

    public function buat()
    {
        $data['judul'] = 'Buat | SIMANIS';
        $this->load->view('walikelas/kontak/buat', $data);
        $this->load->view('templates/footer');

        $this->form_validation->set_rules('nama', 'Nama Pemilik', 'required|min_length[4]|max_length[50]');
        $this->form_validation->set_rules('wa', 'Nomor Whatsapp', 'required|min_length[11]|max_length[13]|numeric');
        $this->form_validation->set_rules('line', 'ID Line', 'required|min_length[3]');
        $this->form_validation->set_rules('anak', 'Nama Anak', 'required|min_length[4]|max_length[50]');

        if ($this->form_validation->run() == true) {
            $this->Kontak_Model->buatKontak();
            $this->session->set_flashdata('aksi_berhasil', 'Anda Telah Memperbaharui Kontak Anda');
            redirect('walikelas/kontak');
        }
    }

    public function ubah($id) 
    {
        $data['judul'] = 'Ubah | SIMANIS';
        $data['bio'] = $this->Kontak_Model->getSelfById($id);
        $this->load->view('walikelas/kontak/ubah', $data);
        $this->load->view('templates/footer');

        $this->form_validation->set_rules('nama', 'Nama Pemilik', 'required|min_length[4]|max_length[50]');
        $this->form_validation->set_rules('wa', 'Nomor Whatsapp', 'required|min_length[11]|max_length[13]|numeric');
        $this->form_validation->set_rules('line', 'ID Line', 'required|min_length[3]');
        $this->form_validation->set_rules('anak', 'Nama Anak', 'required|min_length[4]|max_length[50]');

        if ($this->form_validation->run() == true) {
            $this->Kontak_Model->ubahKontak();
            $this->session->set_flashdata('aksi_berhasil', 'Anda Telah Memperbaharui Kontak Anda');
            redirect('walikelas/kontak');
        }
    }
}
 