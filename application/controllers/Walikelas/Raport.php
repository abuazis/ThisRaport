<?php

class Raport extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('cookie');
        $this->load->library('form_validation');
        $this->load->library('pagination');
        $this->load->model('Walikelas/Raport_Model');
        $this->load->model('Walikelas/Data_Model');
        check_session_user_walas();
    }

    public function index() {
        $data['judul'] = 'Raport | SIMANIS';
        if($this->input->post('cari')) {
            $data['siswa'] = $this->Raport_Model->cariSiswa();
        }
        $config['base_url'] = site_url('walikelas/raport/index'); 
        $config['total_rows'] = $this->db->count_all('tbl_siswa'); 
        $config['per_page'] = 9; 
        $config["uri_segment"] = 4; 
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = '&raquo;';
        $config['prev_link']        = '&laquo;';
        $config['full_tag_open']    = '<div class="pagination mt-5 marger">';
        $config['full_tag_close']   = '</div>';
        $config['cur_tag_open']     = '<a class="active">';
        $config['cur_tag_close']    = '</a>';
        $config['prev_tag_open']    = '<a>';
        $config['prev_tag_close']  = '</a>';
        $config['last_tag_open']    = '<a>';
        $config['last_tag_close']  = '</a>';

        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;

        $data['siswa'] = $this->Raport_Model->getSiswa($config["per_page"], $data['page']);           

        $data['pagination'] = $this->pagination->create_links();
        $this->load->view('walikelas/raport/index', $data);
        $this->load->view('templates/footer');
    }

    public function buat() {
        $data['judul'] = 'Raport | SIMANIS';

        if(isset($_POST['submit'])) {
            $this->Raport_Model->buatRaport();
            $this->session->set_flashdata('berhasil_raport', 'Raport Berhasil Dibuat');
            redirect('walikelas/raport');
        } else {
            $this->load->view('walikelas/raport/buat', $data);
            $this->load->view('templates/footer');
        }
    }

    public function ubah($id) {
        $data = [
            'judul' => 'Raport | SIMANIS',
            'biodata' => $this->Data_Model->getBiodata($id),
            'raport' => $this->Data_Model->getNilaiRaport($id),
            'sikap' => $this->Data_Model->getNilaiSikap($id),
            'kehadiran' => $this->Data_Model->getKehadiran($id)
        ];

        if(isset($_POST['ubah'])) {
            $this->Raport_Model->ubahRaport($id);
            $this->session->userdata('ubah_raport', 'Raport Berhasil Diubah');
            redirect('walikelas/raport');
        } else {
            $this->load->view('walikelas/raport/ubah', $data);
            $this->load->view('templates/footer');
        }

    }

    public function hapus($id) {
        $this->Raport_Model->hapusRaport($id);
        $this->session->set_userdata('hapus_raport', 'Raport Telah Dihapus');
        redirect('walikelas/raport');
    }

}

?>