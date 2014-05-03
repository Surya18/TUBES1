<?php session_start();?>
  <?php include("header.php");?>
</tr>
  <tr>
    <td width="171" height="332" valign="top" bordercolor="#000000" background="images/bg1.JPG">
	<?php include("nav.php"); ?>
    <td width="581" valign="top" border="2" background="images/bg3.JPG" bgcolor="#FF0066">
<?php
$id = $_GET['id'];
	include("koneksi.php");
$query=mysql_query("SELECT * FROM news WHERE id=$id");
while ($record=mysql_fetch_array($query)){
	if(isset($_SESSION['username']) and ($_SESSION['username']==$record['writer'] or $_SESSION['username']=="admin"))
	{ 
?>
<script type="text/javascript" src="tinymce/jscripts/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript">
	tinyMCE.init({
		// General options
		mode : "textareas",
		theme : "advanced",
		plugins : "pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,inlinepopups,autosave",

		// Theme options
		theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|,styleselect,formatselect,fontselect,fontsizeselect",
		theme_advanced_buttons2 : "cut,copy,paste,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
		theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
		theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak,restoredraft",
		theme_advanced_toolbar_location : "top",
		theme_advanced_toolbar_align : "left",
		theme_advanced_statusbar_location : "bottom",
		theme_advanced_resizing : true,

		// Example word content CSS (should be your site CSS) this one removes paragraph margins
		content_css : "css/word.css",

		// Drop lists for link/image/media/template dialogs
		template_external_list_url : "lists/template_list.js",
		external_link_list_url : "lists/link_list.js",
		external_image_list_url : "lists/image_list.js",
		media_external_list_url : "lists/media_list.js",

		// Replace values for the template plugin
		template_replace_values : {
			username : "Some User",
			staffid : "991234"
		}
	});
</script>
<table align="center" cellpadding="20">
<tr><td>


		<p><b>Edit News</b></p>
		<form action="saveeditednews.php" method="post">
		<input type="hidden" name="id" value="<?php echo $record['id']; ?>">
		<p>Judul : <input type="text" name="title" size="32" value="<?php echo $record['title']; ?>"></p>
		<p>Isi : <textarea name="body" rows="10" cols="80"><?php echo $record['body']; ?></textarea></p>
		<p><input type="submit" value="Save"></p>
		</form>
</tr></td>
</table>



<?php
} else {
	header( "Location: index.php" );
} 
}
?>
</tr>
<?php include("footer.php"); ?>