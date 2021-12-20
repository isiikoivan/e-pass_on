<?php 
include '../components/hhh.php';

if (isset($_POST['submitinput'])) {

         $dis=$_POST['type'];
         
        $did=$_POST['breed'];
        
        $dif=$_POST['quantity'];
         
        $disfk=$_SESSION['dean']['admin_id'];
        
      
        $d=['animal',
        'animal_name','animal_breed','animal_quantity','admin_passon_admin_id',
        $dis,$did,$dif,$disfk];

        $access->universal_insert($pdo,$d,'../input.php');
    }

    ?>