<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('partials/users/header') ?>
</head>

<body id="page-top">
    <br>
    <div class="container">
        <h3 class="h3 mb-2 text-gray-800">Tentang Kami</h3>
        <br>
        <div class="row">
            <div class="col-md-8">
                <?php foreach ($about as $about) : ?>
                    <div class="card">
                        <div class="card-body">
                            <?= $about['content']; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <?php $this->load->view('partials/users/js') ?>

</body>

</html>
