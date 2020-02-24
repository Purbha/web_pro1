<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Hapus Pelanggan</title>
</head>
<body background="2.jpg">
<?php
	require "koneksi.php";
	$kdpel = $_GET['kdpel'];
	$query = mysqli_query($con,"SELECT * FROM pelanggan WHERE kdpel='$kdpel'");
	while ($row = mysqli_fetch_array($query))
	{
		$kdpel = $row['kdpel'];
		$nmpel = $row['nmpel'];
		$alamat = $row['alamat'];
		$jk = $row['jk'];
	}
?>
<div align="center">
    <h2>Yakin mau hapus <?php echo $nmpel ?> ??</h2>
    <form action="index.php" method="post">
        <input type="hidden" value="hapus" name="operator" />
        <input type="hidden" value="<?php echo $kdpel ?>" name="kdpel" />
        <input type="submit" value="Hapus">
    </form>
</div>
</body>
</html>