<?php
if (isset($_POST['operator']))
{
	//Barang
	if ($_POST['operator'] == "add_barang") { input_barang(); }
	if ($_POST['operator'] == "edit_barang") { update_barang(); }
	if ($_POST['operator'] == "hapus_barang") { hapus_barang(); }
	//Pelanggan
	if ($_POST['operator'] == "add_pelanggan") { input_pelanggan(); }
	if ($_POST['operator'] == "edit_pelanggan") { update_pelanggan(); }
	if ($_POST['operator'] == "hapus_pelanggan") { hapus_pelanggan(); }
	//Transaksi
	if ($_POST['operator'] == "add_transaksi")
	{
		$result = input_transaksi();
		if($result == 0)
		{
			$pesan_error = "Jumlah beli tidak valid";
		}
		if($result == 2)
		{
			$pesan_error = "Gagal menyimpan transaksi";			
		}
		if($result == 1)
		{
			unset($_POST['kdpel']);
			unset($_POST['kdbar']);
			$pesan_sukses = "Data berhasil disimpan";			
		}
	}
}
?>