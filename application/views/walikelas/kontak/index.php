<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap/bootstrap.css">
    
    <!-- Native CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/kontak/kontak.css">

    <!-- Icon -->
    <link rel="shortcut icon" href="<?= base_url(); ?>assets/img/logo.jpg">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <title><?= $judul; ?></title>
</head>
<body>
    <!-- Ini Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark biru fixed-top">
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

    <div class="kemasan">
        <div class="pembungkus shadow">
            <center>
                <div class="lebarop profile mt-3">
                    <div class="col-md-3 pt-4 pl-5">
                        <img class="mt-1" src="<?= base_url().$self['foto']; ?>" width="200">
                    </div>
                    <div class="col-md-3">
                        <h2 class="nama"><?= $self['nama_pemilik']; ?></h2>
                        <h5>Walikelas <?= $kelas['nama_kelas']; ?></h5>
                    </div>
                    <hr>
                    <div class="col-md-6 kontac">
                        <span class="nomor-pemilik text-success"><img class="mr-2" src="<?= base_url(); ?>assets/img/wa-black.png" width="48">Whatsapp: <?= $self['nomor_wa']; ?></span><br>
                        <span class="nomor-pemilik "><img class="mr-2" src="<?= base_url(); ?>assets/img/line-black.png" width="60">LINE: <?= $self['id_line']; ?></span>
                        <a href="<?= site_url('walikelas/kontak/aksi'); ?>" class="btn btn-primary text-light float-right edit" > Aksi <i class="fas fa-edit"></i></a>
                    </div>
                </div>
                <form action="" method="post" class="mt-4 form-inline">
                    <input type="text" class="form-control form-control-lg lebar-cari" name="cari" id="cari" placeholder="Cari Kontak Walimurid.....">
                    <button type="submit" class="btn btn-primary btn-lg ml-2 tombol">Search <i class="fa fa-search" aria-hidden="true"></i></button>
                </form>
                <div class="bungkus mt-4">
                    <?php foreach($walimurid as $walmur) : ?>
                        <div class="profile mr-2">
                            <div class="photo">
                                <center>
                                    <h4 class="mt-3 mb-4"><?= $walmur['nama_pemilik']; ?></h4>
                                    <img src="<?= base_url().$walmur['foto']; ?>" width="140">
                                </center>
                            </div>
                            <div class="nomor">
                                <p>Orangtua Dari <?= $walmur['nama_anak']; ?></p>
                                <a href=""><span class="float-left ml-5"><img src="<?= base_url(); ?>assets/img/wa-black.png" width="36"> <?= $walmur['nomor_wa']; ?></span><br></a>
                                <a href=""><span class="float-left ml-5"><img src="<?= base_url(); ?>assets/img/line-black.png" width="45"> <?= $walmur['id_line']; ?></span></a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </center>
        </div>
    </div>
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('aksi_berhasil'); ?>"></div>

    <!-- Modal Edit Kontak -->
    <div class="modal fade" id="editKontak" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-body">
                <h4 class="modal-title h3 text-center font-weight-normal" id="exampleModalLabel">Edit Agenda Pertemuan</h4>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="formGroupExampleInput1 text-left">WhatsApp</label>
                        <input type="text" class="form-control" id="formGroupExampleInput">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2 text-left">LINE</label>
                        <input type="teks" class="form-control" id="formGroupExampleInput2">
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