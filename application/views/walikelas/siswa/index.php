<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/js/alert/sweetalert2.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap/bootstrap.css">
    
    <!-- Native CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/siswa/index.css">
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

    <div class="pembungkus">
        <div class="kertas">
            <h3 class="ml-3">XI.B Rekayasa Perangkat Lunak</h3> 
            <hr width="98%">
            <form action="" method="post" class="ml-2 mt-5 form-inline">
                <input type="text" name="cari" class="form-control form-control-lg lebar-cari ml-2" placeholder="Cari Data Siswa . . . .">
                <button type="submit" class="btn btn-primary btn-lg ml-1 cari"><i class="fas fa-search"></i> Cari Siswa</button>
            </form>
              <table>
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Siswa</th>
                        <th scope="col">NIS</th>
                        <th scope="col">Nama Ortu</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no=1; ?>
                    <?php foreach($siswa as $swa) : ?>
                    <tr>
                        <td data-label="No"><b><?= $no; ?></b></td>
                        <td scope="row" data-label="Nama Siswa"><?= $swa['nama_siswa']; ?></td>
                        <td data-label="NIS"><?= $swa['nis']; ?></td>
                        <td data-label="Nama Ortu"><?= $swa['nama_ortu']; ?></td>
                        <td data-label="Aksi"><a href="<?= site_url('walikelas/siswa/hapus/').$swa['id']; ?>" class="tombol-hapus"><button class="btn btn-danger"><i class="fas fa-trash"></i></button></a><a href="<?= site_url('walikelas/siswa/update/').$swa['id']; ?>"><button class="btn btn-primary ml-2"><i class="fas fa-edit"></i></button></a><a href="<?= site_url('walikelas/siswa/detail/').$swa['id']; ?>"><button class="btn btn-success ml-2 detail"><i class="fas fa-info-circle"></i></button></a></td>
                    </tr>
                    <?php $no++ ?>
                    <?php endforeach; ?>
                </tbody>
                </table>
                <center>
                    <?php echo $pagination; ?>
                </center>
            </div>
        </div>
        <a href="<?= site_url('walikelas/siswa/tambah'); ?>"><button class="btn btn-success btn-lg float-right margen mr-5 w-25 tambah">Tambah Siswa <i class="fas fa-plus"></i></button></a>
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('siswa_berhasil'); ?>"></div>
        </div>