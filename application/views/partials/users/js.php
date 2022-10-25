<!-- Bootstrap core JavaScript-->
<script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js') ?>"></script>
<script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

<!-- Core plugin JavaScript-->
<script src="<?php echo base_url('assets/vendor/jquery-easing/jquery.easing.min.js') ?>"></script>

<!-- Custom scripts for all pages-->
<script src="<?php echo base_url('assets/vendor/sb-admin-2.min.js') ?>"></script>
<script src="<?php echo base_url('assets/vendor/swiper-bundle.min.js') ?>"></script>
<!-- SweetAlert2 -->
<script src="<?php echo base_url('assets/vendor/sweetalert2/sweetalert2.min.js') ?>"></script>

<!-- Page level plugins -->
<script src="<?php echo base_url('assets/vendor/chart.js/Chart.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/vendor/datatables/dataTables.min.js') ?>"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script>
    document.querySelectorAll('oembed[url]').forEach(element => {
        // Create the <a href="..." class="embedly-card"></a> element that Embedly uses
        // to discover the media.
        const anchor = document.createElement('a');

        anchor.setAttribute('href', element.getAttribute('url'));
        anchor.className = 'embedly-card';

        element.appendChild(anchor);
    });
</script>