<?php
include 'koneksi.php';

if (isset($_GET['nama_user'])){
    header('Location: admin.php');
}
$nama_user =$_GET['nama_user'];

$sql = "DELETE FROM tbl_pesan where nama_user='$nama_user'";
$query =mysqli_query($connect,$sql);
if ($query){
    header('Location: admin.php');
    }else{
        header('location: simpanpesan.php?status=gagal');
    }

?>