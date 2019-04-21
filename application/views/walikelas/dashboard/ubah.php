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
                        <h1 class="marg-atas">Ubah Profil Anda <i class="fas fa-edit"></i></h1>
                        <form action="" method="post" class="w-75" enctype="multipart/form-data">
                            <img src="<?= base_url() . $walikelas['foto']; ?>" class="mt-4 mb-4" alt="Foto Profil" width="210">
                            <input type="hidden" name="id" value="<?= $walikelas['id']; ?>">
                            <div class="input-group mb-2 w-25">
                                <label class="custom-file-label float-left ml-0" for="foto"></label>
                                <div class="custom-file">
                                    <input type="file" name="foto" class="custom-file-input" id="foto" value="<?= $walikelas['foto']; ?>">
                                </div>
                            </div>
                            <div class="form-group mb-2">
                                <label for="nama" class="float-left ml-1 weight-field">Nama Lengkap</label>
                                <small class="form-text text-danger float-left ml-3"><?= form_error('nama'); ?></small><br>
                                <input type="text" name="nama" class="form-control" id="nama" value="<?= $walikelas['nama_lengkap']; ?>">
                            </div>
                            <div class="form-group mb-2">
                                <label for="nip" class="float-left ml-1 weight-field">NIP</label>
                                <small class="form-text text-danger float-left ml-3"><?= form_error('nip'); ?></small><br>
                                <input type="text" name="nip" class="form-control" id="nip" value="<?= $walikelas['nip']; ?>">
                            </div>
                            <div class="form-group mb-2">
                                <label for="mapel" class="float-left ml-1 weight-field">Mata Pelajaran</label>
                                <small class="form-text text-danger float-left ml-3"><?= form_error('mapel'); ?></small><br>
                                <input type="text" name="mapel" class="form-control" id="mapel" value="<?= $walikelas['mapel']; ?>">
                            </div>
                            <div class="form-group mb-2">
                                <label for="status" class="float-left ml-1 weight-field">Status</label>
                                <small class="form-text text-danger float-left ml-3"><?= form_error('status'); ?></small><br>
                                <select class="form-control" id="status" name="status">
                                    <?php foreach ($status as $sts) : ?>
                                    <?php if ($sts == $walikelas['status']) : ?>
                                    <option value="<?= $sts; ?>" selected><?= $sts; ?></option>
                                    <?php else : ?>
                                    <option value="<?= $sts; ?>"><?= $sts; ?></option>
                                    <?php endif; ?>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group mb-2">
                                <label for="kelas" class="float-left ml-1 weight-field">Kelas</label>
                                <small class="form-text text-danger float-left ml-3"><?= form_error('kelas'); ?></small><br>
                                <input type="text" name="kelas" class="form-control" id="kelas" value="<?= $walikelas['kelas']; ?>">
                            </div>
                            <div class="form-group mb-2">
                                <label for="sekolah" class="float-left ml-1 weight-field">Sekolah</label>
                                <small class="form-text text-danger float-left ml-3"><?= form_error('sekolah'); ?></small><br>
                                <input type="text" name="sekolah" class="form-control" id="sekolah" value="<?= $walikelas['sekolah']; ?>">
                            </div>
                            <button type="submit" class="btn btn-primary btn-block btn-lg mt-5">UBAH <i class="fas fa-edit"></i></button>
                            <br><br><br><br><br>
                        </form>
                    </center>
                </div>
            </div>
        </div>
    </section> 