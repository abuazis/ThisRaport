<?php

class Dashboard_Model extends CI_Model {

    function getProfil() {
        $this->db->select('*');
        $this->db->from('tbl_walmur');
        $this->db->where('username', $this->session->userdata('username'));
        $result = $this->db->get()->row_array();
        return $result;
    }

    function getProfilById($id) {
        return $this->db->get_where('tbl_walmur', ['id' => $id])->row_array();
    }

    function getKelas() {
        $this->db->select('*');
        $this->db->from('tbl_kelas');
        $this->db->where('kode_kelas', $this->session->userdata('kode_kelas'));
        $result = $this->db->get()->row_array();
        return $result;
    }

    function ubahProfil() {
        $data = [
            "nama_lengkap" => $this->input->post('nama', true),
            "username" => $this->session->userdata('username'),
            "gender" => $this->input->post('gender', true),
            "nama_anak" => $this->input->post('anak', true),
            "nis" => $this->input->post('nis', true),
            "alamat" => $this->input->post('alamat', true)
        ];

        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['file_name'] = $this->input->post('nip');

        $this->load->library('upload', $config);

        if( ! $this->upload->do_upload('foto') ) {
            $error = ['error' => $this->upload->display_errors()];
            $this->load->view('walimurid/dashboard/ubah', $error);
        } else {
            $upload_data = $this->upload->data();
            $file_name = $upload_data['file_name'];
            $data['foto'] = 'uploads/'.$file_name;
            $this->db->where('id', $this->input->post('id'));
            if($this->db->update('tbl_walmur', $data)) {
                redirect('walimurid/dashboard');
            }
        }
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('tbl_walmur', $data);
    }

}

?>