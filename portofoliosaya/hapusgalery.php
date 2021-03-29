<?php
include 'koneksi.php';

if (isset($_GET['id_galery'])){
    header('Location: admin.php');
}
$id_galery =$_GET['id_galery'];

$sql = "DELETE FROM tbl_galery where id_galery='$id_galery'";
$query =mysqli_query($connect,$sql);
if ($query){
    header('Location: admin.php');
    }else{
        header('location: simpangalery.php?status=gagal');
    }

?>