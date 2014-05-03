<?php
$username = $_POST['username'];
$password = $_POST['password'];
include("koneksi.php");
$query=mysql_query("SELECT * FROM pengguna WHERE username='$username' AND password='$password'");
while ($record=mysql_fetch_array($query)){
session_start();
$_SESSION['username']=$username;
}
header( "Location: index.php" ) ;
?>