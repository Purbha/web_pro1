<?php
function con()
{
	$host = "127.0.0.1";
	$user = "dba_penjualan";
	$pass = "dba_penjualan";
	$db = "dba_penjualan";	
	return mysqli_connect($host,$user,$pass,$db);
}
require('barang/data_barang.php');
require('pelanggan/data_pelanggan.php');
require('transaksi/data_transaksi.php');
require('fungsi.php');
require('operator.php');
require('style.php');
?>