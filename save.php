<?php
$nama = $_POST['nama'];
$komentar = $_POST['komentar'];
include("koneksi.php"); 
if ($nama != "" and $komentar != ""){
$query=mysql_query("INSERT INTO bukutamu (nama,komentar) VALUES ('$nama','$komentar')");
}
header( "Location: bukutamu.php" ) ;
?>