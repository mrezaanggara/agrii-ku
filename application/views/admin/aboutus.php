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
                        <h1 class="h3 mb-0 text-gray-800">Edit About us</h1>
                    </div>

                    <div class="row">
                        <div class="col-md-7">
                            <div class="card shadow mb-4">
                                <div class="card-header">
                                    <h6 class="m-0 font-weight-bold text-primary">Daftar Sosial Media</h6>
                                </div>
                                <div class="card-body">
                                    <div class="table table-responsive">
                                        <table class="table table-borderless" id="tables" width="100%" cellspacing="0">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th>No.</th>
                                                    <th>Nama</th>
                                                    <th>Jenis</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $no = 1;
                                                ?>
                                                <?php foreach ($sosmed as $sosmed) : ?>
                                                    <tr>
                                                        <td width="80">
                                                            <?= $no++; ?>
                                                        </td>
                                                        <td width="200">
                                                            <?= $sosmed['nama']; ?>
                                                        </td>
                                                        <td width="200">
                                                            <?= $sosmed['jenis']; ?>
                                                        </td>
                                                        <td>
                                                            <a type="button" onClick="show_modal('<?php echo $sosmed['id'] ?>','<?php echo $sosmed['nama'] ?>','<?php echo $sosmed['jenis'] ?>')" class="btn btn-sm btn-success text-white">
                                                                <i class="fas fa-edit"></i>
                                                            </a>
                                                            <a type="button" href="<?php echo site_url("admin/aboutus/hapussosmed/" . $sosmed['id']); ?>" class="btn btn-sm btn-danger">
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
                                    <h6 class="m-0 font-weight-bold text-primary">Tambah Sosial Media</h6>
                                </div>
                                <form action="<?php echo site_url('admin/aboutus/addsosmed') ?>" method="post" enctype="multipart/form-data">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="sosmed">Nama Sosial Media</label>
                                            <input type="text" class="form-control" name="sosmed" id="sosmed" placeholder="Nama Sosial Media" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="sosmed">Jenis Sosial Media</label>
                                            <input type="text" class="form-control" name="jenis" id="jenis" placeholder="Jenis Sosial Media" required>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="card shadow mb-4">
                                <div class="card-header">
                                    <h6 class="m-0 font-weight-bold text-primary">Form Halaman About us</h6>
                                </div>
                                <form action="<?php echo site_url('admin/aboutus/edit') ?>" method="post" enctype="multipart/form-data">
                                    <?php foreach ($about as $about) : ?>
                                        <div class="card-body">
                                            <textarea name="editor" id="editor" cols="30" rows="10"><?= $about['content']; ?></textarea>
                                        </div>
                                    <?php endforeach; ?>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Modal edit sosmed -->
                    <div class="modal fade" id="modal_edit" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Update Jenis</h5>
                                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="<?php echo site_url('admin/aboutus/editsosmed') ?>" method="post" enctype="multipart/form-data">
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <input type="text" id="id" name="id" class="form-control" placeholder="id" required="required" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="kategoriProduk">Nama Sosial Media</label>
                                            <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama" required="required">
                                        </div>
                                        <div class="form-group">
                                            <label for="status">Jenis</label>
                                            <input type="text" id="jenis_edit" name="jenis_edit" class="form-control" placeholder="jenis" required="required">
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
                    <!-- end edit sosmed -->

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
    function show_modal(a, b, c) {
        document.getElementById('id').value = a;
        document.getElementById('nama').value = b;
        document.getElementById('jenis_edit').value = c;
        $("#modal_edit").modal('show');
    }
    ClassicEditor
        .create(document.querySelector('#editor'), {
            licenseKey: '',
        })
        .then(editor => {
            window.editor = editor;
        })
        .catch(error => {
            console.error('Oops, something went wrong!');
            console.error('Please, report the following error on https://github.com/ckeditor/ckeditor5/issues with the build id and the error stack trace:');
            console.warn('Build id: qy0g02odyb3r-86jt1b6r36hh');
            console.error(error);
        });
</script>
</script>

</html>