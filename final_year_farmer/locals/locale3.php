<?php 
include '../components/hhh.php';
if (isset($_POST['submitscounty'])) {

         $dis=$_POST['scountyname'];
         
        $disfk=$_POST['county'];
        
      
        $d=['sub_county',
        'sub_county_name','county_county_id',
        $dis,$disfk];

        $access->universal_insert($pdo,$d,'../locale.php');
    }

    ?>