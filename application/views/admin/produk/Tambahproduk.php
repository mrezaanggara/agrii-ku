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
                        <h1 class="h3 mb-0 text-gray-800">Tambah Produk Produk</h1>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="card shadow mb-4">
                                <div class="card-header">
                                    <h6 class="m-0 font-weight-bold text-primary">Form tambah produk</h6>
                                </div>
                                <form name="form" id="form" onchange="perview()">

                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="gambar">Gambar dan Video Produk</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" name="gambar[]" class="custom-file-input" id="gambar" accept="image/video/*" multiple onchange="perview_image()">
                                                    <label class=" custom-file-label gambar" for="gambar">Pilih File..</label>
                                                </div>
                                                <div class="input-group-append">
                                                    <span class="input-group-text bg-danger text-white" onclick="remove()">Remove</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="namaProduk">Nama Produk</label>
                                            <input type="text" class="form-control" id="namaProduk" placeholder="Nama Produk">
                                        </div>
                                        <div class="form-group">
                                            <label for="hargaProduk">Harga Produk</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Rp.</span>
                                                </div>
                                                <input type="number" min="0" class="form-control" id="hargaProduk" placeholder="0">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="stokProduk">Stok Produk</label>
                                                    <div class="input-group mb-3">
                                                        <input type="number" min="0" class="form-control" id="stokProduk" placeholder="0">
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
                                                        <input type="number" min="0" class="form-control" id="beratProduk" placeholder="0">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">kg</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-label-group">
                                                <label for="deskripsi">Deskripsi barang</label>
                                                <textarea class="form-control" id="deskripsi" placeholder=""></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="dimensiBarang">Dimensi Barang</label>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="panjang">Panjang</label>
                                                        <div class="input-group mb-3">
                                                            <input type="number" min="0" class="form-control" id="panjang" placeholder="0">
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
                                                            <input type="number" min="0" class="form-control" id="lebar" placeholder="0">
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
                                                            <input type="number" min="0" class="form-control" id="tinggi" placeholder="0">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text">cm</span>
                                                            </div>
                                                        </div>
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
                        <div class="col-md-6">
                            <div class="card shadow mb-4">
                                <div class="card-header">
                                    <h6 class="m-0 font-weight-bold text-primary">Perview data</h6>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex justify-content-center" id="gambarview"></div>
                                    <hr>
                                    <div id="tampil"></div>
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
    $(".custom-file-input").on("change", function() {
        var numFiles = $("input:file")[0].files.length;
        if (numFiles > 3) {
            alert('gambar max 3');
            return false;
        }
        $(this).siblings(".custom-file-label").addClass("selected").html(numFiles + " File Selected..");
    });

    function remove() {
        const element = document.getElementById("imgs");
        element.remove();
    }

    function perview() {
        var total_file = document.getElementById("gambar").files.length;
        for (var i = 0; i < total_file; i++) {
            $('#gambarview').append("<img id='imgs' src='" + URL.createObjectURL(event.target.files[i]) + "' height='300' width='300'><br>");
        }
        var nama = document.getElementById("namaProduk").value;
        var harga = document.getElementById("hargaProduk").value;
        var stok = document.getElementById("stokProduk").value;
        var berat = document.getElementById("beratProduk").value;
        var deskripsi = document.getElementById("deskripsi").value;
        var panjang = document.getElementById("panjang").value;
        var lebar = document.getElementById("lebar").value;
        var tinggi = document.getElementById("tinggi").value;
        var tampil = document.getElementById("tampil");
        tampil.innerHTML =
            'Nama Produk : ' + nama + '<br><hr>' +
            'Harga Produk : Rp. ' + harga + '<br><hr>' +
            'Stok : ' + stok + ' Pcs<br><hr>' +
            'Berat : ' + berat + ' Kg<br><hr>' +
            'Deskripsi : <br>' + deskripsi + '<br><hr>' +
            'panjang : ' + panjang + ' cm <br><hr>' +
            'lebar : ' + lebar + ' cm <br><hr>' +
            'tinggi : ' + tinggi + ' cm <br>';
    }

    const checkbox = document.getElementById('check')

    checkbox.addEventListener('change', (event) => {
        if (event.currentTarget.checked) {
            alert('Pastikan Data Kembali sebelum tekan "SUBMIT"');
        }
    })
</script>

</html>