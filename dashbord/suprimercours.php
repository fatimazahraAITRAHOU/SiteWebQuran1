<?php
require_once("connect.php");

$id =$_GET['id'];
$select ="DELETE FROM `cours` WHERE `id`='$id'";
$data= mysqli_query($con2 , $select);
header("location: Cours.php");
    exit;
?>