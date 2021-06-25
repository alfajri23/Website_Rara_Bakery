<?php
  $id=$_GET["id"];
  require_once ("koneksi.php");

  $query = "DELETE FROM produk WHERE id like '$id'";
	$hasil_mysql = mysqli_query($conn,$query) or die (mysqli_error($conn));
    //$result= mysqli_num_rows($hasil_mysql);
    header("location: ../view/admin.php");

?>