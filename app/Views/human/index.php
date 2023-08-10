<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

    <div class="container mt-4">

    <div class="row">
        <div class="col-md-8">
            <h1>Detail Human</h1>
            <form action="" method="post" >
                <div class="input-group mb-3" >
                    <input type="text" class="form-control" name="keyword"  >
                    <button type="submit" class="btn btn-outline-secondary" >Search</button>
                </div>
            </form>
        </div>
    </div>
        <div class="row">
            <div class="col">

                <table class="table mt-4">
                <thead>
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">Alamat</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1 + ($dataTampil * ($currentPage - 1)); ?>
                    <?php foreach($human as $h) : ?>
                    <tr>
                    <th scope="row"><?= $i++; ?></th>
                    <td><?= $h['nama']; ?></td>
                    <td><?= $h['email']; ?></td>
                    <td><?= $h['alamat']; ?></td>
                    <td>
                        <a href="" class="btn btn-success">Detail</a>
                    </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
                </table>
                <?= $pager->links('human', 'human_pagination'); ?>
            </div>
        </div>
    </div>

<?= $this->endSection(); ?>