<?php

class Raport_Model extends CI_Model {

    function getSiswa() {
        $this->db->select('nama_siswa, kelas');
        $this->db->from('tbl_siswa');
        $this->db->where('kode_kelas', $this->session->userdata('kode_kelas'));
        $result = $this->db->get()->result_array();
        return $result;
    }

    function cariSiswa() {
        $keyword = $this->input->post('cari', true);
        $this->db->like('nama_siswa', $keyword);
        $this->db->or_like('kelas', $keyword);
        return $this->db->get('tbl_siswa')->result_array();
    }

}

?>