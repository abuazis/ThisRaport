<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/signin/style.css">

    <title><?= $judul; ?></title>
</head>
<body>
    <div class="container">
        <div class="login-box">
            <center>
                <div class="judul">
                    <h2>SIGNING UP ACCOUNT</h2>
                </div>
                <img src="<?= base_url(); ?>assets/img/logo.jpg" width="200">
                <form action="<?= site_url('signup/akun/validation'); ?>" method="post" enctype="multipart/form-data">
                    <label for="username">Username</label>
                        <small><?= form_error('username'); ?></small>
                        <input type="text" name="username" id="username" autocomplete="off" value="<?= set_value('username') ?>">
                    <label for="level">Status</label>
                        <small><?= form_error('level'); ?></small>
                        <select name="level" id="level">
                            <option></option>
                            <option value="walikelas" <?= set_select('level', 'walikelas') ?>>Walikelas</option>
                            <option value="walimurid" <?= set_select('level', 'walimurid') ?>>Walimurid</option>
                        </select>
                    <label for="email">Email</label>
                        <small><?= form_error('email'); ?></small>
                        <input type="text" name="email" id="email" autocomplete="off" value="<?= set_value('email') ?>">
                    <label for="password">Password</label>
                        <small><?= form_error('password'); ?></small>
                        <input type="password" name="password" id="password" value="<?= set_value('password') ?>">
                    <label for="konfirmasi">Konfirmasi Password</label>
                        <small><?= form_error('konfirmasi'); ?></small>
                        <input type="password" name="konfirmasi" id="konfirmasi" value="<?= set_value('konfirmasi') ?>">
                    <button class="hijau" type="submit">NEXT</button>
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