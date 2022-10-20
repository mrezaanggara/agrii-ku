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
                            <?php
                            echo form_open('keranjang/add');
                            echo form_hidden('id', $produk['id']);
                            echo form_hidden('name', $produk['nama']);
                            echo form_hidden('price', $produk['harga']);
                            echo form_hidden('redirect_page', current_url())
                            ?>
                            <div class="card-footer">

                                <div class="row d-flex justify-content-around align-items-center">
                                    <div class="col-sm-4">
                                        <a>Harga : <?= rupiah($produk['harga']); ?></a>
                                    </div>
                                    <div class="col-sm-2">
                                        <input type="number" name="qty" class="form-control" value="1" min="1">
                                    </div>
                                    <div class="col-sm-6">
                                        <button type="submit" class="d-none d-sm-inline-block btn btn-success btn-sm swalDefaultSuccess" style="font-size:medium; color:white;">
                                            <i class="fas fa-cart-plus fa-sm"></i>
                                            Keranjang
                                        </button>
                                    </div>
                                </div>

                            </div>
                            <?php echo form_close(); ?>
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