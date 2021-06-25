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
    <!-- navbar -->
    
      <!-- end-navbar -->

      <!-- isi -->
      
      <div class="container-sm ">
        <!-- <div class="row"></div> -->
        <div class="col-9 mx-auto border">
          <form class="form-horizontal" action="result.php" method="POST">
            <div class="card-body margin">
              <div class="row my-4">
              <h2 class="card-title mx-auto">Checkout</h2>
            </div>
              

              <div class="form-group row">
                <label for="inputtext3" class="col-sm-3 col-form-label">Nama</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="inputtext3" name="nama" required>
                </div>
              </div>

              <div class="form-group row">
                <label for="inputetxt3" class="col-sm-3 col-form-label">Email</label>
                <div class="col-sm-9">
                  <input type="email" class="form-control" id="inputetxt3" name="email" required>
                </div>
              </div>

              <div class="form-group row">
                <label for="inputetxt3" class="col-sm-3 col-form-label">Alamat</label>
                <div class="col-sm-9">
                  <input type="address" class="form-control" id="inputetxt3" name="alamat" required>
                </div>
              </div>

              <div class="form-group row">
                <label for="inputetxt3" class="col-sm-3 col-form-label">No Telefon</label>
                <div class="col-sm-9">
                  <input type="tel" class="form-control" id="inputetxt3" name="telp" required>
                </div>
              </div>


              <div class="form-group row">
                <label for="inputetxt3" class="col-sm-3 col-form-label">Keterangan Tambahan</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="inputetxt3" size="50" name="keterangan">
                </div>
              </div>

              <div class="form-group row ">
                <label for="inputetxt3" class="col-sm-3 col-form-label ">Barang</label>
                <div class="row ml-5 ">

                <?php
                    $produk = array();
                    $produk=$_POST ["produk"];
                    $value=$_POST ["value"];
                    $harga=$_POST ["harga"];
                    $total=0;

                    for($x=0;$x<count($value);$x++){
                        if($value[$x]!=0){
                        
                  ?>
                  <div class="col-5 ">
                    <input type="text" readonly name="produk[]" class="form-control-plaintext" id="inputetxt3" value="<?= $produk[$x] ?>" >
                  </div>

                  <div class="col-1">
                    <input type="text" readonly name="value[]" class="form-control-plaintext" id="inputetxt3" value="<?= $value[$x] ?> x " >
                  </div>

                  <div class="col-3">
                    <input type="text" readonly name="harga[]" class="form-control-plaintext" id="inputetxt3" value="<?= $harga[$x] ?>" >
                  </div>

                  <div class="col-3">
                    <input type="number" readonly   class="form-control-plaintext" id="inputetxt3" value="<?= $harga[$x]*$value[$x] ?>" >
                  </div>
                  <br>

                <?php 

                        $total+=$harga[$x]*$value[$x];
                        }
                    }
                ?>
                  
                <div class="col mt-3">
                  <h5 class="mx-auto">Total Harga : <input type="number" readonly name="total" class="form-control-plaintext" id="inputetxt3" value="<?= $total ?>" ></h5>
                  
                </div>
              </div>

              <div class="form-group row ml-2">
                <label for="inputPassword3" class="col-sm-4  col-form-label">Pilih Pembayaran</label>
                <div class="col-sm-6 ml-5">
                  <select class="custom-select" name="bank">
                    <option>Bank BNI</option>
                    <option>Bank BRI</option>
                    <option>Bank Mandiri</option>
                    <option>Bank BTN</option>
                    <option>Dana</option>
                  </select>
                </div>

              </div>

              

            </div>
            <!-- /.card-body -->
            <div class="card-footer bg-white">
              
              <a href="index.php"><button type="button" class="btn btn-default float-right">Kembali</button></a>
              <button type="submit" class="btn btn-info">Bayar Sekarang</button>
            </div>
            <!-- /.card-footer -->
          </form>
        </div>
      </div>





      <script src="../asset/script.js"></script>
</body>
</html>