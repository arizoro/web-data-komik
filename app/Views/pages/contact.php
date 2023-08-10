<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>


<div class="container mt-4">
    <div class="row">
        <div class="col">
            <h1>Contact Us</h1>
            <?php foreach($addres as $d) : ?>
            <ul class="mt-3 row">
                <li><?= $d['nama']; ?></li>
                <li><?= $d['tempat']; ?></li>
                <li><?= $d['alamat']; ?></li>
                <li><?= $d['contact']; ?></li>
            </ul>
            <?php endforeach; ?>

        </div>
    </div>
</div>

<?= $this->endSection(); ?>