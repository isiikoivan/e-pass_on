<?php include 'components/header.php';

$target_id = 'admin_id';
//in coming id
$id = $_GET[$target_id];

//table name
$table_name = 'admin_passon';

//target id

//$access->locate($pdo, $target_id, $id, $table_name);

$dataling = $access->locate($pdo, $target_id, $id, $table_name);


if (isset($_POST['update_admin'])) {

    //in coming id
    $id = $_GET[$target_id];
    
   // $target_id = 'admin_id';
    
    //redirecting page
    $redirect_page = 'administrators.php';
    //target id
    
    $dis = $_POST['fname'];
    
    $did = $_POST['lname'];
    
    $dif = $_POST['uname'];
    
    $disfk = $_POST['apsd'];
    
    
    $d = [
        'admin_passon',
        'admin_fname', 'admin_lname', 'admin_username', 'admin_password',
        $dis, $did, $dif, $disfk
    ];
    
    $access->updating($pdo, $d, $target_id, $id, $redirect_page);
    }
    

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

                            </div>
                            <div class="card-body">


                                <main>
                                    <div class="container-fluid px-4">

                                        <div class="  container-fluid mt-2">
                                            <!-- form row -->
                                            <div class="row justify-content-center">

                                                <div class="col-6  ">
                                                    <form action="" method="POST">

                                                        <div class="mb-3">
                                                            <label for="recipient-name" class="col-form-label">Add Admin First Name:</label>
                                                            <input value="<?= $dataling['admin_id'] ?>" required type="text" class="form-control" id="recipient-name" name="admin_id" hidden>

                                                            <input value="<?= $dataling['admin_fname'] ?>" required type="text" class="form-control" id="recipient-name" name="fname" required>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="recipient-name" class="col-form-label">Add Admin Last Name:</label>
                                                            <input value="<?= $dataling['admin_lname'] ?>" required type="text" class="form-control" id="recipient-name" name="lname" required>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="recipient-name" class="col-form-label">Add Username:</label>
                                                            <input value="<?= $dataling['admin_username'] ?>" required type="text" class="form-control" id="recipient-name" name="uname" required>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="recipient-name" class="col-form-label">Add Password:</label>
                                                            <input value="<?= $dataling['admin_password'] ?>" required type="text" class="form-control" id="recipient-name" name="apsd">
                                                        </div>



                                                        <div class="divider">
                                                            <div class="row">
                                                                <div class="col">
                                                                    <a type="button" class="btn btn-secondary" href="administrators.php">cancel</a>
                                                                </div>
                                                                <div class="col">
                                                                    <button type="submit" name="update_admin" class="btn btn-primary">Update</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
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