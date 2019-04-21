    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>">

    </div>
    <div class="contain mt-5">
        <div class="profile mt-5">
            <div class="photo">
                <center>
                    <img src="<?= base_url() . $walikelas['foto']; ?>" width="230">
                    <div>
                        <h2 class="ml-4"><?= $walikelas['nama_lengkap']; ?></h2>
                        <h3>Walikelas <?= $walikelas['kelas']; ?></h3>
                        <h3><?= $walikelas['sekolah']; ?></h3>
                    </div>
                </center>
            </div>
            <div class="batas">

            </div>
            <div class="bio">
                <h4>NIP : &nbsp;&nbsp;&nbsp; <span class="weight-profil"><?= $walikelas['nip']; ?></span></h4><br>
                <h4>Mapel : &nbsp;&nbsp;&nbsp; <span class="weight-profil"><?= $walikelas['mapel']; ?></span></h4><br>
                <h4>Status : &nbsp;&nbsp;&nbsp; <span class="weight-profil">Guru <?= $walikelas['status']; ?></span></h4><br>
                <h4>Alamat : &nbsp;&nbsp;&nbsp; <span class="weight-profil">Jln. Raya Pekayon Jaya 47A</span></h4>
            </div>
            <a href="<?= site_url('walikelas/dashboard/update/' . $walikelas['id']); ?>" class="btn btn-primary text-white edit">Edit <i class="far fa-edit"></i></a>
            <a href="<?= site_url('walikelas/dashboard/logout'); ?>" class="btn btn-danger hapus tombol-logout">Logout <i class="fas fa-sign-out-alt"></i></a>
        </div>
    </div>

    <div class="contains mt-5 mb-5">
        <!-- <div class="notif">
            <center>
               <h2 class="mt-2 weight-menu">Timeline</h2> 
                <?php if ($this->session->flashdata('login_walas') == true) : ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Berhasil! </strong><br><?= $this->session->flashdata('login_walas'); ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php endif; ?>
                <?php if ($this->session->flashdata('ubah_walas') == true) : ?>
                    <div class="alert alert-primary alert-dismissible fade show" role="alert">
                        <strong>Berhasil!</strong><br><?= $this->session->flashdata('ubah_walas'); ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php endif; ?>
                <?php if ($this->session->flashdata('service_berhasil') == true) : ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Holy guacamole!</strong><br><?= $this->session->flashdata('service_berhasil'); ?>.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php endif; ?>
            </center>
        </div> -->
        <div class="menu">
            <div class="raport">
                <center>
                    <a href="<?= site_url('walikelas/raport'); ?>"><img src="<?= base_url(); ?>assets/img/buku.png" width="230" class="gbr-buku"></a>
                    <div class="sub-data">
                        <h2 class="mt-2 weight-menu">Raport Siswa</h2>
                        <p>Management raport siswa
                            di kelas anda</p>
                    </div>
                </center>
            </div>
            <div class="agenda">
                <center>
                    <a href="<?= site_url('walikelas/siswa'); ?>"><img src="<?= base_url(); ?>assets/img/data.png" width="220" class="mt-2"></a>
                    <div class="sub-data">
                        <h2 class="mt-2 weight-menu">Data Siswa</h2>
                        <p>Berisi biodata lengkap siswa
                            di kelas anda</p>
                    </div>
                </center>
            </div>
            <div class="agenda">
                <center>
                    <a href="<?= site_url('walikelas/agenda'); ?>"><img src="<?= base_url(); ?>assets/img/kalendar.png" width="220" class="mt-2"></a>
                    <div class="sub-data">
                        <h2 class="mt-2 weight-menu">Agenda Pertemuan</h2>
                        <p>Jadwalkan pertemuan anda
                            dengan walimurid</p>
                    </div>
                </center>
            </div>
            <div class="kontak">
                <center>
                    <a href="<?= site_url('walikelas/kontak'); ?>"><img src="<?= base_url(); ?>assets/img/chat.png" width="220" class="mt-2"></a>
                    <div class="sub-data">
                        <h2 class="mt-2 weight-menu">Kontak Walimurid</h2>
                        <p>Jadwalkan pertemuan anda
                            dengan walimurid</p>
                    </div>
                </center>
            </div>
            <div class="service">
                <center>
                    <a href="<?= site_url('walikelas/service'); ?>"><img src="<?= base_url(); ?>assets/img/service.png" width="220" class="mt-2"></a>
                    <div class="sub-data">
                        <h2 class="mt-2 weight-menu">Customer Service</h2>
                        <p>Layanan saran, keluhan dan
                            testimoni anda di aplikasi kami</p>
                    </div>
                </center>
            </div>
        </div>
    </div> 