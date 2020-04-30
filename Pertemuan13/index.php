<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" href="favicon.ico">
	<title>Toko ABC</title>
</head>
<?php require('koneksi.php'); ?>
<body background="gambar/Clean_Desktop.jpg">
	<table width="80%" border="1" cellspacing="0" cellpadding="5" align="center">
  		<tr><td colspan="2" align="center" bgcolor="#CCFFCC"><?php require('header.php'); ?></td></tr>
  		<tr>
    		<td width="20%" align="left" bgcolor="#CCCCCC" ><?php require('menu_kiri.php'); ?></td>
    		<td width="80%" align="left" bgcolor="#FFFFFF">
            	<?php require('pesan.php'); ?>
            	<?php require('page.php'); ?>
            </td>
  		</tr>
  		<tr>
    		<td colspan="2" align="center" bgcolor="#CCFFCC"><?php require('footer.php'); ?></td>
  		</tr>
	</table>
</body>
</html>
