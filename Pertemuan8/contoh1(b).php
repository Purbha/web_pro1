<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Buku Tamu</title>
</head>
<body bgcolor="#99FFFF">
<p>
	<h3>Sintak Insert Data</h3>
	<em>INSERT INTO table_name (column1, column2, column3,...) VALUES (value1, value2, value3,...)</em>
</p>
<?php
	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$komentar = $_POST['komentar'];
	//Buka Koneksi
	$con = mysqli_connect("localhost","dba_penjualan","dba_penjualan","dba_penjualan");
	//Syntax Insert
	$sql = "INSERT INTO bukutamu (bukutamu_nama, bukutamu_email, bukutamu_komentar)
		VALUES ('$nama','$email','$komentar')";	

	//Eksekusi
	mysqli_query($con,$sql);
?>
<p>
	<h3>Listing Anda</h3>
    <em><?php echo $sql; ?></em>
</p>
<p>
    Terima kasih <strong><?php echo $nama ?></strong>, komentar anda sudah disimpan.<br />
</p>
<?php
	//Tutup Koneksi 
	mysqli_close($con);
 ?>
</body>
</html>
