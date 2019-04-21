<?php

class Walmur_Model extends CI_Model
{

    function cekLogin($username, $password)
    {
        $result = $this->db->get_where('tbl_akun', ['username' => $username])->row_array();

        if ($result) {
            if ($result['level'] == 'walimurid') {
                if (password_verify($password, $result['password'])) {
                    return true;
                }
            }
        }
    }
}
 