<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap/bootstrap.css">

    <!-- Native CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/agenda/agenda.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/dashboard/ubah.css">

    <!-- Icon -->
    <link rel="shortcut icon" href="<?= base_url(); ?>assets/img/logo.jpg">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <!-- Hover -->
    <link href="css/hover.css" rel="stylesheet" media="all">

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
                    <a class="nav-link active" href="<?= site_url('walikelas/dashboard') ?>">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="<?= site_url('walikelas/raport') ?>">Raport</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="<?= site_url('walikelas/siswa') ?>">Siswa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="<?= site_url('walikelas/agenda') ?>">Agenda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="<?= site_url('walikelas/kontak') ?>">Kontak</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="<?= site_url('walikelas/service') ?>">Service</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Form Ubah -->
    <section>
        <div class="container bg-light shadow">
            <div class="row">
                <div class="col-md-12">
                    <center>
                        <h1 class="marg-atas">Buat Agenda <i class="fas fa-calendar-plus"></i></h1>
                        <form action="" method="post" class="w-75">
                            <div class="form-group">
                                <label for="judul" class="float-left weight-field">Judul Pertemuan</label>&nbsp;&nbsp;&nbsp;
                                <small class="form-text text-danger ml-3 float-left"><?= form_error('judul'); ?></small>
                                <input type="text" name="judul" class="form-control" id="judul" value="<?= set_value('judul') ?>">
                            </div>
                            <div class="form-group">
                                <label for="tanggal" class="float-left weight-field">Tanggal Pertemuan</label>&nbsp;&nbsp;&nbsp;
                                <small class="form-text text-danger ml-3 float-left"><?= form_error('tanggal'); ?></small>
                                <input type="date" name="tanggal" class="form-control" id="tanggal" value="<?= set_value('tanggal') ?>">
                            </div>
                            <div class="form-group">
                                <label for="tanggal" class="float-left weight-field">Hari Pertemuan</label>&nbsp;&nbsp;&nbsp;
                                <small class="form-text text-danger ml-3 float-left"><?= form_error('hari'); ?></small>
                                <select name="hari" class="form-control">
                                    <option></option>
                                    <option value="Senin" <?= set_select('hari', 'Senin') ?>>Senin</option>
                                    <option value="Selasa" <?= set_select('hari', 'Selasa') ?>>Selasa</option>
                                    <option value="Rabu" <?= set_select('hari', 'Rabu') ?>>Rabu</option>
                                    <option value="Kamis" <?= set_select('hari', 'Kamis') ?>>Kamis</option>
                                    <option value="Jum'at" <?= set_select('hari', "Jum'at") ?>>Jum'at</option>
                                    <option value="Sabtu" <?= set_select('hari', 'Sabtu') ?>>Sabtu</option>
                                    <option value="Minggu" <?= set_select('hari', 'Minggu') ?>>Minggu</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="mulai" class="float-left weight-field">Jam Mulai</label>&nbsp;&nbsp;&nbsp;
                                <small class="form-text text-danger ml-3 float-left"><?= form_error('mulai'); ?></small>
                                <input type="time" name="mulai" class="form-control" id="mulai" value="<?= set_value('mulai') ?>">
                            </div>
                            <div class="form-group">
                                <label for="selesai" class="float-left weight-field">Jam Selesai</label>&nbsp;&nbsp;&nbsp;
                                <small class="form-text text-danger ml-3 float-left"><?= form_error('selesai'); ?></small>
                                <input type="time" name="selesai" class="form-control" id="selesai" value="<?= set_value('selesai') ?>">
                            </div>
                            <div class="form-group">
                                <label for="lokasi" class="float-left weight-field">Lokasi Pertemuan</label>&nbsp;&nbsp;&nbsp;
                                <small class="form-text text-danger ml-3 float-left"><?= form_error('lokasi'); ?></small>
                                <input type="text" name="lokasi" class="form-control" id="lokasi" value="<?= set_value('lokasi') ?>">
                            </div>
                            <div class="modal-body">
                                <button type="submit" class="btn btn-primary btn-lg btn-block w-150 mb-5">BUAT <i class="fas fa-calendar-plus"></i></button>
                            </div>
                        </form>
                    </center>
                </div>
            </div>
        </div>
    </section> 