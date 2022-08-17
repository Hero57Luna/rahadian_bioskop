<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="my-3">Insert Reservation Data</h1>
            <form action="/insert/bioskop/save" method="POST">
                <?= csrf_field(); ?>
                <div class="form-group row mb-3">
                    <label for="judul_film" class="col-sm-2 col-form-label">Judul Film</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="judul_film" name="judul_film" disabled value="<?= $film_data['judul_film']; ?>">
                    </div>
                </div>
                <div class="form-group row mb-3">
                    <label for="bioskop_id" class="col-sm-2 col-form-label">Kode Tayangan</label>
                    <div class="col-sm-10">
                        <select class="form-control" id="bioskop_id" name="bioskop_id">
                            <?php foreach ($bioskop as $bk) : ?>
                                <option value="<?= $bk['id']; ?>"><?= $bk['nama_bioskop']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>