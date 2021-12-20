<?php
include 'footandhead/head.php';
$username = $_POST['username'];
$psd = $_POST['adminpassword'];


if (isset($_POST["login"])) {

  if(!empty(trim($username)) && !empty(trim($psd))){
   $d=['admin_passon','admin_username','admin_password',$username,$psd];
   if($access->verifying($pdo,$d,'index.php')){
     $message="";

   }else{
     $message="invalid username or password";
   }
  }else{
    $message="username or password is required";
  }


}

?>
<div class="container-fluid">
  <nav class="navbar navbar-light fixed-top text-white" style="background-color: #064E05;">
  <div class="px-4 py-4">  <h3 >E-Pass on</h3></div>

  </nav>
  <div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">

      <div class="row d-flex justify-content-center mt-5">

        <div class="col-lg-4 py-5">
          <div class=" card border-0 px-4 py-5" style="background-color:#E0F5DF">


            <h2>Admin Login</h2>
<?php
            if (isset($message)) {
            echo '<label class="text-danger">' . $message . '</label>';
         
          
          }
          ?>

            <form  action="" method="POST" enctype="multipart/form-data">
              <div class="form-group mt-2 mb-3">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" aria-describedby="text" name= "username" placeholder="Username">
              </div>
              <div class="form-group mb-3">
                <label for="adminpassword">Password</label>
                <input type="password" class="form-control" id="adminpassword" placeholder="Password" name="adminpassword">
              </div>

              <div class="row px-3 mb-3"><button type="submit" name="login" class="btn btn-success btn-block">Login</button></div>
            </form>
            <!-- <div class="row mb-4 px-3"> <small class="font-weight-bold">Don't have an account? <a class="text-primary">Administrators</a></small> </div> -->
          </div>
        </div>
      </div>
      <div class="bg-blue py-4">
        <div class="row px-3"> <small class="ml-4 ml-sm-5 mb-2">Copyright &copy; 2021. All rights reserved.</small>
          <div class="social-contact ml-4 ml-sm-auto"> <span class="fa fa-facebook mr-4 text-sm"></span> <span class="fa fa-google-plus mr-4 text-sm"></span> <span class="fa fa-linkedin mr-4 text-sm"></span> <span class="fa fa-twitter mr-4 mr-sm-5 text-sm"></span> </div>
        </div>
      </div>

  </div>


</div>


</div>
<?php
include 'footandhead/foot.php';
?>
