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
                                <table id="datatablesSimple">


                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>name</th>
                                            <th>quantity</th>
                                            <th>animal breed</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>id</th>
                                            <th>name</th>
                                            <th>quantity</th>
                                            <th>animal breed</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>





                                        <?php
                                        $c=[$pdo,'animal'];
                                        $access->retriving($c);
                                        foreach ($GLOBALS['dat'] as $dat => $value) : ?>
                                            <tr>
                                                <td><?= $value['animal_id']; ?> </td>
                                                <td><?= $value['animal_name'];  ?></td>
                                                <td><?= $value['animal_quantity']; ?></td>
                                                <td><?= $value['animal_breed']; ?></td>
                                                <td>
                                                    <a href="input_edit.php?animal_id=<?= $value['animal_id'] ?>" class="btn btn-primary"> Edit</a>
                                                    <a href="delets/input_delet.php?animal_id=<?= $value['animal_id']; ?>" class="btn btn-danger" name="delete"> Delete</a>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>

                                    </tbody>


                                </table>


                                <main>
                                    <div class="container-fluid px-4">


                                        <div class="row">
                                            <div class="col">



                                                <div class="modal fade" id="add_input" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Add Input</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>

                                                            <form action="locals/input1.php" method="POST">
                                                                <div class="modal-body">


                                                                    <div class="mb-3">
                                                                        <label for="recipient-name" class="col-form-label">Animal type:</label>
                                                                        <input required type="text" class="form-control" id="recipient-name" name="type" required>
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="recipient-name" class="col-form-label">Animal breed:</label>
                                                                        <input required type="text" class="form-control" id="recipient-name" name="breed" required>
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="recipient-name" class="col-form-label">Animal Quantity:</label>
                                                                        <input required type="text" class="form-control" id="recipient-name" name="quantity">
                                                                    </div>


                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">close</button>
                                                                    <button type="submit" name="submitinput" class="btn btn-primary">save</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="container">
                                                    <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#add_input" data-bs-whatever="@getbootstrap">Add Input</button>

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