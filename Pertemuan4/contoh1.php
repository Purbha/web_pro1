<!DOCTYPE html>
<html>
<head>
       <title>Contoh 1</title>
</head>
<body>
<hr>
<?php
	$alas = 7;
	$tinggi = 3;
	$luas = ($alas*$tinggi)/2; 
?>
<pre>
    Program Menghitung Luas Segitiga
    Diketahui:
</pre>
Alas adalah <?php print $alas; ?><br>
Tinggi adalah <?=$tinggi;?><br>
Maka luas segitiga adalah <?php print $luas ?> (bentuk tidak di format)<br>	    
Maka luas segitiga adalah <?php printf("%.2f",$luas); ?> (bentuk tidak di format)<br>	    		       
<hr>
<?php
	$motor = "Vario 150 Smart Key";
	$panjang = strlen($motor);
?>
<pre>
    Program Fungsi String Strlen
    Diketahui:
</pre>
Panjang karakter dari <?php print $motor ?> adalah <?php print $panjang ?>
<hr>
<?php
	$kata = "Starlight";
	$dicari= "r";
	$hasil = strpos($kata,$dicari);
?>
<pre>
    Program Fungsi String Strpos
    Diketahui:
</pre>
Huruf <?php print $dicari ?> pada kata <?php echo $kata ?> ada pada posisi <?php print $hasil ?>
<hr>
</body>
</html>
