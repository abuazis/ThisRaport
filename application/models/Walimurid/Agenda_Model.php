<?php

class Agenda_Model extends CI_Model {

    function getAgenda() {
        $this->db->select('*');
        $this->db->from('tbl_agenda');
        $this->db->where('kode_kelas', $this->session->userdata('kode_kelas'));
        $result = $this->db->get()->result_array();
        return $result;
    }

    function getAgendaById($id) {
        return $this->db->get_where('tbl_agenda', ['id' => $id])->row_array();
    }

}

?>