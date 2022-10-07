<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">Form Registrasi</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active" href="<?= base_url('/'); ?>">Home</a>
                <!-- <a class="nav-link" href="<?= base_url('/pages/about'); ?>">About</a>
                <a class="nav-link" href="<?= base_url('/pages/contact'); ?>">Contact</a> -->
                <a class="nav-link" href="<?= base_url('/mahasiswa'); ?>">Mahasiswa</a>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Orang Tua
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?= base_url('/orangtua_lk'); ?>">Pria</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?= base_url('/orangtua_pr'); ?>">Wanita</a>
                    </div>
                </li>
                <a class="nav-link" href="<?= base_url('/asal_sekolah'); ?>">Asal Sekolah</a>
            </div>
        </div>
    </div>
</nav>
<!-- end navbar -->