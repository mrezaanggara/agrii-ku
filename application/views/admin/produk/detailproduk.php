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
                    <?php foreach ($produk as $produk) : ?>
                        <div class="row">
                            <div class="col">
                                <div class="card shadow mb-4">
                                    <div class="card-header d-flex justify-content-between align-items-center">
                                        <h6 class="m-0 font-weight-bold text-primary">Detail produk</h6>
                                        <a href="<?php echo site_url('admin/produk') ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                                            <i class="fa fa-undo fa-sm text-white-50"></i> Kembali
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div id="produkCarousel" class="carousel slide" data-bs-ride="carousel">
                                                        <div class="carousel-inner">
                                                            <?php
                                                            foreach ($gambar as $key => $value) {
                                                                if ($key == 0) { ?>
                                                                    <div class="carousel-item active">
                                                                        <img src="<?php echo base_url("data/images/product/" . $value['gambar']) ?>" class="d-block w-100 rounded" height="300">
                                                                    </div>
                                                                <?php } else { ?>
                                                                    <div class="carousel-item ">
                                                                        <img src="<?php echo base_url("data/images/product/" . $value['gambar']) ?>" class="d-block w-100 rounded" height="300">
                                                                    </div>
                                                            <?php }
                                                            }
                                                            ?>
                                                        </div>
                                                        <a role="button" class="carousel-control-prev" type="button" data-bs-target="#produkCarousel" data-bs-slide="prev">
                                                            <span class="glyphicon glyphicon-chevron-right"></span>
                                                        </a>
                                                        <a role="button" class="carousel-control-next" type="button" data-bs-target="#produkCarousel" data-bs-slide="next">
                                                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="embed-responsive embed-responsive-16by9 rounded">
                                                        <iframe src="https://www.youtube.com/embed/<?= $produk['video']; ?>" title="YouTube video" allowfullscreen></iframe>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="container">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="card shadow md-3">
                                                        <div class="card-body">
                                                            <div class="col text-gray-900">
                                                                <h4>Nama Produk : <?= $produk['nama']; ?></h4>
                                                                <a class="font-weight-bold">Harga Produk</a>
                                                                <p><?= rupiah($produk['harga']); ?> / pcs</p>
                                                                <a class="font-weight-bold">Kategori Produk</a>
                                                                <p><?= $produk['kategori']; ?></p>
                                                                <a class="font-weight-bold">Jenis Produk</a>
                                                                <p><?= $produk['jenis']; ?></p>
                                                                <a class="font-weight-bold">Deskripsi Produk</a>
                                                                <p><?= $produk['deskripsi']; ?></p>
                                                                <a class="font-weight-bold">Status Produk</a>
                                                                <?php if ($produk['stok'] == 0) { ?>
                                                                    <p>Habis</p>
                                                                <?php } else { ?>
                                                                    <p>Tersedia</p>
                                                                <?php }; ?>
                                                                <a class="font-weight-bold"></a>
                                                                <p></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="card shadow md-3">
                                                        <div class="card-body">
                                                            <div class="col text-gray-900">
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <a class="font-weight-bold">Stok Produk</a>
                                                                        <h4><?= $produk['stok']; ?> / pcs</h4>
                                                                    </div>
                                                                    <div class="col">
                                                                        <a class="font-weight-bold">Jumlah pengunjung melihat</a>
                                                                        <p><?= $produk['visitor']; ?> orang</p>
                                                                    </div>
                                                                </div>
                                                                <a class="font-weight-bold">Dimensi Produk</a><br>
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <a class="font-weight-bold">Panjang</a>
                                                                        <p><?= $produk['panjang']; ?> cm</p>
                                                                    </div>
                                                                    <div class="col">
                                                                        <a class="font-weight-bold">Tinggi</a>
                                                                        <p><?= $produk['tinggi']; ?> cm</p>
                                                                    </div>
                                                                    <div class="col">
                                                                        <a class="font-weight-bold">Lebar</a>
                                                                        <p><?= $produk['lebar']; ?> cm</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="dropdown">
                                                        <button class="btn btn-sm btn-warning dropdown-toggle shadow-sm" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                            Ubah data produk
                                                        </button>
                                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                            <li><a class="dropdown-item text-gray-900" type="button" data-bs-toggle="modal" data-bs-target="#modal_edit_gambar">Ubah Gambar</a></li>
                                                            <li><a class="dropdown-item text-gray-900" type="button" data-bs-toggle="modal" data-bs-target="#modal_edit_video">Ubah Video</a></li>
                                                            <li>
                                                                <hr class="dropdown-divider">
                                                            </li>
                                                            <li><a class="dropdown-item text-gray-900" type="button" data-bs-toggle="modal" data-bs-target="#modal_edit_detail">Ubah Detail</a></li>
                                                            <li><a class="dropdown-item text-gray-900" type="button" data-bs-toggle="modal" data-bs-target="#modal_edit_stok">Ubah Stok</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Modal Edit Detail -->
                        <div class="modal fade" id="modal_edit_detail" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Update Detail Produk</h5>
                                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="<?php echo site_url('admin/produk/edit') ?>" method="post" enctype="multipart/form-data">
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <input type="text" id="id" name="id" class="form-control" placeholder="id" required="required" value="<?= $produk['id_produk'] ?>" readonly>
                                            </div>
                                            <div class="form-group">
                                                <label for="namaProduk">Nama Produk</label>
                                                <input type="text" class="form-control" name="namaProduk" placeholder="Nama Produk" value="<?= $produk['nama'] ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="hargaProduk">Harga Produk</label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">Rp.</span>
                                                    </div>
                                                    <input type="number" min="0" class="form-control" name="hargaProduk" placeholder="0" value="<?= $produk['harga'] ?>" required>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="kategoriProduk">Kategori Produk</label>
                                                        <select class="form-control" name="kategori" aria-label="Default select example" required>
                                                            <option disabled selected>Pilih Kategori Produk</option>
                                                            <?php foreach ($kategori as $key => $data) : ?>
                                                                <option value="<?= $data['id'] ?>"><?= $data['kategori']; ?></option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="jenisProduk">Jenis Produk</label>
                                                        <select class="form-control" name="jenis" aria-label="Default select example" required>
                                                            <option disabled selected>Pilih Jenis Produk</option>
                                                            <?php foreach ($jenis as $key => $data) : ?>
                                                                <option value="<?= $data['id'] ?>"><?= $data['jenis'] ?></option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="stokProduk">Stok Produk</label>
                                                        <div class="input-group mb-3">
                                                            <input type="number" min="0" class="form-control" name="stokProduk" placeholder="0" value="<?= $produk['stok'] ?>" required>
                                                            <div class="input-group-append">
                                                                <span class="input-group-text">pcs</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="beratProduk">Berat Produk</label>
                                                        <div class="input-group mb-3">
                                                            <input type="number" min="0" class="form-control" name="beratProduk" placeholder="0" value="<?= $produk['berat'] ?>" required>
                                                            <div class="input-group-append">
                                                                <span class="input-group-text">gram</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-label-group">
                                                    <label for="deskripsi">Deskripsi Produk</label>
                                                    <textarea class="form-control" name="deskripsi" placeholder="Deskripsi Produk" rows="5" required><?= $produk['deskripsi'] ?></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="dimensiBarang">Dimensi Produk</label>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="panjang">Panjang</label>
                                                            <div class="input-group mb-3">
                                                                <input type="number" min="0" class="form-control" name="panjang" placeholder="0" value="<?= $produk['panjang'] ?>" required>
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text">cm</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="lebar">Lebar</label>
                                                            <div class="input-group mb-3">
                                                                <input type="number" min="0" class="form-control" name="lebar" placeholder="0" value="<?= $produk['lebar'] ?>" required>
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text">cm</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="tinggi">Tinggi</label>
                                                            <div class="input-group mb-3">
                                                                <input type="number" min="0" class="form-control" name="tinggi" placeholder="0" value="<?= $produk['tinggi'] ?>" required>
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text">cm</span>
                                                                </div>
                                                            </div>
                                                        </div>
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
                        <!-- end edit detail -->

                        <!-- Modal edit gambar -->
                        <div class="modal fade" id="modal_edit_gambar" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Update Gambar Produk</h5>
                                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="<?php echo site_url('admin/produk/tambahgambar') ?>" method="post" enctype="multipart/form-data">
                                        <div class="modal-body">
                                            <div class="col">
                                                <?php foreach ($gambar as $g) : ?>
                                                    <div class="row justify-content-between align-items-center">
                                                        <img class="rounded" src="<?php echo base_url("data/images/product/" . $g['gambar']) ?>" alt="" height="100" width="150">
                                                        <div>
                                                            <a href="<?php echo site_url('admin/produk/hapusGambar/' . $g['gambar'] . "/" . $g['id_produk']) ?>" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm">
                                                                <i class="fa fa-trash fa-sm text-white-50"></i> Hapus
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <br>
                                                <?php endforeach; ?>
                                                <div class="form-group">
                                                    <input type="text" id="id" name="id" class="form-control" placeholder="id" required="required" value="<?= $produk['id_produk'] ?>" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label for="gambar">Upload gambar baru <a class="text-xs text-danger">*maks 3mb</a></label>
                                                    <div class="input-group">
                                                        <div class="custom-file">
                                                            <input type="file" name="gambar[]" class="custom-file-input-gambar" id="gambar[]" accept="image/*" multiple>
                                                        </div>
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

                        <!-- Modal edit video -->
                        <div class="modal fade" id="modal_edit_video" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Update Video Produk</h5>
                                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="<?php echo site_url('admin/produk/editvideo') ?>" method="post" enctype="multipart/form-data">
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <input type="text" id="id" name="id" class="form-control" placeholder="id" required="required" value="<?= $produk['id_produk'] ?>" readonly>
                                            </div>
                                            <div class="form-group">
                                                <label for="video">Video Produk</label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fa-brands fa-youtube"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control" name="video" placeholder="link Youtube video baru" required>
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
                        <!-- end edit video -->

                        <!-- Modal edit stok dan status -->
                        <div class="modal fade" id="modal_edit_stok" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Update Stok dan Status Produk</h5>
                                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="<?php echo site_url('admin/produk/editstatus') ?>" method="post" enctype="multipart/form-data">
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <input type="text" id="id" name="id" class="form-control" placeholder="id" required="required" value="<?= $produk['id_produk'] ?>" readonly>
                                            </div>
                                            <div class="form-group">
                                                <label for="stokProduk">Stok Produk</label>
                                                <div class="input-group mb-3">
                                                    <input type="number" min="0" class="form-control" name="stokProduk" placeholder="0" value="<?= $produk['stok'] ?>" required>
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">pcs</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- <div class="form-group">
                                                <label for="jenisProduk">Status Produk</label>
                                                <select class="form-control" name="status" aria-label="Default select example" required>
                                                    <option disabled selected>Pilih Status Produk</option>
                                                    <option value="0">Habis</option>
                                                    <option value="1">Tersedia</option>
                                                </select>
                                            </div> -->
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
                    <?php endforeach; ?>

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
    function show_modal(a) {
        document.getElementById('id').value = a;
        $("#modal_edit_detail").modal('show');
    }
</script>

</html>
