<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="my-3">Insert Bioskop Data</h1>
            <form action="/insert/bioskop/save" method="POST">
                <?= csrf_field(); ?>
                <div class="form-group row mb-3">
                    <label for="kd_bioskop" class="col-sm-2 col-form-label">Kode Bioskop</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="kd_bioskop" name="kd_bioskop">
                    </div>
                </div>
                <div class="form-group row mb-3">
                    <label for="nama_bioskop" class="col-sm-2 col-form-label">Nama Bioskop</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama_bioskop" name="nama_bioskop">
                    </div>
                </div>
                <div class="form-group row mb-3">
                    <label for="alamat_bioskop" class="col-sm-2 col-form-label">Alamat Bioskop</label>
                    <div class="col-sm-10">
                        <input type="textarea" class="form-control" id="alamat_bioskop" name="alamat_bioskop">
                    </div>
                </div>
                <div class="form-group row mb-3">
                    <label for="kota" class="col-sm-2 col-form-label">Kota</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="kota" name="kota">
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