<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('partials/users/header') ?>
</head>

<body id="page-top">

    <div class="content" id="content">

        <!-- Topbar -->
        <?php $this->load->view('partials/users/navbar') ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="container">
                <h5 class="h5 mb-2 text-gray-800">Kategori Produk</h5>
                <div class="row">
                    <!-- Sayur -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border shadow w-100 py-2">
                            <a class="card-body" href="" style="color:#20B2AA;">
                                <div class="row no-gutters align-items-center">
                                    <div class="h5 mb-0 font-weight-bold text-gray-800" href="#">Sayur</div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- Buah -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border shadow h-100 py-2">
                            <a class="card-body" href="" style="color:#20B2AA;">
                                <div class="row no-gutters align-items-center">
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">Buah</div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- Biji-bijian -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border shadow h-100 py-2">
                            <a class="card-body" href="" style="color:#20B2AA;">
                                <div class="row no-gutters align-items-center">
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">Biji-bijian</div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- Umbi -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border shadow h-100 py-2">
                            <a class="card-body" href="" style="color:#20B2AA;">
                                <div class="row no-gutters align-items-center">
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">Umbi</div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>

    <?php $this->load->view('partials/users/footer') ?>


    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <?php $this->load->view('partials/users/js') ?>

</body>

</html>