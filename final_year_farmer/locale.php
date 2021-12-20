<?php include 'components/header.php';

$c = [$pdo, 'farmer_group'];
$access->retriving($c);





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


    <?php include 'assets/includes/sidebar.php' ?>


    <div id="layoutSidenav_content">


        <?php include 'assets/includes/rowcard.php' ?>


        <div class="card  py-2 px-2 mt-0 mx-lg-8">

            <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            Districts
                        </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <main>
                                <div class="container-fluid px-4">
                                    <h1 class="mt-2">Districts</h1>
                                    <!-- <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol> -->



                                    <div class="row">
                                        <div class="col">

                                            <div class="card mb-4 mt-4">
                                                <div class="card-header">
                                                    <i class="fas fa-table me-1"></i>
                                                    Districts

                                                </div>
                                                <div class="card-body">
                                                    <table id="datatablesSimple">


                                                        <thead>
                                                            <tr>

                                                                <th>district name</th>
                                                                <th>added on</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tfoot>
                                                            <tr>

                                                                <th>Districts</th>
                                                                <th>added on</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </tfoot>
                                                        <tbody>




                                                            <?php


                                                            $c = [$pdo, 'district'];
                                                            $access->retriving($c);

                                                            foreach ($GLOBALS['dat'] as $dat => $value) : ?>
                                                                <tr>

                                                                    <td><?= $value['district_name']; ?></td>
                                                                    <td><?= $value['created_on']; ?></td>
                                                                    <td>
                                                                        <a href="update_pdt.php?id=<?= $dat->farmer_id ?>" class="btn btn-primary"> Edit</a>
                                                                        <a href="delets/delet_district.php?district_id=<?= $value['district_id']; ?>" class="btn btn-danger" name="delete"> Delete</a>
                                                                    </td>
                                                                </tr>
                                                            <?php endforeach; ?>

                                                        </tbody>


                                                    </table>
                                                    <div class="modal fade" id="add_district" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Add District</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>

                                                                <form action="locals/districtin.php" method="POST">
                                                                    <div class="modal-body">


                                                                        <div class="mb-3">
                                                                            <label for="recipient-name" class="col-form-label">District Name:</label>
                                                                            <input type="text" class="form-control" id="recipient-name" name="district">
                                                                        </div>

                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">close</button>
                                                                        <button type="submit" name="submitdistrict" class="btn btn-primary">save</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="container">
                                                        <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#add_district" data-bs-whatever="@getbootstrap">Add District</button>

                                                    </div>


                                                </div>
                                            </div>
                                        </div>



                                    </div>

                                </div>

                            </main>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            County
                        </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">

                            <main>

                                <div class="container-fluid px-4">
                                    <h1 class="mt-2">County</h1>



                                    <div class="row">
                                        <div class="col">

                                            <div class="card mb-4 mt-4">
                                                <div class="card-header">
                                                    <i class="fas fa-table me-1"></i>
                                                    County
                                                </div>
                                                <div class="card-body">
                                                    <table class="table table-striped">
                                                        <thead>
                                                            <tr>


                                                                <th>County</th>
                                                                <th>Added on</th>

                                                            </tr>
                                                        </thead>
                                                        <tbody>




                                                            <?php


                                                            $c = [$pdo, 'county'];
                                                            $access->retriving($c);

                                                            foreach ($GLOBALS['dat'] as $dat => $value) : ?>
                                                                <tr>

                                                                    <td><?= $value['county_name']; ?></td>
                                                                    <td><?= $value['county_date']; ?></td>
                                                                    <td>
                                                                        <a href="update_pdt.php?id=<?= $dat->farmer_id ?>" class="btn btn-primary"> Edit</a>
                                                                        <a href="delets/county_delet.php?county_id=<?= $value['county_id']; ?>" class="btn btn-danger" name="delete"> Delete</a>
                                                                    </td>
                                                                </tr>
                                                            <?php endforeach; ?>

                                                        </tbody>
                                                    </table>
                                                    <div class="modal fade" id="add_county" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Add County</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>

                                                                <form action="locals/locale2.php" method="POST">
                                                                    <div class="modal-body">

                                                                        <div class="mb-3">
                                                                            <?php
                                                                            $c = [$pdo, 'district'];
                                                                            $access->retriving($c);

                                                                            ?>
                                                                            <label for="stage">Choose district</label>
                                                                            <select name="district">
                                                                                <option selected>District</option>
                                                                                <?php foreach ($GLOBALS['dat'] as $dat => $val) : ?>
                                                                                    <option value="<?= $val['district_id']; ?>">
                                                                                        <?= $val['district_name']; ?>
                                                                                    </option>
                                                                                <?php endforeach; ?>
                                                                            </select>

                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="recipient-name" class="col-form-label">county Name:</label>
                                                                            <input type="text" class="form-control" id="recipient-name" name="countyname">
                                                                        </div>

                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">close</button>
                                                                        <button type="submit" name="submitcounty" class="btn btn-primary">save</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="container">
                                                        <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#add_county">Add County</button>

                                                    </div>



                                                </div>
                                            </div>
                                        </div>



                                    </div>

                                </div>

                            </main>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                            Sub_county
                        </button>
                    </h2>
                    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <main>
                                <div class="container-fluid px-4">
                                    <h1 class="mt-2">Sub County</h1>

                                    <div class="row">
                                        <div class="col">

                                            <div class="card mb-4 mt-4">
                                                <div class="card-header">
                                                    <i class="fas fa-table me-1"></i>
                                                    Sub County
                                                </div>
                                                <div class="card-body">
                                                    <table class="table table-striped">
                                                        <thead>
                                                            <tr>


                                                                <th>Sub County</th>
                                                                <th>Added on</th>

                                                            </tr>
                                                        </thead>
                                                        <tbody>




                                                            <?php


                                                            $c = [$pdo, 'sub_county'];
                                                            $access->retriving($c);

                                                            foreach ($GLOBALS['dat'] as $dat => $value) : ?>
                                                                <tr>

                                                                    <td><?= $value['sub_county_name']; ?></td>
                                                                    <td><?= $value['sub_county_date']; ?></td>
                                                                    <td>
                                                                        <a href="update_pdt.php?id=<?= $dat->farmer_id ?>" class="btn btn-primary"> Edit</a>
                                                                        <a href="delets/sub_county_delet.php?sub_county_id=<?= $value['sub_county_id']; ?>" class="btn btn-danger" name="delete"> Delete</a>
                                                                    </td>
                                                                </tr>
                                                            <?php endforeach; ?>

                                                        </tbody>
                                                    </table>
                                                    <div class="modal fade" id="add_scounty" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Add Sub County</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>

                                                                <form action="locals/locale3.php" method="POST">
                                                                    <div class="modal-body">

                                                                        <div class="mb-3">
                                                                            <?php
                                                                            $c = [$pdo, 'county'];
                                                                            $access->retriving($c);

                                                                            ?>
                                                                            <label for="stage">Choose county</label>
                                                                            <select name="county">
                                                                                <option selected>County</option>
                                                                                <?php foreach ($GLOBALS['dat'] as $dat => $val) : ?>
                                                                                    <option value="<?= $val['county_id']; ?>">
                                                                                        <?= $val['county_name']; ?>
                                                                                    </option>
                                                                                <?php endforeach; ?>
                                                                            </select>

                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="recipient-name" class="col-form-label">Sub county Name:</label>
                                                                            <input type="text" class="form-control" id="recipient-name" name="scountyname">
                                                                        </div>

                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">close</button>
                                                                        <button type="submit" name="submitscounty" class="btn btn-primary">save</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="container">
                                                        <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#add_scounty">Add Sub County</button>

                                                    </div>



                                                </div>
                                            </div>
                                        </div>



                                    </div>

                                </div>

                        </div>
                        </main>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingfour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsefour" aria-expanded="false" aria-controls="flush-collapseThree">
                                Parish
                            </button>
                        </h2>
                        <div id="flush-collapsefour" class="accordion-collapse collapse" aria-labelledby="flush-headingfour" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <main>
                                    <div class="container-fluid px-4">
                                        <h1 class="mt-2">Parish</h1>

                                        <div class="row">
                                            <div class="col">

                                                <div class="card mb-4 mt-4">
                                                    <div class="card-header">
                                                        <i class="fas fa-table me-1"></i>
                                                        Parish
                                                    </div>
                                                    <div class="card-body">
                                                        <table class="table table-striped">
                                                            <thead>
                                                                <tr>


                                                                    <th>Parish</th>
                                                                    <th>Added on</th>

                                                                </tr>
                                                            </thead>
                                                            <tbody>




                                                                <?php


                                                                $c = [$pdo, 'parish'];
                                                                $access->retriving($c);

                                                                foreach ($GLOBALS['dat'] as $dat => $value) : ?>
                                                                    <tr>

                                                                        <td><?= $value['parish_name']; ?></td>
                                                                        <td><?= $value['parish_date']; ?></td>
                                                                        <td>
                                                                            <a href="update_pdt.php?id=<?= $dat->parish_id ?>" class="btn btn-primary"> Edit</a>
                                                                            <a href="delets/parish_delet.php?parish_id=<?= $value['parish_id']; ?>" class="btn btn-danger" name="delete"> Delete</a>
                                                                        </td>
                                                                    </tr>
                                                                <?php endforeach; ?>

                                                            </tbody>
                                                        </table>
                                                        <div class="modal fade" id="add_parish" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">Add Parish</h5>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </div>

                                                                    <form action="locals/locale4.php" method="POST">
                                                                        <div class="modal-body">

                                                                            <div class="mb-3">
                                                                                <?php
                                                                                $c = [$pdo, 'sub_county'];
                                                                                $access->retriving($c);

                                                                                ?>
                                                                                <label for="stage">Choose Sub County</label>
                                                                                <select name="subcounty">
                                                                                    <option selected>County</option>
                                                                                    <?php foreach ($GLOBALS['dat'] as $dat => $val) : ?>
                                                                                        <option value="<?= $val['sub_county_id']; ?>">
                                                                                            <?= $val['sub_county_name']; ?>
                                                                                        </option>
                                                                                    <?php endforeach; ?>
                                                                                </select>

                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <label for="recipient-name" class="col-form-label">Parish Name:</label>
                                                                                <input type="text" class="form-control" id="recipient-name" name="parishname">
                                                                            </div>

                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">close</button>
                                                                            <button type="submit" name="submitparish" class="btn btn-primary">save</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="container">
                                                            <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#add_parish">Add Parish</button>

                                                        </div>



                                                    </div>
                                                </div>
                                            </div>



                                        </div>

                                    </div>

                            </div>
                            </main>

                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingsix">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsesix" aria-expanded="false" aria-controls="flush-collapsesix">
                                Village
                            </button>
                        </h2>
                        <div id="flush-collapsesix" class="accordion-collapse collapse" aria-labelledby="flush-headingsix" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <main>
                                    <div class="container-fluid px-4">
                                        <h1 class="mt-2">Village</h1>

                                        <div class="row">
                                            <div class="col">

                                                <div class="card mb-4 mt-4">
                                                    <div class="card-header">
                                                        <i class="fas fa-table me-1"></i>
                                                        village
                                                    </div>
                                                    <div class="card-body">
                                                        <table class="table table-striped">
                                                            <thead>
                                                                <tr>


                                                                    <th>village</th>
                                                                    <th>Added on</th>

                                                                </tr>
                                                            </thead>
                                                            <tbody>




                                                                <?php


                                                                $c = [$pdo, 'village'];
                                                                $access->retriving($c);

                                                                foreach ($GLOBALS['dat'] as $dat => $value) : ?>
                                                                    <tr>

                                                                        <td><?= $value['village_name']; ?></td>
                                                                        <td><?= $value['village_date']; ?></td>
                                                                        <td>
                                                                            <a href="update_pdt.php?id=<?= $dat->farmer_id ?>" class="btn btn-primary"> Edit</a>

                                                                            <a href="delets/village_delet.php?village_id=<?= $value['village_id']; ?>" class="btn btn-danger" name="delete"> Delete</a>

                                                                        </td>
                                                                    </tr>
                                                                <?php endforeach; ?>

                                                            </tbody>
                                                        </table>
                                                        <div class="modal fade" id="add_village" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">Add Village</h5>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </div>

                                                                    <form action="locals/locale5.php" method="POST">
                                                                        <div class="modal-body">

                                                                            <div class="mb-3">
                                                                                <?php
                                                                                $c = [$pdo, 'parish'];
                                                                                $access->retriving($c);

                                                                                ?>
                                                                                <label for="stage">Choose Sub County</label>
                                                                                <select name="parish">
                                                                                    <option selected>Sub County</option>
                                                                                    <?php foreach ($GLOBALS['dat'] as $dat => $val) : ?>
                                                                                        <option value="<?= $val['parish_id']; ?>">
                                                                                            <?= $val['parish_name']; ?>
                                                                                        </option>
                                                                                    <?php endforeach; ?>
                                                                                </select>

                                                                            </div>
                                                                            <div class="mb-3">
                                                                                <label for="recipient-name" class="col-form-label">Village Name:</label>
                                                                                <input type="text" class="form-control" id="recipient-name" name="villagename">
                                                                            </div>

                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">close</button>
                                                                            <button type="submit" name="submitvillage" class="btn btn-primary">save</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="container">
                                                            <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#add_village">Add Village</button>

                                                        </div>



                                                    </div>
                                                </div>
                                            </div>



                                        </div>

                                    </div>

                            </div>
                            </main>
                        </div>
                    </div>
                </div>
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