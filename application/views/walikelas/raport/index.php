<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap/bootstrap.css">
    
    <!-- Native CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/raport/index.css">

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

    <div class="search">
        <div class="container">
            <div class="row">
                <div class="col-md-12 margen">
                    <center>
                        <h1>Daftar Raport Siswa</h1>
                    </center>
                    <form action="" method="post" class="form-inline ml-2">
                        <input type="text" class="form-control form-control-lg lebar-cari mr-3" name="cari" placeholder="Cari...">
                        <button type="submit" class="btn btn-primary btn-lg float-right">Search <i class="fas fa-search"></i></button>
                    </form>
                </div>
            </div>
            <div class="pembungkus">
                <?php foreach($siswa as $swa) : ?>
                    <div class="rapots margin-raport">
                        <a href=""><img src="<?= base_url(); ?>assets/img/buku.png" width="90"></a>
                        <h3>Raport Penilaian<br>
                        Hasil Belajar</h3>
                        <p><?= $swa['kelas']; ?> <?= $swa['nama_siswa']; ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
            <center>
               <div class="pagination mt-5">
                    <a href="#">&laquo;</a>
                    <a href="#">1</a>
                    <a href="#" class="active">2</a>
                    <a href="#">3</a>
                    <a href="#">4</a>
                    <a href="#">5</a>
                    <a href="#">6</a>
                    <a href="#">&raquo;</a>
                </div> 
            </center>
        </div>
    </div>

    <footer>
    <div class="konten1">
        <div class="line"></div>
            <h3>DIGITAL</h3>
            <h3>RAPORT</h3>
            <P>Aplikasi yang mempermudah Orang<br> Tua dan Guru dalam
            pembagian hasil<br> evaluasi belajar siswa dan berkonsultasi
            secara online/digital
            </P>
        </div>
        <div class="konten2">
            <h5>OUR TEAM</h5>
                <div class="line2">
                    <div class="l-line"></div>
                </div>
                <li><a href="#">Raport</a></li><hr class="line2">
                <li><a href="#">Absensi</a></li><hr class="line2">
                <li><a href="#">Ekskul</a></li><hr class="line2">
                <li><a href="#">Komunitas</a></li><hr class="line2">
                <li><a href="#">Hubin</a></li><hr class="line2">
        </div>
        <div class="konten3">
            <h5>FOLLOW US</h5>
                <div class="line2">
                    <div class="l-line"></div>
                    <li><a href="#"><i class="fab fa-twitter t" style="margin-left: -60px; padding: 10px; border-radius: 100%;"></i></a></li>
                    <li><a href="#"><i class="fab fa-facebook f" style="margin-left: -5px; padding: 10px 12px; border-radius: 100%;"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram i" style="margin-left: 10px; padding: 10px 12px; border-radius: 100%;"></i></a></li>
                    <li><a href="#"><i class="fab fa-youtube y" style="margin-left: 10px; padding: 10px 10px; border-radius: 100%;"></i></a></li>
                </div>
        </div>
        <div class="konten4">
            <h5>OUR NEWSLETTER</h5>
                <div class="line2">
                    <div class="l-line"></div>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum totam pariatur dolor atque minus, laborum impedit eligendi vitae recusandae, distinctio neque itaque, fugit magni incidunt harum aliquid tenetur deleniti! Vero?</p> 
        </div>
    <div class="footer-bottom">
        <p>Copyright &copy; 2019 Simanis Production</p>
    </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
        crossorigin="anonymous"></script>
    
</body>
</html>