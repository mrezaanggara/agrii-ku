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

            <div class="row">
                <div class="col-md-7" align="center">
                    <div class="swiper rounded">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            <div class="swiper-slide">
                                <img class="detail" src="<?php echo base_url('data/images/product/apple.png') ?>">
                            </div>
                            <div class="swiper-slide">
                                <video controls>
                                    <source src="<?php echo base_url('data/videos/apple.mov') ?>" type="video/mp4">
                                </video>
                            </div>
                        </div>
                        <!-- If we need pagination -->
                        <div class="swiper-pagination"></div>

                        <!-- If we need navigation buttons -->
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="card">
                        <div class="card-body">
                            <h4>Nama Produk : xxxxx</h4><br>
                            <a class="font-weight-bold">Deskripsi</a>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                Repudiandae sint voluptate placeat aliquam, error
                                aspernatur nulla nam cum magnam assumenda quae
                                exercitationem qui eius accusantium rerum harum
                                dolorum dolor excepturi!
                            </p>
                            <hr>
                            <div class="row">
                                <div class="col">
                                    <a class="font-weight-bold">Kategori</a><br>
                                    <a class="">Buah-buahan, </a>
                                    <a class="">Mentahan</a>
                                </div>
                                <div class="col">
                                    <a class="font-weight-bold">Stok total</a><br>
                                    <a class="">254 pcs</a>
                                </div>
                            </div>
                            <br>
                            <a class="font-weight-bold">Dimensi Produk</a><br>
                            <div class="row">
                                <div class="col-md-2">
                                    <a class="font-weight-bold">Panjang</a>
                                    <p>10 cm</p>
                                </div>
                                <div class="col-md-2">
                                    <a class="font-weight-bold">Tinggi</a>
                                    <p>10 cm</p>
                                </div>
                                <div class="col-md-2">
                                    <a class="font-weight-bold">Lebar</a>
                                    <p>10 cm</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="row mt-2">
                                <div class="col-6">
                                    <div align="start">
                                        <p>Harga : Rp. 20.000,00</p>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div align="end">
                                        <a href="" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm">
                                            <i class="fa fa-plus fa-sm text-white-50"></i>Keranjang</a>
                                    </div>
                                </div>
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

</body>
<script>
    const swiper = new Swiper('.swiper', {
        loop: false,
        pagination: {
            el: '.swiper-pagination',
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
</script>

</html>