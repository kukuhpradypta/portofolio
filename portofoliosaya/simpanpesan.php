<?php
    include 'koneksi.php';
    if (isset($_POST['simpanpesan'])) {
        $nama_user = $_POST['nama_user'];
        $email_user = $_POST['email_user'];
        $pesan_user = $_POST['pesan_user'];

        $sql = "INSERT INTO tbl_pesan (nama_user,email_user,pesan_user) VALUES ('$nama_user','$email_user','$pesan_user')";
        $query = mysqli_query($connect, $sql);
        if ($query){
            header('Location: dashboard.php');
        }else{
            header('location: simpanpesan.php?status=gagal');
        }
}
?>