<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <a href="<?= base_url('tambah_orangtua_lk'); ?>" class="btn btn-primary mt-3">Tambah Data Mahasiswa</a>
            <h2 class="mt-2">List Daftar Nama Orang Tua (Pria)</h2>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Tempat Tanggal Lahir</th>
                        <th scope="col">Pekerjaan</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($orangtua_lk as $ortu_lk) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $ortu_lk['nama']; ?></td>
                            <td><?= $ortu_lk['ttl']; ?></td>
                            <td><?= $ortu_lk['pekerjaan']; ?></td>
                            <td>
                                <a href="/orangtua_lk/<?= $ortu_lk['nik']; ?>" class="btn btn-success">Detail</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>