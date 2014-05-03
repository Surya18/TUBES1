<style type="text/css">
<!--
.style2 {font-size: 16px}
.style3 {
	font-family: "Courier New", Courier, monospace;
	font-size: 18px;
}
-->
</style>
<table cellspacing="10" width="132" border="0">
<tr>
    <td width="127">
<p class="style2">
<span class="style3"><a href="index.php" target="_parent">Home</a><br/>
<a href="profil.php">Profile</a><br/>
<a href="pengalaman.php">Pengalaman</a><br/>
<a href="bukutamu.php">Buku Tamu</a></span></p>
<?php 
if(!isset($_SESSION['username']))
{ 
?>
<form action="login.php" method="post">
<p align="left" class="style2"> 
Username<br/><input type="text" name="username" /> 
Password<br/><input type="password" name="password" />
<input type="submit" name="Submit" value="Login" />
</p>
Tidak Punya Akun? <br/>
<a href="register.php">Register</a>  
<br/>
</form>
<?php 
} else {
	echo "<br />You are logged in as <b>".$_SESSION['username']."</b>";
	echo "<br /><br /><a href=\"manage.php\">Manage News</a>";
	echo "<br /><a href=\"addnews.php\">Add News</a><br /><br />";
?>
<form action="logout.php" method="post">
<input type="submit" value="logout">
</form>	
	<?php
	}
?>

    </tr>
</table>
