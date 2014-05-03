<?php
session_start();
$id = $_GET['id'];
include("koneksi.php");
$query=mysql_query("SELECT * FROM news WHERE id=$id");
while ($record=mysql_fetch_array($query)){
	if(isset($_SESSION['username']) and ($_SESSION['username']==$record['writer'] or $_SESSION['username']=="admin"))
	{ 
	$query2=mysql_query("DELETE FROM news WHERE id=$id");
	}
}
header( "Location: manage.php" ) ;
?>