<?php

use Dompdf\Adapter\CPDF;
use Dompdf\Dompdf;
use Dompdf\Exception;

class Data extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('cookie');
        $this->load->library('form_validation');
        $this->load->library('pagination');
        $this->load->model('Walikelas/Data_Model');
        $this->load->model('Walikelas/Raport_Model');
    }

    public function raport($nis) {
        check_session_user_walas();
        $data = [
            'judul' => 'Raport | SIMANIS',
            'siswa' => $this->Data_Model->getSiswa($nis),
            'raport' => $this->Data_Model->getRaportId($nis)
        ];
        $this->load->view('walikelas/raport/pilih', $data);
        $this->load->view('templates/footer');
    }

    public function hasil($id) {
        check_session_user_walas();
        $data = [
            'judul' => 'Raport | SIMANIS',
            'biodata' => $this->Data_Model->getBiodata($id),
            'raport' => $this->Data_Model->getNilaiRaport($id),
            'sikap' => $this->Data_Model->getNilaiSikap($id),
            'kehadiran' => $this->Data_Model->getKehadiran($id)
        ];
        $this->load->view('walikelas/raport/data', $data);
        $this->load->view('templates/footer');
    }

    public function cetak($id) {
        check_walas_walmur();
        $this->load->library('pdf');
        $data = [
            'judul' => 'Raport | SIMANIS',
            'biodata' => $this->Data_Model->getBiodata($id),
            'raport' => $this->Data_Model->getNilaiRaport($id),
            'sikap' => $this->Data_Model->getNilaiSikap($id),
            'kehadiran' => $this->Data_Model->getKehadiran($id)
        ];
        $html= $this->load->view('walikelas/raport/cetak', $data, TRUE);

        $dompdf = new DOMPDF();
        $dompdf->load_html($html);
        $dompdf->set_paper("A4", "potrait" );
        $dompdf->render();
        $dompdf->stream('laporan_'.'.pdf');
    }

}

?>