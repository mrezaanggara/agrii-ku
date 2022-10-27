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
                        <h1 class="h3 mb-0 text-gray-800">Daftar Admin</h1>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="card shadow mb-4">
                                <div class="card-header">
                                    <h6 class="m-0 font-weight-bold text-primary">Semua Admin</h6>
                                </div>
                                <div class="card-body">
                                    <div class="table table-responsive">
                                        <table class="table table-borderless" id="tables" width="100%" cellspacing="0">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th>No.</th>
                                                    <th>Username</th>
                                                    <th>Nama</th>
                                                    <th>Role</th>
                                                    <th>Created at</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $no = 1;
                                                foreach ($users as $user) :
                                                ?>
                                                    <tr>
                                                        <td width="80">
                                                            <?= $no++; ?>
                                                        </td>
                                                        <td width="200">
                                                            <?= $user['username']; ?>
                                                        </td>
                                                        <td width="200">
                                                            <?= $user['nama']; ?>
                                                        </td>
                                                        <td width="200">
                                                            <?= $user['role']; ?>
                                                        </td>
                                                        <td width="200">
                                                            <?= formatTanggal($user['created_at']); ?>
                                                        </td>
                                                        <td width="50">
                                                            <a type="button" onClick="show_modal('<?php echo $user['id'] ?>','<?php echo $user['nama'] ?>','<?php echo $user['username'] ?>')" class="btn btn-sm btn-success text-white">
                                                                <i class="fas fa-edit"></i>
                                                            </a>
                                                            <?php if ($user['role'] != 'superadmin') { ?>
                                                                <a type="button" class="btn btn-sm btn-danger" href="<?php echo site_url("admin/users/hapususers/" . $user['id']); ?>">
                                                                    <i class="fas fa-trash"></i>
                                                                </a>
                                                            <?php } ?>
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

                <!-- Modal edit users -->
                <div class="modal fade" id="modal_edit" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Update users</h5>
                                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="<?php echo site_url('admin/users/editusers') ?>" method="post" enctype="multipart/form-data">
                                <div class="modal-body">
                                    <div class="form-group">
                                        <input type="text" id="id" name="id" class="form-control" placeholder="id" required="required" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="nama">Nama</label>
                                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="username">Username Login</label>
                                        <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="password">Password baru</label>
                                                <input type="password" class="form-control" name="password" placeholder="Password" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="role">Role</label>
                                                <select class="form-control" name="role" aria-label="Default select example" required>
                                                    <option selected>Pilih Role</option>
                                                    <option value="superadmin">Super Admin</option>
                                                    <option value="admin">Admin</option>
                                                </select>
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
                <!-- end edit users -->

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
        document.getElementById('username').value = c;
        $("#modal_edit").modal('show');
    }
    $(document).ready(function() {
        $('#tables').DataTable();
    });
</script>

</html>