<?php
if (isset($_GET['page']))
{
	//Barang
	if ($_GET['page'] == "master_barang") { require('barang/view_barang.php'); }
	else if ($_GET['page'] == "add_barang") { require('barang/add_barang.php'); }
	else if ($_GET['page'] == "update_barang") { require('barang/update_barang.php'); }
	else if ($_GET['page'] == "delete_barang") { require('barang/hapus_barang.php'); }
	//Pelanggan
	else if ($_GET['page'] == "master_pelanggan") { require('pelanggan/view_pelanggan.php'); }
	else if ($_GET['page'] == "add_pelanggan") { require('pelanggan/add_pelanggan.php'); }
	else if ($_GET['page'] == "update_pelanggan") { require('pelanggan/update_pelanggan.php'); }
	else if ($_GET['page'] == "delete_pelanggan") { require('pelanggan/hapus_pelanggan.php'); }
	//Transaksi
	else if ($_GET['page'] == "transaksi") { require('transaksi/view_transaksi.php'); }
	//Home
	else { require('home.php'); }
}
else
{
	require('home.php');
}
?>