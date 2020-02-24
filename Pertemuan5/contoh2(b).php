<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Toko Sepatu Sukasol</title>
</head>
<body background="clean.bmp">

	<?php
		//Tangkap Variable
		$nama = $_POST["nama"]; 
		$alamat = $_POST["alamat"]; 
		$merk = $_POST["merk"]; 
		$ukuran = $_POST["ukuran"]; 
		$jumbel = $_POST["jumbel"]; 
		
		//Rumus untuk menentukan harga
		if ($ukuran >= 27 && $ukuran<= 35)
		{
			if ($merk == 'adidas') { $harga = 35000; } else { $harga = 40000; }			
		}
		else if ($ukuran >= 36 && $ukuran<= 42)
		{
			if ($merk == 'adidas') { $harga = 45000; } else { $harga = 50000; }						
		}
		else
		{
			if ($merk == 'adidas') { $harga = 55000; } else { $harga = 60000; }									
		}
		
		//Total Belanja
		$total = $harga * $jumbel;
		
		switch ($total)
		{
			case $total>1000000:
  				$diskon = 0.1*$total;
  				break;
			case $total>500000:
				$diskon = 0.05*$total;
				 break;
			default:
  				$diskon = 0;
		}
		
		//Grand Total
		$grand = $total - $diskon;
		
	?>
	<table align="center" border="1" cellpadding="5" cellspacing="1" bgcolor="#CCCCCC" bordercolor="#FFFFFF">
    	<tr><th align="center" colspan="2">Toko Sepatu Sukasol</th></tr>
        <tr><td colspan="2" align="center">Selamat datang <?php print $nama; ?>. Berikut data belanja anda</td></tr>
        <tr><td>Pilihan Merk</td><td align="center"><?php print $merk ?></td></tr>
        <tr><td>Pilihan Ukuran</td><td align="center"><?php print $ukuran ?></td></tr>
        <tr><td>Harga Satuan</td><td align="center"><?php print $harga ?></td></tr>
        <tr><td>Jumlah Beli</td><td align="center"><?php print $jumbel ?></td></tr>
        <tr><td>Total Belanja</td><td align="center"><?php print $total ?></td></tr>
        <tr><td>Diskon</td><td align="center"><?php print $diskon ?></td></tr>
        <tr><th align="left">Grand Total</th><th align="center"><?php print $grand ?></th></tr>
        <tr><td colspan="2" align="center">Pesanan anda akan kami antarkan ke alamat <?php print $alamat; ?></td></tr>
        <tr><td colspan="2" align="center">Terima kasih <?php print $nama; ?> telah berbelanja ditoko kami.</td></tr>
        <tr><td colspan="2" align="center"><a href="contoh2(a).php">Input Data Lagi</a></td></tr>
    </table>

</body>
</html>
