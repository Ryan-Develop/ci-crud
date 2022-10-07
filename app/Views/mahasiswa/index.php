<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <a href="<?= base_url('tambah_mahasiswa'); ?>" class="btn btn-primary mt-3">Tambah Data Mahasiswa</a>
            <h2 class="mt-2">List Daftar Nama Mahasiswa</h2>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Program Studi</th>
                        <th scope="col">Asal Sekolah</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($mahasiswa as $mhs) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $mhs['nama']; ?></td>
                            <td><?= $mhs['prodi']; ?></td>
                            <td><?= $mhs['asal_sekolah']; ?></td>
                            <td>
                                <a href="/mahasiswa/<?= $mhs['nim']; ?>" class="btn btn-success">Detail</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>