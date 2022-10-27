<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('partials/users/header'); ?>
</head>

<body>

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

        <!-- deskripsi -->
        <div class="container">
            <br>
            <div class="col d-flex justify-content-around align-items-center">
                <img src="<?php echo site_url('data/icon.png') ?>" alt="" height="200">
            </div>
            <div class="col d-flex justify-content-around align-items-center">
                <p class="text-center">
                    Inovasi kewirausahaan unggulan dalam bidang pertanian yang menyediakan berbagai produk pertanian
                    baik dari mahasiswa maupun mitra lainnya. Memiliki visi yaitu menjadi penggerak teknologi kreatif
                    kewirausahaan mahasiswa serta misi yaitu menjalankan <strong>Agri Corner</strong> dan marketplace
                    <strong>Agriiku</strong> dengan inovasinya.
                </p>
            </div>
            <br>
        </div>
        <!-- end deskripsi -->

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
            <h5 class="h5 mb-2 text-gray-900 bold text-center">Produk Terbaru</h5>
            <br>
            <div class="slide-container swiper">
                <div class="slide-content">
                    <div class="card-wrapper swiper-wrapper">
                        <?php foreach ($produk as $produk) { ?>
                            <div class="card swiper-slide card-post card-post">
                                <?php
                                echo form_open('keranjang/add');
                                echo form_hidden('id', $produk['id']);
                                echo form_hidden('name', $produk['nama']);
                                echo form_hidden('qty', 1);
                                echo form_hidden('price', $produk['harga']);
                                echo form_hidden('redirect_page', current_url());
                                ?>
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
                                    </a>
                                    <div class="row d-flex justify-content-around align-items-center">
                                        <?php if ($produk['stok'] != 0) { ?>
                                            <div class="stock rounded">
                                                Stok | <?= $produk['stok']; ?>
                                            </div>
                                            <button type="submit" class="btn swalDefaultSuccess" style="font-size:medium; color:#248b3c;">
                                                <i class="fas fa-cart-plus"></i>
                                            </button>
                                        <?php } else { ?>
                                            <div class="stock-habis rounded">
                                                Stok | Habis
                                            </div>
                                            <div></div>
                                        <?php }; ?>
                                    </div>
                                </div>
                                <?php echo form_close(); ?>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="swiper-button-next swiper-pb"></div>
                    <div class="swiper-button-prev swiper-pb"></div>
                </div>
            </div>
        </div>
        <!-- end swiper produk terbaru -->

        <br>
        <br>

        <!-- swiper produk terlaris -->
        <div class="container">
            <h5 class="h5 mb-2 text-gray-900 bold text-center">Produk Sering Dilihat</h5>
            <br>
            <div class="slide-container swiper">
                <div class="slide-content">
                    <div class="card-wrapper swiper-wrapper">
                        <?php foreach ($dilihat as $mostproduk) { ?>
                            <div class="card swiper-slide card-post card-post">
                                <?php
                                echo form_open('keranjang/add');
                                echo form_hidden('id', $mostproduk['id']);
                                echo form_hidden('name', $mostproduk['nama']);
                                echo form_hidden('qty', 1);
                                echo form_hidden('price', $mostproduk['harga']);
                                echo form_hidden('redirect_page', current_url())
                                ?>
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
                                    </a>
                                    <div class="row d-flex justify-content-around align-items-center">
                                        <?php if ($mostproduk['stok'] != 0) { ?>
                                            <div class="stock rounded">
                                                Stok | <?= $mostproduk['stok']; ?>
                                            </div>
                                            <button type="submit" class="btn swalDefaultSuccess" style="font-size:medium; color:#248b3c;">
                                                <i class="fas fa-cart-plus"></i>
                                            </button>
                                        <?php } else { ?>
                                            <div class="stock-habis rounded">
                                                Stok | Habis
                                            </div>
                                            <div></div>
                                        <?php }; ?>
                                    </div>
                                </div>
                                <?php echo form_close() ?>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="swiper-button-next swiper-pb swiper-navBtn"></div>
                    <div class="swiper-button-prev swiper-pb swiper-navBtn"></div>
                </div>
            </div>
        </div>
        <!-- end swiper produk terlaris -->

        <br>
        <br>

        <!-- cara pemesanan -->
        <div class="container">
            <h5 class="h5 mb-2 text-gray-900 bold text-center font-weight-bold">Cara Pemesanan</h5>
            <div class="row">
                <div class="col-md-3">
                    <div class="row d-flex justify-content-around align-items-center">
                        <img src="<?php echo site_url('data/icon.png') ?>" alt="" height="100">
                        <a class="text-gray-900">Mencari Produk</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="row  d-flex justify-content-around align-items-center">
                        <img src="<?php echo site_url('data/icon.png') ?>" alt="" height="100">
                        <a class="text-gray-900">Hubungi Kami</a>
                    </div>
                </div>
                <div class="col-md-3 ">
                    <div class="row d-flex justify-content-around align-items-center">
                        <img src="<?php echo site_url('data/icon.png') ?>" alt="" height="100">
                        <a class="text-gray-900">Pesan dan Bayar </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="row  d-flex justify-content-around align-items-center">
                        <img src="<?php echo site_url('data/icon.png') ?>" alt="" height="100">
                        <a class="text-gray-900">Pengiriman</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- end cara pemesanan -->

        <div class="container">
            <hr class="divider">
        </div>

        <!-- mitra -->
        <div class="container">
            <h5 class="h5 mb-2 text-gray-900 bold text-center font-weight-bold">Mitra</h5>
            <div class="row justify-content-md-center">

                <div class="col-md-3">
                    <div class="row d-flex justify-content-around align-items-center">
                        <img src="<?php echo site_url('data/icon.png') ?>" alt="" height="100">
                        <a class="text-gray-900"></a>
                    </div>
                </div>

            </div>
        </div>
        <!-- end mitra -->

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
    $(function() {
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 5000
        });

        $('.swalDefaultSuccess').click(function() {
            Toast.fire({
                type: 'success',
                title: 'Barang berhasil ditambahkan ke keranjang..'
            })
        });
    });
</script>

</html>