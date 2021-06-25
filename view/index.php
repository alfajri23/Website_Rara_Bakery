<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- leaflet -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
    integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
    crossorigin=""/>
    <!-- Make sure you put this AFTER Leaflet's CSS -->
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
    integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
    crossorigin=""></script>
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
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Poppins&display=swap" rel="stylesheet"> 

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="true" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div id="navbar" class=" collapse navbar-collapse d-flex justify-content-around" id="navbarTogglerDemo01">
          <a class="navbar-brand" href="#">Rara Bakery</a>
          <ul class="navbar-nav mt-3 mt-lg-0 ">
          <li class="nav-item mx-3">
              <a class="nav-link" href="#galeri">Galeri</a>
            </li>
            <li class="nav-item mx-3">
              <a class="nav-link" href="#alamat">About Us</a>
            </li>
            <li class="nav-item mx-2">
              <a class="nav-link" href="#produk">Produk </a>
            </li>
            
            
            <li class="nav-item mx-3">
              <a class="nav-link " href="#" data-toggle="modal" data-target="#exampleModal">Keranjang<span id="keranjang" class="badge badge-light ml-1">4</span></a>
            </li>
          </ul>
        </div>
      </nav>
      <!-- end-navbar -->

      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
          <form action="checkout.php" method="POST">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Keranjang</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

            <div class="modal-body pl-5 d-flex flex-column">
              
            <?php
              require_once("../control/koneksi.php");

              $query_produk="SELECT * FROM produk";
              $hasil_produk=mysqli_query($conn,$query_produk) or die (mysqli_error($conn));

              while($data_produk=mysqli_fetch_assoc($hasil_produk)){  ?>
              <div class="modal-item " style="display: none;"> <?= $data_produk["nama"] ?> 
                <input type="hidden" name="produk[]" value="<?= $data_produk["nama"] ?>"> 
                <input type="hidden" name="harga[]" value="<?= $data_produk["harga"] ?>">
                <input id="num" name="value[]" class="num ml-3" type="number" style="width: 3em" value="0">
                <!-- <span id="del-item" class="badge badge-danger ml-5">Hapus</span> -->
              </div>
              
              <?php } ?>
            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-danger">Checkout</button>
            </div>
          </form>
          </div>
        </div>
      </div>
      <!-- end-modal -->

      <!-- homepage -->
      <section id="home" class="container-fluid d-flex align-items-center justify-content-center">
        <div id="home-con" class="row pt-4">
          <!-- kiri -->
          <section  class="col mt-5">
            <div class="container px-5 d-flex flex-column">
              <h1 class="tittle ">Rara Bakery</h1>
              
            </div>
          </section>
          <!-- end-kiri -->

         
        </div>
      </section>
      <!-- end-homepage -->

      <!-- galeri -->

      <div class="container" id="galeri" style="margin-top: 50px; margin-bottom: 50px; padding-left: 20px; padding-right: 20px;">
        <div class="row">
        <h1 id="galery-title" class="mx-auto"> Galeri Toko</h1>
        </div>
        
        <div class="row">
            <div class="col-sm-7">
                <table>
                    <tr>
                        <th ><a href="https://www.instagram.com/littlemealbento/" class="galery"><img src="../asset/img/bread3.jpg" alt="" width="250px" height="180" style="margin: 10px;" class="galery-image"></a></th>
                        <th class="galery"><a href="https://www.instagram.com/littlemealbento/"><img src="../asset/img//bread2.jpg" alt="" width="250px" height="180" style="margin: 10px;" class="galery-image"></a></th>
                        <th class="galery"><a href="https://www.instagram.com/littlemealbento/"><img src="../image/1.png" alt="" width="250px" height="180" style="margin: 10px;" class="galery-image"></a></th>
                        <th class="galery"><a href="https://www.instagram.com/littlemealbento/"><img src="../image/2.png" alt="" width="250px" height="180" style="margin: 10px;" class="galery-image"></a></th>
                    </tr>

                    <tr>
                        <th class="galery"><a href="https://www.instagram.com/littlemealbento/"><img src="../asset/img//bread1.jpg" alt="" width="250px" height="180" style="margin: 10px;" class="galery-image"></a></th>
                        <th class="galery"><a href="https://www.instagram.com/littlemealbento/"><img src="../asset/img//bread4.jpg" alt="" width="250px" height="180" style="margin: 10px;" class="galery-image"></a></th>
                        <th class="galery"><a href="https://www.instagram.com/littlemealbento/"><img src="../image/3.png" alt="" width="250px" height="180" style="margin: 10px;" class="galery-image"></a></th>
                        <th class="galery"><a href="https://www.instagram.com/littlemealbento/"><img src="../image/4.png" alt="" width="250px" height="180" style="margin: 10px;" class="galery-image"></a></th>
                    </tr>
                </table>
            </div>
        </div>
        
    </div>
      <!-- end galeri -->

      <!-- alamat -->
      <section id="alamat" class="container-fluid p-5 bg-light">
        <div id="" class="container-sm p-4 d-flex flex-row ">
          <section  class="col my-auto">
            <h2>Lokasi</h2>
            <h4 class="font-weight-normal mb-3">Beji,Taji,Prambanan,Klaten</h4>
            <div id="mapid"></div>

          </section>

          <section class="col" >
          <h2>Tentang Kami</h2>
          <div class="card p-2 mt-5" id="alamat-body">
            <div class="card-body">
            <h5 class="card-title my-2">Rara Bakery menyediakan aneka roti,cake,pastry,cemilan,snack box dan nasi kotak dengan harga terjangkau dan kualitas bintang lima</h5>
            <h5 class="card-title mt-4">Jam Operasional</h5>
            
            <section class="list-group ml-2">
              <p class="card-text">Senin - Jumat : 09.00 - 16.00</p>
              <p class="card-text">Sabtu - Minggu : Tutup</p>
              
            </section>
            <h5 class="card-title mt-3">Sosial Media</h5>
            <div class="row ml-2">
              <a href="https://wa.me/6285292197466"><img src="../asset/img/sosmed/telp.png" alt="" width="40px"  style="margin: 10px;"></a>
              <a href="https://www.instagram.com/littlemealbento/"><img src="../asset/img/sosmed/ig.png" alt="" width="40px"  style="margin: 10px;"></a>
              <a href="https://gmail.com"><img src="../asset/img/sosmed/email.png" alt="" width="40px"  style="margin: 10px;"></a>
            </div>
            </div>
          </section>
          
          </div>
        </div>
      </section>
      <!-- end-alamat -->


      <!-- produk -->
      <div id="produk" class="container-fluid pt-4">
        <div class="row my-5 d-flex flex-column">
         <h1 id="name-produk" class="mx-auto">Produk Rara Bakery</h1>
         <div></div>
         <p id="name-produk-dec" class="mx-auto">" Produk kami dibuat dengan bahan-bahan pilihan terbaik "</p>
        </div>
        <!-- produk list -->
        <div class="container-sm d-flex flex-wrap justify-content-around ">

        <?php
           require_once("../control/koneksi.php");

           $query_produk="SELECT * FROM produk";
           $hasil_produk=mysqli_query($conn,$query_produk) or die (mysqli_error($conn));

           while($data_produk=mysqli_fetch_assoc($hasil_produk)){  ?>

          <div class="card my-3" style="width: 15rem;">
            <img class="card-img-top" src="../image/<?= $data_produk["gambar"] ?>" alt="Card image cap">
            <div class="card-body">
              <h5 id="nama-produk" class="card-title font-weight-normal"><?= $data_produk["nama"] ?> </h5>
              <h3 id="desc-produk"class="card-title font-weight-bold">Rp.<?= $data_produk["harga"] ?></h3>
              <div id="btn-action" href="#" class="btn font-weight-normal text-white">Masukkan Keranjang</div>
            </div>
          </div>

          <?php } ?>  

        </div>
        <!-- end-produk list -->
      </div>
      <!-- end-produk -->

      
      <!-- footer -->
  <div class="container-fluid bg-dark p-1 mt-3" id="footer">
    <div class="row ">
            
            <div class="col p-5 text-light">
              <h4><bold>Rara Bakery<bold></h4>
              <p class="footer-dec">Toko roti yang menyediakan berbagai jenis roti dengan kualitas terbaik,Anda bisa pesan langsung ataupun via online</p>
            </div>
            <div class="col text-light p-5">
              <ul>
                <h4><bold>Kontak<bold></h4>
                <dd class="footer-dec">Beji,Taji,Prambanan,Klaten</dd>
                <dd class="footer-dec">089619119692</dd>
                <dd class="footer-dec">rara@gmail.com</dd>
              <ul>
            </div>
    </div>
  </div>
<!-- end of footer -->
      

      <script src="../asset/script.js"></script>
      <script src="../asset/katalog.js"></script>
</body>
</html>