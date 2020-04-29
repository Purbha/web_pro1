<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Master Data Barang</title>
	<link rel="shortcut icon" href="favicon.ico">
</head>
<body background="Clean_Desktop.jpg">
	<h1>Master Data Barang</h1>
   	<h3><a href='index.php?hal=add'>Tambah Data</a><br><a href='index.php'>Refresh</a></h3>
	<?php 
		require "koneksi.php";
		
		if (isset($_POST['operator']))
		{
			if ($_POST['operator'] == "add") { input_barang(); }
			else if ($_POST['operator'] == "edit") { update_barang(); }
		}
		if (isset($_GET['hal']))
		{
			if ($_GET['hal'] == 'add') { require "add_barang.php"; }
			else if ($_GET['hal'] == 'update') { require "update_barang.php"; }
			else if ($_GET['hal'] == 'delete') { hapus(); }
		}

		echo "<br>";
    	require "view_barang.php";

    	
	?>
</body>
</html>
