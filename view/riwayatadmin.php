<?php
session_start();
  if (!isset($_SESSION["username"])){
    header("Location: loginadmin.php");
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- homemade -->
    <script src="../asset/jquery-3.5.1.slim.js"></script>
    <script src="../asset/bootstrap-4.5.3-dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../asset/bootstrap-4.5.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../asset/style.css">
    <!-- font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fraunces&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">

    <script>
      $(document).ready(function(){
    $("#btn-action").click(function(){
      $("#gambar").animate({opacity: 0.5});
      console.log(aku);
    });  
    });
  </script>

</head>
<body>
    <div class="d-flex" id="wrapper">
  
      <!-- Sidebar -->
      <div class="bg-light border-right" id="sidebar-wrapper">
        <h2 class="sidebar-heading p-3">AdminBakery</h2>
        <div class="list-group list-group-flush ">
          <a href="admin.php" class="list-group-item list-group-item-action bg-light">Dashboard</a>
          <a href="admin.php" class="list-group-item list-group-item-action bg-light">Produk</a>
          <a href="#" class="list-group-item list-group-item-action bg-light">Riwayat</a>
        </div>
      </div>
      <!-- /#sidebar-wrapper -->
  
      <!-- Page Content -->
      <div id="page-content-wrapper" style="width:100%">
  
        <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
  
          
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
              <a href="../control/logout-control.php" class="btn btn-danger">Logout</a>
            </ul>
          
        </nav>
  
        <div class="container-fluid p-5">
            <div class="row m-4 d-flex flex-column justify-content-center align-items-center">
            <h1 class="mt-4">Admin Rara Bakery</h1>
            <p>Semua kontrol ditangan Anda</p>
            <p>Klik selesai jika pesanan sudah terselesaikan</p>

            
          </div>

          <h1 class="mt-4">Pembelian</h1>
          <div class="container-fluid d-flex flex-wrap justify-content-around ">

          <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">Pembeli</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Produk</th>
                    <th scope="col">Jumlah</th>
                    <th scope="col">Tanggal Beli</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col">Status</th>
                    </tr>
                </thead>
          
            <?php
            require_once("../control/koneksi.php");
 
            $query_riwayat="SELECT * FROM riwayat ORDER BY id DESC";
            $hasil_riwayat=mysqli_query($conn,$query_riwayat) or die (mysqli_error($conn));
            $x=0;
            while($data_riwayat=mysqli_fetch_assoc($hasil_riwayat)){ 
                  
            ?>

                
                <tbody>
                    <tr>
                    <th scope="row"><?= $x+1 ?></th>
                    <td><?= $data_riwayat["pembeli"] ?></td>
                    <td><?= $data_riwayat["alamat"] ?></td>
                    <td><?= $data_riwayat["produk"] ?></td>
                    <td><?= $data_riwayat["jumlah"] ?></td>
                    <td><?= $data_riwayat["tgl_beli"] ?></td>
                    <td><?= $data_riwayat["keterangan"] ?></td>
                    <?php 
                      if($data_riwayat["status"]!=0){
                    ?>
                     <td>&#9989;</td>

                    <?php  
                    }else{
                    ?>
                      <td><a href="../control/done-control.php?id='<?= $data_riwayat["id"]?>'"><button type="button" class="btn btn-info">Selesaikan</button></td></a>
                    <?php } ?>
                    </tr>
                </tbody>
                
 
           <?php
           $x++;
            } 
            ?> 
           </table> 
          </div>

          
          
        </div>
      </div>
      <!-- /#page-content-wrapper -->
  
    </div>
    <!-- /#wrapper -->
  
    <!-- Bootstrap core JavaScript -->
    <script src="../asset/jquery-3.5.1.slim.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  
    <!-- Menu Toggle Script -->
  
  </body>
  
  </html>