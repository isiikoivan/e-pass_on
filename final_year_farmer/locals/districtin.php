<?php 
include '../components/headder.php';
if (isset($_POST['submitdistrict'])) {
         $dis=$_POST['district'];
        $disfk=$_SESSION['dean']['admin_id'];
        
      
        $d=['district',
        'district_name','admin_passon_admin_id',
        $dis,$disfk];
      
        $access->universal_insert($pdo,$d,"../locale.php");
        
    }

    ?>