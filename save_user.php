<?php
$username = $_POST['username'];
$password = $_POST['password'];
$nama_lengkap = $_POST['nama_lengkap'];
$email = $_POST['email'];
include("koneksi.php"); 
if ($username != "" and $password != ""){
$query=mysql_query("INSERT INTO pengguna (username,password,nama_langkap,email) VALUES ('$username','$password','$nama_lengkap','$email')");
}
header( "Location: berhasil.php" ) ;
?>