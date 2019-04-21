<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap/bootstrap.css">

    <!-- Native CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/raport/buat.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/raport/table.css">

    <!-- Icon -->
    <link rel="shortcut icon" href="<?= base_url(); ?>assets/img/logo.jpg">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <title>Simanis | Raport Digital</title>
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

    <center>
        <h1 class="judul d-inline-block">Buat Data Raport <i class="fas fa-plus-square"></i></h1>
    </center>

    <form action="<?= site_url('walikelas/raport/buat'); ?>" method="post" enctype="multipart/form-data">
        <div class="pembungkus">
            <div class="kertas mb-3">
                <div class="row mb-5">
                    <div class="col-md-12">
                        <span class="weight-field id-margin">Raport ID: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="id" id=""></span><br>
                    </div>
                </div>
                <div class="row ml-1">
                    <span class="ml-5 weight-field">Nama Siswa: <input type="text" name="nama" id=""></span><br>
                    <span class="ml-4 weight-field">Judul Raport: &nbsp;&nbsp;&nbsp;<input type="text" name="judul" id=""></span><br><br>
                    <span class="ml-4 weight-field">Semester: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="semester" id=""></span><br>
                </div>
                <div class="row ml-1">
                    <span class="ml-5 mt-2 weight-field">NIS: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="nis" id=""></span><br>
                    <span class="ml-4 mt-2 weight-field">Kelas: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="kelas" id=""></span><br><br>
                    <span class="ml-4 mt-2 weight-field">Tahun Ajaran: <input type="text" name="tahun" id="tahun"></span><br>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Mata Pelajaran</th>
                            <th scope="col">KKM</th>
                            <th scope="col">Nilai</th>
                            <th scope="col">Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td data-label="No"><b>1</b></td>
                            <td scope="row" data-label="Mata Pelajaran"><input type="text" name="mapel4" id=""></td>
                            <td data-label="KKM"><input type="text" name="kkm4" id=""></td>
                            <td data-label="Nilai"><input type="text" name="nilai4" id=""></td>
                            <td data-label="Keterangan"><input type="text" name="keterangan4" id=""></td>
                        </tr>
                        <tr>
                            <td data-label="No"><b>2</b></td>
                            <td scope="row" data-label="Mata Pelajaran"><input type="text" name="mapel5" id=""></td>
                            <td data-label="KKM"><input type="text" name="kkm5" id=""></td>
                            <td data-label="Nilai"><input type="text" name="nilai5" id=""></td>
                            <td data-label="Keterangan"><input type="text" name="keterangan5" id=""></td>
                        </tr>
                        <tr>
                            <td data-label="No"><b>3</b></td>
                            <td scope="row" data-label="Mata Pelajaran"><input type="text" name="mapel6" id=""></td>
                            </td>
                            <td data-label="KKM"><input type="text" name="kkm6" id=""></td>
                            <td data-label="Nilai"><input type="text" name="nilai6" id=""></td>
                            <td data-label="Keterangan"><input type="text" name="keterangan6" id=""></td>
                        </tr>
                        <tr>
                            <td data-label="No"><b>4</b></td>
                            <td scope="row" data-label="Mata Pelajaran"><input type="text" name="mapel7" id=""></td>
                            <td data-label="KKM"><input type="text" name="kkm7" id=""></td>
                            <td data-label="Nilai"><input type="text" name="nilai7" id=""></td>
                            <td data-label="Keterangan"><input type="text" name="keterangan7" id=""></td>
                        </tr>
                        <tr>
                            <td data-label="No"><b>5</b></td>
                            <td scope="row" data-label="Mata Pelajaran"><input type="text" name="mapel8" id=""></td>
                            <td data-label="KKM"><input type="text" name="kkm8" id=""></td>
                            <td data-label="Nilai"><input type="text" name="nilai8" id=""></td>
                            <td data-label="Keterangan"><input type="text" name="keterangan8" id=""></td>
                        </tr>
                        <tr>
                            <td data-label="No"><b>6</b></td>
                            <td scope="row" data-label="Mata Pelajaran"><input type="text" name="mapel9" id=""></td>
                            <td data-label="KKM"><input type="text" name="kkm9" id=""></td>
                            <td data-label="Nilai"><input type="text" name="nilai9" id=""></td>
                            <td data-label="Keterangan"><input type="text" name="keterangan9" id=""></td>
                        </tr>
                        <tr>
                            <td data-label="No"><b>7</b></td>
                            <td scope="row" data-label="Mata Pelajaran"><input type="text" name="mapel10" id=""></td>
                            <td data-label="KKM"><input type="text" name="kkm10" id=""></td>
                            <td data-label="Nilai"><input type="text" name="nilai10" id=""></td>
                            <td data-label="Keterangan"><input type="text" name="keterangan10" id=""></td>
                        </tr>
                        <tr>
                            <td data-label="No"><b>8</b></td>
                            <td scope="row" data-label="Mata Pelajaran"><input type="text" name="mapel11" id=""></td>
                            <td data-label="KKM"><input type="text" name="kkm11" id=""></td>
                            <td data-label="Nilai"><input type="text" name="nilai11" id=""></td>
                            <td data-label="Keterangan"><input type="text" name="keterangan11" id=""></td>
                        </tr>
                    </tbody>
                </table>
                <table class="sikap">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Aspek Sikap</th>
                            <th scope="col">Nilai</th>
                            <th scope="col">Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td data-label="No"><b>1</b></td>
                            <td scope="row" data-label="Aspek Sikap"><input type="text" name="aspek1" id=""></td>
                            <td data-label="Nilai"><input type="text" name="nilai1" id=""></td>
                            <td data-label="Keterangan"><input type="text" name="keterangan-sikap1" id=""></td>
                        </tr>
                        <tr>
                            <td data-label="No"><b>2</b></td>
                            <td scope="row" data-label="Aspek Sikap"><input type="text" name="aspek2" id=""></td>
                            <td data-label="Nilai"><input type="text" name="nilai2" id=""></td>
                            <td data-label="Keterangan"><input type="text" name="keterangan-sikap2" id=""></td>
                        </tr>
                        <tr>
                            <td data-label="No"><b>3</b></td>
                            <td scope="row" data-label="Aspek Sikap"><input type="text" name="aspek3" id=""></td>
                            <td data-label="Nilai"><input type="text" name="nilai3" id=""></td>
                            <td data-label="Keterangan"><input type="text" name="keterangan-sikap3" id=""></td>
                        </tr>
                    </tbody>
                </table>
                <table class="sikap">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Kehadiran</th>
                            <th scope="col">Jumlah</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td data-label="No"><b>1</b></td>
                            <td scope="row" data-label="Kehadiran">Sakit</td>
                            <td data-label="Jumlah"><input type="text" name="sakit" id=""></td>
                        </tr>
                        <tr>
                            <td data-label="No"><b>2</b></td>
                            <td scope="row" data-label="Kehadiran">Izin</td>
                            <td data-label="Jumlah"><input type="text" name="izin" id=""></td>
                        </tr>
                        <tr>
                            <td data-label="No"><b>3</b></td>
                            <td scope="row" data-label="Kehadiran">Alfa</td>
                            <td data-label="Jumlah"><input type="text" name="alfa" id=""></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <button type="submit" name="submit" class="btn btn-success shadow mx-auto d-block mt-5 lebar-btn btn-lg">Buat Raport <i class="fas fa-plus-square"></i></button>
    </form> 