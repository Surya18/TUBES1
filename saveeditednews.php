<?php
session_start();
$id = $_POST['id'];
$title = $_POST['title'];
$body = $_POST['body'];
include("koneksi.php");
$query=mysql_query("SELECT * FROM news WHERE id=$id");
while ($record=mysql_fetch_array($query)){
	if(isset($_SESSION['username']) and ($_SESSION['username']==$record['writer'] or $_SESSION['username']=="admin"))
	{ 
	if ($title != "" and $body != ""){
	$query2=mysql_query("UPDATE news SET news.title='$title', news.body='$body', news.modified=NOW() WHERE news.id=$id");
	}
}
}
header("Location: index.php");
?>