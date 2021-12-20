<?php 
include '../components/hhh.php';
if (isset($_POST['submitparish'])) {

         $dis=$_POST['parishname'];
         
        $disfk=$_POST['subcounty'];
        
      
        $d=['parish',
        'parish_name','sub_county_sub_county_id',
        $dis,$disfk];

        $access->universal_insert($pdo,$d,'../locale.php');
    }

    ?>