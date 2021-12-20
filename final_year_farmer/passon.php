<?php include 'components/header.php';

$target_id = 'admin_id';
//in coming id
$id = $_GET[$target_id];

//table name
$table_name = 'pass_on';



if (isset($_POST['pass'])) {

    //in coming id
    $id = $_GET[$target_id];
    
   // $target_id = 'admin_id';
    
    //redirecting page
    $redirect_page = 'administrators.php';
    //target id
    
    $dis = $_POST['mem'];
    
    $did = $_POST['qua'];
    

    $disfk =$_SESSION['dean']['farmer_id'];
    
    
    $d = [
        'pass_on',
        'pass_from', 'pass_on_content', 'farmer_farmer_id',
        $dis, $did, $disfk
    ];
    
    $access->universal_insert($pdo, $d,$redirect_page);
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
                  Pass on:

                </h1>
  

                <div class="row">
                    <div class="col">
                        <div class="card mb-4 mt-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                               pass on

                            </div>
                            <div class="card-body">


                                <main>
                                    <div class="container-fluid px-4">

                                        <div class="  container-fluid mt-2">
                                            <!-- form row -->
                                            <div class="row justify-content-center">

                                                <div class="col-4  ">
                                                    <form action="" method="POST">

                                                      

                                                        <?php
                                                        $id = $_SESSION['dean']['farmer_group_group_id'];
                                                        $access->finding_value($pdo,'farmer', 'farmer_group_group_id',$id);
                                                       // print_r( $_SESSION['group_members']);

                                                        ?>
                                                           <div class="mb-3">
                                                                
                                                                    <label for="stage">pass on to </label>
                                                                    <select name="mem">
                                                                        <option selected>Farmers</option>
                                                                        <?php foreach ($_SESSION['group_members'] as $dat => $val) : ?>
                                                                            <option value="<?= $val['farmer_id']; ?>">
                                                                                <?= $val['farmer_first_name']; ?> <?= $val['farmer_last_name']; ?>
                                                                            </option>
                                                                        <?php endforeach; ?>
                                                                    </select>

                                                                </div>
                                                        <div class="mb-3">
                                                            <label for="recipient-name" class="col-form-label">quantity:</label>
                                                            <input  required type="text" class="form-control" id="recipient-name" name="qua" >

                                                           
                                                        </div>
                                                     

                                                        <div class="divider">
                                                            <div class="row">
                                                                <div class="col">
                                                                    <a type="button" class="btn btn-secondary" href="administrators.php">cancel</a>
                                                                </div>
                                                                <div class="col">
                                                                    <button type="submit" name="pass" class="btn btn-primary">Pass</button>
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