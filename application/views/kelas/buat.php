<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/kelas/kelas.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/kelas/kelas_login.css">

    <title>Sign In | Simanis</title>
</head>
<body>
    <div class="container buat">
       <div class="sign-box peninggi pt-2 mt-4">
            <center>
                <div class="judul judul-kelas">
                    <h2 class="jdl kuning">BUAT KELAS</h2>
                    <img src="<?= base_url(); ?>assets/img/logo.jpg" width="180">
                    <h2 class="raport">DIGITAL RAPORT</h2>
                </div>
                <form action="<?= site_url('kelas/buat/validation') ?>" method="post" enctype="multipart/form-data">
                    <label for="nama">Nama Kelas</label>
                        <small><?= form_error('nama'); ?></small>
                        <input type="text" name="nama" id="nama" autocomplete="off">
                    <label for="walas">Nama Walikelas</label>
                        <small><?= form_error('walas'); ?></small>
                        <input type="text" name="walas" id="walas" autocomplete="off">
                    <label for="kode">Kode Kelas</label>
                        <small><?= form_error('kode'); ?></small>
                        <input type="text" name="kode" id="kode" autocomplete="off">
                    <label for="sekolah">Nama Sekolah</label>
                        <small><?= form_error('sekolah'); ?></small>
                        <input type="text" name="sekolah" id="sekolah" autocomplete="off">
                    <button type="submit" class="w-100 h-btn">BUAT!</button>
                </form>
            </center>
       </div>
    </div>
    <script src="https://unpkg.com/react@16/umd/react.development.js" crossorigin></script>
    <script src="https://unpkg.com/react-dom@16/umd/react-dom.development.js" crossorigin></script>
</body>
</html>