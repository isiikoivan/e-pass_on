<?php

include 'components/header.php';

$title = "List Of Farmers And Groups ";
$author = $_SESSION['dean']['admin_fname'] . ' ' . $_SESSION['dean']['admin_lname'];
if (isset($_POST['create_pdf'])) {
    $access->twotab($pdo);
    // print_r($data);
    //#########################################################################

    //########################################################################
    require_once('tcpdf_make/tcpdf.php');

    $obj_pdf = new  TCPDF('P', 'mm', 'A4');
    $obj_pdf->setPrintHeader(false);
    $obj_pdf->setPrintFooter(false);
    $obj_pdf->AddPage();
    $obj_pdf->SetAutoPageBreak(TRUE, 10);

    $obj_pdf->SetFont('Helvetica', '', 16);
    $obj_pdf->Cell(190, 10, "E-PASS ON REGISTERED FARMERS (NAADS)", 0, 1, 'C');

    $obj_pdf->SetFont('Helvetica', '', 12);
    $obj_pdf->Cell(190, 10, $title, 0, 1, 'C');

    $obj_pdf->SetFont('Helvetica', '', 10);
    $obj_pdf->Cell(30, 6, "Generated by:" . " " . $author, 0);
    $obj_pdf->Cell(160, 6, "", 0);
    $obj_pdf->Ln();
    $obj_pdf->Cell(30, 6, "Signature:", 0);
    $obj_pdf->Cell(160, 6, "", 0);
    $obj_pdf->Ln();
    $obj_pdf->Ln(2);

    $obj_pdf->Cell(80, 5, "Farmer Names", 1);
    $obj_pdf->Cell(60, 5, "Contacts", 1);
    $obj_pdf->Cell(50, 5, "Farmer Groups", 1);
    $obj_pdf->Ln();
    $obj_pdf->Ln(2);

    foreach ($_SESSION['three'] as $da => $d) {

        $allnames = $d['farmer_first_name'] . " " . $d['farmer_last_name'] . " " . $d['farmer_last_others'];
        $obj_pdf->Cell(80, 5, $allnames, 1);
        $obj_pdf->Cell(60, 5,  $d['farmer_phonenumber'], 1);
        $obj_pdf->Cell(50, 5, $d['group_name'], 1);
        $obj_pdf->Ln();
    }


    $obj_pdf->writeHTMLCell(192, 0, 9, '', $html, 0);
    //out put
    ob_end_clean();
    $obj_pdf->Output();

    $obj_pdf->Output("sam.pdf", "I");
}



?>



<?php include 'assets/includes/nav_bar.php' ?>


<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">

                    <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">

                    </div>

                    <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">

                            <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">

                            </div>


                        </nav>
                    </div>
                    <div class="sb-sidenav-menu-heading">Addons</div>

                </div>
            </div>

        </nav>
    </div>

    <?php include 'assets/includes/sidebar.php' ?>

    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Dashboard</h1>
                <!-- <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol> -->
                <?php
                // $access->threetab($pdo);
                // print_r($_SESSION['joinone']);
                ?>
                <?php include 'assets/includes/rowcards.php' ?>

                <?php
                // $access->dbconnect('127.0.0.1','passon_db2','root','');
                //                 $stmt=$pdo->prepare("SELECT farmer_group.group_name,farmer.farmer_first_name FROM farmer_group,farmer WHERE farmer_group.group_id = farmer.farmer_group_group_id");

                //                 $exec=$stmt->execute();

                //                 $data =$exec->fetch(PDO::FETCH_ASSOC);

                //                 print_r($data);

                ?>

                <div class="row">
                    <div class="col">

                        <div class="card mb-4 mt-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Farmers
                                <div class="row align-center">
                                    <div class="col"></div>
                                    <div class="col">
                                        <form method="post">
                                            <button class="btn btn-success text-white " type="submit" name="create_pdf"><i class="fas fa-download"></i>
                                                generate farmer report
                                            </button>

                                        </form>
                                    </div>
                                    <div class="col"></div>
                                </div>

                            </div>

                            <div class="card-body">

                                <?php
                                // $access->localone($pdo);
                                // $access->twotab($pdo);
                                // print_r($_SESSION['two']);
                                // $access->sixtab($pdo);
                                // print_r($_SESSION['join6']);
                                // var_dump($data);
                                // joins for the reports
                                // $access->threetab($pdo);
                                // echo '\n';
                                // print_r($_SESSION['three']);

                                // $access->threetabs($pdo);
                                // echo '\n';
                                // print_r($_SESSION['threetabs']);
                                // $access->trial($pdo, '1');echo '\n';
                                // $id=$_SESSION['dean']['farmer_group_group_id'];
