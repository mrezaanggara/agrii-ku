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
            ckfinder: {
                uploadUrl: 'http://localhost/agrii-ku/assets/vendor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files&responseType=json',
            },
            toolbar: ['ckfinder', 'imageUpload', '|', 'heading', '|', 'bold', 'italic', 'link', '|',
                'bulletedList', 'numberedList', 'blockQuote', 'outdent', 'indent', '|',
                'insertTable', 'mediaEmbed', '|', 'undo', 'redo'
            ],
            heading: {
                options: [{
                        model: 'paragraph',
                        title: 'Paragraph',
                        class: 'ck-heading_paragraph'
                    },
                    {
                        model: 'heading1',
                        view: 'h1',
                        title: 'Heading 1',
                        class: 'ck-heading_heading1'
                    },
                    {
                        model: 'heading2',
                        view: 'h2',
                        title: 'Heading 2',
                        class: 'ck-heading_heading2'
                    },
                    {
                        model: 'heading3',
                        view: 'h3',
                        title: 'Heading 3',
                        class: 'ck-heading_heading3'
                    },
                    {
                        model: 'heading4',
                        view: 'h4',
                        title: 'Heading 4',
                        class: 'ck-heading_heading4'
                    },
                    {
                        model: 'heading5',
                        view: 'h5',
                        title: 'Heading 5',
                        class: 'ck-heading_heading5'
                    },
                    {
                        model: 'heading6',
                        view: 'h6',
                        title: 'Heading 6',
                        class: 'ck-heading_heading6'
                    }
                ]
            },
            language: 'id'
        })
        .catch(error => {
            console.error(error);
        });
</script>

</html>