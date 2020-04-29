<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" href="favicon.ico">
	<title>Toko ABC</title>
</head>
<?php
	require('koneksi.php');
	if (isset($_POST['operator']))
	{
		if ($_POST['operator'] == "add_barang") { input_barang(); }
		else if ($_POST['operator'] == "edit_barang") { update_barang(); }
		else if ($_POST['operator'] == "hapus_barang") { hapus_barang(); }
	}
?>
<body background="gambar/Clean_Desktop.jpg">
	<table width="80%" border="1" cellspacing="0" cellpadding="5" align="center">
  		<tr><td colspan="2" align="center" bgcolor="#CCFFCC"><?php require('header.php'); ?></td></tr>
  		<tr>
    		<td width="20%" align="left" bgcolor="#CCCCCC" ><?php require('menu_kiri.php'); ?></td>
    		<td width="80%" align="left" bgcolor="#FFFFFF">
            	<?php
					if (isset($_GET['page']))
					{
						if ($_GET['page'] == "master_barang") { require('barang/view_barang.php'); }
						else if ($_GET['page'] == "add_barang") { require('barang/add_barang.php'); }
						else if ($_GET['page'] == "update_barang") { require('barang/update_barang.php'); }
						else if ($_GET['page'] == "delete_barang") { require('barang/hapus_barang.php'); }
						else { require('home.php'); }
					}
					else { require('home.php'); }
				?>
            </td>
  		</tr>
  		<tr>
    		<td colspan="2" align="center" bgcolor="#CCFFCC"><?php require('footer.php'); ?></td>
  		</tr>
	</table>
</body>
</html>
