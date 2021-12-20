<?php
// header('Access-Control-Allow-Origin: *');
// header('Content-type: application/json');

include "runitall/crud.php";
//opt/lampp/htdocs/product_man/pass_on/foothead/head.php
//opt/lampp/htdocs/product_man/pass_on/king/crud.php
$access=new Crud();
$access->dbconnect('127.0.0.1','passon_db2','root','');

//for display still access the registering database

session_start();
error_reporting(0);
$message="";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="../../assests/css/bootstrap/bootstrap.min.css" type="text/css">

    <!-- <link rel="stylesheet" href="../login/traveller.css" type="text/css"> -->
    <link rel="stylesheet" href="assests/css/bootstrap/bootstrap.min.css" type="text/css">

 
    <title>e-pass_on</title>
</head>
<body >
