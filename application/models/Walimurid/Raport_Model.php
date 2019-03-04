<?php

class Raport_Model extends CI_Model {

    function getSiswa($nis) {
        $this->db->select('nama_siswa, kelas');
        $this->db->from('tbl_siswa');
        $this->db->where('nis', $nis);
        $result = $this->db->get()->row_array();
        return $result;
    }

    function getRaportId($nis) {
        $this->db->distinct();
        $this->db->select('raport_id, judul_raport');
        $this->db->from('tbl_raport');
        $this->db->where('nis', $nis);
        $result = $this->db->get()->result_array();
        return $result;
    }    

    function getBiodata($id) {
        $this->db->distinct();
        $this->db->select('raport_id, nis, nama_siswa, kelas, judul_raport, semester, tahun_ajaran');
        $this->db->from('tbl_raport');
        $this->db->where('raport_id', $id);
        $result = $this->db->get()->row_array();
        return $result;
    }

    function getNilaiRaport($id) {
        $this->db->select('nama_mapel, kkm, nilai, keterangan');
        $this->db->from('tbl_raport');
        $this->db->where('raport_id', $id);
        $result = $this->db->get()->result_array();
        return $result;
    }

    function getNilaiSikap($id) {
        $this->db->select('aspek_sikap, nilai, keterangan');
        $this->db->from('tbl_raport_sikap');
        $this->db->where('raport_id', $id);
        $result = $this->db->get()->result_array();
        return $result;
    }

    function getKehadiran($id) {
        $this->db->select('sakit, izin, alfa');
        $this->db->from('tbl_kehadiran');
        $this->db->where('raport_id', $id);
        $result = $this->db->get()->row_array();
        return $result;
    }

}

?>