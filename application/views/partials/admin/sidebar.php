<!-- Sidebar -->
<ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color:#20B2AA ;">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo site_url('/admin/dashboard') ?>">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-store"></i>
        </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('dashboard') ?>" target="_blank">
            <i class="fas fa-fw fa-home"></i>
            <span>View Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading text-white">
        Master
    </div>

    <!-- Nav Item - Produk Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseProduk" aria-expanded="true" aria-controls="collapseProduk">
            <i class="fas fa-fw fa-box"></i>
            <span>Produk</span>
        </a>
        <div id="collapseProduk" class="collapse" aria-labelledby="headingProduk" data-bs-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Data Produk:</h6>
                <a class="collapse-item" href="<?php echo site_url('admin/produk') ?>">Semua Produk</a>
                <a class="collapse-item" href="<?php echo site_url('admin/produk/addProduct') ?>">Tambah Produk Baru</a>
                <a class="collapse-item" href="<?php echo site_url('admin/produk/kategori') ?>">Kategori Produk</a>
                <a class="collapse-item" href="<?php echo site_url('admin/produk/jenis') ?>">Jenis Produk</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Perusahaan Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePerusahaan" aria-expanded="true" aria-controls="collapsePerusahaan">
            <i class="fas fa-fw fa-earth-asia"></i>
            <span>Website</span>
        </a>
        <div id="collapsePerusahaan" class="collapse" aria-labelledby="headingPerusahaan" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Pengaturan Website:</h6>
                <a class="collapse-item" href="<?php echo site_url('admin/carousel') ?>">Carousel</a>
                <a class="collapse-item" href="<?php echo site_url('admin/artikel') ?>">Artikel</a>
                <a class="collapse-item" href="<?php echo site_url('admin/aboutus') ?>">About us</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading text-white">
        Addons
    </div>

    <!-- Nav Item - Users Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseUsers" aria-expanded="true" aria-controls="collapseUsers">
            <i class="fas fa-fw fa-users"></i>
            <span>Users Admin</span>
        </a>
        <div id="collapseUsers" class="collapse" aria-labelledby="headingUsers" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Data Users Admin:</h6>
                <a class="collapse-item" href="<?php echo site_url('admin/users') ?>">Semua Users Admin</a>
                <a class="collapse-item" href="utilities-border.html">Tambah Users Admin</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

</ul>
<!-- End of Sidebar -->