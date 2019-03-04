<?php

class Raport_Model extends CI_Model {

    function getSiswa($limit, $start) {
        $this->db->select('id, nama_siswa, nis, kelas');
        $this->db->from('tbl_siswa');
        $this->db->where('kode_kelas', $this->session->userdata('kode_kelas'));
        $this->db->limit($limit, $start);
        $result = $this->db->get()->result_array();
        return $result;
    }

    function cariSiswa() {
        $keyword = $this->input->post('cari', true);
        $this->db->like('nama_siswa', $keyword);
        $this->db->or_like('kelas', $keyword);
        return $this->db->get('tbl_siswa')->result_array();
    }

    function buatRaport() {
        $raport = [
            [
                'raport_id' => $this->input->post('id', true),
                'kode_kelas' => $this->session->userdata('kode_kelas'),
                'nis' => $this->input->post('nis', true),
                'nama_siswa' => $this->input->post('nama', true),
                'kelas' => $this->input->post('kelas', true),
                'judul_raport' => $this->input->post('judul', true),
                'semester' => $this->input->post('semester', true),
                'tahun_ajaran' => $this->input->post('tahun', true),
                'nama_mapel' => $this->input->post('mapel4', true),
                'kkm' => $this->input->post('kkm4', true),
                'nilai' => $this->input->post('nilai4', true),
                'keterangan' => $this->input->post('keterangan4', true)
            ],
            [
                'raport_id' => $this->input->post('id', true),
                'kode_kelas' => $this->session->userdata('kode_kelas'),
                'nis' => $this->input->post('nis', true),
                'nama_siswa' => $this->input->post('nama', true),
                'kelas' => $this->input->post('kelas', true),
                'judul_raport' => $this->input->post('judul', true),
                'semester' => $this->input->post('semester', true),
                'tahun_ajaran' => $this->input->post('tahun', true),
                'nama_mapel' => $this->input->post('mapel5', true),
                'kkm' => $this->input->post('kkm5', true),
                'nilai' => $this->input->post('nilai5', true),
                'keterangan' => $this->input->post('keterangan5', true)
            ],
            [
                'raport_id' => $this->input->post('id', true),
                'kode_kelas' => $this->session->userdata('kode_kelas'),
                'nis' => $this->input->post('nis', true),
                'nama_siswa' => $this->input->post('nama', true),
                'kelas' => $this->input->post('kelas', true),
                'judul_raport' => $this->input->post('judul', true),
                'semester' => $this->input->post('semester', true),
                'tahun_ajaran' => $this->input->post('tahun', true),
                'nama_mapel' => $this->input->post('mapel6', true),
                'kkm' => $this->input->post('kkm6', true),
                'nilai' => $this->input->post('nilai6', true),
                'keterangan' => $this->input->post('keterangan6', true)
            ],
            [
                'raport_id' => $this->input->post('id', true),
                'kode_kelas' => $this->session->userdata('kode_kelas'),
                'nis' => $this->input->post('nis', true),
                'nama_siswa' => $this->input->post('nama', true),
                'kelas' => $this->input->post('kelas', true),
                'judul_raport' => $this->input->post('judul', true),
                'semester' => $this->input->post('semester', true),
                'tahun_ajaran' => $this->input->post('tahun', true),
                'nama_mapel' => $this->input->post('mapel7', true),
                'kkm' => $this->input->post('kkm7', true),
                'nilai' => $this->input->post('nilai7', true),
                'keterangan' => $this->input->post('keterangan7', true)
            ],
            [
                'raport_id' => $this->input->post('id', true),
                'kode_kelas' => $this->session->userdata('kode_kelas'),
                'nis' => $this->input->post('nis', true),
                'nama_siswa' => $this->input->post('nama', true),
                'kelas' => $this->input->post('kelas', true),
                'judul_raport' => $this->input->post('judul', true),
                'semester' => $this->input->post('semester', true),
                'tahun_ajaran' => $this->input->post('tahun', true),
                'nama_mapel' => $this->input->post('mapel8', true),
                'kkm' => $this->input->post('kkm8', true),
                'nilai' => $this->input->post('nilai8', true),
                'keterangan' => $this->input->post('keterangan8', true)
            ],
            [
                'raport_id' => $this->input->post('id', true),
                'kode_kelas' => $this->session->userdata('kode_kelas'),
                'nis' => $this->input->post('nis', true),
                'nama_siswa' => $this->input->post('nama', true),
                'kelas' => $this->input->post('kelas', true),
                'judul_raport' => $this->input->post('judul', true),
                'semester' => $this->input->post('semester', true),
                'tahun_ajaran' => $this->input->post('tahun', true),
                'nama_mapel' => $this->input->post('mapel9', true),
                'kkm' => $this->input->post('kkm9', true),
                'nilai' => $this->input->post('nilai9', true),
                'keterangan' => $this->input->post('keterangan9', true)
            ],
            [
                'raport_id' => $this->input->post('id', true),
                'kode_kelas' => $this->session->userdata('kode_kelas'),
                'nis' => $this->input->post('nis', true),
                'nama_siswa' => $this->input->post('nama', true),
                'kelas' => $this->input->post('kelas', true),
                'judul_raport' => $this->input->post('judul', true),
                'semester' => $this->input->post('semester', true),
                'tahun_ajaran' => $this->input->post('tahun', true),
                'nama_mapel' => $this->input->post('mapel10', true),
                'kkm' => $this->input->post('kkm10', true),
                'nilai' => $this->input->post('nilai10', true),
                'keterangan' => $this->input->post('keterangan10', true)
            ],
            [
                'raport_id' => $this->input->post('id', true),
                'kode_kelas' => $this->session->userdata('kode_kelas'),
                'nis' => $this->input->post('nis', true),
                'nama_siswa' => $this->input->post('nama', true),
                'kelas' => $this->input->post('kelas', true),
                'judul_raport' => $this->input->post('judul', true),
                'semester' => $this->input->post('semester', true),
                'tahun_ajaran' => $this->input->post('tahun', true),
                'nama_mapel' => $this->input->post('mapel11', true),
                'kkm' => $this->input->post('kkm11', true),
                'nilai' => $this->input->post('nilai11', true),
                'keterangan' => $this->input->post('keterangan11', true)
            ]
        ];

        $sikap = [
            [
                'raport_id' => $this->input->post('id', true),
                'nis' => $this->input->post('nis', true),
                'aspek_sikap' => $this->input->post('aspek1', true),
                'nilai' => $this->input->post('nilai1', true),
                'keterangan' => $this->input->post('keterangan-sikap1')
            ],
            [
                'raport_id' => $this->input->post('id', true),
                'nis' => $this->input->post('nis', true),
                'aspek_sikap' => $this->input->post('aspek2', true),
                'nilai' => $this->input->post('nilai2', true),
                'keterangan' => $this->input->post('keterangan-sikap2')
            ],
            [
                'raport_id' => $this->input->post('id', true),
                'nis' => $this->input->post('nis', true),
                'aspek_sikap' => $this->input->post('aspek3', true),
                'nilai' => $this->input->post('nilai3', true),
                'keterangan' => $this->input->post('keterangan-sikap3')
            ]
        ];

        $kehadiran = [
                'raport_id' => $this->input->post('id', true),
                'nis' => $this->input->post('nis', true),
                'sakit' => $this->input->post('sakit', true),
                'izin' => $this->input->post('izin', true),
                'alfa' => $this->input->post('alfa', true)
        ];

        $this->db->insert_batch('tbl_raport', $raport);
        $this->db->insert_batch('tbl_raport_sikap', $sikap);
        $this->db->insert('tbl_kehadiran', $kehadiran);
    }

