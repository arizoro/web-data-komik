<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container mt-4">
    <div class="row">
        <div class="col">
            <h2>Detail Komik</h2>
        <div class="card mb-3 mt-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                <img src="/img/<?= $komik['sampul']; ?>" class="img-fluid rounded-start" alt="ks">
                </div>
                <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title"><?= $komik['judul']; ?></h5>
                    <p class="card-text"><b>Penulis : </b><?= $komik['penulis']; ?></p>
                    <p class="card-text"><small class="text-body-secondary"><b>Penerbit : </b></small><?= $komik['penerbit']; ?></p>

                    <a href="/komik/edit/<?= $komik['slug']; ?>" class="btn btn-primary" >Edit</a> 

                    <form action="/komik/<?= $komik['id']; ?>" method="post" class="d-inline" >
                    <?= csrf_field(); ?>
                        <input type="hidden" name="_method" value="DELETE" >
                        <button class="btn btn-danger " type="submit" onclick="return confirm('Apakah anda yakin??')" >Delete</button>

                    </form>

                    <br><br>
                    <a href="/komik">Kembali Ke Halaman</a>
                </div>
                </div>
            </div>
            </div> 
        </div>
    </div>
</div>

<?= $this->endSection(); ?>