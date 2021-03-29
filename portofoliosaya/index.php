<?php
session_start();

if(isset($_SESSION["login"])){
    header("Location: dashboard.php");
    exit;
}

require 'koneksi.php';

if(isset($_POST["login"])){

    $username= $_POST["username"];
    $password= $_POST["password"];

    $result = mysqli_query($connect, "SELECT * FROM login_user WHERE username = '$username'");

    // cek username
    if(mysqli_num_rows($result) === 1 ) {

        // cek password
        $row = mysqli_fetch_assoc($result);
        if(password_verify($password,$row["password"])){
            // cek session
            $_SESSION["login"] = true;

            header("Location: admin.php");
            exit;
        }
    }
    $error = true;
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style>
          body {
  background-color: #7f8c8d;
}
    </style>
  </head>
  <body>
    <div class="container"  style="background-color:#f1f2f6; border:solid white 2px;border-radius:10px; width:30%; margin-top:5%;">
    <div class="container p-2">
    <div class="form-group row mt-3">
      <?php if(isset($error)): ?>
      <?php
        echo "<script>alert('Username atau password anda salah');</script>";
      ?>
    <!-- <p style="color:red;">username atau password salah</p> -->
    <?php endif; ?>
    <form action="" method="post">
        <h3 class="d-flex justify-content-center mb-4">Silahkan Login Yang Mulya</h3>
        <hr>
        <div class="form-group row" style="margin-top:10%;">
            <label for="username" class="col-sm-3 col-form-label" style="font-size:20px; margin-top:-1%;">Username</label>
            <div class="col-sm-8">
                <input type="text" class="form-control mb-4 text-dark" id="username" name="username"  style="background-color:#ffffff; border:solid 1px; border-color:black;margin-left:14%;">
            </div>
        </div>

        <div class="form-group row mt-3">
            <label for="password" class="col-sm-3 col-form-label" style="font-size:20px; margin-top:-1%;">Password</label>
            <div class="col-sm-8">
                <input type="password" class="form-control mb-4 text-dark" id="password" name="password"  style="background-color:#ffffff; border:solid 1px; border-color:black;margin-left:14%;">
            </div>
        </div>
        <hr>
        <div class="d-flex justify-content-center pb-4 pt-3">
                <button type="submit" class="btn btn-success me-5 ps-5 pe-5" name="login">Login</button>
                <button type="submit" class="btn btn-warning" style="padding-left:35px; padding-right:35px;" name="register"><a href="register.php" style="text-decoration:none;color:white;">Registrasi</a></button>
        </div>
    </form>
    </div>
    </div>
    </div>









    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>