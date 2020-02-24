<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Contoh Fungsi 2</title>
</head>

<body>
<?php
	function hitung_total($harga,$jumbel)
	{
		$hasil = $harga * $jumbel;
		return $hasil;
	}
?>
<strong>Contoh Fungsi 2</strong>
<p>
	Sebuah fungsi memiliki beberapa <em>karakteristik</em> diantaranya adalah:
    <ol start="1" type="A">
    	<li>Pemberian nama fungsi <u>bisa</u> menggunakan huruf atau garis bawah.</li>
    	<li>Pemberian nama fungsi <font color="#FF0000" size="+2">tidak boleh</font> menggunakan nomor</li>
        <li>Pemberian nama fungsi bersifat <i>case sensitive</i></li>
        <li>Pemberian nama fungsi sebaiknya <s>HARUS</s> disesuaikan dengan tujuan fungsi itu dibuat</li>
    </ol>
</p>
<p>
	<?php
		$harga = 10000;
		$jumbel = 3; 
	?>
	Harga satuan adalah <?php print($harga); ?><br>
    Jumlah beli adalah <?php print($jumbel); ?>
	<hr width="300" align="left">
    Total bayar adalah <?php echo hitung_total($harga,$jumbel); ?>
</p>
</body>
</html>
