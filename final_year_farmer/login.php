<?php
include 'footandhead/head.php';
$phone = $_POST['p-number'];
$pswd = $_POST['fpassword'];

// if($_SERVER["REQUEST_METHOD"] == "POST"){



if (isset($_POST["login"])) {
 
  if(!empty(trim($phone)) && !empty(trim($pswd))){
   $d=['farmer','farmer_phonenumber','password',$phone,$pswd];
   if($access->verifying($pdo,$d,'index.php')){
   // $message=$_SESSION['message'];
   $message="";
   }else{
    $message="invalid credentials";
   }
  
  }else{
    $message="phone number or password is required";
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


          <h2>Login</h2>

          <?php

          if (isset($message)) {
            echo '<label class="text-danger">' . $message . '</label>';
         
          
          }


          ?>
          <form  action="" method="POST" enctype="multipart/form-data">


            <div class="form-group mt-2 mb-3">
              <label for="p-number">Phone Number</label>
              <input type="text" class="form-control" name="p-number" aria-describedby="number" placeholder="Phone Number">
            </div>
            <div class="form-group mb-3">
              <label for="fpassword">Password</label>
              <input type="password" class="form-control" name="fpassword" placeholder="Password">
            </div>

            <div class="row px-3 mb-3"><input type="submit" class="btn btn-success btn-block" name=" login" value="login"></div>
          </form>
          <div class="row mb-4 px-3"> <small class="font-weight-bold">Don't have an account? <a class="text-primary">Visit The Head-Quaters</a></small> </div>
        </div>
      </div>
    </div>
    <div class="bg-blue py-4">
      <div class="row px-3"> <small class="ml-4 ml-sm-5 mb-2">Copyright &copy; 2021. All rights reserved.</small>
        <div class="social-contact ml-4 ml-sm-auto"> <span class="fa fa-facebook mr-4 text-sm"></span> <span class="fa fa-google-plus mr-4 text-sm"></span> <span class="fa fa-linkedin mr-4 text-sm"></span> <span class="fa fa-twitter mr-4 mr-sm-5 text-sm"></span> </div>
      </div>
    </div>

  </div>

<!-- /opt/lampp/htdocs/finalyearproject/pass_on_admin/mainroute/home.php -->
</div>


</div>
<?php
include 'footandhead/foot.php';
?>