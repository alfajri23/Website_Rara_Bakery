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
          <a href="#" class="list-group-item list-group-item-action bg-light">Dashboard</a>
          <a href="#" class="list-group-item list-group-item-action bg-light">Produk</a>
          <a href="riwayatadmin.php" class="list-group-item list-group-item-action bg-light">Riwayat</a>
        </div>
      </div>
      <!-- /#sidebar-wrapper -->
  
      <!-- Page Content -->
      <div id="page-content-wrapper">
  
        <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
          
  
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
  
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
              <a href="../control/logout-control.php" class="btn btn-danger">Logout</a>
            </ul>
          </div>
        </nav>
  
        <div class="container-fluid p-5">
          

          
          <div class="col m-4 d-flex flex-column justify-content-center align-items-center">
          <h1 class="mt-4">Admin Rara Bakery</h1>
          <p>Semua kontrol ditangan Anda</p>
          <p>Tambah, edit dan hapus data sesuai keinginan Anda</p>

          <a href="buatadmin.php?" class="btn btn-primary btn-lg rounded-2">Tambah Produk</a>
          </div>

          <h1 class="mt-4">Produk</h1>
          <div class="row d-flex flex-wrap justify-content-around ">
          
            <?php
            require_once("../control/koneksi.php");
 
            $query_produk="SELECT * FROM produk";
            $hasil_produk=mysqli_query($conn,$query_produk) or die (mysqli_error($conn));
 
            while($data_produk=mysqli_fetch_assoc($hasil_produk)){  ?>
 
           <div class="card my-3" style="width: 15rem;">
             <img id="gambar" class="card-img-top" src="../image/<?= $data_produk["gambar"] ?>" alt="Card image cap">
             <div class="card-body">
               <h5 id="nama-produk" class="card-title font-weight-normal"><?= $data_produk["nama"] ?> </h5>
               <h5 id="desc-produk"class="card-title font-weight-bold">Rp.<?= $data_produk["harga"] ?></h5>
               <a id="btn-action " href="editadmin.php?id=<?= $data_produk["id"] ?>" class="btn btn-success font-weight-normal text-white">Edit</a>
               <a id="btn-action " href="../control/hapus-control.php?id=<?= $data_produk["id"] ?>" class="btn btn-danger font-weight-normal text-white">Hapus</a>
             </div>
           </div>
 
           <?php } ?>  
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
    <script>
      $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
      });
    </script>
  
  </body>
  
  </html>