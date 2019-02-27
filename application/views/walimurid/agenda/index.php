<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/js/alert/sweetalert2.css">
    
    <!-- Native CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/agenda/agenda.css">

    <!-- Icon -->
    <link rel="shortcut icon" href="<?= base_url(); ?>assets/img/logo.jpg">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <title><?= $judul; ?></title>
</head>
<body>
    <!-- Ini Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark biru fixed-top ini">
        <a class="navbar-brand" href="#">
            <img src="<?= base_url(); ?>assets/img/logo.jpg" width="50" class="d-inline-block" alt="">
            DIGITAL RAPORT
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse putih" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto topnav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Absensi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Ekskul</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Komunitas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">Raport <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Hubin</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="judul">
            <center>
                <h1>Agenda Pertemuan</h1>
            </center>
        </div>
        <div class="agenda">
            <div class="jadwal">
                <h4>Jadwal Agenda Pertemuan Dengan Walikelas</h4>
                <hr>
                <?php foreach($agenda as $agd) : ?>
                    <div class="jdwl mb-4">
                        <img src="<?= base_url(); ?>assets/img/kalendar.png" width="180" class="">
                        <div class="decs">
                            <h4><?= $agd['judul_agenda']; ?></h4>
                            <h5><?= $agd['hari_agenda'] ?>, <?= $agd['tanggal_agenda']; ?></h5>
                            <h5><?= $agd['waktu_mulai']; ?> - <?= $agd['waktu_selesai']; ?></h5>
                            <h5 class="font-weight-bold"><?= $agd['lokasi_agenda']; ?></h5>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="notif">
                <h4>Timeline</h4>
                <hr>
                <?php if($this->session->userdata('agenda_walas_berhasil') == TRUE) : ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Agenda Baru</strong><br><?= $this->session->userdata('agenda_walas_berhasil'); ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php endif; ?>
                <?php if($this->session->userdata('agenda_walas_hapus') == TRUE) : ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Agenda Dihapus</strong><br><?= $this->session->userdata('agenda_walas_hapus'); ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php endif; ?>
                <?php if($this->session->userdata('agenda_walas_edit') == TRUE) : ?>
                    <div class="alert alert-primary alert-dismissible fade show" role="alert">
                        <strong>Agenda Diubah</strong><br><?= $this->session->userdata('agenda_walas_edit'); ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php endif; ?>
                <div class="flash-data" data-flashdata="<?= $this->session->flashdata('agenda_walas_berhasil'); ?>"></div>
                <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
            </div>
        </div>