<?php
require ('../components/hhh.php');


//pdo = db connection
$pdo;
//group_id  id to target
$target_id = 'farmer_id';
//id = id submitted by the button
$id=$_GET['farmer_id'];
//farmer_group = table to access
$access_table = 'farmer';
//redirection page
$redirect_page = '../index.php';

$access->locate($pdo,$target_id,$id,$access_table);


// eg $access->locate($pdo,'group_id',$id,'farmer_group');


$access->deleting($pdo,$target_id,$id,$access_table,$redirect_page);
//$access->deleting($pdo,'group_id',$id,'farmer_group','../farmergroups.php');

?>
