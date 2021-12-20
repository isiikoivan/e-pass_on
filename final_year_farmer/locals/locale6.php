<?php 
include '../components/hhh.php';

if (isset($_POST['submitgroup'])) {


         $dis=$_POST['groupsname'];
         
        $disfk=$_POST['vil'];
    
           
        $d=["farmer_group",

        'group_name','village_village_id',

        $dis,$disfk];

       

        $access->universal_insert($pdo,$d,"../farmergroups.php");
    }

    ?>