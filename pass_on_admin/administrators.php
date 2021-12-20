<?php include 'components/header.php';


?>


<?php include 'assets/includes/nav_bar.php' ?>


<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">

            </div>

        </nav>
    </div>

    <?php include 'assets/includes/sidebar.php' ?>


    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-2">
                    Administrators

                </h1>
                <!-- <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol> -->



                <div class="row">
                    <div class="col">


                        <div class="card mb-4 mt-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Administrators
                                <div class="row ">
                                    <div class="col"></div>
                                    <div class="col">
                                        <form method="post">
                                            <button class="btn btn-success text-white " type="submit" name="create_pdf"><i class="fa fa-download"></i>
                                                generate pdf
                                            </button>

                                        </form>
                                        <div class="col">

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">


                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>Admin Names</th>
                                            <th>Username</th>
                                            <th>Password</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>id</th>
                                            <th>Names</th>
                                            <th>Username</th>
                                            <th>Password</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>





                                        <?php
                                        $c = [$pdo, 'admin_passon'];
                                        $access->retriving($c);
                                        foreach ($GLOBALS['dat'] as $dat => $value) : ?>
                                            <tr>
                                                <td><?= $value['admin_id']; ?> </td>
                                                <td><?= $value['admin_fname']; ?> <?= $value['admin_lname'];  ?></td>
                                                <td><?= $value['admin_username']; ?></td>
                                                <td><?= $value['admin_password']; ?></td>
                                                <td>
                                                    <!-- edit button start -->



                                                    
                                                    <!-- edit button end -->
                                                    <a href="administrators_edit.php?admin_id=<?=$value['admin_id'];?>" class="btn btn-primary"> Edit</a>
                                                    <a href="delets/admin_delet.php?admin_id=<?= $value['admin_id']; ?>" class="btn btn-danger" name="delete"> Delete</a>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>

                                    </tbody>


                                </table>


                                <main>
                                    <div class="container-fluid px-4">


                                        <div class="row">
                                            <div class="col">



                                                <div class="modal fade" id="add_admin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Add Input</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>

                                                            <form action="locals/admin.php" method="POST">
                                                                <div class="modal-body">

                                                                    <div class="mb-3">
                                                                        <label for="recipient-name" class="col-form-label">Add Admin First Name:</label>
                                                                        <input required type="text" class="form-control" id="recipient-name" name="fname" required>
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="recipient-name" class="col-form-label">Add Admin Last Name:</label>
                                                                        <input required type="text" class="form-control" id="recipient-name" name="lname" required>
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="recipient-name" class="col-form-label">Add Username:</label>
                                                                        <input required type="text" class="form-control" id="recipient-name" name="uname" required>
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="recipient-name" class="col-form-label">Add Password:</label>
                                                                        <input required type="text" class="form-control" id="recipient-name" name="apsd">
                                                                    </div>


                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">close</button>
                                                                    <button type="submit" name="submitadmin" class="btn btn-primary">save</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="container">
                                                    <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#add_admin" data-bs-whatever="@getbootstrap">Add Admin</button>

                                                </div>



                                            </div>



                                        </div>

                                    </div>

                                </main>
                            </div>
                        </div>


                    </div>

                </div>

            </div>
        </main>
        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid px-4">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">Copyright &copy; Your Website 2021</div>
                    <div>
                        <a href="#">Privacy Policy</a>
                        &middot;
                        <a href="#">Terms &amp; Conditions</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>

<?php include 'components/footer.php' ?>