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
                        <h1 class="h3 mb-0 text-gray-800">Tambah Produk</h1>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="card shadow mb-4">
                                <div class="card-header">
                                    <h6 class="m-0 font-weight-bold text-primary">Form tambah produk</h6>
                                </div>
                                <form action="<?php echo site_url('admin/produk/addProduct') ?>" method="post" enctype="multipart/form-data">

                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="namaProduk">Nama Produk</label>
                                            <input type="text" class="form-control" name="namaProduk" placeholder="Nama Produk" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="hargaProduk">Harga Produk</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Rp.</span>
                                                </div>
                                                <input type="number" min="0" class="form-control" name="hargaProduk" placeholder="0" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="kategoriProduk">Kategori Produk</label>
                                                    <select class="form-control" name="kategori" aria-label="Default select example" required>
                                                        <option selected>Pilih Kategori Produk</option>
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
                                                        <option selected>Pilih Jenis Produk</option>
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
                                                        <input type="number" min="0" class="form-control" name="stokProduk" placeholder="0" required>
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
                                                        <input type="number" min="0" class="form-control" name="beratProduk" placeholder="0" required>
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
                                                <textarea class="form-control" name="deskripsi" placeholder="Deskripsi Produk" required></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="dimensiBarang">Dimensi Produk</label>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="panjang">Panjang</label>
                                                        <div class="input-group mb-3">
                                                            <input type="number" min="0" class="form-control" name="panjang" placeholder="0" required>
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
                                                            <input type="number" min="0" class="form-control" name="lebar" placeholder="0" required>
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
                                                            <input type="number" min="0" class="form-control" name="tinggi" placeholder="0" required>
                                                            <div class="input-group-append">
                                                                <span class="input-group-text">cm</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="gambar">Gambar Produk <a class="text-xs text-danger">*maks 3mb</a></label>
                                                    <div class="input-group">
                                                        <div class="custom-file">
                                                            <input onchange="cek()" type="file" name="gambar[]" class="custom-file-input-gambar" id="gambar[]" accept="image/*" multiple>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="video">Video Produk</label>
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="fa-brands fa-youtube"></i></span>
                                                        </div>
                                                        <input type="text" class="form-control" name="video" placeholder="Url Youtube" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="check">
                                            <label class="form-check-label" for="exampleCheck1">Saya sudah yakin dengan data ini</label>
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

                <?php $this->load->view('partials/admin/footer') ?>


            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <?php $this->load->view('partials/admin/modal') ?>
        <?php $this->load->view('partials/admin/js') ?>

</body>
<script type="text/javascript">
    function cek() {
        var total_file = $("input:file")[0].files.length;
        if (total_file > 3) {
            alert('Gambar Max 3');
            return false;
        }
    }

    const checkbox = document.getElementById('check')
    checkbox.addEventListener('change', (event) => {
        if (event.currentTarget.checked) {
            alert('Pastikan Data Kembali sebelum tekan "SUBMIT"');
        }
    })
</script>

</html>