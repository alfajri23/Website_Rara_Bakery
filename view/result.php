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
<body class="">
    <!-- isi -->
      
      <div class="container my-5 rounded-lg border p-5">
       
        <div class="container d-flex justify-content-center align-items-center flex-column my-4">
            <h1 class="display-4 ">Rara Bakery</h1>
            <p class="lead">Terima Kasih sudah berbelanja di Rara Bakery<p>
        </div>

        <?php
        require_once("../control/koneksi.php");
                    $produk=$_POST ["produk"];
                    $value=$_POST ["value"];
                    $harga=$_POST ["harga"];
                    $total=$_POST ["total"];

                    $nama=$_POST ["nama"];
                    $email=$_POST ["email"];
                    $telp=$_POST ["telp"];
                    $alamat=$_POST ["alamat"];
                    $keterangan=$_POST ["keterangan"];
                    $bank=$_POST ["bank"];

                  ?>
                  

        <div class="row ">
            <div class="col">
                <div class="card-body">
                    <dl>
                    <dt class="font-weight-light">Nama</dt>
                    <h6 class="text-uppercase font-weight-normal mb-3"><?= $nama ?></h6 >
                    <dt class="font-weight-light">Email</dt>
                    <h6 class="text-uppercase font-weight-normal mb-3"><?= $email ?></h6 >
                    <dt class="font-weight-light">Alamat</dt>
                    <h6 class="text-uppercase font-weight-normal mb-3"><?= $alamat ?></h6 >
                    <dt class="font-weight-light">Nomor Telepon</dt>
                    <h6 class="text-uppercase font-weight-normal mb-3"><?= $telp ?></h6 >
                    <dt class="font-weight-light">Keterangan</dt>
                    <h6 class="text-uppercase font-weight-normal mb-3"><?= $keterangan ?></h6 >
                    <dt class="font-weight-light">Pembayaran</dt>
                    <h6 class="text-uppercase font-weight-normal mb-3"><?= $bank ?></h6 >
                    </dl>
              </div>
            </div>

            <div class="col ">
                <div class="card-body">
                    <h5 class="card-title">Pesanan</h5>
                    <table class="table table-sm">
                        <tbody>

                        <?php
                            $date=date("Y/m/d");
                            for($x=0;$x<count($value);$x++){
                                $query = "INSERT INTO riwayat (id,produk,jumlah,pembeli,alamat,tgl_beli,keterangan,status) VALUES (NULL,'$produk[$x]','$value[$x]','$nama','$alamat','$date','$keterangan',0)";
                                $result = mysqli_query($conn,$query) or die (mysqli_error($conn));
                        ?>

                            <tr>
                            <td scope="row"><?= $x+1 ?></td>
                            <td><?= $produk[$x] ?></td>
                            <td><?= $value[$x] ?></td>
                            </tr>

                        <?php
                           }
                        ?>

                        </tbody>
                    </table>
                    <h4 class="card-title">Total belanja : Rp. <?= $total ?></h4>
                    <a href="index.php" class="btn btn-secondary text-white">Kembali</a>
                </div>
            </div>
        </div>
      </div>





      <script src="../asset/script.js"></script>
</body>
</html>