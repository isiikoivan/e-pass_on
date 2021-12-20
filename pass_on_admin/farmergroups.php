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
               


                <div class="row">
                    <div class="col">
                        // print_r($_SESSION['dean']);
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
                                    <th>Group Progress</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>

                                    <th>group name</th>
                                    <th>created on</th>
                                    <th>Action</th>
                                    <th>Group Progress</th>
                                </tr>
                            </tfoot>
                            <tbody>





                                <?php
                                $c = [$pdo, "farmer_group"];
                                $access->retriving($c);
                                foreach ($GLOBALS['dat'] as $dat => $value) : ?>
                                    <tr>
                                        <td><?= $value['group_name']; ?> </td>
                                        <td><?= $value['created_on'];  ?></td>

                                        <td>
                                            <a href="farmergroups_edit.php?group_id=<?= $value['group_id'] ?>" class="btn btn-primary" name="edit_group"> Edit</a>

                                            <a href="delets/farmer_group_delet.php?group_id=<?= $value['group_id']; ?>" class="btn btn-danger" name="delete"> Delete</a>

                                            <a href="allocate_page.php?group_id=<?= $value['group_id']; ?>" class="btn btn-secondary" name="allocate"> Allocate Input</a>

                                        </td>
                                        <td>
                                            <?php
                                            //counting farmers in agroup
                                            $id = $value['group_id'];
                                            $access->conunt_val($pdo, 'farmer', 'farmer_group_group_id', $id);
                                            print_r($_SESSION['number']);
                                            $access->passontrack1($pdo);
                                            // print_r($_SESSION['track']);
                                            $q = (($_SESSION['c'] - $_SESSION['number']) / ($_SESSION['number'] * $_SESSION['c'])) * 100;
                                            $v = $q;
                                            $m = "%";
                                            $k = $v . $m;

                                            ?>
                                            <div class="progress" style="height: 30px;">
                                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width:<?= $k ?>">

                                                    <span text-white><?= $k ?> Sucess</span>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>

                            </tbody>


                        </table>

                        <div class="container-fluid px-4">


                            <div class="row">
                                <div class="col">



                                    <div class="modal fade" id="add_group" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Add Group</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>

                                                <form action="locals/locale6.php" method="POST">
                                                    <div class="modal-body">


                                                        <div class="mb-3">
                                                            <?php
                                                            $c = [$pdo, 'village'];
                                                            $access->retriving($c);

                                                            ?>
                                                            <label for="stage">Choose Village</label>
                                                            <select name="vil">
                                                                <option selected>village</option>
                                                                <?php foreach ($GLOBALS['dat'] as $dat => $val) : ?>
                                                                    <option value="<?= $val['village_id']; ?>">
                                                                        <?= $val['village_name']; ?>
                                                                    </option>
                                                                <?php endforeach; ?>
                                                            </select>

                                                        </div>

                                                        <div class="mb-3">
                                                            <label for="recipient-name" class="col-form-label">Group Name:</label>
                                                            <input required type="text" class="form-control" name="groupsname">
                                                        </div>


                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">close</button>
                                                        <button type="submit" name="submitgroup" class="btn btn-primary">save</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container">
                                        <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#add_group">Add Group</button>

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