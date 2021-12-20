<?php include 'components/header.php';


?>

<?php include 'assets/includes/nav_bar.php' ?>


<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">

                    <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">

                        </nav>
                    </div>
                    <div class="sb-sidenav-menu-heading">Addons</div>
                    <a class="nav-link" href="charts.html">
                        <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                        Charts
                    </a>
                    <a class="nav-link" href="tables.html">
                        <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                        Tables
                    </a>
                </div>
            </div>

        </nav>
    </div>

    <?php include 'assets/includes/sidebar.php' ?>



    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Farmer Account</h1>
                <div class="row">
                    <div class="col">

                        <div class="card mb-4 mt-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Farmers(Members in a group)

                                <?php
                                // print_r($_SESSION['dean']);
                                // echo '----';
                                // $id = $_SESSION['dean']['farmer_group_group_id'];
                                // echo $id;
                                // echo '----';
                                // $access->conunt_val($pdo, 'farmer', 'farmer_group_group_id', $id);
                                // print_r($_SESSION['number']);

                             
                                // $access->sixtab($pdo);
                                // print_r($_SESSION['join6']);
                                // var_dump($data);
                                //joins for the reports
                               //$access->threetab($pdo);echo '\n';
                               // $access->threetabs($pdo);echo '\n';
    
                                // $access->trial($pdo, '1');echo '\n';
                            // $id=$_SESSION['dean']['farmer_group_group_id'];
                               
    //counting farmers in agroup
                            //     $access->conunt_val($pdo,'farmer','farmer_group_group_id',5);
                            //     print_r($_SESSION['number']);
                            //displaying farmers in agroup
                            // echo '---';
                            // $access->conunt_val($pdo, 'farmer', 'farmer_group_group_id', $id);
                            //         print_r($_SESSION['number']);
                           
                            
                                ?>
                            </div>
                            <div class="card-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th> first name</th>
                                            <th> second name</th>
                                            <th>last name</th>
                                            <th>contact</th>
                                            <th>occupation</th>

                                        </tr>
                                    </thead>

                                    <?php
                                    $c = [$pdo, 'farmer_group'];
                                     $access->retriving($c);
                                    // $id = $_SESSION['dean']['group_id'];
                                    // print_r($id);
                                    // $access->locate($pdo, 'farmer_group_group_id', $id, 'farmer');
                                    // print_r($data);

                                    // $access->locateValues($pdo, $id, $table_name, $value);
                                   // print_r($_SESSION['dean']);
                                    // echo '----';
                                    $id = $_SESSION['dean']['farmer_group_group_id'];
                                    // echo $id;echo '@@@@@';
                                    $access->finding_value($pdo,'farmer','farmer_group_group_id',$id);
                                    //print_r($_SESSION['group_members']);
                                    
                                    ?>
                                    <tbody>

                                        <tr>
                                            <?php foreach ($_SESSION['group_members'] as $dat => $value) : ?>
                                        <tr>

                                            <td><?= $value['farmer_first_name']; ?></td>
                                            <td><?= $value['farmer_last_name']; ?></td>
                                            <td><?= $value['farmer_last_others']; ?></td>
                                            <td><?= $value['farmer_phonenumber'];  ?></td>
                                            <td><?= $value['farmer_occupation'];  ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                    </tr>

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