<?php include 'components/header.php';

$c = [$pdo, 'farmer_group'];
$access->retriving($c);
?>


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
                                            <th>group id</th>
                                            <th>group name</th>
                                            <th>created on</th>
                                          
                                        </tr>
                                    

     ';

    foreach ($GLOBALS['dat'] as $dat => $value) {
        $content .=
            '<tr>
<td>' . $value['group_id'] . '</td>
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
                    <div class="sb-sidenav-menu-heading">Interface</div>
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                        Layouts
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="layout-static.html">Static Navigation</a>
                            <a class="nav-link" href="layout-sidenav-light.html">Light Sidenav</a>
                        </nav>
                    </div>
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                        <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                        Pages
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                Authentication
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="login.html">Login</a>
                                    <a class="nav-link" href="register.html">Register</a>
                                    <a class="nav-link" href="password.html">Forgot Password</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                Error
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="">401 Page</a>
                                    <a class="nav-link" href="404.html">404 Page</a>
                                    <a class="nav-link" href="500.html">500 Page</a>
                                </nav>
                            </div>
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
            <div class="sb-sidenav-footer">
                <div class="small">Logged in as:</div>
                Start Bootstrap
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
                        <?php print_r($_SESSION['dean']); ?>

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
                                            <th>group id</th>
                                            <th>group name</th>
                                            <th>created on</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>group id</th>
                                            <th>group name</th>
                                            <th>created on</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>





                                        <?php foreach ($GLOBALS['dat'] as $dat => $value) : ?>
                                            <tr>
                                                <td><?= $value['group_id']; ?> </td>
                                                <td><?= $value['group_name'];  ?></td>
                                                <td><?= $value['created_on']; ?></td>
                                                <td>
                                                    <a href="update_pdt.php?id=<?= $dat->farmer_id ?>" class="btn btn-primary"> Edit</a>
                                                    <a href="runitall/deleting.php?id=<?= $value['group_id']; ?>" class="btn btn-danger" name="delete"> Delete</a>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>

                                    </tbody>


                                </table>
                                <div class=" mt-2 mb-3 ">
                                    <button type="button" name="animal" data-toggle="modal" data-target="#animalmodal" class="btn btn-block btn-info">Create Group </button>
                                </div>

                                <!-- animal modal -->
                                <div class="modal fade" id="animalmodal" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Add Group</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body mb-2">
                                                <?php include 'admin_modals/usermodals/farmergroup.php'; ?>


                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary" name="save_group">Save</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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