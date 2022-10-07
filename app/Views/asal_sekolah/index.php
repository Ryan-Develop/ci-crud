<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <a href="<?= base_url('tambah_asal_sekolah'); ?>" class="btn btn-primary mt-3">Tambah Data Sekolah</a>
            <h2 class="mt-2">List Daftar Nama Sekolah</h2>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Nama Sekolah</th>
                        <th scope="col">Alamat Sekolah</th>
                        <th scope="col">Status Sekolah</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($asal_sekolah as $as) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $as['nama_sekolah']; ?></td>
                            <td><?= $as['alamat_sekolah']; ?></td>
                            <td><?= $as['status_sekolah']; ?></td>
                            <td>
                                <a href="/asal_sekolah/<?= $as['id']; ?>" class="btn btn-success">Detail</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>