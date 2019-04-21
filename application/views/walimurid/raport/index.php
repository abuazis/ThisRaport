<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap/bootstrap.css">

    <!-- Native CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/raport/pilih.css">

    <!-- Icon -->
    <link rel="shortcut icon" href="<?= base_url(); ?>assets/img/logo.jpg">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <title><?= $judul; ?></title>
</head>

<body>
    <!-- Ini Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark biru fixed-top ini">
        <a class="navbar-brand ml-4" href="javascript:window.history.go(-1);">
            <i class="fas fa-arrow-left"></i>
        </a>
        <a class="navbar-brand ml-0" href="<?= site_url(''); ?>">
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
                    <a class="nav-link active" href="<?= site_url('walimurid/raport/index/') ?>">Raport</a>
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


    <div class="bungkus">
        <div class="container">
            <div class="row">
                <div class="col-md-12 margen">
                    <center>
                        <h1>Data Raport <?= $siswa['nama_siswa']; ?></h1>
                    </center>
                </div>
            </div>
        </div>
    </div>
    <div class="plastik">
        <div class="rapor">
            <?php foreach ($raport as $rpt) : ?>
            <div class="rapo">
                <center>
                    <a href="<?= site_url('walimurid/raport/hasil/') . $rpt['raport_id']; ?>"><img src="<?= base_url(); ?>assets/img/buku.png" width="250" class="mt-3"></a>
                    <h3><?= $rpt['judul_raport']; ?></h3>
                    <p><?= $siswa['kelas']; ?> <?= $siswa['nama_siswa']; ?></p>
                </center>
            </div>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- <div class="modal fade bd-example" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content pl-3 pr-3">
                <div class="modal-body">
                    <h2>Masukan Nama Raport</h2>
                </div>
                <form action="<?= site_url(''); ?>" method="post">
                    <div class="modal-body">
                        <div class="form-group mb-2">
                            <label for="raport" class="float-left ml-1 weight-field">Nama Raport</label>
                            <small class="form-text text-danger float-left ml-3"><?= form_error('raport'); ?></small><br>
                            <input type="text" name="raport" class="form-control" id="raport">
                        </div>
                    </div>
                    <div class="modal-body">
                        <button class="btn btn-primary w-100 font-weight-bold" type="submit">Buat <i class="fas fa-plus-square"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div> --> 