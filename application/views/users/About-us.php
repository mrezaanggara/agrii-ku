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
                <h3 class="h3 mb-2 text-gray-800">Tentang Kami</h3>
                <div class="row">
                    <div class="col-md-8">
                        <?php foreach ($about as $about) : ?>
                            <?= $about['content']; ?>
                        <?php endforeach; ?>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body align-items-center d-flex justify-content-center">
                                Instagram
                            </div>
                        </div>
                        <br>
                        <div class="card">
                            <div class="card-body align-items-center d-flex justify-content-center">
                                Facebook
                            </div>
                        </div>
                        <br>
                        <div class="card">
                            <div class="card-body align-items-center d-flex justify-content-center">
                                Twitter
                            </div>
                        </div>
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