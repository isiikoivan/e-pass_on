<?php include 'components/header.php';

$c = [$pdo, 'farmer_group'];
$access->retriving($c);

$total = rand(1, 100);
$current = rand(1, $total);

$percent = round(($current / $total) * 100, 1);


?>
<style type="text/CSS">
    .outer{

    height: 25px;
    width: 100px;
  border:solid 1px lightblue;
}

.inner{

height: 25px;
width: <?= $percent ?>;

background-color: lightblue;
}

</style>




<?php
if (isset($_POST['create_pdf'])) {

    require_once('tcpdf_make/tcpdf.php');
    $obj_pdf = new  TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
    $obj_pdf->SetCreator(PDF_CREATOR);
    $obj_pdf->SetTitle("e-pass on groups");
    $obj_pdf->setHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);
    $obj_pdf->setHeaderFont(array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
    $obj_pdf->setFooterFont(array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
    $obj_pdf->SetDefaultMonospacedFont('helvetica');
    $obj_pdf->setFooterMargin(PDF_MARGIN_FOOTER);
    $obj_pdf->SetMargins(PDF_MARGIN_LEFT, '5', PDF_MARGIN_RIGHT);
    $obj_pdf->setPrintHeader(false);
    $obj_pdf->setPrintFooter(false);
    $obj_pdf->SetAutoPageBreak(TRUE, 10);
    $obj_pdf->SetFont('helvetica', '', 12);
    $content = '';
    $content .= '<h3 align="center">E-PASS ON FARMER GROUPS</h3> 
     <table border="1" cellspacing="0" cellpading="5">
                                   
                                        <tr>
                                           
                                            <th>group name</th>
                                            <th>created on</th>
                                          
                                        </tr>
                                    

     ';

    foreach ($GLOBALS['dat'] as $dat => $value) {
        $content .=
            '<tr>

<td>' . $value['group_name'] . '</td>
<td>' . $value['created_on'] . '</td>
                                          
</tr>';
    }

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
                        Dashboard
                    </a>


                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                        <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                        Pages
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">

                            <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">

                            </div>

                            <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">

                            </div>
                        </nav>
                    </div>
                    <div class="sb-sidenav-menu-heading">Addons</div>

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
                <h1 class="mt-2">Farmer Groups</h1>
                <!-- <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol> -->



                <div class="row">
                    <div class="col">
                        <!--// print_r($_SESSION['dean']);
                               // $c = [$pdo, 'farmer_group'];
                               // $access->retriving($c);  -->
                        <div class="card mb-4 mt-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Farmers
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

                                            <th>group name</th>
                                            <th>created on</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>

                                            <th>group name</th>
                                            <th>created on</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>





                                        <?php
                                        $c = [$pdo, "farmer_group"];
                                        $access->retriving($c);
                                        foreach ($GLOBALS['dat'] as $dat => $value) : ?>
                                            <tr>
                                                <td><?= $value['group_id']; ?> </td>
                                                <td><?= $value['group_name'];  ?></td>

                                                <td>
                                                    <a href="update_pdt.php?id=<?= $dat->farmer_id ?>" class="btn btn-primary"> Edit</a>
                                                    <a href="runitall/deleting.php?id=<?= $value['group_id']; ?>" class="btn btn-danger" name="delete"> Delete</a>
                                                    <a href="runitall/deleting.php?id=<?= $value['group_id']; ?>" class="btn btn-danger" name="delete"> Allocate a</a>

                                                </td>
                                                <td>
                                                    <div class="outer">
                                                        <div class="inner"></div>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>

                                    </tbody>


                                </table>

                                <div class="container-fluid px-4">


                                    <div class="row">
                                        <div class="col">



                                            <div class="modal fade" id="add_support" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Agricultural Support</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>

                                                        <form action="locals/suppo.php" method="post">
                                                            <div class="modal-body">
                                                                <div class="mb-3">
                                                                    <label for="recipient-name" class="col-form-label">First Name</label>
                                                                    <input required type="text" class="form-control" name="fname">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="recipient-name" class="col-form-label">Last Name</label>
                                                                    <input required type="text" class="form-control" name="lname">
                                                                </div>
                                                                <div class="form-group mb-3 ">
                                                                    <label for="cl_gender" class="text_secondary">Gender</label>
                                                                    <select class="form-control" name="ssex">
                                                                        <option value="selected">Gender </option>
                                                                        <option value='M'>Male</option>
                                                                        <option value='F'>Female</option>
                                                                        <option value='O'>Others</option>
                                                                    </select>

                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="recipient-name" class="col-form-label">Expertise</label>
                                                                    <input required type="text" class="form-control" name="sexpert">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="recipient-name" class="col-form-label">Nationality</label>
                                                                    <input required type="text" class="form-control" name="snation">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="recipient-name" class="col-form-label">Contact</label>
                                                                    <input required type="text" class="form-control" name="scontact">
                                                                </div>

                                                                <div class="mb-3">
                                                                    <label for="recipient-name" class="col-form-label">Address</label>
                                                                    <input required type="text" class="form-control" name="saddress">
                                                                </div>


                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">close</button>
                                                                <button type="submit" name="submitsupport" class="btn btn-primary">save</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="container">
                                                <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#add_support">Add Support Personnel</button>

                                            </div>



                                        </div>



                                    </div>

                                </div>

                                <!-- animal modal -->

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