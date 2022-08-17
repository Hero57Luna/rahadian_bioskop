<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="my-3">Insert Tayangan Data</h1>
            <form action="/insert/tayangan/save" method="POST">
                <?= csrf_field(); ?>
                <div class="form-group row mb-3">
                    <label for="bioskop_id" class="col-sm-2 col-form-label">Nama Bioskop</label>
                    <div class="col-sm-10">
                        <select class="form-control" id="bioskop_id" name="bioskop_id">
                            <?php foreach ($bioskop as $bk) : ?>
                                <option value="<?= $bk['id']; ?>"><?= $bk['nama_bioskop']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="form-group row mb-3">
                    <label for="judul_film" class="col-sm-2 col-form-label">Judul Film</label>
                    <div class="col-sm-10">
                        <!-- <input type="text" class="form-control" id="judul_film" name="judul_film" required> -->
                        <select class="form-control" id="judul_film" name="judul_film">
                            <?php foreach ($film as $fl) : ?>
                                <option value="<?= $fl['id']; ?>"><?= $fl['judul_film']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="form-group row mb-3">
                    <label for="tanggal_waktu_tayang" class="col-sm-2 col-form-label">Tanggal dan Waktu Tayang</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control datetime" name="tanggal_waktu_tayang" required>
                    </div>
                </div>
                <div class="form-group row mb-3">
                    <label for="jumlah_kursi" class="col-sm-2 col-form-label">Jumlah Kursi</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="jumlah_kursi" name="jumlah_kursi" required>
                    </div>
                </div>
                <div class="form-group row mt-5">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>