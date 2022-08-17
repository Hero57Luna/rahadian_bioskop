<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="my-3">Insert Film Data</h1>
            <form action="/insert/save" method="POST">
                <?= csrf_field(); ?>
                <div class="form-group row mb-3">
                    <label for="judul" class="col-sm-2 col-form-label">Judul Film</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="judul" name="judul">
                    </div>
                </div>
                <div class="form-group row mb-3">
                    <label for="tgl_launc" class="col-sm-2 col-form-label">Tanggal Launching</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control datepicker" id="tgl_launc" name="tgl_launc">
                    </div>
                </div>
                <div class="form-group row mb-3">
                    <label for="synopys" class="col-sm-2 col-form-label">Sinopsis</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" id="synopys" name="synopys" rows="3"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>