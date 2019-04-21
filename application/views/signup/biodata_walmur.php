<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/signin/style.css">

    <title>Sign Up | Guru</title>
</head>
<body>
    <div class="container conmur">
        <div class="login-box walmur">
            <center>
                <div class="judul">
                    <h2>SIGNING UP BIODATA</h2>
                </div>
                <img src="<?= base_url(); ?>assets/img/profile.png" width="150">
                <form action="<?= site_url('signup/walimurid/validation'); ?>" method="post" enctype="multipart/form-data">
                    <div class="upload-btn-wrapper">
                        <button class="btn">Add Photo <b>+</b></button>
                        <input type="file" name="foto" id="foto" value="<?= set_value('foto') ?>">
                    </div>
                    <br>
                    <label for="nama">Nama Lengkap</label>
                        <small><?= form_error('nama'); ?></small>
                        <input type="text" name="nama" id="nama" autocomplete="off" value="<?= set_value('nama') ?>">
                    <label for="gender">Gender</label>
                        <small><?= form_error('gender') ?></small>
                        <select name="gender" id="gender">
                            <option></option>
                            <option value="Laki-Laki" <?= set_value('Laki-Laki') ?>>Pria</option>
                            <option value="Perempuan" <?= set_value('Perempuan') ?>>Wanita</option>
                        </select>
                    <label for="anak">Nama Anak</label>
                        <small><?= form_error('anak'); ?></small>
                        <input type="text" name="anak" id="anak" autocomplete="off" value="<?= set_value('anak') ?>">
                    <label for="nis">NIS</label>
                        <small><?= form_error('nis'); ?></small>
                        <input type="text" name="nis" id="nis" autocomplete="off" value="<?= set_value('nis') ?>">
                    <label for="alamat">Alamat Lengkap</label>
                        <small><?= form_error('alamat') ?></small>
                        <input type="text" name="alamat" id="alamat" autocomplete="off" value="<?= set_value('alamat') ?>">
                    <button class="hijau" type="submit">SIGN UP!</button>
                </form> 
                <div class="punya">
                    <p>Sudah Punya Akun?</p><a href="<?= site_url('signin/walimurid'); ?>">SIGN IN</a>
                </div>
                <div class="logo">
                    <img src="<?= base_url(); ?>assets/img/logo.jpg" width="50">
                    <p>DIGITAL RAPORT</p>
                </div>
            </center>
        </div>
    </div>
    <script src="https://unpkg.com/react@16/umd/react.development.js" crossorigin></script>
    <script src="https://unpkg.com/react-dom@16/umd/react-dom.development.js" crossorigin></script>
</body>
</html>