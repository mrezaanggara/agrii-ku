<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('partials/users/header'); ?>
    <meta http-equiv="refresh" content="3;url=<?php echo base_url('dashboard/home') ?>">
</head>

<body id="page-top">

    <div class="splash" id="splash">
        <!-- <h2 class="fade-in"></h2> -->
        <img class="fade-in" src="<?php echo base_url("data/agriiku.png") ?>" style="width: 700px;">
    </div>

    <!-- Main Content -->
    <div id="content">

        <!--navbar.php -->

        <!--content -->
    </div>

    <!--footer.php -->

    <!--scrolltop.php -->
    <!--modal.php -->
    <?php $this->load->view('partials/users/js'); ?>

</body>
<script type="text/javascript">
    $(document).ready(function() {
        setTimeout(function() {
            $("#splash").remove();
        }, 3000);
    });
</script>

</html>