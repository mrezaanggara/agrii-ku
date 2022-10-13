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
                        <h1 class="h3 mb-0 text-gray-800">Jenis Produk</h1>
                    </div>

                    <div class="row">
                        <div class="col-md-7">
                            <div class="card shadow mb-4">
                                <div class="card-header">
                                    <h6 class="m-0 font-weight-bold text-primary">Daftar Jenis Produk</h6>
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
                                                <?php foreach ($jenis as $jenis) : ?>
                                                    <tr>
                                                        <td width="80">
                                                            <?= $no++; ?>
                                                        </td>
                                                        <td width="200">
                                                            <?= $jenis['jenis']; ?>
                                                        </td>
                                                        <td width="200">
                                                            <?php if ($jenis['status'] == 0) { ?>
                                                                Disembunyikan
                                                            <?php } else { ?>
                                                                Tampil
                                                            <?php }; ?>
                                                        </td>
                                                        <td>
                                                            <a type="button" onClick="show_modal('<?php echo $jenis['id'] ?>','<?php echo $jenis['jenis'] ?>')" class="btn btn-sm btn-success text-white">
                                                                <i class="fas fa-edit"></i>
                                                            </a>
                                                            <a type="button" href="<?php echo site_url("admin/produk/hapusjenis/" . $jenis['id']); ?>" class="btn btn-sm btn-danger">
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
                        <div class="col-md-5">
                            <div class="card shadow mb-4">
                                <div class="card-header">
                                    <h6 class="m-0 font-weight-bold text-primary">Tambah Jenis Produk</h6>
                                </div>
                                <form action="<?php echo site_url('admin/produk/addjenis') ?>" method="post" enctype="multipart/form-data">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="jenis">Jenis</label>
                                            <input type="text" class="form-control" name="jenis" id="jenis" placeholder="Jenis Produk" required>
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

                <!-- Modal edit stok dan status -->
                <div class="modal fade" id="modal_edit" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Update Jenis</h5>
                                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="<?php echo site_url('admin/produk/editjenis') ?>" method="post" enctype="multipart/form-data">
                                <div class="modal-body">
                                    <div class="form-group">
                                        <input type="text" id="id" name="id" class="form-control" placeholder="id" required="required" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="jenisProduk">Jenis</label>
                                        <input type="text" id="jenis_edit" name="jenis_edit" class="form-control" placeholder="jenis" required="required">
                                    </div>
                                    <div class="form-group">
                                        <label for="status">Status Produk</label>
                                        <select class="form-control" name="status" aria-label="Default select example" required>
                                            <option disabled selected>Pilih Status</option>
                                            <option value="0">Disembunyikan</option>
                                            <option value="1">Tampil</option>
                                        </select>
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
                <!-- end edit stok dan status -->

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
    function show_modal(a, b) {
        document.getElementById('id').value = a;
        document.getElementById('jenis_edit').value = b;
        $("#modal_edit").modal('show');
    }
    $(document).ready(function() {
        $('#tables').DataTable();
    });
</script>

</html>