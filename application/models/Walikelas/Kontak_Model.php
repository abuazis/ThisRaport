<?php

class Kontak_Model extends CI_Model {

    function aksiKontak() {
        $data = [
            "kode_kelas" => $this->session->userdata('kode_kelas'),
            "username" => $this->session->userdata('username'),
            "nama_pemilik" => $this->input->post('nama', true),
            "status" => $this->session->userdata('level', true),
            "nomor_wa" => $this->input->post('wa', true),
            "id_line" => $this->input->post('line', true)
        ];

        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['file_name'] = $this->input->post('nomor_wa');

        $this->load->library('upload', $config);

        if( ! $this->upload->do_upload('foto') ) {
            $error = ['error' => $this->upload->display_errors()];
            $this->load->view('walikelas/kontak/aksi', $error);
        } else {
            $upload_data = $this->upload->data();
            $file_name = $upload_data['file_name'];
            $data['foto'] = 'uploads/'.$file_name;
            if($this->db->insert('tbl_kontak', $data)) {
                redirect('walikelas/kontak');
            }
        }
    }

    function getSelf() {
        $this->db->select('nama_pemilik, nomor_wa, id_line, foto');
        $this->db->from('tbl_kontak');
        $this->db->where('username', $this->session->userdata('username'));
        $result = $this->db->get()->row_array();
        return $result;
    }

    function getKelas() {
        $this->db->select('nama_kelas');
        $this->db->from('tbl_kelas');
        $this->db->where('kode_kelas', $this->session->userdata('kode_kelas'));
        $result = $this->db->get()->row_array();
        return $result;
    }

    function getAllWalimurid() {
        $this->db->select('*');
        $this->db->from('tbl_kontak');
        $this->db->where('kode_kelas', $this->session->userdata('kode_kelas'));
        $this->db->where('status', 'walimurid');
        $result = $this->db->get()->result_array();
        return $result;
    }

}

?>