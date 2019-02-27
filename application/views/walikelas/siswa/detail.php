<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap/bootstrap.css">
    
    <!-- Native CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/siswa/detail.css">

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

    <div class="pembungkus">
        <div class="kertas">
            <h3 class="ml-3">Detail Data Siswa</h3> 
            <hr width="98%">
            <div class="row">
          <div class="col-sm-4 mt-5">
              <center>
                <img src="<?= base_url().$siswa['foto']; ?>" class="img-thumbnail" width="300">
              </center>
          </div>
          <div class="col-sm-7">
            <table class="table mt-5">
              <tr>
                <th scope="row" class="text-left">Nama Siswa</th>
                <td scope="row" class="text-left"><?= $siswa['nama_siswa']; ?></td>
              </tr>
              <tr>
                <th scope="row" class="text-left">NIS</th>
                <td scope="row" class="text-left"><?= $siswa['nis']; ?></td>
              </tr>
              <tr>
                <th scope="row" class="text-left">Nama Ortu</th>
                <td scope="row" class="text-left"><?= $siswa['nama_ortu']; ?></td>
              </tr>
              <tr>
                <th scope="row" class="text-left">Jenis Kelamin</th>
                <td scope="row" class="text-left"><?= $siswa['gender']; ?></td>
              </tr>
              <tr>
                <th scope="row" class="text-left">Tanggal Lahir</th>
                <td scope="row" class="text-left"><?= $siswa['tanggal_lahir']; ?></td>
              </tr>
              <tr>
                <th scope="row" class="text-left">Alamat</th>
                <td scope="row" class="text-left"><?= $siswa['alamat']; ?></td>
              </tr>
              <tr>
                <th scope="row" class="text-left">Kelas</th>
                <td scope="row" class="text-left"><?= $siswa['kelas']; ?></td>
              </tr>
              <tr>
                <th scope="row" class="text-left">Sekolah</th>
                <td scope="row" class="text-left"><?= $siswa['sekolah']; ?></td>
              </tr>
            </table>
            <a href="<?= site_url('walikelas/siswa/update/').$siswa['id']; ?>" class="text-decoration-none"><button type="button" class="btn btn-primary btn-lg btn-block mt-4 text-decoration-none"><i class="fas fa-edit"></i></button></a>
            <a href="<?= site_url('walikelas/siswa/hapus/').$siswa['id']; ?>" class="text-decoration-none"><button type="button" class="btn btn-danger btn-lg btn-block mt-3 text-decoration-none tombol-hapus"><i class="fas fa-trash"></i></button></a>
          </div>
        </div>
        </div>
    </div>