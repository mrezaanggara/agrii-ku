<!-- Topbar -->
<nav class="navbar navbar-expand navbar-light topbar mb-4 static-top shadow" style="background-color:#20B2AA">
    <div class="container-fluid">
        <a class="navbar-brand text-white"><?php echo SITE_NAME; ?></a>
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

            <li class="nav-item dropdown no-arrow mx-1">
                <a class="nav-link dropdown-toggle text-white small" href="#" id="cartDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-cart-shopping fa-fw" style="color: white"></i>
                    Keranjang
                </a>
                <!-- Dropdown - cart -->
                <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="cartDropdown">
                    <h6 class="dropdown-header" style="background-color:#20B2AA ;border-color:#20B2AA">
                        Keranjang Belanja
                    </h6>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                        <div class="mr-3">
                            <div class="icon-circle bg-primary">
                                <i class="fas fa-file-alt text-white"></i>
                            </div>
                        </div>
                        <div>
                            <div class="small text-gray-500">December 12, 2019</div>
                            <span class="font-weight-bold">A new monthly report is ready to download!</span>
                        </div>
                    </a>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                        <div class="mr-3">
                            <div class="icon-circle bg-success">
                                <i class="fas fa-donate text-white"></i>
                            </div>
                        </div>
                        <div>
                            <div class="small text-gray-500">December 7, 2019</div>
                            $290.29 has been deposited into your account!
                        </div>
                    </a>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                        <div class="mr-3">
                            <div class="icon-circle bg-warning">
                                <i class="fas fa-exclamation-triangle text-white"></i>
                            </div>
                        </div>
                        <div>
                            <div class="small text-gray-500">December 2, 2019</div>
                            Spending Alert: We've noticed unusually high spending for your account.
                        </div>
                    </a>
                    <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                </div>
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