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
        if($this->input->post('cari')) {
            $data['siswa'] = $this->Siswa_Model->cariSiswa();
            $this->load->view('walikelas/siswa/index',$data);
            $this->load->view('templates/footer');
        } else {
            $config['base_url'] = site_url('walikelas/siswa/index'); 
            $config['total_rows'] = $this->db->count_all('tbl_siswa'); 
            $config['per_page'] = 2; 
            $config["uri_segment"] = 4; 
            $choice = $config["total_rows"] / $config["per_page"];
            $config["num_links"] = floor($choice);
            $config['first_link']       = 'First';
            $config['last_link']        = 'Last';
            $config['next_link']        = '&raquo;';
            $config['prev_link']        = '&laquo';
            $config['full_tag_open']    = '<div class="pagination">';
            $config['full_tag_close']   = '</div>';
            $config['num_tag_open']     = '<a>';
            $config['num_tag_close']    = '</a>';
            $config['cur_tag_open']     = '<a class="active">';
            $config['cur_tag_close']    = '</a>';
            $config['next_tag_open']    = '<a>';
            $config['next_tag_close']  = '</a>';
            $config['prev_tag_open']    = '<a>';
            $config['prev_tag_close']  = '</a>';
            $config['first_tag_open']   = '<a>';
            $config['first_tag_close'] = '</a>';
            $config['last_tag_open']    = '<a>';
            $config['last_tag_close']  = '</a>';

            $this->pagination->initialize($config);
            $data['page'] = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;

            $data['siswa'] = $this->Siswa_Model->getSiswa($config["per_page"], $data['page']);           

            $data['pagination'] = $this->pagination->create_links();

            $this->load->view('walikelas/siswa/index',$data);
            $this->load->view('templates/footer');
        }
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