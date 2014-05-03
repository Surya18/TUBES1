<?php
session_start();
if(isset($_SESSION['username'])){
$id = $_POST['id'];
include("koneksi.php");
$query=mysql_query("DELETE FROM bukutamu WHERE id=$id");
}
header( "Location: bukutamu.php" ) ;
?>