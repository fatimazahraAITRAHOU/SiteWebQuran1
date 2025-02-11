<?php
try{
    $con = mysqli_connect("localhost", "root", "", "registration");
    if(!$con){
        throw new Exeption("No Connect".mysqli_connect_error());
    }
}catch(Exeption $e){
    echo"ERROR".$e -> getMessage();
}


try{
    $con2 = mysqli_connect("localhost", "root", "", "add_cours");
    if(!$con2){
        throw new Exeption("No Connect".mysqli_connect_error());
    }
}catch(Exeption $e){
    echo"ERROR".$e -> getMessage();
}
?>