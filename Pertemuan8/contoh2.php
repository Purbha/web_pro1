<!DOCTYPE html>
<html>
<head>
	<title>View Buku Tamu</title>
</head>

<body bgcolor="#CCFFFF">
	<h2>Tampil Buku Tamu</h2>    
	<p>
    	Pernyataan <strong>Select</strong> digunakan untuk mengambil data dari database.
        <table border="5" cellpadding="10" cellspacing="0"  bgcolor="#CCCCCC" bordercolor="#999999">
        	<tr><td>SELECT <em>nama_kolom</em> FROM <em>nama_tabel</em></td></tr>
        </table>
        <br><br>
	    Berikut adalah data buku tamu anda:
	</p>
	<?php
		$con = mysqli_connect("localhost","dba_penjualan","dba_penjualan","dba_penjualan");
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
    <a href="contoh1(a).php" target="_blank">Input Buku Tamu</a>
    <?php
	//Tutup Koneksi 
	mysqli_close($con);
 	?>
</body>
</html>
