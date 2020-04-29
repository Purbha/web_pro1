<!DOCTYPE html>
<html>
<head>
	<title>Contoh Fungsi 1</title>
</head>

<body bgcolor="#CCCCCC">
    <h2 align="center">Fungsi Dalam PHP</h2>
    <p>Sifat-sifat dari sebuah fungsi adalah:</p>
    <ul>
        <li>Fungsi merupakan sebuah pernyataan yang dapat dipanggil berulang-ulang dalam sebuah program</li>
        <li>Fungsi tidak akan langsung dieksekusi ketika program dijalankan</li>
        <li>Fungsi dieksekusi ketika fungsi itu dipanggil</li>
    </ul>
<?php
	function cetak()
	{
		print("Ini adalah hasil cetak dengan menggunakan fungsi");
	}
?>
<table border="1" cellpadding="10" bgcolor="#FFFFFF">
	<tr>
    	<td><?php cetak(); ?></td>
    </tr>
</table>
</body>
</html>
