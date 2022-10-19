<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('partials/users/header'); ?>
</head>

<body>

    <!-- Main Content -->
    <div class="content">

        <?php $this->load->view('partials/users/navbar'); ?>

        <!-- swiper produk terbaru -->
        <div class="container">
            <h3 class="h3 mb-2 text-gray-800 bold"><i class="fas fa-bag-shopping fa-fw"></i><?= $laman; ?></h3>
            <?php if ($keyword != null) {
                echo "<h5 mb-2 text-gray-800 bold> Mencari Produk: " . $keyword . "</h5>";
            } ?>
            <div class="row">
                <?php foreach ($produk as $produk) : ?>
                    <div class="card-catalogue" style="height: 346px; width: 182px; margin-left:20px; margin-right:20px; margin-top:25px">
                        <div class="card">
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
                                        <?= rupiah($produk['harga']) ?>
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
                    </div>
                <?php endforeach; ?>
            </div>
            <br>
            <?= $this->pagination->create_links(); ?>
        </div>
        <!-- end swiper produk terbaru -->

    </div>

    <?php $this->load->view('partials/users/footer'); ?>

    <?php $this->load->view('partials/users/js'); ?>

</body>
<script type="text/javascript">

</script>

</html>