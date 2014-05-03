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
include("koneksi.php"); 
$query=mysql_query("SELECT * FROM news ORDER BY id DESC LIMIT 3");
		function truncate($string, $limit, $break, $pad)
		{
  		if(strlen($string) <= $limit) return $string;
		$string = substr($string, 0, $limit);
  		if(false !== ($breakpoint = strrpos($string, $break))) {
    		$string = substr($string, 0, $breakpoint);
  		}
		return $string . $pad;
		}
		while ($record=mysql_fetch_array($query)){
		echo "<table align=\"center\" cellpadding=\"20\">";
		    echo "<tr>";
			echo "<p><a href=\"viewnews.php?id=".$record['id']."\"><b id=\"title\">".$record['title']."</b></a>";
			echo "</td>";
			
			echo "<tr>";
			echo "<br /><small>".$record['created']." by ".$record['writer']."</small>";
			if (isset($_SESSION['username']) and ($_SESSION['username']==$record['writer'] or $_SESSION['username']=="admin")){
				echo "<small> <a href=\"editnews.php?id=".$record['id']."\">edit</a> <a href=\"deletenews.php?id=".$record['id']."\" onclick=\"return confirm('Delete ?')\">delete</a></small>";
			}
			echo "</tr>";
			
			echo "<tr>";
			echo truncate($record['body'],300," "," ..... <a href=\"viewnews.php?id=".$record['id']."\"><small> [read more] </small></a>")."</p>";
			echo "</tr>";
						
	    echo "</table>";
		echo "<hr />";
		}
?>
</td></tr></table>

</td>	
  </tr>  <?php include("footer.php"); ?>

