<?php
include 'koneksi.php';

if (isset($_POST['simpanedit'])) {
    $id_galery = $_POST['id_galery'];
    $nama_galery = $_POST['nama_galery'];
    $about_galery = $_POST['about_galery'];
    $gambar_galery = $_POST['gambar_galery'];


    $sql = "UPDATE tbl_galery SET nama_galery='$nama_galery', about_galery='$about_galery', gambar_galery='$gambar_galery' WHERE id_galery='$id_galery'";
    $query = mysqli_query($connect,$sql);
    if ($query) {
    header('Location: admin.php');
    }else{
    header('Location: editgalery.php?status=gagal');
    } 
}
?>