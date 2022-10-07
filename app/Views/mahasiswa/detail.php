<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="mt-3">Detail Mahasiswa</h2>
            <div class="card mb-3" witdh="100">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="/img/<?= $mahasiswa['gambar']; ?>" class="card-img" style="" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?= $mahasiswa['nama']; ?></h5>
                            <p class="card-text"><b>NIM: </b> <?= $mahasiswa['nim']; ?></p>
                            <p class="card-text"><b>Jenis Kelamin: </b> <?= $mahasiswa['jenis_kelamin']; ?></p>
                            <p class="card-text"><b>Agama: </b> <?= $mahasiswa['agama']; ?></p>
                            <p class="card-text"><b>Program Studi: </b> <?= $mahasiswa['prodi']; ?></p>
                            <p class="card-text"><b>Tanggal Lahir: </b> <?= $mahasiswa['ttl']; ?></p>
                            <p class="card-text"><b>Alamat: </b> <?= $mahasiswa['alamat']; ?></p>
                            <p class="card-text"><b>Asal Sekolah: </b> <?= $mahasiswa['asal_sekolah']; ?></p>
                            <p class="card-text"><small class="text-muted"><b>Tanggal Dibuat: </b> <?= $mahasiswa['created_at']; ?></small></p>
                            <a href="" class="btn btn-warning">Edit</a>
                            <a href="" class="btn btn-danger">Delete</a>
                            <br><br>
                            <a href="<?= base_url('mahasiswa/'); ?>">Kembali ke Daftar Mahasiswa</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>