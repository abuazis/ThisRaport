<?php

class Walas_Model extends CI_Model {

    function cekLogin($username, $password) {
        $this->db->where('username', $username);
        $query = $this->db->get('tbl_akun');
        $result = $query->row_array();

        if(!empty($result) && password_verify($password, $result['password'])) {
            return true;
        } else {
            return false;
        }
    }

}

?>