<?php
// include '../components/hhh.php';
include '../components/headder.php';

// $message; 

if (isset($_POST['submitsupport'])) {
  
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $ssex = $_POST['ssex'];
  $sexpert = $_POST['sexpert'];
  $snation = $_POST['snation'];
  $scontact = $_POST['scontact'];
  $saddress = $_POST['saddress'];

  $admin = $_SESSION['dean']['admin_id'];


  //farmer_id

  // if ($pas1 == $passwordc) {
  //   if (!empty(trim($fname)) && !empty(trim($lname)) && !empty(trim($pnumber)) && !empty(trim($passwordc)) && !empty(trim($dob)) && !empty(trim($sex)) && !empty(trim($nin))) {
      $d = [
        'farmer_support',
        'support_first_name', 'support_last_name', 'support_sex',
        'support_expertise', 'support_nationality','support_contact',
        'support_address','admin_passon_admin_id',
        $fname, $lname, $ssex, $sexpert, $snation, $scontact, $saddress,
        $admin
      ];

      $access->universal_insert($pdo,$d,'../support.php');
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
