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

    <center>
        <h1 class="judul d-inline-block">Buat Data Raport <i class="fas fa-plus-square"></i></h1>
    </center>

    <form action="<?= site_url('walikelas/raport/ubah/').$biodata['raport_id']; ?>" method="post" enctype="multipart/form-data">
    <div class="pembungkus">
        <div class="kertas mb-3">
            <div class="row mb-5">
                <div class="col-md-12">
                    <span class="weight-field id-margin">Raport ID: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="id" value="<?= $biodata['raport_id']; ?>" disabled></span><br>
                </div>
            </div>
            <div class="row ml-1">
                <span class="ml-5 weight-field">Nama Siswa: <input type="text" name="nama" value="<?= $biodata['nama_siswa']; ?>"></span><br>
                <span class="ml-4 weight-field">Judul Raport: &nbsp;&nbsp;&nbsp;<input type="text" name="judul" value="<?= $biodata['judul_raport']; ?>"></span><br><br>
                <span class="ml-4 weight-field">Semester: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="semester" value="<?= $biodata['semester']; ?>"></span><br>
            </div>
            <div class="row ml-1">
                <span class="ml-5 mt-2 weight-field">NIS: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="nis" value="<?= $biodata['nis']; ?>"></span><br>
                <span class="ml-4 mt-2 weight-field">Kelas: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="kelas" value="<?= $biodata['kelas']; ?>"></span><br><br>
                <span class="ml-4 mt-2 weight-field">Tahun Ajaran: <input type="text" name="tahun" value="<?= $biodata['tahun_ajaran']; ?>"></span><br>
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
                        <?php $no=1; ?>
                        <?php $val=4; ?>
                        <?php foreach($raport as $rpt) : ?>
                            <tr>
                                <td data-label="No"><b><?= $no; ?></b></td>
                                <td scope="row" data-label="Mata Pelajaran"><input type="text" name="mapel<?= $val; ?>" value="<?= $rpt['nama_mapel']; ?>"></td>
                                <td data-label="KKM"><input type="text" name="kkm<?= $val; ?>" value="<?= $rpt['kkm']; ?>"></td>
                                <td data-label="Nilai"><input type="text" name="nilai<?= $val; ?>" value="<?= $rpt['nilai']; ?>"></td>
                                <td data-label="Keterangan"><input type="text" name="keterangan<?= $val; ?>" value="<?= $rpt['keterangan']; ?>"></td>
                            </tr>
                        <?php $no++; ?>
                        <?php $val++; ?>
                        <?php endforeach; ?>
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
                            <?php $no=1; ?>
                            <?php $val=1; ?>
                            <?php foreach($sikap as $skp) : ?>
                                <tr>
                                    <td data-label="No"><b><?= $no; ?></b></td>
                                    <td scope="row" data-label="Aspek Sikap"><input type="text" name="aspek<?= $val; ?>" value="<?= $skp['aspek_sikap']; ?>"></td>
                                    <td data-label="Nilai"><input type="text" name="nilai<?= $val; ?>" value="<?= $skp['nilai']; ?>"></td>
                                    <td data-label="Keterangan"><input type="text" name="keterangan-sikap<?= $val; ?>" value="<?= $skp['keterangan']; ?>"></td>
                                </tr>
                            <?php $no++; ?>
                            <?php $val++; ?>
                            <?php endforeach; ?>
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
                                <td data-label="Jumlah"><input type="text" name="sakit" value="<?= $kehadiran['sakit']; ?>"></td>
                            </tr>
                            <tr>
                                <td data-label="No"><b>2</b></td>
                                <td scope="row" data-label="Kehadiran">Izin</td>
                                <td data-label="Jumlah"><input type="text" name="izin" value="<?= $kehadiran['izin']; ?>"></td>
                            </tr>
                            <tr>
                                <td data-label="No"><b>3</b></td>
                                <td scope="row" data-label="Kehadiran">Alfa</td>
                                <td data-label="Jumlah"><input type="text" name="alfa" value="<?= $kehadiran['alfa']; ?>"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        <center>
            <button type="submit" name="ubah" class="btn btn-success shadow float-right mr-4 mt-5 w-50 btn-lg">Buat Raport <i class="fas fa-plus-square"></i></button>
        </center>
    </form>
