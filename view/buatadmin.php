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

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom d-flex justify-content-around">
          <h1 class="" id="menu-toggle">Rara</h1>
          <a href="admin.php"> <button class="btn btn-primary" id="menu-toggle">Kembali</button></a>   
</nav>

    <div class="container d-flex justify-content-center p-5 ">
        <div class="card" style="width: 50rem;">
                
        <div class="card-body  ">
            <form action="../control/buat-control.php" class="d-flex flex-row" method="post" enctype="multipart/form-data">
                
                <!-- <input type="hidden" name="id_user"> -->
                <div class="container">
               
                    <div class="form-group">
                    <label for="exampleInputEmail1">Nama</label>
                    <input type="text" class="form-control" name="produk" id="exampleInputEmail1" placeholder="masukkan nama">
                    </div>
                    <div class="form-group">
                    <label for="exampleInputPassword1">Harga</label>
                    <input type="number" class="form-control" name="harga" id="exampleInputPassword1" placeholder="masukkan harga">
                    </div>
                    <div>
                    <label>Gambar Produk</label><br>
                    <input type="file" name="gambar" required="" />
                    </div>
                    <div class="card pl-0 mt-2">
                        <button type="submit" class="btn btn-primary">Buat</button>
                    </div>
                
                </div>
            </form>
        </div>
        </div>
    </div>


</body>