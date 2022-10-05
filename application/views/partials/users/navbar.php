<!-- Topbar -->
<nav class="navbar navbar-expand navbar-light topbar mb-4 static-top shadow sticky" style="background-color:#20B2AA" id="navbar">
    <div class="container-fluid">
        <a class="navbar-brand text-white" href="<?php echo base_url(''); ?>"><?php echo SITE_NAME; ?></a>
        <form class="ml-md-3 navbar-search">
            <div class="input-group">
                <input type="text" class="form-control border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" style="box-shadow:none">
                <div class="input-group-append">
                    <button class="btn" type="button" style="background-color:white ;border-color:#f8f9fc ;box-shadow:none">
                        <i class="fas fa-search fa-sm" style="color:#20B2AA"></i>
                    </button>
                </div>
            </div>
        </form>
        <ul class="navbar-nav">

            <li class="nav-item">
                <a class="nav-link text-white small" href="<?php echo base_url('cart'); ?>">
                    <i class="fas fa-cart-shopping fa-fw" style="color: white"></i>
                    Keranjang
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
                    About us
                </a>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item small">
                <a class="nav-link" href="<?php echo base_url('login'); ?>" role="button">
                    <span class="mr-2 d-none d-lg-inline text-white">Login</span>
                </a>
            </li>

        </ul>
    </div>
</nav>
<!-- End of Topbar -->