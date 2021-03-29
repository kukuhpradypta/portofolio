<?php
$host ="localhost";
$user = "root"; 
$password = "";
$database = "portofolio";
$connect = mysqli_connect($host,$user,$password,$database)or die("Gagal Menghubungkan");

function registrasi($data){
    global $connect;

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($connect, $data["password"]);
    $password2 = mysqli_real_escape_string($connect, $data["password2"]);

    // cek username apakah sudah ada atau belum
    $result = mysqli_query($connect, "SELECT username FROM login_user WHERE username ='$username'");
    
    if(mysqli_fetch_assoc($result)){
        echo "<script>alert('gunakan username lain wahai pengguna sesungguhnya username ini sudah terdaftar')</script>";
        return false;
    }

    // cek konfirmasi password
    if ( $password !== $password2 ) {
        echo "<script>
                alert('wahai pengguna sesungguhnya input password anda tidak sesuai dengan sebelumnya');
                </script>";
                return false;
    }

    //enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);
    // var_dump($password); die;

    mysqli_query($connect, "INSERT INTO login_user VALUES('','$username','$password')");
    return mysqli_affected_rows($connect);


}


?>