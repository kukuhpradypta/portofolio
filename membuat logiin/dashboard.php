<?php
// agar tidak bisa akses lewat url menggunakan session
session_start();

if(!isset($_SESSION["login"])){
    header("Location: index.php");
    exit;
}

require 'function.php'

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>selamat anda berhasil masuk wahai pengguna ini adalah halaman utamamu</h1><br>
    <button type="submit" name="logout"><a href="logout.php" style="text-decoration:none;color:black;">logout</a></button>
</body>
</html>