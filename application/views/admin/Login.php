<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $title; ?></title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url('/assets/vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url('/assets/css/sb-admin-2.min.css') ?>" rel="stylesheet">
    <link rel="icon" href="<?php echo site_url('data/agriiku.png') ?>" type="image/x-icon">

</head>

<body style="background-color:#248b3c">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block">
                                <img class="rounded" src="<?php echo base_url('data/agriiku.png') ?>" height="400" width="460">
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Sistem Informasi Agri-Iku</h1>
                                    </div>
                                    <form class="user" action="<?php echo site_url('login/auth') ?>" method="post">
                                        <div class="form-group">
                                            <input type="username" class="form-control form-control-user" name="username" placeholder="Enter Username..." required="required" autofocus="autofocus" oninvalid="this.setCustomValidity('Masukkan Username')" oninput="setCustomValidity('')">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" name="password" placeholder="Password" required="required" autofocus="autofocus" oninvalid="this.setCustomValidity('Masukkan Password')" oninput="setCustomValidity('')">
                                        </div>
                                        <button class="btn btn-primary btn-user btn-block" type="submit" name="login" style="background-color:#248b3c ;border-color:#248b3c ;box-shadow:none">
                                            Login
                                        </button>
                                    </form>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url('vendor/jquery/jquery.min.js') ?>"></script>
    <script src="<?php echo base_url('vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url('vendor/jquery-easing/jquery.easing.min.js') ?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url('js/sb-admin-2.min.js') ?>"></script>

</body>

</html>