<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/service/service.css">
    <link rel="shortcut icon" href="<?= base_url(); ?>assets/img/logo.jpg" type="image/x-icon">

    <title><?= $judul; ?></title>
</head>
<body>
    <div class="container">
        <div class="login-box">
            <center>
                <div class="judul">
                    <h2>CONTACT SERVICE</h2>
                    <img src="<?= base_url(); ?>assets/img/service-putih.png" alt="">
                </div>
                <form action="<?= site_url('walikelas/service/kirim'); ?>" method="post" enctype="multipart/form-data">

                    <label for="nama">Nama Anda</label>
                        <small><?= form_error('nama'); ?></small>
                        <input type="text" name="nama" id="nama">
                    <label for="email">Email</label>
                        <small><?= form_error('email'); ?></small>
                        <input type="text" name="email" id="email">
                    <label for="jenis">Jenis Pesan</label>
                        <small><?= form_error('jenis'); ?></small>
                        <select name="jenis" id="jenis">
                            <option></option>
                            <option value="testimonial">Testimonial</option>
                            <option value="keluhan">Keluhan</option>
                            <option value="saran">Saran</option>
                        </select>
                    <label for="pesan">Isi Pesan</label>
                        <small><?= form_error('pesan'); ?></small>
                        <textarea name="pesan" id="pesan"></textarea>

                    <button class="kirim" type="submit">KIRIM!</button>
                </form> 

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