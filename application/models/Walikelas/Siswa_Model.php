<?php

class Siswa_Model extends CI_Model
{

    function getSiswa($limit, $start)
    {
        $this->db->select('id, nama_siswa, nis, nama_ortu');
        $this->db->from('tbl_siswa');
        $this->db->where('kode_kelas', $this->session->userdata('kode_kelas'));
        $this->db->limit($limit, $start);
        $result = $this->db->get()->result_array();
        return $result;
    }

    function getSiswaById($id)
    {
        return $this->db->get_where('tbl_siswa', ['id' => $id])->row_array();
    }

    function tambahSiswa()
    {
        $data = [
            "kode_kelas" => $this->session->userdata('kode_kelas'),
            "nama_siswa" => $this->input->post('nama', true),
            "nis" => $this->input->post('nis', true),
            "nama_ortu" => $this->input->post('ortu', true),
            "gender" => $this->input->post('gender', true),
            "tanggal_lahir" => $this->input->post('lahir', true),
            "alamat" => $this->input->post('alamat', true),
            "kelas" => $this->input->post('kelas', true),
            "sekolah" => $this->input->post('sekolah', true)
        ];

        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['file_name'] = uniqid() . time();

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('foto')) {
            $error = ['error' => $this->upload->display_errors()];
            $this->load->view('walikelas/siswa/tambah', $error);
        } else {
            $upload_data = $this->upload->data();
            $file_name = $upload_data['file_name'];
            $data['foto'] = 'uploads/' . $file_name;
            if ($this->db->insert('tbl_siswa', $data)) {
                redirect('walikelas/siswa');
            }
        }
    }

    function hapusSiswa($id)
    {
        $this->db->delete('tbl_siswa', ['id' => $id]);
    }

    function ubahSiswa()
    {
        $data = [
            "kode_kelas" => $this->session->userdata('kode_kelas'),
            "nama_siswa" => $this->input->post('nama', true),
            "nis" => $this->input->post('nis', true),
            "nama_ortu" => $this->input->post('ortu', true),
            "gender" => $this->input->post('gender', true),
            "tanggal_lahir" => $this->input->post('lahir', true),
            "alamat" => $this->input->post('alamat', true),
            "kelas" => $this->input->post('kelas', true),
            "sekolah" => $this->input->post('sekolah', true)
        ];

        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['file_name'] = uniqid().time();

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('foto')) {
            $error = ['error' => $this->upload->display_errors()];
            $this->load->view('walikelas/siswa/ubah', $error);
        } else {
            $upload_data = $this->upload->data();
            $file_name = $upload_data['file_name'];
            $data['foto'] = 'uploads/' . $file_name;
            $this->db->where('id', $this->input->post('id'));
            if ($this->db->update('tbl_siswa', $data)) {
                redirect('walikelas/siswa');
            }
        }
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('tbl_siswa', $data);
    }

    function cariSiswa()
    {
        $keyword = $this->input->post('cari', true);
        $this->db->like('nama_siswa', $keyword);
        $this->db->or_like('nis', $keyword);
        $this->db->or_like('nama_ortu', $keyword);
        $this->db->or_like('gender', $keyword);
        $this->db->or_like('tanggal_lahir', $keyword);
        $this->db->or_like('alamat', $keyword);
        $this->db->or_like('kelas', $keyword);
        $this->db->or_like('sekolah', $keyword);
        return $this->db->get('tbl_siswa')->result_array();
    }
}
 