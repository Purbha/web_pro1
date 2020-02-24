<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>View Buku Tamu</title>
</head>
<?php
	//Kondisi jika ada pengiriman data dari form_input.php
	if (isset($_POST['opt']))
	{
		$nama = $_POST['nama'];
		$email = $_POST['email'];
		$komentar = $_POST['komentar'];		
		//Buka Koneksi
		$con = mysqli_connect("localhost","dba_penjualan","dba_penjualan","dba_penjualan");
		//Syntax Insert
		$sql = "INSERT INTO bukutamu (bukutamu_nama, bukutamu_email, bukutamu_komentar) VALUES ('$nama','$email','$komentar')";	
		//Eksekusi
		mysqli_query($con,$sql);	
	}
?>

<body bgcolor="#CCFFFF">
	<h2>Tampil Buku Tamu</h2>    
	<?php
		$con = mysqli_connect("127.0.0.1","dba_penjualan","dba_penjualan","dba_penjualan");
		$sql = "SELECT * FROM bukutamu";
		$query = mysqli_query($con,$sql);
	?>
    <table border="1" cellpadding="5" cellspacing="0" bordercolor="#CCCCCC">
    	<tr>
        	<th>No</th><th>Nama</th><th>Email</th><th>Komentar</th><th>Tgl Input</th>
        </tr>
        <?php
			$no = 1;
			while($row = mysqli_fetch_array($query))
			{
				print "<tr>";
					print "<td>".$no."</td>";
					print "<td>".$row['bukutamu_nama']."</td>";
					print "<td>".$row['bukutamu_email']."</td>";
					print "<td>".$row['bukutamu_komentar']."</td>";
					print "<td>".$row['bukutamu_create']."</td>";
				print "</tr>";
				$no++;
			}
		?>
    </table>
    <a href="form_input.php">Input Buku Tamu</a>
</body>
</html>
