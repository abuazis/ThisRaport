<?php

class Walmur_Model extends CI_Model {

    public function tambahWalmur() {
        $data = [
            "nama_lengkap" => $this->input->post('nama', true),
            "username" => $this->session->userdata('username'),
            "gender" => $this->input->post('gender', true),
            "nama_anak" => $this->input->post('anak', true),
            "nis" => $this->input->post('nis', true),
            "alamat" => $this->input->post('alamat', true),
        ];

        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['file_name'] = $this->input->post('nama_lengkap');

        $this->load->library('upload', $config);

        if( ! $this->upload->do_upload('foto') ) {
            $error = ['error' => $this->upload->display_errors()];
            $this->load->view('signup/walikelas', $error);
        } else {
            $upload_data = $this->upload->data();
            $file_name = $upload_data['file_name'];
            $data['foto'] = 'uploads/'.$file_name;
            if($this->db->insert('tbl_walmur', $data)) {
                redirect('kelas/masuk');
            }
        }
    }

}

?>