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
        </div>
    </footer>

    <script src="<?= base_url(); ?>assets/js/aos.js"></script>
    <script src="<?= base_url(); ?>assets/js/react.development.js" crossorigin></script>
    <script src="<?= base_url(); ?>assets/js/react-dom.development.js" crossorigin></script>
    <script src="<?= base_url(); ?>assets/js/jquery-3.3.1.slim.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/popper.min.js" ></script>
    <script src="<?= base_url(); ?>assets/js/bootstrap.min.js" ></script>
    <script src="<?= base_url(); ?>assets/js/alert/sweetalert2.all.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/alert/script.js"></script>
    <script>
        AOS.init();
        $(window).scroll(function () {
            if ($(window).scrollTop() >= 60) {
                $('.navku').css('background','#0077ff');
            } else {
                $('.navku').css('background','transparent');
            }
        });
    </script>
    
</body>
</html>