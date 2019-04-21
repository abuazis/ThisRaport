<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap/bootstrap.css">
    <link href="<?= base_url(); ?>assets/css/aos.css" rel="stylesheet">

    <!-- Native CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/dashboard/dashboard.css">

    <!-- Icon -->
    <link rel="shortcut icon" href="<?= base_url(); ?>assets/img/logo.jpg">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <title>Simanis | Raport Digital</title>
</head>

<body>
    <!-- Ini Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark biru fixed-top">
        <a class="navbar-brand" href="<?= site_url(''); ?>">
            <img src="<?= base_url(); ?>assets/img/logo.jpg" width="50" class="d-inline-block" alt="">
            DIGITAL RAPORT
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse putih" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto topnav">
                <li class="nav-item">
                    <a class="nav-link active" href="<?= site_url('walimurid/dashboard') ?>">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="<?= site_url('walimurid/raport/index/') . $walimurid['nis']; ?>">Raport</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="<?= site_url('walimurid/agenda') ?>">Agenda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="<?= site_url('walimurid/kontak') ?>">Kontak</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="<?= site_url('walimurid/service') ?>">Service</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="contain mt-5">
        <div class="profile mt-5">
            <div class="photo">
                <center>
                    <img src="<?= base_url() . $walimurid['foto']; ?>" width="230">
                    <div>
                        <h2 class="ml-4"><?= $walimurid['nama_anak']; ?></h2>
                        <h3>Siswa Kelas <?= $kelas['nama_kelas']; ?></h3>
                        <h3><?= $kelas['sekolah']; ?></h3>
                    </div>
                </center>
            </div>
            <div class="batas">

            </div>
            <div class="bio">
                <h4>NIS : &nbsp;&nbsp;&nbsp; <span class="weight-profil"><?= $walimurid['nis']; ?></span></h4><br>
                <h4>Nama Wali : &nbsp;&nbsp;&nbsp; <span class="weight-profil"><?= $walimurid['nama_lengkap']; ?></span></h4><br>
                <h4>Gender : &nbsp;&nbsp;&nbsp; <span class="weight-profil"><?= $walimurid['gender']; ?></span></h4><br>
                <h4>Alamat : &nbsp;&nbsp;&nbsp; <span class="weight-profil"><?= $walimurid['alamat']; ?></span></h4>
            </div>
            <a href="<?= site_url('walimurid/dashboard/update/' . $walimurid['id']); ?>" class="btn btn-primary edit">Edit <i class="far fa-edit"></i></a>
            <a href="<?= site_url('walimurid/dashboard/logout') ?>" class="btn btn-danger hapus tombol-logout">Logout <i class="fas fa-sign-out-alt"></i></a>

            <!-- Modal Edit profile -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <h4 class="modal-title h3 text-center font-weight-normal" id="exampleModalLabel">Edit Profile Anda</h4>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="form-group">
                                    <label for="formGroupExampleInput">Nama</label>
                                    <input type="text" class="form-control" id="formGroupExampleInput">
                                </div>
                                <div class="form-group">
                                    <label for="formGroupExampleInput2">NIS</label>
                                    <input type="text" class="form-control" id="formGroupExampleInput2">
                                </div>
                                <div class="form-group">
                                    <label for="formGroupExampleInput2">Jenjang / Tingkat</label>
                                    <input type="text" class="form-control" id="formGroupExampleInput2">
                                </div>
                                <div class="form-group">
                                    <label for="formGroupExampleInput2">Nama Walimurid</label>
                                    <input type="text" class="form-control" id="formGroupExampleInput2">
                                </div>
                                <div class="form-group">
                                    <label for="formGroupExampleInput2">Alamat</label>
                                    <input type="text" class="form-control" id="formGroupExampleInput2">
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Batal <i class="fas fa-ban"></i></button>
                            <button type="button" class="btn btn-primary">Simpan <i class="fas fa-save"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="contains mt-5 mb-5">
        <!-- <div class="notif">
                    <center>
                    <h2 class="mt-2 weight-menu">Timeline</h2> 
                        <?php if ($this->session->flashdata('login_walmur') == true) : ?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>Berhasil! </strong><br><?= $this->session->flashdata('login_walas'); ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        <?php endif; ?>
                        <?php if ($this->session->flashdata('ubah_walas') == true) : ?>
                            <div class="alert alert-primary alert-dismissible fade show" role="alert">
                                <strong>Berhasil!</strong><br><?= $this->session->flashdata('ubah_walas'); ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        <?php endif; ?>
                        <?php if ($this->session->flashdata('regis_walas') == true) : ?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>Holy guacamole!</strong> You should check in on some of those fields below.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        <?php endif; ?>
                    </center>
                </div> -->
        <div class="menu">
            <div class="raport">
                <center>
                    <a href="<?= site_url('walimurid/raport/index/') . $walimurid['nis']; ?>"><img src="<?= base_url(); ?>assets/img/buku.png" width="230" class="gbr-buku"></a>
                    <div class="sub-data">
                        <h2 class="mt-2 weight-menu">Raport Siswa</h2>
                        <p>Management raport siswa
                            di kelas anda</p>
                    </div>
                </center>
            </div>
            <div class="raport">
                <center>
                    <a href="<?= site_url('walimurid/agenda'); ?>"><img src="<?= base_url(); ?>assets/img/kalendar.png" width="230" class="gbr-buku"></a>
                    <div class="sub-data">
                        <h2 class="mt-2 weight-menu">Agenda Pertemuan</h2>
                        <p>Jadwalkan pertemuan anda
                            dengan walimurid</p>
                    </div>
                </center>
            </div>
            <div class="kontak">
                <center>
                    <a href="<?= site_url('walimurid/kontak'); ?>"><img src="<?= base_url(); ?>assets/img/chat.png" width="220" class="mt-2"></a>
                    <div class="sub-data">
                        <h2 class="mt-2 weight-menu">Kontak Walimurid</h2>
                        <p>Jadwalkan pertemuan anda
                            dengan walimurid</p>
                    </div>
                </center>
            </div>
            <div class="service">
                <center>
                    <a href="<?= site_url('walimurid/service'); ?>"><img src="<?= base_url(); ?>assets/img/service.png" width="220" class="mt-2"></a>
                    <div class="sub-data">
                        <h2 class="mt-2 weight-menu">Customer Service</h2>
                        <p>Layanan saran, keluhan dan
                            testimoni anda di aplikasi kami</p>
                    </div>
                </center>
            </div>
        </div>
    </div> 