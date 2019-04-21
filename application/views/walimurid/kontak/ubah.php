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

    <!-- Form Ubah -->
    <section>
        <div class="container bg-light shadow">
            <div class="row">
                <div class="col-md-12">
                    <center>
                        <h1 class="marg-atas">Ubah Kontak <i class="fas fa-calendar-plus"></i></h1>
                        <form action="" method="post" class="w-75" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="<?= $bio['id']; ?>">
                            <img class="mt-4" src="<?= base_url() . $bio['foto'] ?>" width="200">
                            <br>
                            <div class="custom-file mt-3 mb-3 w-25">
                                <input type="file" name="foto" class="custom-file-input" id="inputGroupFile02">
                                <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02"></label>
                            </div>
                            <div class="form-group">
                                <label for="nama" class="float-left weight-field"> Nama Pemilik</label>&nbsp;&nbsp;&nbsp;
                                <small class="form-text text-danger ml-3 float-left"><?= form_error('nama'); ?></small>
                                <input type="text" name="nama" class="form-control" id="nama" value="<?= $bio['nama_pemilik'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="wa" class="float-left weight-field">Nomor Whatsapp</label>&nbsp;&nbsp;&nbsp;
                                <small class="form-text text-danger ml-3 float-left"><?= form_error('wa'); ?></small>
                                <input type="text" name="wa" class="form-control" id="wa" value="<?= $bio['nomor_wa'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="line" class="float-left weight-field">ID Line</label>&nbsp;&nbsp;&nbsp;
                                <small class="form-text text-danger ml-3 float-left"><?= form_error('line'); ?></small>
                                <input type="text" name="line" class="form-control" id="line" value="<?= $bio['id_line'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="anak" class="float-left weight-field">Nama Anak</label>&nbsp;&nbsp;&nbsp;
                                <small class="form-text text-danger ml-3 float-left"><?= form_error('anak'); ?></small>
                                <input type="text" name="anak" class="form-control" id="anak" value="<?= $bio['nama_anak'] ?>">
                            </div>
                            <div class="modal-body">
                                <button type="submit" class="btn btn-primary btn-lg btn-block w-150 mb-5">Masukan <i class="fas fa-calendar-plus"></i></button>
                            </div>
                        </form>
                    </center>
                </div>
            </div>
        </div>
    </section> 