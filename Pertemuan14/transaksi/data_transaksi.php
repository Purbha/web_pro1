<?php
function hitung_diskon($jumbel,$subtotal)
{
	if($jumbel > 10)
	{
		$hasil = 0.1 * $subtotal;
		
	}
	else if($jumbel > 5)
	{
		$hasil = 0.05 * $subtotal;		
	}
	else
	{
		$hasil = 0;
	}
	return $hasil;
}

function ambil_idtrans($tgl)
{
	$konek = con();
	$sql = "SELECT idtrans FROM transaksi WHERE idtrans like '%$tgl%' ORDER BY idtrans DESC LIMIT 1";
	$query = mysqli_query($konek,$sql);
	if (!$query) { echo mysqli_error($konek); } else { return $query; } 
}

function input_transaksi()
{
	$konek = con();
	$idtrans = $_POST['idtrans'];
	$tgl_trans = date('Y-m-d');
	$kdpel = $_POST['kdpel'];
	$kdbar = $_POST['kdbar'];
	$jumbel = $_POST['jumbel'];
	$dibuat = date('Y-m-d H:i:s');
	$diupdate = date('Y-m-d H:i:s');
	if(!is_numeric($jumbel))
	{
		$result = 0;
		return $result;		
	}
	$barang = ambil_barang($kdbar);
	while ($row = mysqli_fetch_array($barang))
	{
		$harga = $row['harga_std'];
		$stok = $row['stok'];		
	}
	$subtotal = $jumbel * $harga;
	$diskon = hitung_diskon($jumbel,$subtotal);
	$total = $subtotal - $diskon;
	$sql = "INSERT INTO transaksi (idtrans, tgl_trans, kdpel, kdbar, harga, jumbel, subtotal, diskon, total, dibuat, diupdate) 
	VALUES ('$idtrans','$tgl_trans','$kdpel','$kdbar','$harga','$jumbel','$subtotal','$diskon','$total','$dibuat','$diupdate')";	
	$query = mysqli_query($konek,$sql);
	if (!$query)
	{
		$result = 2;
		return $result;
	}
	else
	{
		$result = 1;
		return $result;
	}
}
?>