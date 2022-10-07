<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <h2 class="my-3">Form Tambah Data Sekolah</h2>
            <form action="/tambah_asal_sekolah/save" method="post">
                <?= csrf_field(); ?>
                <div class="form-group row">
                    <label for="nama_sekolah" class="col-sm-2 col-form-label">Nama Sekolah</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama_sekolah" name="nama_sekolah" placeholder="Nama Sekolah" autofocus>
                    </div>
                </div>
                <!-- <div class="form-group row">
                    <label for="kode" class="col-sm-2 col-form-label">Kode</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="kode" name="kode" placeholder="Kode">
                    </div>
                </div> -->
                <div class="form-group row">
                    <label for="alamat_sekolah" class="col-sm-2 col-form-label">Alamat Sekolah</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="alamat_sekolah" name="alamat_sekolah" placeholder="Alamat Sekolah">
                    </div>
                </div>
                <fieldset class="form-group">
                    <div class="row">
                        <legend class="col-form-label col-sm-2 pt-0">Status Sekolah</legend>
                        <div class="col-sm-10">
                            <select class="form-control" id="status_sekolah" name="status_sekolah">
                                <option value="">--Pilih--</option>
                                <option value="SMA">SMA</option>
                                <option value="SMK">SMK</option>
                                <option value="PESANTREN">Pesantren</option>
                            </select>
                        </div>
                    </div>
                </fieldset>
                <br>
                <!-- tombol -->
                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Tambah Data</button>
                    </div>
                </div>
                <!-- end tombol -->
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>