<?php
include 'koneksi.php';

if (isset($_POST['simpanprofile'])) {
    $id_user = $_POST['id_user'];
    $nama_user = $_POST['nama_user'];
    $image_user = $_POST['image_user'];
    $keahlian= $_POST['keahlian'];


    $sql = "UPDATE tbl_user SET nama_user='$nama_user', image_user='$image_user', keahlian='$keahlian' WHERE id_user='$id_user'";
    $query = mysqli_query($connect,$sql);
    if ($query) {
    header('Location: admin.php');
    }else{
    header('Location: editprofile.php?status=gagal');
    } 
}
?>