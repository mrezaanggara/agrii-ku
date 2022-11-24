<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('partials/users/header') ?>
</head>

<body id="page-top">

    <?php foreach ($artikel as $artikel) : ?>
        <div class="container">
            <br>
            <div class="d-flex justify-content-between align-items-center">
                <h3 class="h3 mb-2 text-gray-800"><?= $artikel['title']; ?></h3>
                <a href="<?php echo base_url('article'); ?>" class="d-none d-sm-inline-block btn btn-sm btn-warning shadow-sm text-white">
                    <i class="fa fa-undo fa-sm text-white-50"></i> Kembali
                </a>
            </div>
            <br>
            <div class="card">
                <div class="card-header text-primary">
                    Kategori : <?= $artikel['kategori']; ?>
                </div>
                <div class="card-body">
                    <?= $artikel['content']; ?>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
    <?php $this->load->view('partials/users/js') ?>

</body>

</html>