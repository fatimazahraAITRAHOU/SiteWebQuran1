<?php
require_once("connect.php");

$id =$_GET['id'];
$select ="DELETE FROM `information` WHERE `id`='$id'";
$data= mysqli_query($con , $select);
header("location: user.php");
    exit;
?>