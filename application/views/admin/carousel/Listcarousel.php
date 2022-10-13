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
                        <h1 class="h3 mb-0 text-gray-800">Carousel</h1>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="card shadow mb-4">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <h6 class="m-0 font-weight-bold text-primary">Daftar Carousel</h6>
                                    <a onclick="tambah_modal()" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm text-white">
                                        <i class="fa fa-plus fa-sm text-white-50"></i> Tambah Carousel
                                    </a>
                                </div>
                                <div class="card-body">
                                    <div class="table table-responsive">
                                        <table class="table table-borderless" id="tables" width="100%" cellspacing="0">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th>No.</th>
                                                    <th>Gambar</th>
                                                    <th>Tanggal</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $no = 1;
                                                ?>
                                                <?php foreach ($carousel as $carousel) : ?>
                                                    <tr>
                                                        <td width="80">
                                                            <?= $no++; ?>
                                                        </td>
                                                        <td width="250">
                                                            <img src="<?php echo base_url("data/images/carousel/" . $carousel['carousel']) ?>" alt="" height="100" width="250">
                                                        </td>
                                                        <td width="200">
                                                            <?= formatTanggal($carousel['created_at']) ?>
                                                        </td>
                                                        <td width="50">
                                                            <a type="button" class="btn btn-sm btn-danger" href="<?php echo site_url('admin/carousel/hapus/' . $carousel['id']) ?>">
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

                <!-- Modal tambah Carousel -->
                <div class="modal fade" id="modal_add" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Tambah Banner Carousel</h5>
                                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="<?php echo site_url('admin/carousel/tambahcarousel') ?>" method="post" enctype="multipart/form-data">
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="carousel">Upload Carousel baru <a class="text-xs text-danger">*maks 5mb</a></label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" name="carousel[]" class="custom-file-input-carousel" id="carousel[]" accept="image/*" multiple>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary" name="edit">Save changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- end edit gambar -->

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
    function tambah_modal() {
        $("#modal_add").modal('show');
    }
    $(document).ready(function() {
        $('#tables').DataTable();
    });
</script>

</html>