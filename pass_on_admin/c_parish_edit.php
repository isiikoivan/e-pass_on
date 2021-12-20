<?php include 'components/header.php';

$target_id = 'parish_id';
//in coming id
$id = $_GET[$target_id];

//table name
$table_name = 'parish';

//target id

//$access->locate($pdo, $target_id, $id, $table_name);

$dataling = $access->locate($pdo, $target_id, $id, $table_name);


if (isset($_POST['update_parish'])) {

    //in coming id
    $id = $_GET[$target_id];

    // $target_id = 'admin_id';

    //redirecting page
    $redirect_page = 'locale.php';
    //target id
 
    $dis=$_POST['parishname'];
         
    $disfk=$_POST['subcounty'];
    
  
    $d=['parish',
    'parish_name','sub_county_sub_county_id',
    $dis,$disfk];

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
                    Edit Group

                </h1>

                <div class="row">

                    <div class="col">


                        <div class="card mb-4 mt-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Edit group

                            </div>
                            <div class="card-body">


                                <main>
                                    <div class="container-fluid px-4">

                                        <div class="  container-fluid mt-2">
                                            <!-- form row -->
                                            <div class="row justify-content-center">

                                                <div class="col-8  ">
                                                    <form action="" method="POST" enctype="multipart/form-data">

                                                        <div class="mb-3">
                                                          
                                                            <input required type="text" class="form-control" name="subcounty" value="<?= $dataling['sub_county_sub_county_id'] ?>" hidden>
                                                        </div>

                                                        <div class="mb-3">
                                                            <label for="recipient-name" class="col-form-label">Parish Name:</label>
                                                            <input type="text" class="form-control" id="recipient-name" name="parishname"value="<?= $dataling['parish_name'] ?>">
                                                        </div>

                                                        <div class="divider">
                                                            <div class="row">
                                                                <div class="col">
                                                                    <a type="button" class="btn btn-secondary" href="locale.php">cancel</a>
                                                                </div>
                                                                <div class="col">
                                                                    <button type="submit" name="update_parish" class="btn btn-primary">Update</button>
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