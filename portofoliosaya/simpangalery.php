<?php
    include 'koneksi.php';
    if (isset($_POST['simpangalery'])) {
        $id_galery = $_POST['id_galery'];
        $nama_galery = $_POST['nama_galery'];
        $about_galery = $_POST['about_galery'];
        $gambar_galery = $_POST['gambar_galery'];

        $sql = "INSERT INTO tbl_galery (nama_galery,about_galery,gambar_galery) VALUES ('$nama_galery','$about_galery','$gambar_galery')";
        $query = mysqli_query($connect, $sql);
        if ($query){
            header('Location: admin.php');
        }else{
            header('location: simpangalery.php?status=gagal');
        }
}
?>