<?php
include '../components/hhh.php';


if (isset($_POST['update_admin'])) {

//in coming id
$id = $_GET[$target_id];

$target_id = 'admin_id';

//redirecting page
$redirect_page = '../administrators.php';
//target id

$dis = $_POST['fname'];

$did = $_POST['lname'];

$dif = $_POST['uname'];

$disfk = $_POST['apsd'];


$d = [
    'admin_passon',
    'admin_fname', 'admin_lname', 'admin_username', 'admin_password',
    $dis, $did, $dif, $disfk
];

$access->updating($pdo, $d, $target_id, $id, $redirect_page);
}
