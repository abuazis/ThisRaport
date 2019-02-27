<?php

class Buat_Model extends CI_Model {

    public function tambahKelas() {
        $data = [
            "nama_kelas" => $this->input->post('nama', true),
            "nama_walas" => $this->input->post('walas', true),
            "kode_kelas" => $this->input->post('kode', true),
            "sekolah" => $this->input->post('sekolah', true)
        ];

        $this->db->insert('tbl_kelas', $data);
    }

}

?>