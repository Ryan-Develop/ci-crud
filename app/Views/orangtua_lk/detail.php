<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="mt-3">Detail Orang Tua (Pria)</h2>
            <div class="card mb-3" witdh="100">
                <div class="row no-gutters">

                    <div class="col-md-6">
                        <div class="card-body">
                            <h5 class="card-title"><?= $orangtua_lk['nama']; ?></h5>
                            <p class="card-text"><b>NIK: </b> <?= $orangtua_lk['nik']; ?></p>
                            <p class="card-text"><b>Agama: </b> <?= $orangtua_lk['agama']; ?></p>
                            <p class="card-text"><b>Tempat Lahir: </b> <?= $orangtua_lk['ttl']; ?></p>
                            <p class="card-text"><b>Pekerjaan: </b> <?= $orangtua_lk['pekerjaan']; ?></p>
                            <p class="card-text"><b>Pendidikan: </b> <?= $orangtua_lk['pendidikan_terakhir']; ?></p>
                            <p class="card-text"><small class="text-muted"><b>Tanggal Dibuat: </b> <?= $orangtua_lk['created_at']; ?></small></p>

                            <a href="" class="btn btn-warning">Edit</a>
                            <a href="" class="btn btn-danger">Delete</a>
                            <br><br>
                            <a href="<?= base_url('orangtua_lk/'); ?>">Kembali ke Daftar Orang Tua</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>