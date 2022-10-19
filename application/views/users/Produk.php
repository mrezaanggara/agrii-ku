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
            <?php foreach ($produk as $produk) : ?>
                <div class="row">
                    <div class="col-md-7" align="center">
                        <div class="swiper">
                            <!-- Additional required wrapper -->
                            <div class="swiper-wrapper">
                                <!-- Slides -->
                                <?php
                                foreach ($gambar as $key => $value) {
                                    if ($key == 0) { ?>
                                        <div class="swiper-slide active">
                                            <img src="<?php echo base_url("data/images/product/" . $value['gambar']) ?>" class="d-block w-100 rounded" height="477px">
                                        </div>
                                    <?php } else { ?>
                                        <div class="swiper-slide ">
                                            <img src="<?php echo base_url("data/images/product/" . $value['gambar']) ?>" class="d-block w-100 rounded" height="477px">
                                        </div>
                                <?php }
                                }
                                ?>
                                <div class="swiper-slide">
                                    <div class="embed-responsive embed-responsive-16by9 rounded">
                                        <iframe src="https://www.youtube.com/embed/<?= $produk['video']; ?>" title="YouTube video" allowfullscreen></iframe>
                                    </div>
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
                                <div class="row d-flex justify-content-between align-items-center">
                                    <h4>Nama Produk : <?= $produk['nama']; ?></h4>
                                    <i class="fa fa-eye" aria-hidden="true"><?= $produk['visitor']; ?></i>
                                </div>

                                <a class="font-weight-bold">Deskripsi</a>
                                <p>
                                    <?= $produk['deskripsi']; ?>
                                </p>
                                <hr>
                                <div class="row">
                                    <div class="col">
                                        <a class="font-weight-bold">Kategori & jenis</a><br>
                                        <a class=""><?= $produk['kategori']; ?> </a>
                                        <a class=""><?= $produk['jenis']; ?></a>
                                    </div>
                                    <div class="col">
                                        <a class="font-weight-bold">Stok total</a><br>
                                        <a class=""><?= $produk['stok']; ?> pcs</a>
                                    </div>
                                </div>
                                <br>
                                <a class="font-weight-bold">Dimensi Produk</a><br>
                                <div class="row">
                                    <div class="col">
                                        <a class="font-weight-bold">Panjang</a>
                                        <p><?= $produk['panjang']; ?> cm</p>
                                    </div>
                                    <div class="col">
                                        <a class="font-weight-bold">Tinggi</a>
                                        <p><?= $produk['tinggi']; ?> cm</p>
                                    </div>
                                    <div class="col">
                                        <a class="font-weight-bold">Lebar</a>
                                        <p><?= $produk['lebar']; ?> cm</p>
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
            <?php endforeach; ?>
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