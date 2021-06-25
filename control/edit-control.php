<?php
  $id=$_POST["id"];
  $produk=$_POST["produk"];
  $harga=$_POST ["harga"];
  $gambar = $_FILES["gambar"]['name'];
  require_once ("koneksi.php");

  if($gambar != "") {
    $ekstensi_diperbolehkan = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
    $x = explode('.', $gambar); //memisahkan nama file dengan ekstensi yang diupload
    $ekstensi = strtolower(end($x));
    $file_tmp = $_FILES['gambar']['tmp_name'];   
    $nama_gambar_baru = $gambar; //menggabungkan angka acak dengan nama file sebenarnya
          if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {     
                  move_uploaded_file($file_tmp, '../image/'.$nama_gambar_baru); //memindah file gambar ke folder gambar
                    // jalankan query INSERT untuk menambah data ke database pastikan sesuai urutan (id tidak perlu karena dibikin otomatis)
                    $query = "UPDATE produk SET nama = '$produk', gambar = '$gambar',harga='$harga'";
                    $query .= "WHERE id = '$id'";
                    $result = mysqli_query($conn,$query) or die (mysqli_error($conn));
                    // periska query apakah ada error
                    if(!$result){
                        die ("Query gagal dijalankan: ".mysqli_error($conn).
                             " - ".mysqli_error($conn));
                    } else {
                      //tampil alert dan akan redirect ke halaman index.php
                      //silahkan ganti index.php sesuai halaman yang akan dituju
                      echo "<script>alert('Data berhasil ditambah.');window.location='../view/admin.php';</script>";
                    }
  
              } else {     
               //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
                  echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='../view/tambahadmin.php';</script>";
              }
  } else {
     $query = "UPDATE produk SET nama = '$produk',harga='$harga'";
     $query .= "WHERE id = '$id'";
                    $result = mysqli_query($conn, $query);
                    // periska query apakah ada error
                    if(!$result){
                        die ("Query gagal dijalankan: ".mysqli_error($conn).
                             " - ".mysqli_error($conn));
                    } else {
                      //tampil alert dan akan redirect ke halaman index.php
                      //silahkan ganti index.php sesuai halaman yang akan dituju
                      echo "<script>alert('Data berhasil ditambah.');window.location='../view/admin.php';</script>";
                    }
  }

  // $query = "INSERT INTO produk (id,nama,harga) VALUES (NULL,'$produk','$harga')";
	// $hasil_mysql = mysqli_query($conn,$query) or die (mysqli_error($conn));
  //   header("location: ../view/admin.php");

?>