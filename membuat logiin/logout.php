<?php
// untuk menglogout session dan memastikan tidak bisa kembali ke halaman utama sebelum login
session_start();
$_SESSION=[];
session_unset();
session_destroy();

header("Location: index.php");
exit;
?>