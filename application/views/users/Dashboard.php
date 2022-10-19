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
            <div class="card">
                <div class="card-body">
                    <div class="slide-container swiper">
                        <div class="slide-content-kategori">
                            <div class="card-wrapper swiper-wrapper">
                                <?php foreach ($jenis as $jenis) : ?>
                                    <?php if ($jenis['status'] != 0) { ?>
                                        <div class="swiper-slide">
                                            <a class="kategori text-white rounded" type="button"><?= $jenis['jenis']; ?></a>
                                        </div>
                                    <?php } ?>
                                <?php endforeach; ?>
                                <?php foreach ($kategori as $kategori) : ?>
                                    <?php if ($kategori['status'] != 0) { ?>
                                        <div class="swiper-slide">
                                            <a class="kategori text-white rounded" type="button"><?= $kategori['kategori']; ?></a>
                                        </div>
                                    <?php } ?>
                                <?php endforeach; ?>
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
                        <?php foreach ($produk as $produk) { ?>
                            <div class="card swiper-slide card-post card-post">
                                <div class="image-content">
                                    <div class="card-image">
                                        <a href="<?php echo base_url('catalogue/item/') . $produk['id']; ?>">
                                            <img class="card-img-top rounded" src="<?php echo base_url('data/images/product/') . $produk['gambar'] ?>" width="188" height="188">
                                        </a>
                                    </div>
                                </div>
                                <div class="card-body card-content">
                                    <a href="<?php echo base_url('catalogue/item/') . $produk['id']; ?>">
                                        <div class="name text-ellipsis">
                                            <?= $produk['nama']; ?>
                                        </div>
                                        <div class="price">
                                            <?= rupiah($produk['harga']); ?>
                                        </div>
                                        <hr>
                                        <?php if ($produk['stok'] != 0) { ?>
                                            <div class="stock rounded">
                                                Stok | <?= $produk['stok']; ?>
                                            </div>
                                        <?php } else { ?>
                                            <div class="stock-habis rounded">
                                                Stok | Habis
                                            </div>
                                        <?php }; ?>
                                    </a>
                                </div>
                            </div>
                        <?php } ?>
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
            <h5 class="h5 mb-2 text-gray-800 bold">Produk Sering Dilihat</h5>
            <div class="slide-container swiper">
                <div class="slide-content">
                    <div class="card-wrapper swiper-wrapper">
                        <?php foreach ($produk_dilihat as $mostproduk) { ?>
                            <div class="card swiper-slide card-post card-post">
                                <div class="image-content">
                                    <div class="card-image">
                                        <a href="<?php echo base_url('catalogue/item/') . $mostproduk['id']; ?>">
                                            <img class="card-img-top rounded" src="<?php echo base_url('data/images/product/') . $mostproduk['gambar'] ?>" width="188" height="188">
                                        </a>
                                    </div>
                                </div>
                                <div class="card-body card-content">
                                    <a href="<?php echo base_url('catalogue/item/') . $mostproduk['id']; ?>">
                                        <div class="name text-ellipsis">
                                            <?= $mostproduk['nama']; ?>
                                        </div>
                                        <div class="price">
                                            <?= rupiah($mostproduk['harga']); ?>
                                        </div>
                                        <hr>
                                        <?php if ($mostproduk['stok'] != 0) { ?>
                                            <div class="stock rounded">
                                                Stok | <?= $mostproduk['stok']; ?>
                                            </div>
                                        <?php } else { ?>
                                            <div class="stock-habis rounded">
                                                Stok | Habis
                                            </div>
                                        <?php }; ?>
                                    </a>
                                </div>
                            </div>
                        <?php } ?>
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