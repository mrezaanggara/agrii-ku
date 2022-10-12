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
                        <h1 class="h3 mb-0 text-gray-800">Produk</h1>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="card shadow mb-4">
                                <div class="card-header">
                                    <h6 class="m-0 font-weight-bold text-primary">Semua Produk</h6>
                                </div>
                                <div class="card-body">
                                    <div class="table table-responsive">
                                        <table class="table table-borderless" id="tables" width="100%" cellspacing="0">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th>No.</th>
                                                    <th>Gambar</th>
                                                    <th>Nama Barang</th>
                                                    <th>Kategori</th>
                                                    <th>Jumlah</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $no = 1;
                                                ?>
                                                <?php foreach ($produk as $key => $data) : ?>
                                                    <tr>
                                                        <td width="80">
                                                            <?= $no++; ?>
                                                        </td>
                                                        <td width="250">
                                                            <img class="rounded" src="<?php echo base_url('data/images/product/' . $data['gambar']) ?>" width="270" height="150">
                                                        </td>
                                                        <td width="250">
                                                            <?= $data['nama']; ?>
                                                        </td>
                                                        <td width="200">
                                                            <?= $data['kategori']; ?>
                                                        </td>
                                                        <td width="150">
                                                            <?= $data['stok']; ?>
                                                        </td>
                                                        <td>
                                                            <a type="button" href="<?php echo site_url("admin/produk/detailproduct/" . $data['id']); ?>" class="btn btn-sm btn-success">
                                                                <i class="fas fa-info"></i>
                                                            </a>
                                                            <a type="button" class="btn btn-sm btn-danger" href="">
                                                                <i class="fas fa-trash"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
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