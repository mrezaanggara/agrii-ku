<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('partials/users/header') ?>
</head>

<body id="page-top">

    <div class="content">

        <!-- Topbar -->
        <?php $this->load->view('partials/users/navbar') ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="container">
                <div class="card">
                    <div class="card-body">
                        <?php if ($this->cart->contents() == null) { ?>
                            <h5 class="h3 mb-2 text-gray-800" style="text-align:center">
                                Wah keranjang belanjamu kosong.. <br>
                                <br>
                                <i class="fas fa-cart-shopping"></i>
                            </h5>
                        <?php } else { ?>
                            <h3 class="h3 mb-2 text-gray-800">Keranjang Belanja</h3>
                            <table class="table" cellpadding="6" cellspacing="1" style="width:100%" border="0">

                                <tr>
                                    <th width="85px" style="text-align:center">QTY</th>
                                    <th>Nama Barang</th>
                                    <th style="text-align:right">Harga Barang</th>
                                    <th style="text-align:right">Sub-Total</th>
                                    <th style="text-align:center">Action</th>
                                </tr>

                                <?php $i = 1;
                                $barang = '';
                                ?>

                                <?php foreach ($this->cart->contents() as $items) : ?>


                                    <?php echo form_hidden($i . '[rowid]', $items['rowid']); ?>

                                    <tr>
                                        <td style="text-align:center"><?php echo $items['qty']; ?> </td>
                                        <td><?php echo $items['name']; ?> </td>
                                        <td style="text-align:right">Rp. <?php echo $this->cart->format_number($items['price']); ?></td>
                                        <td style="text-align:right">Rp. <?php echo $this->cart->format_number($items['subtotal']); ?></td>
                                        <td style="text-align:center">
                                            <a type="button" href="<?php echo site_url('keranjang/delete/' . $items['rowid'] . '/' . $items['id'] . '/' . $items['qty']); ?>" class="btn btn-sm btn-danger">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <?php $barang = $barang . $items['qty'] . ' x ' . $items['name'] . '%0A' . "";
                                    ?>
                                    <?php $i++; ?>


                                <?php endforeach; ?>
                                <tr>
                                    <td colspan="2"> </td>
                                    <td class="right"><strong>Total</strong></td>
                                    <td class="right"><strong>Rp. <?php echo $this->cart->format_number($this->cart->total()); ?></strong></td>
                                </tr>

                            </table>
                            <p>
                                <a aria-label="Chat on WhatsApp" href="https://wa.me/6281263119830?text=Saya ingin membeli: %0A%0A<?= $barang ?>%0A%0ATotal Harga: Rp.<?php echo $this->cart->format_number($this->cart->total()); ?>" target="_blank">
                                    <img alt="Chat on WhatsApp" src="<?php echo site_url('data/WhatsAppButtonGreenSmall.png') ?>" height="40px">
                                </a>
                            </p>
                        <?php } ?>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>

    <?php $this->load->view('partials/users/js') ?>

</body>
<script>

</script>

</html>