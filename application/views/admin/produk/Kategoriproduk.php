<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('partials/admin/header') ?>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <?php $this->load->view('partials/admin/sidebar') ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <?php $this->load->view('partials/admin/navbar') ?>

                <!--content -->
                <div class="container-fluid">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Kategori Produk</h1>
                    </div>

                    <div class="row">
                        <div class="col-md-7">
                            <div class="card shadow mb-4">
                                <div class="card-header">
                                    <h6 class="m-0 font-weight-bold text-primary">Daftar Kategori Produk</h6>
                                </div>
                                <div class="card-body">
                                    <div class="table table-responsive">
                                        <table class="table table-borderless" id="tables" width="100%" cellspacing="0">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th>No.</th>
                                                    <th>Nama</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $no = 1;
                                                ?>
                                                <tr>
                                                    <td width="80">
                                                        <?= $no++; ?>
                                                    </td>
                                                    <td width="200">
                                                        Olahan
                                                    </td>
                                                    <td width="200">
                                                        Tampil
                                                    </td>
                                                    <td>
                                                        <a type="button" href="" class="btn btn-sm btn-success">
                                                            <i class="fas fa-edit"></i>
                                                        </a>
                                                        <a type="button" class="btn btn-sm btn-danger" href="">
                                                            <i class="fas fa-trash"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="card shadow mb-4">
                                <div class="card-header">
                                    <h6 class="m-0 font-weight-bold text-primary">Tambah Kategori Produk</h6>
                                </div>
                                <form action="">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="kategori">Kategori</label>
                                            <input type="text" class="form-control" name="kategori" id="kategori" placeholder="Kategori Produk">
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <?php $this->load->view('partials/admin/footer') ?>


        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <?php $this->load->view('partials/admin/modal') ?>
    <?php $this->load->view('partials/admin/js') ?>

</body>
<script type="text/javascript">
    $(document).ready(function() {
        $('#tables').DataTable();
    });
</script>

</html>