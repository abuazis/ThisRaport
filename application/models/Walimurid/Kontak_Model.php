<?php

class Kontak_Model extends CI_Model
{

    function buatKontak()
    {
        $data = [
            "kode_kelas" => $this->session->userdata('kode_kelas'),
            "username" => $this->session->userdata('username'),
            "nama_pemilik" => $this->input->post('nama', true),
            "status" => $this->session->userdata('level', true),
            "nomor_wa" => $this->input->post('wa', true),
            "id_line" => $this->input->post('line', true),
            "nama_anak" => $this->input->post('anak', true)
        ];

        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['file_name'] = uniqid() . time();

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('foto')) {
            $error = ['error' => $this->upload->display_errors()];
            $this->load->view('walimurid/kontak/aksi', $error);
        } else {
            $upload_data = $this->upload->data();
            $file_name = $upload_data['file_name'];
            $data['foto'] = 'uploads/' . $file_name;
            if ($this->db->insert('tbl_kontak', $data)) {
                redirect('walimurid/kontak');
            }
        }
    }

    function ubahKontak()
    {
        $data = [
            "kode_kelas" => $this->session->userdata('kode_kelas'),
            "username" => $this->session->userdata('username'),
            "nama_pemilik" => $this->input->post('nama', true),
            "status" => $this->session->userdata('level'),
            "nomor_wa" => $this->input->post('wa', true),
            "id_line" => $this->input->post('line', true),
            "nama_anak" => $this->input->post('anak', true)
        ];

        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['file_name'] = uniqid() . time();

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('foto')) {
            $error = ['error' => $this->upload->display_errors()];
            $this->load->view('walimurid/kontak/buat', $error);
        } else {
            $upload_data = $this->upload->data();
            $file_name = $upload_data['file_name'];
            $data['foto'] = 'uploads/' . $file_name;
            if ($this->db->update('tbl_kontak', $data)) {
                redirect('walimurid/kontak');
            }
        }
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('tbl_kontak', $data);
    }

    function getSelfById($id) 
    {
        $this->db->select('id, nama_pemilik, nomor_wa, id_line, nama_anak, foto');
        $this->db->from('tbl_kontak');
        $this->db->where('id', $id);
        $result = $this->db->get()->row_array();
        return $result;
    }

    function getSelf()
    {
        $this->db->select('id, nama_pemilik, nomor_wa, id_line, foto, nama_anak');
        $this->db->from('tbl_kontak');
        $this->db->where('username', $this->session->userdata('username'));
        $result = $this->db->get()->row_array();
        return $result;
    }

    function getKelas()
    {
        $this->db->select('nama_kelas');
        $this->db->from('tbl_kelas');
        $this->db->where('kode_kelas', $this->session->userdata('kode_kelas'));
        $result = $this->db->get()->row_array();
        return $result;
    }

    function getWalas()
    {
        $this->db->select('nama_pemilik, nomor_wa, id_line, foto');
        $this->db->from('tbl_kontak');
        $this->db->where('status', 'walikelas');
        $this->db->where('kode_kelas', $this->session->userdata('kode_kelas'));
        $result = $this->db->get()->row_array();
        return $result;
    }

    function getAllWalimurid()
    {
        $this->db->select('*');
        $this->db->from('tbl_kontak');
        $this->db->where('kode_kelas', $this->session->userdata('kode_kelas'));
        $this->db->where('status', 'walimurid');
        $this->db->where_not_in('username', $this->session->userdata('username'));
        $result = $this->db->get()->result_array();
        return $result;
    }

    function cariKontak()
    {
        $keyword = $this->input->post('cari', true);
        $this->db->like('nama_pemilik', $keyword);
        $this->db->or_like('nomor_wa', $keyword);
        $this->db->or_like('id_line', $keyword);
        $this->db->or_like('nama_anak', $keyword);
        return $this->db->get('tbl_kontak')->result_array();
    }
}
 