<?php
include 'koneksi.php';

if (isset($_POST['simpanabout'])) {
    $id_profile = $_POST['id_profile'];
    $nama_profile = $_POST['nama_profile'];
    $umur_profile = $_POST['umur_profile'];
    $alamat_profile = $_POST['alamat_profile'];
    $ttl_profile = $_POST['ttl_profile'];
    $about_profile = $_POST['about_profile'];


    $sql = "UPDATE tbl_profile SET nama_profile='$nama_profile', umur_profile='$umur_profile', alamat_profile='$alamat_profile', ttl_profile='$ttl_profile', about_profile='$about_profile' WHERE id_profile='$id_profile'";
    $query = mysqli_query($connect,$sql);
    if ($query) {
    header('Location: admin.php');
    }else{
    header('Location: editabout.php?status=gagal');
    } 
}
?>