<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1>Ticket Here</h1>
            <h2>Welcome to ticket page</h2>
            <table class="table mt-3">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Judul Film</th>
                        <th scope="col">Tanggal Launching</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($film as $index => $value) : ?>
                        <tr>
                            <th scope="row"><?= $index + 1; ?></th>
                            <td><?= $value['judul_film']; ?></td>
                            <td><?= $value['tgl_launc']; ?></td>
                            <td><a href="/ticket/<?= $value['judul_film']; ?>" class="btn btn-success">Get now</a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>