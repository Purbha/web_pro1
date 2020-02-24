<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Tiket Kereta Api</title>
</head>
<body background="bg.JPG">

	<?php
		$nama = $_POST["nama"]; 
		$kelas = $_POST["kelas"]; 
		$kode = $_POST["kode"]; 
		$makan = $_POST["makan"]; 
		
		switch($kelas)
		{
			case ("1"):
				$nm_kelas = "Executive";
				break;
			case ("2"):
				$nm_kelas = "Bussines";
				break;
			default:
				$nm_kelas = "Economy";			
		}
		
		switch($kode)
		{
			case ("AP"):
				$nm_kereta = "Argo Parahyangan";
				break;
			case ("AD"):
				$nm_kereta = "Argo Dwipangga";
				break;
			default:
				$nm_kereta = "Argo ";			
		}

		switch($makan)
		{
			case ("Ya"):
				$tambahan = 15000;
				break;
			default:
				$tambahan = 0;			
		}
		
		if ($kelas == '1')
		{
			if ($kode == 'AP') { $harga = 45000; } else if ($kode == 'AD') { $harga = 65000; } else { $harga = 85000; }			
		}
		else if ($kelas == '2')
		{
			if ($kode == 'AP') { $harga = 40000; } else if ($kode == 'AD') { $harga = 60000; } else { $harga = 80000; }			
		}
		else
		{
			if ($kode == 'AP') { $harga = 35000; } else if ($kode == 'AD') { $harga = 55000; } else { $harga = 75000; }			
		}
		
		//Totat Belanja
		$total = $harga + $tambahan;
				
	?>
	<table align="center" border="1" cellpadding="5" cellspacing="1" bgcolor="#CCCCCC" bordercolor="#FFFFFF">
    	<tr><th align="center" colspan="2">Tiket Kereta Api</th></tr>
        <tr><td colspan="2" align="center">Selamat datang <?php print $nama; ?>. Berikut data pembelian anda</td></tr>
        <tr><td>Kode</td><td align="center"><?php print $kode ?></td></tr>
        <tr><td>Nama Kereta Api</td><td align="center"><?php print $nm_kereta ?></td></tr>
        <tr><td>Kelas</td><td align="center"><?php print $nm_kelas ?></td></tr>
        <tr><td>Makan</td><td align="center"><?php print $makan ?></td></tr>
        <tr><td>Harga Satuan</td><td align="center"><?php print $harga ?></td></tr>
        <tr><td>Biaya Tambahan</td><td align="center"><?php print $tambahan ?></td></tr>
        <tr><td>Total</td><td align="center"><?php print $total ?></td></tr>
        <tr><td colspan="2" align="center">Terima kasih <?php print $nama; ?> telah membeli tiket.</td></tr>
        <tr><td colspan="2" align="center"><a href="form1.php">Input Data Lagi</a></td></tr>
    </table>

</body>
</html>
