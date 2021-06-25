<?php

  
  $id=$_GET ["id"];
  require_once ("koneksi.php");

  $query = "UPDATE riwayat SET status=1 WHERE id like $id";
  $result = mysqli_query($conn,$query) or die (mysqli_error($conn));
    //$result= mysqli_num_rows($hasil_mysql);
    header("location: ../view/riwayatadmin.php");

?>

