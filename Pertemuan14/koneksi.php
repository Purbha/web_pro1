<?php
function con()
{
	$host = "127.0.0.1";
	$user = "dba_penjualan";
	$pass = "dba_penjualan";
	$db = "dba_penjualan";	
	return mysqli_connect($host,$user,$pass,$db);
}

function garansi($kode)
{
	if ($kode == 1) { return "Ya"; } else { return "Tidak"; } 
}
	
require('barang/data_barang.php');
require('pelanggan/data_pelanggan.php');

?>