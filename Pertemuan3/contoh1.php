<!doctype html public "-//W3C//DTD HTML 4.0 //EN"> 
<html>
<head>
	<title>Contoh 1</title>
</head>
<body>
<?php
	$harga = 50000;
	$jumbel = 20;
	$total = $harga * $jumbel;
?>
<hr>
<h3 align="center">Program Menghitung Total Bayar</h3>
<hr>
Diketahui:<br>
Harga beli = <?php echo $harga; ?><br>
Jumlah Beli = <?= $jumbel ?><br>
<hr>
<?php echo "Total Bayar adalah: ".$total; ?>
<hr>
</body>
</html>
