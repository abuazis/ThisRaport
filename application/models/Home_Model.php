<?php

class Home_Model extends CI_Model {

    public function getTestimonial() {
        $this->db->select('nama_pengirim, isi_pesan');
        $this->db->from('tbl_service');
        $this->db->where('jenis_pesan', 'testimonial');
        $this->db->limit(4);
        $result = $this->db->get()->result_array();
        return $result;
    }

}

?>