// $access->sixtab($pdo);
// print_r($_SESSION['join6']);
// $access->passontrack1($pdo);
// print_r($_SESSION['track']);
// echo '-----------------';
// print_r($_SESSION['c']);
// echo '-----------------';
// $access->passontrack2($pdo);
// print_r($_SESSION['track']);
// echo '-----------------';
// print_r($_SESSION['co']);
                                //counting farmers in agroup
                                //     $access->conunt_val($pdo,'farmer','farmer_group_group_id',5);
                                //     print_r($_SESSION['number']);
                                //displaying farmers in agroup
                                // $access->finding_value($pdo,'farmer','farmer_group_group_id',5);
                                //    print_r($_SESSION['group_members']);
                                ?>
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th> first name</th>
                                            <th> second name</th>
                                            <th>last name</th>
                                            <th>contact</th>

                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th> first name</th>
                                            <th> second name</th>
                                            <th>last name</th>
                                            <th>contact</th>
                                            <!-- <th>pass on</th> -->

                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                        $c = [$pdo, 'farmer'];
                                        $access->retriving($c);
                                        ?>
                                        <tr>
                                            <?php foreach ($GLOBALS['dat'] as $dat => $value) : ?>
                                        <tr>

                                            <td><?= $value['farmer_first_name']; ?></td>
                                            <td><?= $value['farmer_last_name']; ?></td>
                                            <td><?= $value['farmer_last_other']; ?></td>
                                            <td><?= $value['farmer_phonenumber'];  ?></td>

                                            <td>
                                                <a href="index_edit.php?farmer_id=<?= $value['farmer_id'] ?>" class="btn btn-primary"> Edit</a>
                                                <a href="delets/farmer_delet.php?farmer_id=<?= $value['farmer_id']; ?>" class="btn btn-danger" name="delete"> Delete</a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                    </tr>

                                    </tbody>

                                </table>

                                <main>
                                    <div class="container-fluid px-4">


                                        <div class="row">
                                            <div class="col">



                                                <div class="modal fade" id="add_input" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" style="max-width: 60%;" role="document">
                                                        <form action="locals/input4.php" method="POST" enctype="multipart/form-data">

                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Add Input</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="row px-4 ">

                                                                        <div class="col-lg-6 ">


                                                                            <div class="form-group mt-2">
                                                                                <label for="fname">First Name</label>
                                                                                <input type="text" class="form-control" required name="fname" aria-describedby="firstname" placeholder="Enter First Name">
                                                                            </div>
                                                                            <div class="form-group mt-2">
                                                                                <label for="others">Others(names)</label>
                                                                                <input type="text" class="form-control" name="others" placeholder="Enter Others Names">
                                                                            </div>
                                                                            <div class="form-group mt-2">
                                                                                <label for="pnumber">Phone Number</label>
                                                                                <input type="text" class="form-control" required name="pnumber" aria-describedby="phonenumber" placeholder="Enter Phone Number">
                                                                            </div>
                                                                            <div class="form-group mt-2">
                                                                                <label for="occupation">Occupation</label>
                                                                                <input type="text" class="form-control" name="occupation" placeholder="Enter Occupation">
                                                                            </div>
                                                                            <div class="form-group mt-2 ">
                                                                                <div class="row">
                                                                                    <div class="col-6">
                                                                                        <label for="pass1">Create password</label>
                                                                                        <input type="text" class="form-control" name="password" placeholder="Create Password">

                                                                                    </div>
                                                                                    <div class="col-6">
                                                                                        <label for="pass2">Confirm password</label>
                                                                                        <input type="password" class="form-control" name="passwordc" placeholder="Confirm Password">

                                                                                    </div>
                                                                                </div>

                                                                            </div>



                                                                        </div>


                                                                        <div class="col-lg-6 ">


                                                                            <div class="form-group mt-2">
                                                                                <label for="lname">Last Name</label>
                                                                                <input type="text" class="form-control" required name="lname" aria-describedby="lastname" placeholder="Enter Last Name">
                                                                            </div>
                                                                            <div class="form-group mt-2">
                                                                                <label for="dob">Date of Birth</label>
                                                                                <input type="date" class="form-control" required name="dob" placeholder="Enter Date of Birth">
                                                                            </div>
                                                                            <div class="form-group mt-2">
                                                                                <label for="Email">Email Address</label>
                                                                                <input type="email" class="form-control" name="email" aria-describedby="Email" placeholder="Enter Email">
                                                                            </div>
                                                                            <div class="form-group mt-2">
                                                                                <label for="nin">National Number (NIN)</label>
                                                                                <input type="text" class="form-control" name="nin" placeholder="National name Number">
                                                                            </div>


                                                                            <div class="row">
                                                                                <div class="col">
                                                                                    <div class="form-group mb-3 ">
                                                                                        <label for="cl_gender" class="text_secondary">Gender</label>
                                                                                        <select class="form-control" name="gender">
                                                                                            <option value="selected">Choose gender </option>
                                                                                            <option value='M'>Male</option>
                                                                                            <option value='F'>Female</option>
                                                                                            <option value='O'>Others</option>
                                                                                        </select>

                                                                                    </div>
                                                                                </div>
                                                                                <div class="col">
                                                                                    <label for="cl_gender" class="text_secondary">Groups</label>
                                                                                    <div class="form-group mb-3 ">
                                                                                        <?php
                                                                                        $c = [$pdo, 'farmer_group'];
                                                                                        $access->retriving($c);

                                                                                        ?>

                                                                                        <select name="f_group">
                                                                                            <option selected>Allocate group</option>
                                                                                            <?php foreach ($GLOBALS['dat'] as $dat => $val) : ?>
                                                                                                <option value="<?= $val['group_id']; ?>">
                                                                                                    <?= $val['group_name']; ?>
                                                                                                </option>
                                                                                            <?php endforeach; ?>
                                                                                        </select>

                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>


                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">close</button>
                                                                    <button type="submit" name="submitfarmer" class="btn btn-primary">save</button>
                                                                </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="container">
                                                <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#add_input" data-bs-whatever="@getbootstrap">Add Farmer</button>

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