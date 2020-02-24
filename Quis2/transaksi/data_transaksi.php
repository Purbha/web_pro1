<?php 

function ambil_transaksi($nmpel=NULL)
{
	$konek = con();
	if ($nmpel != NULL) { $cari="WHERE B.nmpel = '$nmpel'"; } else { $cari=""; }
	$query = mysqli_query($konek,"SELECT * FROM transaksi A INNER JOIN pelanggan B ON A.kdpel=B.kdpel INNER JOIN barang C
		ON A.kdbar=C.kdbar $cari ORDER BY A.idtransaksi ASC");
	if (!$query) { echo mysqli_error(); } else { return $query; } 
}

function input_transaksi()
{
	$konek = con();
	$tgl_trans = date('Y-m-d');
	$kdpel = $_POST['kdpel'];
	$kdbar = $_POST['kdbar'];
	$harga = $_POST['harga'];
	$jumbel = $_POST['jumbel'];
	$subtotal = $_POST['subtotal'];
	$diskon = $_POST['diskon'];
	$total = $_POST['total'];
	$dibuat = date('Y-m-d H:i:s');
	$sql = "INSERT INTO transaksi (tgl_trans, kdpel, kdbar, harga, jumbel, subtotal, diskon, total, dibuat) 
				VALUES ('$tgl_trans','$kdpel','$kdbar','$harga','$jumbel','$subtotal','$diskon','$total','$dibuat')";	
	$result = mysqli_query($konek,$sql);
	if (!$result) { echo mysqli_error($konek); }
}

?>