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
                    Farmer _Pass_on activity

                </h1>
                <!-- <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol> -->



                <div class="row">
                    <div class="col">


                        <div class="card mb-4 mt-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                pass on
                                <div class="row ">
                                    <div class="col"></div>
                                    <div class="col">
                                      
                                        <div class="col">

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <table class="table table-striped">


                                    <thead>
                                        <tr>

                                            <th>From Names</th>
                                            <th>To</th>
                                            <!-- <th>quantity</th> -->
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>






                                        <form action="locals/pass_on.php" method="post">
                                            <?php
                                            $id = $_SESSION['dean']['farmer_group_group_id'];

                                        //     $sql = "SELECT animal.animal_breed,animal.animal_quantity,animal.animal_type ,allocate_input.farmer_farmer_id,allocate_input.animal_animal_input,farmer.farmer_first_name,farmer.farmer_last_name
                                        // FROM animal  AND INNER JOIN allocate_input ON allocate_input.animal_animal_id = animal.animal_id INNER JOIN farmer ON allocate_input.farmer_farmer_id = farmer.farmer_id
                                        //  ";

                                        //     $stmt = $pdo->prepare($sql);
                                        //     $stmt->execute();
                                        //     $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
                                        //     var_dump($data);
                                            // $id = $_SESSION['dean']['farmer_group_group_id'];
                                            // // echo $id;echo '@@@@@';
                                            // $access->locate($pdo, 'farmer', 'farmer_group_group_id', $id);

                                            // foreach ($_SESSION['group_members'] as $dat => $value) : ?>
                                                <tr>
                                                    <td><?= $_SESSION['dean']['farmer_first_name']; ?> <?= $_SESSION['dean']['farmer_last_name']; ?> </td>
                                                    <td>

                                                        <label for="stage">Pass on to:</label>
                                                      
                                                    </td>

                                                    <!-- <td> <label for="recipient-name" class="col-form-label">animal_quantity:</label>
                                                    <input type="text" class="form-control" id="recipient-name" name="scountyname">
                                                </td> -->

                                                    <td>

                                                        <a href="passon.php?farmer_id=<?= $_SESSION['dean']['farmer_id']; ?>" class="btn btn-primary"> Pass on</a>

                                                    </td>
                                             
                                                </tr>

                                        </form>


                                    </tbody>


                                </table>



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