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
                <h1 class="mt-2">Profile</h1>

                <div class="row">
                    <div class="col">


                        <div class="card mb-4 mt-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Details

                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <div class="align-center">
                                            <img src=>dddddd
                                        </div>
                                        <div class="row">

                                            <div class="row"> Names:</div>

                                            <div class="col">
                                                <?php print_r($_SESSION['dean']['farmer_first_name']); ?>
                                                <?php print_r($_SESSION['dean']['farmer_last_name']); ?>
                                                <?php  ?>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <?php
                                            $variable = $_SESSION['dean']['farmer_group_group_id'];

                                            $id = $_SESSION['dean']['farmer_group_group_id'];
                                            // echo $id;echo '@@@@@';
                                            // $access->finding_value($pdo,'farmer_group','farmer_group_group_id',$id);;
                                            //         print_r($data);
                                            ?>
                                            <div class="row"> Group:</div>

                                            <div class="col">
                                                <?php
                                                $sql = "SELECT group_name FROM farmer_group WHERE group_id=$variable";

                                                $stmt = $pdo->prepare($sql);

                                                $exec = $stmt->execute();


                                                $data = $stmt->fetch(PDO::FETCH_ASSOC);

                                                print_r($data['group_name']);
                                                ?>

                                            </div>
                                        </div>

                                    </div>
                                    <div class="col">
                                        <div class="row">

                                            <div class="row"> Phone Number:</div>

                                            <div class="col">
                                                <?php print_r($_SESSION['dean']['farmer_phonenumber']); ?>

                                            </div>
                                        </div>
                                        <div class="row">

                                            <div class="row"> Email:</div>

                                            <div class="col">
                                                <?php print_r($_SESSION['dean']['farmer_email']); ?>

                                            </div>
                                        </div>
                                        <div class="row">

                                            <div class="row"> Gender:</div>

                                            <div class="col">
                                                <?php print_r($_SESSION['dean']['farmer_sex']); ?>

                                            </div>
                                        </div>

                                        <div class="row">

                                            <div class="row"> National ID Number:</div>

                                            <div class="col">
                                                <?php print_r($_SESSION['dean']['farmer_nin']); ?>

                                            </div>
                                        </div>
                                        <div class="row">

                                            <div class="row"> Date of Birth:</div>

                                            <div class="col">
                                                <?php print_r($_SESSION['dean']['farmer_dob']); ?>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col"></div>
                                </div>
                            </div>


                        </div>
                    </div>


                </div>

            </div>
        </main>
    </div>

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