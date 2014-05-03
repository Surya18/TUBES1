<?php session_start();
if(isset($_SESSION['username']))
{ 
?>
<?php include("header.php"); ?>
</tr>
  <tr>
    <td width="171" height="332" valign="top" bordercolor="#000000" background="images/bg1.JPG">
<?php include("nav.php"); ?>
<td width="581" valign="top" border="2" background="images/bg3.JPG" bgcolor="#FF0066">
<table align="center" cellpadding="20">
<tr><td>
<p><b>News Management</b></p>
		<?php
		include("koneksi.php"); 
		$no = 1;
		if ($_SESSION['username']!="admin"){
		$query=mysql_query("SELECT * FROM news WHERE writer='".$_SESSION['username']."' ORDER BY id ");
		echo "<table border=\"1\"><tr><th>No.</th><th>Judul</th><th>Created</th><th>Manage</th></tr>";
		while ($record=mysql_fetch_array($query)){
			echo "<tr><td>".$no."</td>";
			echo "<td><b>".$record['title']."</b></td>";
			echo "<td>".$record['created']."</td>";
			echo "<td><a href=\"editnews.php?id=".$record['id']."\">edit</a> <a href=\"deletenews.php?id=".$record['id']."\" onclick=\"return confirm('Delete ?')\">delete</a></td>";
			$no++;
		}
		echo "</tr></table>";
		} else {
		$query=mysql_query("SELECT * FROM news ORDER BY id");
			echo "<table border=\"1\"><tr><th>No.</th><th>Judul</th><th>Created</th><th>Penulis</th><th>Manage</th></tr>";
		while ($record=mysql_fetch_array($query)){
			echo "<tr><td>".$no."</td>";
			echo "<td><b>".$record['title']."</b></td>";
			echo "<td>".$record['created']."</td><td>".$record['writer']."</td>";
			echo "<td><a href=\"editnews.php?id=".$record['id']."\">edit</a> <a href=\"deletenews.php?id=".$record['id']."\" onclick=\"return confirm('Delete ?')\">delete</a></td>";
			$no++;
		}
			echo "</tr></table>";
		}
		?>
		</td></tr></table>

</td>	
<?php include("footer.php"); ?>

<?php
} else {
	header( "Location: index.php" ) ;
} 
?>