    function hapusRaport($id) {
        $this->db->delete('tbl_raport', ['raport_id' => $id]);
        $this->db->delete('tbl_raport_sikap', ['raport_id' => $id]);
        $this->db->delete('tbl_kehadiran', ['raport_id' => $id]);
    }

    function ubahRaport($id) {
        $raport = [
            [
                'raport_id' => $id,
                'kode_kelas' => $this->session->userdata('kode_kelas'),
                'nis' => $this->input->post('nis', true),
                'nama_siswa' => $this->input->post('nama', true),
                'kelas' => $this->input->post('kelas', true),
                'judul_raport' => $this->input->post('judul', true),
                'semester' => $this->input->post('semester', true),
                'tahun_ajaran' => $this->input->post('tahun', true),
                'nama_mapel' => $this->input->post('mapel4', true),
                'kkm' => $this->input->post('kkm4', true),
                'nilai' => $this->input->post('nilai4', true),
                'keterangan' => $this->input->post('keterangan4', true)
            ],
            [
                'raport_id' => $id,
                'kode_kelas' => $this->session->userdata('kode_kelas'),
                'nis' => $this->input->post('nis', true),
                'nama_siswa' => $this->input->post('nama', true),
                'kelas' => $this->input->post('kelas', true),
                'judul_raport' => $this->input->post('judul', true),
                'semester' => $this->input->post('semester', true),
                'tahun_ajaran' => $this->input->post('tahun', true),
                'nama_mapel' => $this->input->post('mapel5', true),
                'kkm' => $this->input->post('kkm5', true),
                'nilai' => $this->input->post('nilai5', true),
                'keterangan' => $this->input->post('keterangan5', true)
            ],
            [
                'raport_id' => $id,
                'kode_kelas' => $this->session->userdata('kode_kelas'),
                'nis' => $this->input->post('nis', true),
                'nama_siswa' => $this->input->post('nama', true),
                'kelas' => $this->input->post('kelas', true),
                'judul_raport' => $this->input->post('judul', true),
                'semester' => $this->input->post('semester', true),
                'tahun_ajaran' => $this->input->post('tahun', true),
                'nama_mapel' => $this->input->post('mapel6', true),
                'kkm' => $this->input->post('kkm6', true),
                'nilai' => $this->input->post('nilai6', true),
                'keterangan' => $this->input->post('keterangan6', true)
            ],
            [
                'raport_id' => $id,
                'kode_kelas' => $this->session->userdata('kode_kelas'),
                'nis' => $this->input->post('nis', true),
                'nama_siswa' => $this->input->post('nama', true),
                'kelas' => $this->input->post('kelas', true),
                'judul_raport' => $this->input->post('judul', true),
                'semester' => $this->input->post('semester', true),
                'tahun_ajaran' => $this->input->post('tahun', true),
                'nama_mapel' => $this->input->post('mapel7', true),
                'kkm' => $this->input->post('kkm7', true),
                'nilai' => $this->input->post('nilai7', true),
                'keterangan' => $this->input->post('keterangan7', true)
            ],
            [
                'raport_id' => $id,
                'kode_kelas' => $this->session->userdata('kode_kelas'),
                'nis' => $this->input->post('nis', true),
                'nama_siswa' => $this->input->post('nama', true),
                'kelas' => $this->input->post('kelas', true),
                'judul_raport' => $this->input->post('judul', true),
                'semester' => $this->input->post('semester', true),
                'tahun_ajaran' => $this->input->post('tahun', true),
                'nama_mapel' => $this->input->post('mapel8', true),
                'kkm' => $this->input->post('kkm8', true),
                'nilai' => $this->input->post('nilai8', true),
                'keterangan' => $this->input->post('keterangan8', true)
            ],
            [
                'raport_id' => $id,
                'kode_kelas' => $this->session->userdata('kode_kelas'),
                'nis' => $this->input->post('nis', true),
                'nama_siswa' => $this->input->post('nama', true),
                'kelas' => $this->input->post('kelas', true),
                'judul_raport' => $this->input->post('judul', true),
                'semester' => $this->input->post('semester', true),
                'tahun_ajaran' => $this->input->post('tahun', true),
                'nama_mapel' => $this->input->post('mapel9', true),
                'kkm' => $this->input->post('kkm9', true),
                'nilai' => $this->input->post('nilai9', true),
                'keterangan' => $this->input->post('keterangan9', true)
            ],
            [
                'raport_id' => $id,
                'kode_kelas' => $this->session->userdata('kode_kelas'),
                'nis' => $this->input->post('nis', true),
                'nama_siswa' => $this->input->post('nama', true),
                'kelas' => $this->input->post('kelas', true),
                'judul_raport' => $this->input->post('judul', true),
                'semester' => $this->input->post('semester', true),
                'tahun_ajaran' => $this->input->post('tahun', true),
                'nama_mapel' => $this->input->post('mapel10', true),
                'kkm' => $this->input->post('kkm10', true),
                'nilai' => $this->input->post('nilai10', true),
                'keterangan' => $this->input->post('keterangan10', true)
            ],
            [
                'raport_id' => $id,
                'kode_kelas' => $this->session->userdata('kode_kelas'),
                'nis' => $this->input->post('nis', true),
                'nama_siswa' => $this->input->post('nama', true),
                'kelas' => $this->input->post('kelas', true),
                'judul_raport' => $this->input->post('judul', true),
                'semester' => $this->input->post('semester', true),
                'tahun_ajaran' => $this->input->post('tahun', true),
                'nama_mapel' => $this->input->post('mapel11', true),
                'kkm' => $this->input->post('kkm11', true),
                'nilai' => $this->input->post('nilai11', true),
                'keterangan' => $this->input->post('keterangan11', true)
            ]
        ];

        $sikap = [
            [
                'raport_id' => $id,
                'nis' => $this->input->post('nis', true),
                'aspek_sikap' => $this->input->post('aspek1', true),
                'nilai' => $this->input->post('nilai1', true),
                'keterangan' => $this->input->post('keterangan-sikap1')
            ],
            [
                'raport_id' => $id,
                'nis' => $this->input->post('nis', true),
                'aspek_sikap' => $this->input->post('aspek2', true),
                'nilai' => $this->input->post('nilai2', true),
                'keterangan' => $this->input->post('keterangan-sikap2')
            ],
            [
                'raport_id' => $id,
                'nis' => $this->input->post('nis', true),
                'aspek_sikap' => $this->input->post('aspek3', true),
                'nilai' => $this->input->post('nilai3', true),
                'keterangan' => $this->input->post('keterangan-sikap3')
            ]
        ];

        $kehadiran = [
                'raport_id' => $id,
                'nis' => $this->input->post('nis', true),
                'sakit' => $this->input->post('sakit', true),
                'izin' => $this->input->post('izin', true),
                'alfa' => $this->input->post('alfa', true)
        ];

        $this->db->update_batch('tbl_raport', $raport, 'raport_id');
        $this->db->update_batch('tbl_raport_sikap', $sikap, 'raport_id');
        $this->db->where('raport_id', $id);
        $this->db->update('tbl_kehadiran', $kehadiran); 
    }   
}

?>