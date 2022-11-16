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
                        <h1 class="h3 mb-0 text-gray-800">Edit Artikel</h1>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="card shadow mb-4">
                                <div class="card-header">
                                    <h6 class="m-0 font-weight-bold text-primary">Form Edit Artikel</h6>
                                </div>
                                <form action="<?php echo site_url('admin/artikel/save') ?>" method="post" enctype="multipart/form-data">
                                    <?php foreach ($artikel as $artikel) : ?>
                                        <div class="card-body">
                                            <input type="text" class="form-control" name="id" placeholder="id" hidden readonly value="<?= $artikel['id'] ?>" required>
                                            <div class="form-group">
                                                <label for="carousel">Judul Artikel</a></label>
                                                <input type="text" class="form-control" name="title" placeholder="Judul Artikel" value="<?= $artikel['title'] ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="carousel">Konten Artikel</label>
                                                <textarea name="content" id="content-artikel" cols="30" rows="10"><?= $artikel['content'] ?></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="carousel">kategori Artikel</a></label>
                                                <input type="text" class="form-control" name="kategori" placeholder="penelitian,disertasi,informasi ..." value="<?= $artikel['kategori'] ?>" required>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                </form>
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
    ClassicEditor
        .create(document.querySelector('#content-artikel'), {
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

</html>