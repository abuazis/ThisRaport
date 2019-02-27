<?php

class Siswa extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('cookie');
        $this->load->library('form_validation');
        $this->load->library('pagination');
        $this->load->model('Walikelas/Siswa_Model');
        check_session_user_walas();
    }

    public function index() {
        $data['judul'] = 'Siswa | SIMANIS';
        $data['siswa'] = $this->Siswa_Model->getSiswa();
        if($this->input->post('cari')) {
            $data['siswa'] = $this->Siswa_Model->cariSiswa();
        }
        $this->load->view('walikelas/siswa/index', $data);
        $this->load->view('templates/footer');
    }

    public function detail($id) {
        $data['judul'] = 'Detail | SIMANIS';
        $data['siswa'] = $this->Siswa_Model->getSiswaById($id);
        $this->load->view('walikelas/siswa/detail', $data);
        $this->load->view('templates/footer');
    }

    public function tambah() {
        $data['judul'] = 'Tambah | SIMANIS';

        $this->form_validation->set_rules('nama', 'Nama Siswa', 'required|min_length[4]|max_length[50]');
        $this->form_validation->set_rules('nis', 'NIS', 'required|exact_length[9]|is_unique[tbl_siswa.nis]');
        $this->form_validation->set_rules('ortu', 'Nama Ortu', 'required|min_length[4]|max_length[50]');
        $this->form_validation->set_rules('gender', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('lahir', 'Tanggal Lahir', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat Tinggal', 'required|max_length[150]');
        $this->form_validation->set_rules('kelas', 'Kelas', 'required|min_length[2]|max_length[10]');
        $this->form_validation->set_rules('sekolah', 'Sekolah', 'required|max_length[50]');

        if ($this->form_validation->run() == TRUE) {
            $this->Siswa_Model->tambahSiswa();
            $this->session->set_flashdata('siswa_berhasil', 'Anda baru saja menambahkan data siswa');
            redirect('walikelas/siswa');
        } else {
            $this->load->view('walikelas/siswa/tambah', $data);
            $this->load->view('templates/footer');
        }
    }

    public function hapus($id) {
        $this->Siswa_Model->hapusSiswa($id);
		$this->session->set_flashdata('siswa_hapus', 'Anda baru saja menghapus data siswa');
		redirect('walikelas/siswa');
    }

    public function update($id) {
        $data['judul'] = 'Ubah | Siswa';
        $data['gender'] = ['Laki-Laki', 'Perempuan'];
        $data['siswa'] = $this->Siswa_Model->getSiswaById($id);

        $this->form_validation->set_rules('nama', 'Nama Siswa', 'required|min_length[4]|max_length[50]');
        $this->form_validation->set_rules('nis', 'NIS', 'required|exact_length[9]');
        $this->form_validation->set_rules('ortu', 'Nama Ortu', 'required|min_length[4]|max_length[50]');
        $this->form_validation->set_rules('gender', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('lahir', 'Tanggal Lahir', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat Tinggal', 'required|max_length[150]');
        $this->form_validation->set_rules('kelas', 'Kelas', 'required|min_length[2]|max_length[10]');
        $this->form_validation->set_rules('sekolah', 'Sekolah', 'required|max_length[50]');

        if ($this->form_validation->run() == TRUE) {
            $this->Siswa_Model->ubahSiswa();
            $this->session->set_flashdata('siswa_ubah', 'Anda baru saja mengubah data siswa');
            redirect('walikelas/siswa');
        } else {
            $this->load->view('walikelas/siswa/ubah', $data);
            $this->load->view('templates/footer');
        }
    }

}

?>