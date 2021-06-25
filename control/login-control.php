<?php

include("koneksi.php");

$username=$_POST["username"];
$password = $_POST["password"];
$ad="admin";


$query= "SELECT * FROM $ad WHERE username='$username' and password='$password'";

$cek_data= mysqli_query($conn,$query) or die(mysqli_error($conn));

$result= mysqli_fetch_assoc($cek_data);

if($result > 0){
    session_start();
    $_SESSION["username"]=$result["username"];
    
    header("location: ../view/admin.php ");
}
else{
    echo("hallos");
    header("location: ../view/loginadmin.php ");
}