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

    <!-- Form Ubah -->
    <section>
        <div class="container bg-light shadow">
            <div class="row">
                <div class="col-md-12">
                <center>
                    <h1 class="marg-atas">Ubah Profil Anda <i class="fas fa-edit"></i></h1>
                    <form action="" method="post" class="w-75" enctype="multipart/form-data">
                        <img src="<?= base_url().$walimurid['foto']; ?>" class="mt-4 mb-4" alt="Foto Profil" width="210">
                        <input type="hidden" name="id" value="<?= $walimurid['id']; ?>">
                        <div class="input-group mb-2 w-25">
                            <label class="custom-file-label float-left ml-0" for="foto"></label>
                            <div class="custom-file">
                                <input type="file" name="foto" class="custom-file-input" id="foto" value="<?= $walimurid['foto']; ?>">
                            </div>
                        </div>
                        <div class="form-group mb-2">
                            <label for="nama" class="float-left ml-1 weight-field">Nama Lengkap</label>
                            <small class="form-text text-danger float-left ml-3"><?= form_error('nama'); ?></small><br>
                            <input type="text" name="nama" class="form-control" id="nama" value="<?= $walimurid['nama_lengkap']; ?>">
                        </div>
                        <div class="form-group mb-2">
                            <label for="gender" class="float-left ml-1 weight-field">Gender</label>
                            <small class="form-text text-danger float-left ml-3"><?= form_error('gender'); ?></small><br>
                            <select class="form-control" id="gender" name="gender">
                                <?php foreach( $gender as $gdr) : ?>
                                    <?php if( $gdr == $walimurid['gender'] ) : ?>
                                        <option value="<?= $gdr; ?>" selected><?= $gdr; ?></option>
                                    <?php else : ?>
                                        <option value="<?= $gdr; ?>"><?= $gdr; ?></option>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group mb-2">
                            <label for="anak" class="float-left ml-1 weight-field">Nama Anak</label>
                            <small class="form-text text-danger float-left ml-3"><?= form_error('anak'); ?></small><br>
                            <input type="text" name="anak" class="form-control" id="anak" value="<?= $walimurid['nama_anak']; ?>">
                        </div>
                        <div class="form-group mb-2">
                            <label for="nis" class="float-left ml-1 weight-field">NIS</label>
                            <small class="form-text text-danger float-left ml-3"><?= form_error('nis'); ?></small><br>
                            <input type="text" name="nis" class="form-control" id="nis" value="<?= $walimurid['nis']; ?>">
                        </div>
                        <div class="form-group mb-2">
                            <label for="alamat" class="float-left ml-1 weight-field">Alamat</label>
                            <small class="form-text text-danger float-left ml-3"><?= form_error('alamat'); ?></small><br>
                            <input type="text" name="alamat" class="form-control" id="alamat" value="<?= $walimurid['alamat']; ?>">
                        </div>
                        <button type="submit" class="btn btn-primary btn-block btn-lg mt-5">UBAH <i class="fas fa-edit"></i></button>
                        <br><br><br><br><br> 
                    </form>
                </center>
                </div>
            </div>
        </div>
    </section>
    




