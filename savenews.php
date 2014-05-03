<?php
session_start();
if(isset($_SESSION['username'])){
$title = $_POST['title'];
$body = $_POST['body'];
include("koneksi.php");
if ($title != "" and $body != ""){
$query=mysql_query("INSERT INTO news (title,body,created,writer) VALUES ('$title','$body',now(),'".$_SESSION['username']."')");
}
}
header( "Location: index.php" ) ;
?>