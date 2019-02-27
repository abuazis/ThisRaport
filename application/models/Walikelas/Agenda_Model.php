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

    function buatAgenda() {
        $data = [
            "kode_kelas" => $this->session->userdata('kode_kelas'),
            "judul_agenda" => $this->input->post('judul', true),
            "tanggal_agenda" => $this->input->post('tanggal', true),
            "hari_agenda" => $this->input->post('hari', true),
            "waktu_mulai" => $this->input->post('mulai', true),
            "waktu_selesai" => $this->input->post('selesai', true),
            "lokasi_agenda" => $this->input->post('lokasi', true)
        ];
        $this->db->insert('tbl_agenda', $data);
    }

    function hapusAgenda($id) {
        $this->db->delete('tbl_agenda', ['id' => $id]);
    }

    function ubahAgenda() {
        $data = [
            "kode_kelas" => $this->session->userdata('kode_kelas'),
            "judul_agenda" => $this->input->post('judul', true),
            "tanggal_agenda" => $this->input->post('tanggal', true),
            "hari_agenda" => $this->input->post('hari', true),
            "waktu_mulai" => $this->input->post('mulai', true),
            "waktu_selesai" => $this->input->post('selesai', true)
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('tbl_agenda', $data);
    }
}

?>