<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap/bootstrap.css">
    
    <!-- Native CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/raport/data.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/raport/table.css">

    <!-- Icon -->
    <link rel="shortcut icon" href="assets/img/logo.jpg">
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
            <center>
                <h1>Data Raport <?= $biodata['nama_siswa']; ?></h1> 
            </center>
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
                    <?php foreach($raport as $rpt) : ?>
                        <tr>
                            <td data-label="No"><b><?= $no; ?></b></td>
                            <td scope="row" data-label="Mata Pelajaran"><?= $rpt['nama_mapel']; ?></td>
                            <td data-label="KKM"><?= $rpt['kkm']; ?></td>
                            <td data-label="Nilai"><?= $rpt['nilai']; ?></td>
                            <td data-label="Keterangan"><?= $rpt['keterangan']; ?></td>
                        </tr>
                    <?php $no++; ?>
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
                        <?php foreach($sikap as $skp) : ?>
                            <tr>
                                <td data-label="No"><b><?= $no; ?></b></td>
                                <td scope="row" data-label="Aspek Sikap"><?= $skp['aspek_sikap']; ?></td>
                                <td data-label="Nilai"><?= $skp['nilai']; ?></td>
                                <td data-label="Keterangan"><?= $skp['keterangan']; ?></td>
                            </tr>
                        <?php $no++; ?>
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
                            <td data-label="Jumlah"><?= $kehadiran['sakit']; ?></td>
                        </tr>
                        <tr>
                            <td data-label="No"><b>2</b></td>
                            <td scope="row" data-label="Kehadiran">Izin</td>
                            <td data-label="Jumlah"><?= $kehadiran['izin']; ?></td>
                        </tr>
                        <tr>
                            <td data-label="No"><b>3</b></td>
                            <td scope="row" data-label="Kehadiran">Alfa</td>
                            <td data-label="Jumlah"><?= $kehadiran['alfa']; ?></td>
                        </tr>
                    </tbody>
                </table>
        </div>
    </div>
    <a href="<?= site_url('walikelas/data/cetak/').$biodata['raport_id']; ?>" class="btn btn-success btn-lg float-right mt-3 mr-5 margen"><i class="fa fa-download" aria-hidden="true"></i> Unduh Raport</a>