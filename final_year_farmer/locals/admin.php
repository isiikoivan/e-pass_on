<?php 
include '../components/hhh.php';
if (isset($_POST['submitadmin'])) {

         $dis=$_POST['fname'];
         
        $did=$_POST['lname'];
        
        $dif=$_POST['uname'];
         
        $disfk=$_POST['apsd'];
        
      
        $d=['admin_passon',
        'admin_fname','admin_lname','admin_username','admin_password',
        $dis,$did,$dif,$disfk];

        $access->universal_insert($pdo,$d,'../administrators.php');
    }

    ?>