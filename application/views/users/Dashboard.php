<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('partials/users/header'); ?>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!--sidebar.php -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <?php $this->load->view('partials/users/navbar'); ?>

                <!--content -->
                <div class="container">
                    <div class="row">
                        <div class="col align-self-center">
                            <div id="bannerCarousel" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="<?php echo base_url('data/images/carousel/dummy.jpg') ?>" class="d-block w-100 rounded" height="350">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="<?php echo base_url('data/images/carousel/dummy.jpg') ?>" class="d-block w-100 rounded" height="350" alt="2">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="<?php echo base_url('data/images/carousel/dummy.jpg') ?>" class="d-block w-100 rounded" height="350" alt="3">
                                    </div>
                                </div>
                            </div>
                            <a role="button" class="carousel-control-prev" type="button" data-bs-target="#bannerCarousel" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                            </a>
                            <a role="button" class="carousel-control-next" type="button" data-bs-target="#bannerCarousel" data-bs-slide="next">
                                <span class="carousel-control-next-icon"></span>
                            </a>
                        </div>
                    </div>
                </div>

                <br>

                <div class="container">
                    <h5 class="h5 mb-2 text-gray-800">Kategori Produk</h5>
                    <div class="row">
                        <!-- Sayur -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border shadow w-100 py-2">
                                <a class="card-body" href="" style="color:#20B2AA;">
                                    <div class="row no-gutters align-items-center">
                                        <div class="h5 mb-0 font-weight-bold text-gray-800" href="#">Sayur</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- Buah -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border shadow h-100 py-2">
                                <a class="card-body" href="" style="color:#20B2AA;">
                                    <div class="row no-gutters align-items-center">
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">Buah</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- Biji-bijian -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border shadow h-100 py-2">
                                <a class="card-body" href="" style="color:#20B2AA;">
                                    <div class="row no-gutters align-items-center">
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">Biji-bijian</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- Umbi -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border shadow h-100 py-2">
                                <a class="card-body" href="" style="color:#20B2AA;">
                                    <div class="row no-gutters align-items-center">
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">Umbi</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <br>

                <div class="container">
                    <h5 class="h5 mb-2 text-gray-800 bold">Produk Terbaru</h5>
                    <div class="row">
                        <!-- Produk -->
                        <div class="col-xl-2 col-md-6 mb-4">
                            <div class="card">
                                <img class="card-img-top rounded" src="<?php echo base_url('data/images/carousel/dummy.jpg') ?>" width="80" height="200">
                                <div class="card-body">
                                    <h5 class="card-title text-gray-800">Apel Merah</h5>
                                </div>
                            </div>
                        </div>
                        <!-- Produk -->
                        <div class="col-xl-2 col-md-6 mb-4">
                            <div class="card">
                                <img class="card-img-top rounded" src="<?php echo base_url('data/images/carousel/dummy.jpg') ?>" height="200">
                                <div class="card-body">
                                    <h5 class="card-title text-gray-800">Apel Merah</h5>
                                </div>
                            </div>
                        </div>
                        <!-- Produk -->
                        <div class="col-xl-2 col-md-6 mb-4">
                            <div class="card">
                                <img class="card-img-top rounded" src="<?php echo base_url('data/images/carousel/dummy.jpg') ?>" height="200">
                                <div class="card-body">
                                    <h5 class="card-title text-gray-800">Apel Merah</h5>
                                </div>
                            </div>
                        </div>
                        <!-- Produk -->
                        <div class="col-xl-2 col-md-6 mb-4">
                            <div class="card">
                                <img class="card-img-top rounded" src="<?php echo base_url('data/images/carousel/dummy.jpg') ?>" height="200">
                                <div class="card-body">
                                    <h5 class="card-title text-gray-800">Apel Merah</h5>
                                </div>
                            </div>
                        </div>
                        <!-- Produk -->
                        <div class="col-xl-2 col-md-6 mb-4">
                            <div class="card">
                                <img class="card-img-top rounded" src="<?php echo base_url('data/images/carousel/dummy.jpg') ?>" height="200">
                                <div class="card-body">
                                    <h5 class="card-title text-gray-800">Apel Merah</h5>
                                </div>
                            </div>
                        </div>
                        <!-- Produk -->
                        <div class="col-xl-2 col-md-6 mb-4">
                            <div class="card">
                                <img class="card-img-top rounded" src="<?php echo base_url('data/images/carousel/dummy.jpg') ?>" height="200">
                                <div class="card-body">
                                    <h5 class="card-title text-gray-800">Apel Merah</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <br>

                <div class="container">
                    <h5 class="h5 mb-2 text-gray-800 bold">Produk Terlaris</h5>
                    <div class="row">
                        <!-- Produk -->
                        <div class="col-xl-2 col-md-6 mb-4">
                            <div class="card">
                                <img class="card-img-top rounded" src="<?php echo base_url('data/images/carousel/dummy.jpg') ?>" width="80" height="200">
                                <div class="card-body">
                                    <h5 class="card-title text-gray-800">Apel Merah</h5>
                                </div>
                            </div>
                        </div>
                        <!-- Produk -->
                        <div class="col-xl-2 col-md-6 mb-4">
                            <div class="card">
                                <img class="card-img-top rounded" src="<?php echo base_url('data/images/carousel/dummy.jpg') ?>" height="200">
                                <div class="card-body">
                                    <h5 class="card-title text-gray-800">Apel Merah</h5>
                                </div>
                            </div>
                        </div>
                        <!-- Produk -->
                        <div class="col-xl-2 col-md-6 mb-4">
                            <div class="card">
                                <img class="card-img-top rounded" src="<?php echo base_url('data/images/carousel/dummy.jpg') ?>" height="200">
                                <div class="card-body">
                                    <h5 class="card-title text-gray-800">Apel Merah</h5>
                                </div>
                            </div>
                        </div>
                        <!-- Produk -->
                        <div class="col-xl-2 col-md-6 mb-4">
                            <div class="card">
                                <img class="card-img-top rounded" src="<?php echo base_url('data/images/carousel/dummy.jpg') ?>" height="200">
                                <div class="card-body">
                                    <h5 class="card-title text-gray-800">Apel Merah</h5>
                                </div>
                            </div>
                        </div>
                        <!-- Produk -->
                        <div class="col-xl-2 col-md-6 mb-4">
                            <div class="card">
                                <img class="card-img-top rounded" src="<?php echo base_url('data/images/carousel/dummy.jpg') ?>" height="200">
                                <div class="card-body">
                                    <h5 class="card-title text-gray-800">Apel Merah</h5>
                                </div>
                            </div>
                        </div>
                        <!-- Produk -->
                        <div class="col-xl-2 col-md-6 mb-4">
                            <div class="card">
                                <img class="card-img-top rounded" src="<?php echo base_url('data/images/carousel/dummy.jpg') ?>" height="200">
                                <div class="card-body">
                                    <h5 class="card-title text-gray-800">Apel Merah</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <?php $this->load->view('partials/users/footer'); ?>


        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <?php $this->load->view('partials/users/scrolltop'); ?>
    <?php $this->load->view('partials/users/modal'); ?>
    <?php $this->load->view('partials/users/js'); ?>

</body>
<script type="text/javascript">
    $(document).ready(function() {
        $('#tables').DataTable();
    });
</script>

</html>