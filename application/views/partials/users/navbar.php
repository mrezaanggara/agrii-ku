<!-- Topbar -->
<nav class="navbar navbar-expand navbar-light topbar mb-4 static-top shadow sticky" style="background-color:#248b3c; z-index: 15;" id="navbar">
    <div class="container-fluid">
        <a class="navbar-brand text-white" href="<?php echo base_url(''); ?>"><img src="<?php echo site_url('data/icon.png') ?>" alt="" height="60px"></a>
        <form class="ml-md-3 navbar-search" action="<?php echo base_url('catalogue/search') ?>" method="post">
            <div class="input-group">
                <input type="text" name="keyword" class="form-control border-0 small" placeholder="Cari produk..." aria-label="Search" aria-describedby="basic-addon2" style="box-shadow:none">
                <div class="input-group-append">
                    <input class="btn bg-white" type="submit" name="submit" value="Cari" style="color: #248b3c;">

                </div>
            </div>
        </form>
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
                    <i class="fas fa-cart-shopping fa-fw" style="color: white"><span class="badge badge-danger badge-counter"><?= $items; ?></span></i>
                </a>
            </li>
        </ul>
    </div>
</nav>
<!-- End of Topbar -->