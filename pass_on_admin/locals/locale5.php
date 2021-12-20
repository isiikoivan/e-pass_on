<?php 
include '../components/hhh.php';
if (isset($_POST['submitvillage'])) {

         $dis=$_POST['villagename'];
         
        $disfk=$_POST['parish'];
        
      
        $d=['village',
        'village_name','parish_parish_id',
        $dis,$disfk];

        $access->universal_insert($pdo,$d,'../locale.php');
    }

    ?>