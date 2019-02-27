<?php

class Masuk_Model extends CI_Model {

    function cekKelas($kode) {
        $this->db->where('kode_kelas', $kode);
        $query = $this->db->get('tbl_kelas');
        $result = $query->row_array();

        if(!empty($result)) {
            return true;
        } else {
            return false;
        }
    }

}

?>