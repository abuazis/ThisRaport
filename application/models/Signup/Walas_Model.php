<?php

class Walas_Model extends CI_Model {

    public function tambahWalas() {
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
            $this->load->view('signup/walikelas', $error);
        } else {
            $upload_data = $this->upload->data();
            $file_name = $upload_data['file_name'];
            $data['foto'] = 'uploads/'.$file_name;
            if($this->db->insert('tbl_walas', $data)) {
                redirect('kelas/buat');
            }
        }
    }

}

?>