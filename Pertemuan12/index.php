<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="shortcut icon" href="favicon.ico">
	<title>Toko ABC</title>
</head>
<?php
	require('koneksi.php');
	if (isset($_POST['operator']))
	{
		//Barang
		if ($_POST['operator'] == "add_barang") { input_barang(); }
		if ($_POST['operator'] == "edit_barang") { update_barang(); }
		if ($_POST['operator'] == "hapus_barang") { hapus_barang(); }
		//Pelanggan
		if ($_POST['operator'] == "add_pelanggan") { input_pelanggan(); }
		if ($_POST['operator'] == "edit_pelanggan") { update_pelanggan(); }
		if ($_POST['operator'] == "hapus_pelanggan") { hapus_pelanggan(); }
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
						//Barang
						if ($_GET['page'] == "master_barang") { require('barang/view_barang.php'); }
						else if ($_GET['page'] == "add_barang") { require('barang/add_barang.php'); }
						else if ($_GET['page'] == "update_barang") { require('barang/update_barang.php'); }
						else if ($_GET['page'] == "delete_barang") { require('barang/hapus_barang.php'); }
						//Pelanggan
						else if ($_GET['page'] == "master_pelanggan") { require('pelanggan/view_pelanggan.php'); }
						else if ($_GET['page'] == "add_pelanggan") { require('pelanggan/add_pelanggan.php'); }
						else if ($_GET['page'] == "update_pelanggan") { require('pelanggan/update_pelanggan.php'); }
						else if ($_GET['page'] == "delete_pelanggan") { require('pelanggan/hapus_pelanggan.php'); }
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
