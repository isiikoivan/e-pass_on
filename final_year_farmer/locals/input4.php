<?php
include '../components/hhh.php';

$message; 

if (isset($_POST['submitfarmer'])) {
  
  $pas1 = $_POST['password'];

  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $others = $_POST['others'];
  $pnumber = $_POST['pnumber'];
  $occupation = $_POST['occupation'];

  $email = $_POST['email'];
  $sex = $_POST['gender'];
  $nin = $_POST['nin'];
  $dob = $_POST['dob'];
  $defaultimagepath = "../files/1633249.png";

  $passwordc = $_POST['passwordc'];

  $gfk = $_POST['f_group'];

  //farmer_id

  // if ($pas1 == $passwordc) {
  //   if (!empty(trim($fname)) && !empty(trim($lname)) && !empty(trim($pnumber)) && !empty(trim($passwordc)) && !empty(trim($dob)) && !empty(trim($sex)) && !empty(trim($nin))) {
      $d = [
        'farmer',
        'farmer_first_name', 'farmer_last_name', 'farmer_last_others',
        'farmer_phonenumber', 'farmer_occupation', 'farmer_email',
        'farmer_sex', 'farmer_nin', 'farmer_dob','imagepath', 'password','farmer_group_group_id',
        $fname, $lname, $others, $pnumber, $occupation, $email, $sex,
        $nin, $dob, $defaultimagepath, $passwordc, $gfk
      ];

      $access->universal_insert($pdo, $d, '../index.php');
      //$access->universal_insert($pdo,$d,'submit',$file_path_name);
      //$image_naming for use in getting filepath

//     } else {
//       $message = "fill the missing fields";
//     }
//   } else {
//     $message = "
//    password does not match
//  ";

//     header("location:index.php");
//   }
 }
