<?php
session_start();

if(!isset($_SESSION["login"])){
    header("Location: index.php");
    exit;
}

include 'koneksi.php';

    $id_galery = $_GET['id_galery'];
    $sql = "SELECT * FROM tbl_galery WHERE id_galery='$id_galery'";
    $query = mysqli_query($connect, $sql);
    $tampilproduk = mysqli_fetch_assoc($query);


if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
 <!-- Required meta tags -->
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=Diskon">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

<!-- font awesome -->
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <title>Edit Galery Admin</title>
 <style>
      body {
  background-color: #f1f2f6;
}
.jumbotron {
  padding-top: 5%;
  background-color: #c8d6e5;
}
.glombang {
  margin-top: -5%;
}
#galery {
  background-color: #c8d6e5;
}

    </style>
  </head>
  <body>
       <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="margin-bottom:5%;">
      <div class="container">
        <a class="navbar-brand" href="dashboard.php" style="margin-left:-5%; padding-right:3%;">KUKUH P.A.A</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>

    <form action="editgalery.php" method="POST">
        <div class="container mt-4 "  style="background-color:#ffffff; border:solid 2px;">
<div class="container p-2">
 
<div class="form-group row mt-4">
        </div>
<input type="hidden" name="id_galery" value="<?php echo $tampilproduk['id_galery']?>">

        <div class="form-group row mt-4">
            <label for="namaproduk" class="col-sm-3 col-form-label">Nama Galery</label>
            <div class="col-sm-8">
                <input type="text" class="form-control mb-4 text-dark" id="txt_namaproduk" name="nama_galery"  style="background-color:#ffffff; border:solid 2px; border-color:black;"  value="<?php echo $tampilproduk['nama_galery']?>">
            </div>
        </div>
        
        <div class="form-group row mt-4">
            <label for="hargaproduk" class="col-sm-3 col-form-label">About Galery</label>
            <div class="col-sm-8">
                <input type="text" class="form-control mb-4 text-dark" id="txt_hargaproduk" name="about_galery"  style="background-color:#ffffff; border:solid 2px; border-color:black;"  value="<?php echo $tampilproduk['about_galery']?>">
            </div>
        </div>
    


        <div class="form-group row mt-4">
          <label for="urlgambar" class="col-sm-3 col-form-label">URL Gambar</label>
          <div class="col-sm-8">
            <input type="text" class="form-control mb-5 text-dark" id="url_gambar" name="gambar_galery" style="background-color:#ffffff; border:solid 2px; border-color:black;"  value="<?php echo $tampilproduk['gambar_galery']?>">
          </div>
        </div>
        
<hr>
        <button class="btn btn-primary mt-2 mb-3" name="simpanedit" value="simpan">Simpan</button>
        <a href="admin.php" style="border:solid; border-color:red; background-color:red; color:white; text-decoration:none; margin:2%; padding:6px 15px; border-radius:5px;" >Cancle</a>
        
</div>

</div>   
    </div>
    </form>




 <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option Diskon: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/Diskon+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
  </body>
</html>
