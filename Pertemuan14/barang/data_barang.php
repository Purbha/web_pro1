<?php 

function ambil_barang($kode=NULL)
{
	$konek = con();
	if ($kode != NULL) { $cari="WHERE kdbar = '$kode'"; } else { $cari=""; }
	$query = mysqli_query($konek,"SELECT * FROM barang $cari ORDER BY kdbar ASC");
	if (!$query) { echo mysqli_error(); } else { return $query; } 
}

function input_barang()
{
	$konek = con();
	$kdbar = $_POST['kdbar'];
	$nmbar = $_POST['nmbar'];
	$stok = $_POST['stok'];
	$harga_std = $_POST['harga_std'];
	$kategori = $_POST['kategori'];
	$garansi = $_POST['garansi'];
	$dibuat = date('Y-m-d H:i:s');
	$sql = "INSERT INTO barang (kdbar, nmbar, stok, harga_std, kategori, garansi, dibuat) 
				VALUES ('$kdbar','$nmbar','$stok','$harga_std', '$kategori','$garansi','$dibuat')";	
	$result = mysqli_query($konek,$sql);
	if (!$result) { echo mysqli_error($konek); }
}

function update_barang()
{
	$konek = con();
	$kdbar = $_POST['kdbar'];
	$nmbar = $_POST['nmbar'];
	$stok = $_POST['stok'];
	$harga_std = $_POST['harga_std'];
	$kategori = $_POST['kategori'];
	$garansi = $_POST['garansi'];
	$sql = "UPDATE barang SET nmbar='$nmbar', stok='$stok', harga_std='$harga_std', kategori='$kategori', garansi='$garansi'
			 WHERE kdbar='$kdbar'";
	$result = mysqli_query($konek,$sql);				
	if (!$result) { echo mysqli_error($konek); }
}

function hapus_barang()
{
	$konek = con();
	$kdbar = $_POST['kdbar'];
	$sql = "DELETE FROM barang WHERE kdbar='$kdbar'";
	$result = mysqli_query($konek,$sql);				
	if (!$result) { echo mysqli_error($con); }
}

?>