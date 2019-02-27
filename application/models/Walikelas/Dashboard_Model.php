<?php

class Dashboard_Model extends CI_Model {

    function getProfil() {
        $this->db->select('*');
        $this->db->from('tbl_walas');
        $this->db->where('username', $this->session->userdata('username'));
        $result = $this->db->get()->row_array();
        return $result;
    }

    function getProfilById($id) {
        return $this->db->get_where('tbl_walas', ['id' => $id])->row_array();
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
            "nip" => $this->input->post('nip', true),
            "mapel" => $this->input->post('mapel', true),
            "status" => $this->input->post('status', true),
            "kelas" => $this->input->post('kelas', true),
            "sekolah" => $this->input->post('sekolah', true)
        ];

        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['file_name'] = $this->input->post('nip');

        $this->load->library('upload', $config);

        if( ! $this->upload->do_upload('foto') ) {
            $error = ['error' => $this->upload->display_errors()];
            $this->load->view('walikelas/dashboard/ubah', $error);
        } else {
            $upload_data = $this->upload->data();
            $file_name = $upload_data['file_name'];
            $data['foto'] = 'uploads/'.$file_name;
            $this->db->where('id', $this->input->post('id'));
            if($this->db->update('tbl_walas', $data)) {
                redirect('walikelas/dashboard');
            }
        }
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('tbl_walas', $data);
    }

}

?>