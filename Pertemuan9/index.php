<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Data Pelanggan</title>
</head>
<?php

	require "koneksi.php";
	
	if (isset($_POST['operator']))
	{
		if ($_POST['operator'] == "add")
		{
			$kdpel = $_POST['kdpel'];
			$nmpel = $_POST['nmpel'];
			$alamat = $_POST['alamat'];
			$jk = $_POST['jk'];
			$dibuat = date('Y-m-d');
			$sql = "INSERT INTO pelanggan (kdpel, nmpel, alamat, jk, dibuat) VALUES ".
				"('$kdpel','$nmpel','$alamat','$jk','$dibuat')";	
			$result = mysqli_query($con,$sql);
			if (!$result) { echo mysqli_error($con); }
		
		}
		else if ($_POST['operator'] == "edit")
		{
			$kdpel = $_POST['kdpel'];
			$nmpel = $_POST['nmpel'];
			$alamat = $_POST['alamat'];
			$jk = $_POST['jk'];
			$sql = "UPDATE pelanggan SET nmpel='$nmpel', alamat='$alamat', jk='$jk' WHERE kdpel='$kdpel'";
			$result = mysqli_query($con,$sql);				
			if (!$result) { echo mysqli_error($con); }
		}
		else if ($_POST['operator'] == "hapus")
		{
			$kdpel = $_POST['kdpel'];
			$sql = "DELETE FROM pelanggan WHERE kdpel='$kdpel'";
			$result = mysqli_query($con,$sql);				
			if (!$result) { echo mysqli_error($con); }
		}
	}
?>
<body background="2.jpg">
	<?php require "tampil.php"; ?><br>
	<?php include "tambah.php"; ?>
</body>
</html>
