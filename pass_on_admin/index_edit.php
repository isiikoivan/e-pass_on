<?php include 'components/header.php';

$target_id = 'farmer_id';
//in coming id
$id = $_GET[$target_id];

//table name
$table_name = 'farmer';

//target id

//$access->locate($pdo, $target_id, $id, $table_name);

$dataling = $access->locate($pdo, $target_id, $id, $table_name);


if (isset($_POST['update_farmer'])) {

    //in coming id
    $id = $_GET[$target_id];

    // $target_id = 'admin_id';

    //redirecting page
    $redirect_page = 'index.php';

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $others = $_POST['others'];
    $pnumber = $_POST['pnumber'];
    $occupation = $_POST['occupation'];

    $email = $_POST['email'];
    $sex = $_POST['gender'];
    $nin = $_POST['nin'];
    $dob = $_POST['dob'];
    $defaultimagepath = $_FILES['image'];

    $passwordc = $_POST['passwordc'];

    $gfk = $_POST['f_group'];

    //farmer_id

    // if ($pas1 == $passwordc) {
    //   if (!empty(trim($fname)) && !empty(trim($lname)) && !empty(trim($pnumber)) && !empty(trim($passwordc)) && !empty(trim($dob)) && !empty(trim($sex)) && !empty(trim($nin))) {
    $d = [
        'farmer',
        'farmer_first_name', 'farmer_last_name', 'farmer_last_others',
        'farmer_phonenumber', 'farmer_occupation', 'farmer_email',
        'farmer_sex', 'farmer_nin', 'farmer_dob', 'imagepath', 'password', 'farmer_group_group_id',
        $fname, $lname, $others, $pnumber, $occupation, $email, $sex,
        $nin, $dob, $defaultimagepath, $passwordc, $gfk
    ];

    $access->updating($pdo, $d, $target_id, $id, $redirect_page);
}


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
                    Edit Farmer

                </h1>
                <!-- <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol> -->



                <div class="row">

                    <div class="col">


                        <div class="card mb-4 mt-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Edit farmer

                            </div>
                            <div class="card-body">


                                <main>
                                    <div class="container-fluid px-4">

                                        <div class="  container-fluid mt-2">
                                            <!-- form row -->
                                            <div class="row justify-content-center">

                                                <div class="col-12  ">
                                                    <form action="" method="POST"enctype="multipart/form-data" >

                                                        <div class="row px-4 ">

                                                            <div class="col-lg-6 ">


                                                                <div class="form-group mt-2">
                                                                    <label for="fname">First Name</label>
                                                                    <input type="text" class="form-control" required name="fname" aria-describedby="firstname" placeholder="Enter First Name" value="<?= $dataling['farmer_first_name'] ?>">
                                                                </div>
                                                                <div class="form-group mt-2">
                                                                    <label for="others">Others(names)</label>
                                                                    <input type="text" class="form-control" name="others" placeholder="Enter Others Names" value="<?= $dataling['farmer_last_others'] ?>">
                                                                </div>
                                                                <div class="form-group mt-2">
                                                                    <label for="pnumber">Phone Number</label>
                                                                    <input type="text" class="form-control" required name="pnumber" aria-describedby="phonenumber" placeholder="Enter Phone Number" value="<?= $dataling['farmer_phonenumber'] ?>">
                                                                </div>
                                                                <div class="form-group mt-2">
                                                                    <label for="occupation">Occupation</label>
                                                                    <input type="text" class="form-control" name="occupation" placeholder="Enter Occupation" value="<?= $dataling['farmer_occupation'] ?>">
                                                                </div>
                                                                <div class="form-group mt-2 ">
                                                                    <div class="row">
                                                                        <div class="col-6">
                                                                            <label for="pass1">password</label>
                                                                            <input type="text" class="form-control" name="passwordc" placeholder="Create Password" value="<?= $dataling['password'] ?>">

                                                                        </div>
                                                                        <div class="col-6">
                                                                            <label for="pass2">file image</label>
                                                                            <input type="file" class="form-control" name="image" >

                                                                        </div>
                                                                    </div>

                                                                </div>



                                                            </div>


                                                            <div class="col-lg-6 ">


                                                                <div class="form-group mt-2">
                                                                    <label for="lname">Last Name</label>
                                                                    <input type="text" class="form-control" required name="lname" aria-describedby="lastname" placeholder="Enter Last Name" value="<?= $dataling['farmer_last_name'] ?>">
                                                                </div>
                                                                <div class="form-group mt-2">
                                                                    <label for="dob">Date of Birth</label>
                                                                    <input type="date" class="form-control" required name="dob" placeholder="Enter Date of Birth" value="<?= $dataling['farmer_dob'] ?>">
                                                                </div>
                                                                <div class="form-group mt-2">
                                                                    <label for="Email">Email Address</label>
                                                                    <input type="email" class="form-control" name="email" aria-describedby="Email" placeholder="Enter Email" value="<?= $dataling['farmer_email'] ?>">
                                                                </div>
                                                                <div class="form-group mt-2">
                                                                    <label for="nin">National Number (NIN)</label>
                                                                    <input type="text" class="form-control" name="nin" placeholder="National name Number" value="<?= $dataling['farmer_nin'] ?>">
                                                                </div>

                                                                <div class="form-group mt-2">
                                                                    <label for="nin">gender (M-male/F-female/O-others)</label>
                                                                    <input type="text" class="form-control" name="gender" placeholder="M-male/F-female/O-others" value="<?= $dataling['farmer_sex'] ?>">
                                                                </div>
                                                                <div class="row">

                                                                    <div class="col">

                                                                        <input hidden required type="text" name="f_group" class="form-control" name="vil" value="<?= $dataling['farmer_group_group_id'] ?>">
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col">
                                                                <a type="button" class="btn btn-secondary" href="index.php">cancel</a>
                                                            </div>
                                                            <div class="col">
                                                                <button type="submit" name="update_farmer" class="btn btn-primary">Update</button>
                                                            </div>
                                                        </div>

                                                    </form>
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