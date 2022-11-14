<!-- Topbar -->
<nav class="navbar navbar-expand-lg navbar-dark mb-4 static-top shadow sticky" style="background-color:#80a571;">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="<?php echo base_url(''); ?>"><img src="<?php echo site_url('data/icon.png') ?>" alt="" height="60px"></a>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-white small" href="<?php echo base_url('catalogue/allproduct'); ?>">
                        <i class="fas fa-bag-shopping fa-fw" style="color: white"></i>
                        Produk
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white small" href="<?php echo base_url('article'); ?>">
                        <i class="fa-solid fa-newspaper fa-fw" style="color: white"></i>
                        Artikel
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white small" href="<?php echo base_url('about_us'); ?>">
                        Tentang Kami
                    </a>
                </li>
                <?php
                $cart = $this->cart->contents();
                $items = 0;
                foreach ($cart as $key => $value) {
                    $items = $items + $value['qty'];
                }
                ?>
                <li class="nav-item">
                    <a class="nav-link text-white" style="font-size: 14px;" href="<?php echo base_url('keranjang'); ?>">
                        <i class="fas fa-cart-shopping fa-fw" style="color: white"></i>
                        <span class="badge badge-danger badge-counter"><?= $items; ?></span>
                        keranjang
                    </a>
                </li>
                <form class="d-flex" action="<?php echo base_url('catalogue/search') ?>" method="post">
                    <div class="input-group">
                        <input type="text" name="keyword" class="form-control border-0 small" placeholder="Cari produk..." aria-label="Search" aria-describedby="basic-addon2" style="box-shadow:none">
                        <div class="input-group-append">
                            <input class="btn bg-white" type="submit" name="submit" value="Cari" style="color: #248b3c;">

                        </div>
                    </div>
                </form>
            </ul>

        </div>
    </div>
</nav>
<!-- End of Topbar -->