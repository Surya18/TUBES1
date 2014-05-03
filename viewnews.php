<?php session_start(); ?>
  <?php include("header.php"); ?>
</tr>
  <tr>
    <td width="171" height="332" valign="top" bordercolor="#000000" background="images/bg1.JPG">
	<?php include("nav.php"); ?>
<td width="581" valign="top" border="2" background="images/bg3.JPG" bgcolor="#FF0066">
<table align="center" cellpadding="20">
<tr><td>
		<?php
		$id = $_GET['id'];
		include("koneksi.php");
		$query=mysql_query("SELECT * FROM news WHERE id=$id");
		while ($record=mysql_fetch_array($query)){
			echo "<p><b id=\"title\">".$record['title']."</b>";
			echo "<br /><small>".$record['created']." by ".$record['writer']."</small>";
			if (isset($_SESSION['username']) and ($_SESSION['username']==$record['writer'] or $_SESSION['level']=="admin")){
				echo "<small> <a href=\"editnews.php?id=".$record['id']."\">edit</a> <a href=\"deletenews.php?id=".$record['id']."\" onclick=\"return confirm('Delete ?')\">delete</a></small>";
			}
			echo $record['body']."</p>";
		}
		?>
		</td>
</tr>
</table>
</tr>
<?php include("footer.php"); ?>
