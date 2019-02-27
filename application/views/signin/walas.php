<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/signin/style.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/signin/style-login.css">

    <title>Sign In | Simanis</title>
</head>
<body>
    <div class="container">
        <div class="sign-box">
            <center>
                <div class="judul">
                    <h2>SIGN IN WALIKELAS</h2>
                    <img src="<?= base_url(); ?>assets/img/logo.jpg" width="180">
                    <h2 class="digital">DIGITAL RAPORT</h2>
                </div>
                <form action="<?= site_url('signin/walikelas/validation'); ?>" method="post" enctype="multipart/form-data">
                    <label for="username">Username</label>
                        <small><?= form_error('username'); ?></small>
                        <input type="text" name="username" id="username">
                    <label for="password">Password</label>
                        <small><?= form_error('password'); ?></small>
                        <small><?= $this->session->flashdata('error'); ?></small>
                        <input type="password" name="password" id="password">
                    <label for="remember">
                        <input type="checkbox" name="remember" id="remember"> Remember Me
                    </label>
                    <button type="submit">SIGN IN!</button>
                </form>
                <div class="punya">
                    <p>Belum Punya Akun?</p><a href="<?= site_url('signup/walikelas'); ?>">SIGN UP</a>
                </div>
            </center>
        </div>
    </div>
    <script src="https://unpkg.com/react@16/umd/react.development.js" crossorigin></script>
    <script src="https://unpkg.com/react-dom@16/umd/react-dom.development.js" crossorigin></script>
</body>
</html>