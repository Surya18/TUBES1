<?php session_start(); ?>
<?php include("header.php"); ?>
</tr>
  <tr>
    <td width="171" height="332" valign="top" bordercolor="#000000" background="images/bg1.JPG">
	<?php include("nav.php"); ?>
<td width="581" valign="top" border="2" background="images/bg3.JPG" bgcolor="#FF0066">
<form method="post" action="save.php">
<br/>
<p align="center">Buku Tamu</p>
<table align="center">
<tr>
  <td>Nama</td>
  <td><input name="nama" type="text" size="33" /></td>
  </tr>
  <tr>
<td valign="top">Komentar</td>
    <td><textarea name="komentar" cols="30" rows="5"></textarea></td>
    </label>
	</tr>
	<tr>
	<td></td>
		<td><input type="submit" name="Submit" value="Submit" /></td>

	<tr/>
  </table>
</form><br/>
<p align="center"><b>Daftar Komentar</b></p><br />
		<table align="center">
		<?php
		include("koneksi.php"); 
		$query=mysql_query("SELECT * FROM bukutamu ORDER BY id DESC LIMIT 5");
		while ($record=mysql_fetch_array($query)){
			echo "<tr><td>Nama : ".$record['nama'];
			echo "<br />Komentar : ".$record['komentar']."<hr/></td>";
			if (isset($_SESSION['username']) and $_SESSION['username']=="admin"){
				?>
				<td>
				<form action="delete.php" method="post">
				<input type="hidden" name="id" value="<?php echo $record['id']; ?>">
				<input type="submit" value="delete" onclick="return confirm('Delete ?')">
				</form>
				</td>
				<?php
			}
			echo "</tr>";
		}
		
		?>
		</table><br/>
</td>


</tr>
<?php include("footer.php"); ?>