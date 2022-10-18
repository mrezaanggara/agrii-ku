<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('partials/users/header'); ?>
</head>

<body>

    <div class="splash" id="splash">
        <!-- <h2 class="fade-in"></h2> -->
        <img class="fade-in" src="<?php echo base_url("data/agriiku.png") ?>" style="width: 700px;">
    </div>

    <!-- Main Content -->
    <div class="content">

        <?php $this->load->view('partials/users/navbar'); ?>

        <!--content -->
        <div class="container">

            <!-- banner iklan -->
            <div class="row">
                <div class="col">
                    <div id="bannerCarousel" class="carousel slide" data-bs-ride="carousel">
                        <ol class="carousel-indicators" style="z-index: 1;">
                            <?php
                            foreach ($carousel as $key => $value) {
                                if ($key == 0) { ?>
                                    <li data-bs-target="#bannerCarousel" data-bs-slide-to="<?= $key; ?>" class="active"></li>
                                <?php } else { ?>
                                    <li data-bs-target="#bannerCarousel" data-bs-slide-to="<?= $key; ?>"></li>
                            <?php }
                            }
                            ?>
                        </ol>
                        <div class="carousel-inner">
                            <?php
                            foreach ($carousel as $key => $value) {
                                if ($key == 0) { ?>
                                    <div class="carousel-item active">
                                        <img src="<?php echo base_url("data/images/carousel/" . $value['carousel']) ?>" class="d-block w-100 rounded" height="350">
                                    </div>
                                <?php } else { ?>
                                    <div class="carousel-item ">
                                        <img src="<?php echo base_url("data/images/carousel/" . $value['carousel']) ?>" class="d-block w-100 rounded" height="350">
                                    </div>
                            <?php }
                            }
                            ?>
                        </div>
                    </div>
                    <a role="button" class="carousel-control-prev" type="button" data-bs-target="#bannerCarousel" data-bs-slide="prev">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                    <a role="button" class="carousel-control-next" type="button" data-bs-target="#bannerCarousel" data-bs-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    </a>
                </div>
            </div>
        </div>
        <!-- end banner iklan -->

        <br>

        <!-- kategori produk -->
        <div class="container">
            <h5 class="h5 mb-2 text-gray-800">Jenis Produk</h5>
            <div class="card">
                <div class="card-body">
                    <div class="slide-container swiper">
                        <div class="slide-content-kategori">
                            <div class="card-wrapper swiper-wrapper">
                                <div class="swiper-slide">
                                    <a class="kategori text-white rounded" type="button">Biji-bijian</a>
                                </div>
                                <div class="swiper-slide">
                                    <a class="kategori text-white rounded" type="button">Sayuran</a>
                                </div>
                                <div class="swiper-slide">
                                    <a class="kategori text-white rounded" type="button">Ubi-ubian</a>
                                </div>
                                <div class="swiper-slide">
                                    <a class="kategori text-white rounded" type="button">Daging</a>
                                </div>
                                <div class="swiper-slide">
                                    <a class="kategori text-white rounded" type="button">Buah-Buahan</a>
                                </div>
                                <div class="swiper-slide">
                                    <a class="kategori text-white rounded" type="button">Telur</a>
                                </div>
                                <div class="swiper-slide">
                                    <a class="kategori text-white rounded" type="button">Olahan</a>
                                </div>
                            </div>
                            <div class="swiper-button-next swiper-pb"></div>
                            <div class="swiper-button-prev swiper-pb"></div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- end kategori produk -->

        <br>

        <!-- swiper produk terbaru -->
        <div class="container">
            <h5 class="h5 mb-2 text-gray-800 bold">Produk Terbaru</h5>
            <div class="slide-container swiper">
                <div class="slide-content">
                    <div class="card-wrapper swiper-wrapper">
                        <div class="card swiper-slide card-post card-post">
                            <div class="image-content">
                                <div class="card-image">
                                    <a href="<?php echo base_url('items/'); ?>">
                                        <img class="card-img-top rounded" src="<?php echo base_url('data/images/product/apple.png') ?>" width="188" height="188">
                                    </a>
                                </div>
                            </div>
                            <div class="card-body card-content">
                                <a href="<?php echo base_url('items/'); ?>">
                                    <div class="name text-ellipsis">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore
                                    </div>
                                    <div class="price">
                                        Rp 20.000
                                    </div>
                                    <hr>
                                    <div class="stock rounded">
                                        Stok | 254
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="card swiper-slide card-post">
                            <div class="image-content">
                                <div class="card-image">
                                    <a href="<?php echo base_url('items/'); ?>">
                                        <img class="card-img-top rounded" src="<?php echo base_url('data/images/product/spinach.png') ?>" width="188" height="188">
                                    </a>
                                </div>
                            </div>
                            <div class="card-body card-content">
                                <a href="<?php echo base_url('items/'); ?>">
                                    <div class="name">
                                        Apel Merah
                                    </div>
                                    <div class="price">
                                        Rp 20.000
                                    </div>
                                    <hr>
                                    <div class="stock rounded">
                                        Stok | 254
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="card swiper-slide card-post">
                            <div class="image-content">
                                <div class="card-image">
                                    <a href="<?php echo base_url('items/'); ?>">
                                        <img class="card-img-top rounded" src="<?php echo base_url('data/images/product/strawberry.jpg') ?>" width="188" height="188">
                                    </a>
                                </div>
                            </div>
                            <div class="card-body card-content">
                                <a href="<?php echo base_url('items/'); ?>">
                                    <div class="name">
                                        Apel Merah
                                    </div>
                                    <div class="price">
                                        Rp 20.000
                                    </div>
                                    <hr>
                                    <div class="stock rounded">
                                        Stok | 254
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="card swiper-slide card-post">
                            <div class="image-content">
                                <div class="card-image">
                                    <a href="<?php echo base_url('items/'); ?>">
                                        <img class="card-img-top rounded" src="<?php echo base_url('data/images/product/broccoli.png') ?>" width="188" height="188">
                                    </a>
                                </div>
                            </div>
                            <div class="card-body card-content">
                                <a href="<?php echo base_url('items/'); ?>">
                                    <div class="name">
                                        Apel Merah
                                    </div>
                                    <div class="price">
                                        Rp 20.000
                                    </div>
                                    <hr>
                                    <div class="stock rounded">
                                        Stok | 254
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="card swiper-slide card-post">
                            <div class="image-content">
                                <div class="card-image">
                                    <a href="<?php echo base_url('items/'); ?>">
                                        <img class="card-img-top rounded" src="<?php echo base_url('data/images/product/apple.png') ?>" width="188" height="188">
                                    </a>
                                </div>
                            </div>
                            <div class="card-body card-content">
                                <a href="<?php echo base_url('items/'); ?>">
                                    <div class="name">
                                        Apel Merah
                                    </div>
                                    <div class="price">
                                        Rp 20.000
                                    </div>
                                    <hr>
                                    <div class="stock rounded">
                                        Stok | 254
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="card swiper-slide card-post">
                            <div class="image-content">
                                <div class="card-image">
                                    <a href="<?php echo base_url('items/'); ?>">
                                        <img class="card-img-top rounded" src="<?php echo base_url('data/images/product/apple.png') ?>" width="188" height="188">
                                    </a>
                                </div>
                            </div>
                            <div class="card-body card-content">
                                <a href="<?php echo base_url('items/'); ?>">
                                    <div class="name">
                                        Apel Merah
                                    </div>
                                    <div class="price">
                                        Rp 20.000
                                    </div>
                                    <hr>
                                    <div class="stock rounded">
                                        Stok | 254
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="card swiper-slide card-post">
                            <div class="image-content">
                                <div class="card-image">
                                    <a href="<?php echo base_url('items/'); ?>">
                                        <img class="card-img-top rounded" src="<?php echo base_url('data/images/product/apple.png') ?>" width="188" height="188">
                                    </a>
                                </div>
                            </div>
                            <div class="card-body card-content">
                                <a href="<?php echo base_url('items/'); ?>">
                                    <div class="name">
                                        Apel Merah
                                    </div>
                                    <div class="price">
                                        Rp 20.000
                                    </div>
                                    <hr>
                                    <div class="stock rounded">
                                        Stok | 254
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="card swiper-slide card-post">
                            <div class="image-content">
                                <div class="card-image">
                                    <a href="<?php echo base_url('items/'); ?>">
                                        <img class="card-img-top rounded" src="<?php echo base_url('data/images/product/apple.png') ?>" width="188" height="188">
                                    </a>
                                </div>
                            </div>
                            <div class="card-body card-content">
                                <a href="<?php echo base_url('items/'); ?>">
                                    <div class="name">
                                        Apel Merah
                                    </div>
                                    <div class="price">
                                        Rp 20.000
                                    </div>
                                    <hr>
                                    <div class="stock rounded">
                                        Stok | 254
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="card swiper-slide card-post">
                            <div class="image-content">
                                <div class="card-image">
                                    <a href="<?php echo base_url('items/'); ?>">
                                        <img class="card-img-top rounded" src="<?php echo base_url('data/images/product/apple.png') ?>" width="188" height="188">
                                    </a>
                                </div>
                            </div>
                            <div class="card-body card-content">
                                <a href="<?php echo base_url('items/'); ?>">
                                    <div class="name">
                                        Apel Merah
                                    </div>
                                    <div class="price">
                                        Rp 20.000
                                    </div>
                                    <hr>
                                    <div class="stock rounded">
                                        Stok | 254
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-next swiper-pb"></div>
                    <div class="swiper-button-prev swiper-pb"></div>
                </div>
            </div>
        </div>
        <!-- end swiper produk terbaru -->

        <div class="container">
            <hr class="divider">
        </div>

        <!-- swiper produk terlaris -->
        <div class="container">
            <h5 class="h5 mb-2 text-gray-800 bold">Produk Terlaris</h5>
            <div class="slide-container swiper">
                <div class="slide-content">
                    <div class="card-wrapper swiper-wrapper">
                        <div class="card swiper-slide card-post">
                            <div class="image-content">
                                <div class="card-image">
                                    <a href="<?php echo base_url('items/'); ?>">
                                        <img class="card-img-top rounded" src="<?php echo base_url('data/images/product/apple.png') ?>" width="188" height="188">
                                    </a>
                                </div>
                            </div>
                            <div class="card-body card-content">
                                <a href="<?php echo base_url('items/'); ?>">
                                    <div class="name">
                                        Apel Merah
                                    </div>
                                    <div class="price">
                                        Rp 20.000
                                    </div>
                                    <hr>
                                    <div class="stock rounded">
                                        Stok | 254
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="card swiper-slide card-post">
                            <div class="image-content">
                                <div class="card-image">
                                    <a href="<?php echo base_url('items/'); ?>">
                                        <img class="card-img-top rounded" src="<?php echo base_url('data/images/product/apple.png') ?>" width="188" height="188">
                                    </a>
                                </div>
                            </div>
                            <div class="card-body card-content">
                                <a href="<?php echo base_url('items/'); ?>">
                                    <div class="name">
                                        Apel Merah
                                    </div>
                                    <div class="price">
                                        Rp 20.000
                                    </div>
                                    <hr>
                                    <div class="stock rounded">
                                        Stok | 254
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="card swiper-slide card-post">
                            <div class="image-content">
                                <div class="card-image">
                                    <a href="<?php echo base_url('items/'); ?>">
                                        <img class="card-img-top rounded" src="<?php echo base_url('data/images/product/apple.png') ?>" width="188" height="188">
                                    </a>
                                </div>
                            </div>
                            <div class="card-body card-content">
                                <a href="<?php echo base_url('items/'); ?>">
                                    <div class="name">
                                        Apel Merah
                                    </div>
                                    <div class="price">
                                        Rp 20.000
                                    </div>
                                    <hr>
                                    <div class="stock rounded">
                                        Stok | 254
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="card swiper-slide card-post">
                            <div class="image-content">
                                <div class="card-image">
                                    <a href="<?php echo base_url('items/'); ?>">
                                        <img class="card-img-top rounded" src="<?php echo base_url('data/images/product/apple.png') ?>" width="188" height="188">
                                    </a>
                                </div>
                            </div>
                            <div class="card-body card-content">
                                <a href="<?php echo base_url('items/'); ?>">
                                    <div class="name">
                                        Apel Merah
                                    </div>
                                    <div class="price">
                                        Rp 20.000
                                    </div>
                                    <hr>
                                    <div class="stock rounded">
                                        Stok | 254
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="card swiper-slide card-post">
                            <div class="image-content">
                                <div class="card-image">
                                    <a href="<?php echo base_url('items/'); ?>">
                                        <img class="card-img-top rounded" src="<?php echo base_url('data/images/product/apple.png') ?>" width="188" height="188">
                                    </a>
                                </div>
                            </div>
                            <div class="card-body card-content">
                                <a href="<?php echo base_url('items/'); ?>">
                                    <div class="name">
                                        Apel Merah
                                    </div>
                                    <div class="price">
                                        Rp 20.000
                                    </div>
                                    <hr>
                                    <div class="stock rounded">
                                        Stok | 254
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="card swiper-slide card-post">
                            <div class="image-content">
                                <div class="card-image">
                                    <a href="<?php echo base_url('items/'); ?>">
                                        <img class="card-img-top rounded" src="<?php echo base_url('data/images/product/apple.png') ?>" width="188" height="188">
                                    </a>
                                </div>
                            </div>
                            <div class="card-body card-content">
                                <a href="<?php echo base_url('items/'); ?>">
                                    <div class="name">
                                        Apel Merah
                                    </div>
                                    <div class="price">
                                        Rp 20.000
                                    </div>
                                    <hr>
                                    <div class="stock rounded">
                                        Stok | 254
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="card swiper-slide card-post">
                            <div class="image-content">
                                <div class="card-image">
                                    <a href="<?php echo base_url('items/'); ?>">
                                        <img class="card-img-top rounded" src="<?php echo base_url('data/images/product/apple.png') ?>" width="188" height="188">
                                    </a>
                                </div>
                            </div>
                            <div class="card-body card-content">
                                <a href="<?php echo base_url('items/'); ?>">
                                    <div class="name">
                                        Apel Merah
                                    </div>
                                    <div class="price">
                                        Rp 20.000
                                    </div>
                                    <hr>
                                    <div class="stock rounded">
                                        Stok | 254
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="card swiper-slide card-post">
                            <div class="image-content">
                                <div class="card-image">
                                    <a href="<?php echo base_url('items/'); ?>">
                                        <img class="card-img-top rounded" src="<?php echo base_url('data/images/product/apple.png') ?>" width="188" height="188">
                                    </a>
                                </div>
                            </div>
                            <div class="card-body card-content">
                                <a href="<?php echo base_url('items/'); ?>">
                                    <div class="name">
                                        Apel Merah
                                    </div>
                                    <div class="price">
                                        Rp 20.000
                                    </div>
                                    <hr>
                                    <div class="stock rounded">
                                        Stok | 254
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="card swiper-slide card-post">
                            <div class="image-content">
                                <div class="card-image">
                                    <a href="<?php echo base_url('items/'); ?>">
                                        <img class="card-img-top rounded" src="<?php echo base_url('data/images/product/apple.png') ?>" width="188" height="188">
                                    </a>
                                </div>
                            </div>
                            <div class="card-body card-content">
                                <a href="<?php echo base_url('items/'); ?>">
                                    <div class="name">
                                        Apel Merah
                                    </div>
                                    <div class="price">
                                        Rp 20.000
                                    </div>
                                    <hr>
                                    <div class="stock rounded">
                                        Stok | 254
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-next swiper-pb swiper-navBtn"></div>
                    <div class="swiper-button-prev swiper-pb swiper-navBtn"></div>
                </div>
            </div>
        </div>
        <!-- end swiper produk terlaris -->

    </div>

    <?php $this->load->view('partials/users/footer'); ?>

    <?php $this->load->view('partials/users/js'); ?>

</body>
<script type="text/javascript">
    var swiper = new Swiper(".slide-content", {
        slidesPerView: 5,
        spaceBetween: 25,
        loop: false,
        centerSlide: true,
        grabCursor: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints: {
            0: {
                slidesPerView: 2,
            },
            520: {
                slidesPerView: 4,
            },
            950: {
                slidesPerView: 5,
            }
        }
    });
    var swiper = new Swiper(".slide-content-kategori", {
        slidesPerView: 6,
        spaceBetween: 10,
        loop: false,
        centerSlide: true,
        grabCursor: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints: {
            0: {
                slidesPerView: 2,
            },
            520: {
                slidesPerView: 4,
            },
            950: {
                slidesPerView: 6,
            }
        }
    });
    $(document).ready(function() {
        setTimeout(function() {
            $("#splash").remove();
        }, 2000);
    });
</script>

</html>