<?php 
include '../components/hhh.php';
if (isset($_POST['submitcounty'])) {

         $dis=$_POST['countyname'];
         
        $disfk=$_POST['district'];
        
      
        $d=['county',
        'county_name','district_district_id',
        $dis,$disfk];

        $access->universal_insert($pdo,$d,'../locale.php');
    }

    ?>