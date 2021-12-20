<?php include 'components/header.php';

$c = [$pdo, 'farmer_group'];
$access->retriving($c);
?>


<?php
if (isset($_POST['create_pdf'])) {



    $content .= '</table>';
    $obj_pdf->AddPage();

    $obj_pdf->writeHTML($content);

    ob_end_clean();
    $obj_pdf->Output("sam.pdf", "I");
}
?>

<?php include 'assets/includes/nav_bar.php' ?>


<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <a class="nav-link" href="index.html">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Inputs
                    </a>


                </div>
            </div>

        </nav>
    </div>

    <?php include 'assets/includes/sidebar.php' ?>


    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-2">Inputs</h1>
                <!-- <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol> -->



                <div class="row">
                    <div class="col">


                        <div class="card mb-4 mt-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Inputs
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
                                <table class="table table-striped">


                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>name</th>
                                            <th>quantity</th>
                                   
                                        </tr>
                                    </thead>
                                 
                                    <tbody>

                                        <?php
                                        $c=[$pdo,'animal'];
                                        $access->retriving($c);
                                        foreach ($GLOBALS['dat'] as $dat => $value) : ?>
                                            <tr>
                                                <td><?= $value['animal_id']; ?> </td>
                                                <td><?= $value['animal_name'];  ?></td>
                                                <td><?= $value['animal_quantity']; ?></td>
                                             
                                            </tr>
                                        <?php endforeach; ?>

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