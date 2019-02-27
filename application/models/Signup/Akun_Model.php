<?php

class Akun_model extends CI_Model {

    public function tambahAkun() {
        $data = [
            "username" => $this->input->post('username', true),
            "level" => $this->input->post('level', true),
            "email" => $this->input->post('email', true),
            "password" => password_hash($this->input->post('password', true), PASSWORD_DEFAULT)
        ];
        $this->db->insert('tbl_akun', $data);
    }

}

?>