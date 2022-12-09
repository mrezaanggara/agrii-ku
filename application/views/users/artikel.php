<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('partials/users/header') ?>
</head>

<body id="page-top">

    <div class="content">

        <!-- Topbar -->
        <?php $this->load->view('partials/users/navbar') ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="container" align="center">
                <h3 class="h3 mb-2 text-gray-800">Daftar Artikel</h3>
                <br>
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <div class="col-11">
                                <?php $i = 1;
                                foreach ($artikel as $artikel) : ?>
                                    <div class="card bg-light border-success">
                                        <a class="text-success" href="<?php echo site_url('article/detail/') . $artikel['id'] ?>">
                                            <div class="card-body ">
                                                <div class="row d-flex justify-content-around align-items-center">
                                                    <div class="col-md-8">
                                                        <div class="row text-gray-800">
                                                            <?= ++$start; ?>.
                                                            <?= $artikel['title']; ?>
                                                        </div>
                                                        <div class="row">
                                                            kategori : <?= $artikel['kategori']; ?>
                                                        </div>
                                                    </div>
                                                    <i class="fa-solid fa-newspaper fa-fw"></i>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <br>
                                <?php endforeach; ?>
                                <?= $this->pagination->create_links(); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
            </div>

        </div>
        <!-- /.container -->

    </div>

    <?php $this->load->view('partials/users/footer') ?>
    <?php $this->load->view('partials/users/js') ?>
    <script>
        document.querySelectorAll('oembed[url]').forEach(element => {
            iframely.load(element, element.attributes.url.value);
        });
    </script>

</body>

</html>