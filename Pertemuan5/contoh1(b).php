<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Toko Baju Slim Fit</title>
</head>
<body background="clean.bmp">

	<?php
		//Tangkap Variable
		$nama = $_POST["nama"]; 
		$alamat = $_POST["alamat"]; 
		$jk = $_POST["jk"]; 
		$ukuran = $_POST["ukuran"]; 
		$jumbel = $_POST["jumbel"]; 
		/*
		switch ($jumbel) {
			case $jumbel>10:
  				$diskon = 0.1*$total;
  				break;
			case $jumbel>5:
				$diskon = 0.05*$total;
				 break;
			default:
  				$diskon = 0;
		}
		*/
		//Rumus untuk menentukan harga
		if ($ukuran == 'S')	{
			if ($jk == 'pria') { $harga = 35000; } else { $harga = 40000; }			
		} else if ($ukuran == 'M') {
			if ($jk == 'pria') { $harga = 45000; } else { $harga = 50000; }						
		} else {
			if ($jk == 'pria') { $harga = 55000; } else { $harga = 60000; }									
		}
		//Total Belanja
		$total = $harga * $jumbel;

		if($jumbel > 10) {
 			$diskon = 0.1*$total; 			
		} else if($jumbel > 5) {
			$diskon = 0.05*$total;
		} else {
			$diskon = 0;
		}
		//Grand Total
		$grand = $total - $diskon;		
	?>
	<table align="center" border="1" cellpadding="5" cellspacing="1" bgcolor="#CCCCCC" bordercolor="#FFFFFF">
    	<tr><th align="center" colspan="2">Toko Baju Slim Fit</th></tr>
        <tr><td colspan="2" align="center">Selamat datang <?php print $nama; ?>. Berikut data belanja anda</td></tr>
        <tr><td>Pilihan Jenis Kelamin</td><td align="center"><?php print $jk ?></td></tr>
        <tr><td>Pilihan Ukuran</td><td align="center"><?php print $ukuran ?></td></tr>
        <tr><td>Harga Satuan</td><td align="center"><?php print $harga ?></td></tr>
        <tr><td>Jumlah Beli</td><td align="center"><?php print $jumbel ?></td></tr>
        <tr><td>Total Belanja</td><td align="center"><?php print $total ?></td></tr>
        <tr><td>Diskon</td><td align="center"><?php print $diskon ?></td></tr>
        <tr><th align="left">Grand Total</th><th align="center"><?php print $grand ?></th></tr>
        <tr><td colspan="2" align="center">Pesanan anda akan kami antarkan ke alamat <?php print $alamat; ?></td></tr>
        <tr><td colspan="2" align="center">Terima kasih <?php print $nama; ?> telah berbelanja ditoko kami.</td></tr>
        <tr><td colspan="2" align="center"><a href="contoh1(a).php">Input Data Lagi</a></td></tr>
    </table>

</body>
</html>
