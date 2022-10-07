<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <a href="<?= base_url('tambah_orangtua_pr'); ?>" class="btn btn-primary mt-3">Tambah Data Mahasiswa</a>
            <h2 class="mt-2">List Daftar Nama Orang Tua (Wanita)</h2>

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
                    <?php foreach ($orangtua_pr as $ortu_pr) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $ortu_pr['nama']; ?></td>
                            <td><?= $ortu_pr['ttl']; ?></td>
                            <td><?= $ortu_pr['pekerjaan']; ?></td>
                            <td>
                                <a href="/orangtua_pr/<?= $ortu_pr['nik']; ?>" class="btn btn-success">Detail</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>