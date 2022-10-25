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
            <div class="container">
                <h3 class="h3 mb-2 text-gray-800">Daftar Artikel</h3>
                <br>
                <div class="row">
                    <div class="col-md-8">
                        <?php $i = 1;
                        foreach ($artikel as $artikel) : ?>
                            <div class="card">
                                <a href="<?php echo site_url('article/detail/') . $artikel['id'] ?>">
                                    <div class="card-body text-gray-800">
                                        <div class="col">
                                            <div class="row">
                                                <?= ++$start; ?>.
                                                <?= $artikel['title']; ?>
                                            </div>
                                            <div class="row">
                                                kategori : <?= $artikel['kategori']; ?>
                                            </div>
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