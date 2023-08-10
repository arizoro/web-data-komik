<?php

use CodeIgniter\Debug\Toolbar\Collectors\Files;
use Config\Validation;
?>
<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container m-4">
    <div class="row">
        <div class="col">
            <h1>Form Tambah Data</h1>
        <form action="/komik/save" method="post" class="my-3" Enctype="multipart/form-data"  >
            <?= csrf_field(); ?>
            <div class="row mb-3">
                <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                <div class="col-sm-6">
                <input type="text" class="form-control <?= (session('validation')?->hasError('judul')) ? 'is-invalid' : null ?> " id="judul" name="judul" autofocus autocomplete="off" value="<?= old('judul'); ?>" >
                <div id="judulFeedback" class="invalid-feedback">
                    <?= session('validation')?->getError('judul'); ?>
                </div>
                </div>
            </div>
            <div class="row mb-3">
                <label for="penulis" class="col-sm-2 col-form-label">Penulis</label>
                <div class="col-sm-6">
                <input type="text" class="form-control <?= (session('validation')?->hasError('penulis')) ? 'is-invalid' : null ?>" id="penulis" name="penulis" autocomplete="off" value="<?= old('penulis'); ?>" >
                <div  class="invalid-feedback">
                    <?= session('validation')?->getError('penulis'); ?>
                </div>
                </div>
            </div>
            <div class="row mb-3">
                <label for="penerbit" class="col-sm-2 col-form-label">Penerbit</label>
                <div class="col-sm-6">
                <input type="text" class="form-control <?= (session('validation')?->hasError('penerbit')) ? 'is-invalid' : null ?>" id="penerbit" name="penerbit" autocomplete="off" value="<?= old('penerbit'); ?>" >
                <div  class="invalid-feedback">
                    <?= session('validation')?->getError('penerbit'); ?>
                </div>
                </div>
            </div>
            <div class="row mb-3">
                <label for="sampul" class="form-label col-sm-2 labelSampul">Sampul</label  >
                <div class="col-sm-1" >
                    <img src="/img/default.png" class="img-thumbnail" id="gambar" alt="">
                </div>
                <div class="col-sm-5">
                    <input name="sampul"
                    class="form-control <?= (session('validation')?->hasError('sampul')) ? 'is-invalid' : null; ?>" type="file" id="sampul" >

                    <div class="invalid-feedback">
                    <? echo session('validation')?->getError('sampul'); ?>
                    </div>
                </div>
            </div>
            
                <button type="submit" class="btn btn-primary mt-4 ">Created Data</button>
                <a href="/komik" class="btn btn-warning mt-4" >Kembali</a>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>
