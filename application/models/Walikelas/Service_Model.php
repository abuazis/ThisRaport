<?php

class Service_Model extends CI_Model {

    function kirimPesan() {
        $data = [
            "nama_pengirim" => $this->input->post('nama', true),
            "username" => $this->session->userdata('username'),
            "email" => $this->input->post('email', true),
            "status" => $this->session->userdata('level'),
            "jenis_pesan" => $this->input->post('jenis', true),
            "isi_pesan" => $this->input->post('pesan', true)
        ];
        $this->db->insert('tbl_service', $data);
    }

}

?>