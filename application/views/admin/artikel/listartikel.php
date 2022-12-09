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
                        <h1 class="h3 mb-0 text-gray-800">Daftar Artikel</h1>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="card shadow mb-4">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <h6 class="m-0 font-weight-bold text-primary">Semua Artikel</h6>
                                    <a onclick="tambah_modal()" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm text-white">
                                        <i class="fa fa-plus fa-sm text-white-50"></i> Tambah Artikel
                                    </a>
                                </div>
                                <div class="card-body">
                                    <div class="table table-responsive">
                                        <table class="table table-borderless" id="tables" width="100%" cellspacing="0">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th>No.</th>
                                                    <th>Judul Artikel</th>
                                                    <th>Kategori</th>
                                                    <th>Tanggal</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $no = 1;
                                                foreach ($artikel as $artikel) :
                                                ?>
                                                    <tr>
                                                        <td width="80">
                                                            <?= $no++; ?>
                                                        </td>
                                                        <td width="200">
                                                            <?= $artikel['title']; ?>
                                                        </td>
                                                        <td width="200">
                                                            <?= $artikel['kategori']; ?>
                                                        </td>
                                                        <td width="200">
                                                            <?= formatTanggal($artikel['created_at']) ?>
                                                        </td>
                                                        <td width="50">
                                                            <a type="button" href="<?php echo site_url("admin/artikel/editartikel/") . $artikel['id'] ?>" class="btn btn-sm btn-success">
                                                                <i class="fas fa-edit"></i>
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

                <!-- Modal tambah artikel -->
                <div class="modal fade" id="modal_add" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Tambah Artikel</h5>
                                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="<?php echo site_url('admin/artikel/tambahartikel') ?>" method="post" enctype="multipart/form-data">
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="carousel">Judul Artikel</a></label>
                                        <input type="text" class="form-control" name="title" placeholder="Judul Artikel" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="carousel">Konten Artikel</label>
                                        <textarea name="content" id="content-artikel" cols="30" rows="10"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="carousel">kategori Artikel</a></label>
                                        <input type="text" class="form-control" name="kategori" placeholder="penelitian,disertasi,informasi ..." required>
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
                <!-- end tambah artikel -->

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
