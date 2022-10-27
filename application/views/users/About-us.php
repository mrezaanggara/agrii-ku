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
                        <?php foreach ($sosmed as $sosmed) : ?>
                            <div class="card">
                                <div class="card-body align-items-center d-flex justify-content-center">
                                    <a><?= $sosmed['jenis']; ?> : </a>
                                    <?php if ($sosmed['jenis'] == 'Official Website') { ?>
                                        <a href="<?= $sosmed['nama']; ?>" target="_blank"> Agribisnis unila</a>
                                    <?php } else if ($sosmed['jenis'] == 'Instagram') { ?>
                                        <a href="https://www.instagram.com/<?= $sosmed['nama']; ?>" target="_blank"> <?= $sosmed['nama']; ?></a>
                                    <?php } else if ($sosmed['jenis'] == 'Facebook') { ?>
                                        <a href="https://web.facebook.com/<?= $sosmed['nama']; ?>" target="_blank"> <?= $sosmed['nama']; ?></a>
                                    <?php }; ?>
                                </div>
                            </div>
                            <br>
                        <?php endforeach; ?>
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