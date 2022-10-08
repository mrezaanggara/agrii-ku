<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('partials/admin/header') ?>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <?php $this->load->view('partials/admin/sidebar') ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <?php $this->load->view('partials/admin/navbar') ?>

                <!--content -->
                <div class="container-fluid">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Tambah Produk Produk</h1>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="card shadow mb-4">
                                <div class="card-header">
                                    <h6 class="m-0 font-weight-bold text-primary">Detail produk</h6>
                                </div>
                                <div class="card-body">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div id="produkCarousel" class="carousel slide" data-bs-ride="carousel">
                                                    <div class="carousel-inner">
                                                        <div class="carousel-item active">
                                                            <img src="<?php echo base_url('data/images/carousel/dummy.jpg') ?>" class="d-block w-100 rounded" alt="..." height="300" width="300">
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img src=",," class="d-block w-100 rounded" alt="..." height="300" width="300">
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img src=",," class="d-block w-100 rounded" alt="..." height="300" width="300">
                                                        </div>
                                                    </div>
                                                    <a role="button" class="carousel-control-prev" type="button" data-bs-target="#produkCarousel" data-bs-slide="prev">
                                                        <span class="glyphicon glyphicon-chevron-right"></span>
                                                    </a>
                                                    <a role="button" class="carousel-control-next" type="button" data-bs-target="#produkCarousel" data-bs-slide="next">
                                                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="embed-responsive embed-responsive-16by9 rounded">
                                                    <video width="320" height="240" controls>
                                                        <source src="<?php echo base_url('data/videos/test.mp4') ?>" type="video/mp4">
                                                    </video>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col">
                                                <div class="card shadow md-3">
                                                    <div class="card-body">
                                                        <div class="col text-gray-900">
                                                            <a>Kode Produk : xxxxxx</a>
                                                            <h4>Nama Produk : xxxxx</h4>
                                                            <a class="font-weight-bold">Harga Produk</a>
                                                            <p>Rp. 20.000,00 / pcs</p>
                                                            <a class="font-weight-bold">Kategori Produk</a>
                                                            <p>Buah-buahan</p>
                                                            <a class="font-weight-bold">Jenis Produk</a>
                                                            <p>Olahan</p>
                                                            <a class="font-weight-bold">Deskripsi Produk</a>
                                                            <p>input dengan alamat lengkap, lat, dan long auto</p>
                                                            <a class="font-weight-bold">Status Produk</a>
                                                            <p>Tersedia</p>
                                                            <a class="font-weight-bold"></a>
                                                            <p></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="card shadow md-3">
                                                    <div class="card-body">
                                                        <div class="col text-gray-900">
                                                            <a class="font-weight-bold">Stok Produk</a>
                                                            <h4>9999 / pcs</h4>
                                                            <a class="font-weight-bold">Dimensi Produk</a><br>
                                                            <div class="row">
                                                                <div class="col">
                                                                    <a class="font-weight-bold">Panjang</a>
                                                                    <p>10 cm</p>
                                                                </div>
                                                                <div class="col">
                                                                    <a class="font-weight-bold">Tinggi</a>
                                                                    <p>10 cm</p>
                                                                </div>
                                                                <div class="col">
                                                                    <a class="font-weight-bold">Lebar</a>
                                                                    <p>10 cm</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="card-footer">

                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <?php $this->load->view('partials/admin/footer') ?>


            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <?php $this->load->view('partials/admin/modal') ?>
        <?php $this->load->view('partials/admin/js') ?>

</body>
<script type="text/javascript">

</script>

</html>