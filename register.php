<?php session_start(); ?>
  <?php include("header.php"); ?>
</tr>
  <tr>
    <td width="171" height="332" valign="top" bordercolor="#000000" background="images/bg1.JPG">
	<?php include("nav.php"); ?>
    <td width="581" valign="top" border="2" background="images/bg3.JPG" bgcolor="#FF0066">
	
	<br/>	<br/>
<?php 
if(!isset($_SESSION['username']))
{ 
?>
      <div align="center" style="font-weight: bold">
        <p>Register</p>
      </div>  
<br/>	 
<form method="post" action="save_user.php">
<br/>
<table align="center">
<tr>
  <td>Username</td>
  <td><input name="username" type="text" size="33" /></td>
</tr>
<tr>
  <td>Password</td>
  <td><input name="password" type="password" size="33" /></td>
</tr>
<tr>
  <td>Nama Lengkap</td>
  <td><input name="nama_lengkap" type="text" size="33" /></td>
</tr>
<tr>
  <td>Email</td>
  <td><input name="email" type="text" size="33" /></td>
</tr>
<tr>
  <td></td>
  <td><input type="submit" name="Submit" value="Submit" /></td>

<tr/>
  </table>
</form><br/>

<?php 
} else {
	echo "<br />You are logged in as <b>".$_SESSION['username']."</b>";
?>
<form action="logout.php" method="post">
<input type="submit" value="logout">
</form>	
	<?php
}
?>
    </tr>
<?php include("footer.php"); ?>