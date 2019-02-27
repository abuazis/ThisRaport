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
    <div class="container vonten">
        <div class="login-box biodata">
            <center>
                <div class="judul">
                    <h2>SIGNING UP BIODATA</h2>
                </div>
                <img src="<?= base_url(); ?>assets/img/profile.png" width="150">
                <form action="<?= site_url('signup/walikelas/validation'); ?>" method="post" enctype="multipart/form-data">
                    <div class="upload-btn-wrapper">
                        <button class="btn">Add Photo <b>+</b></button>
                        <input type="file" name="foto" id="foto">
                    </div>
                    <br>
                    <label for="nama">Nama Lengkap</label>
                        <small><?= form_error('nama'); ?></small>
                        <input type="text" name="nama" id="nama" autocomplete="off">
                    <label for="nip">NIP</label>
                        <small><?= form_error('nip'); ?></small>
                        <input type="text" name="nip" id="nip" autocomplete="off">
                    <label for="mapel">Mata Pelajaran</label>
                        <small><?= form_error('mapel'); ?></small>
                        <input type="text" name="mapel" id="mapel" autocomplete="off">
                    <label for="status">Status Guru</label>
                        <small><?= form_error('status'); ?></small>
                        <select name="status" id="status">
                            <option></option>
                            <option value="honorer">Honorer</option>
                            <option value="pns">PNS</option>
                        </select>
                    <label for="kelas">Kelas</label>
                        <small><?= form_error('kelas'); ?></small>
                        <input type="text" name="kelas" id="kelas" autocomplete="off">
                    <label for="sekolah">Sekolah</label>
                        <small><?= form_error('sekolah'); ?></small>
                        <input type="text" name="sekolah" id="sekolah" autocomplete="off">
                    <button class="hijau" type="submit">SIGN UP!</button>
                </form> 
                <div class="punya">
                    <p>Sudah Punya Akun?</p><a href="<?= site_url('signin/walikelas'); ?>">SIGN IN</a>
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