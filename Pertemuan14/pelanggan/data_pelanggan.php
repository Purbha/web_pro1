<?php 

function ambil_pelanggan($kode=NULL)
{
	$konek = con();
	if ($kode != NULL) { $cari="WHERE kdpel = '$kode'"; } else { $cari=""; }
	$query = mysqli_query($konek,"SELECT * FROM pelanggan $cari ORDER BY kdpel ASC");
	if (!$query) { echo mysqli_error(); } else { return $query; } 
}

function input_pelanggan()
{
	$konek = con();
	$kdpel = $_POST['kdpel'];
	$nmpel = $_POST['nmpel'];
	$alamat = $_POST['alamat'];
	$jk = $_POST['jk'];
	$dibuat = date('Y-m-d H:i:s');
	$sql = "INSERT INTO pelanggan (kdpel, nmpel, alamat, jk, dibuat) 
				VALUES ('$kdpel','$nmpel','$alamat','$jk','$dibuat')";	
	$result = mysqli_query($konek,$sql);
	if (!$result) { echo mysqli_error($konek); }
}

function update_pelanggan()
{
	$konek = con();
	$kdpel = $_POST['kdpel'];
	$nmpel = $_POST['nmpel'];
	$alamat = $_POST['alamat'];
	$jk = $_POST['jk'];
	$sql = "UPDATE pelanggan SET nmpel='$nmpel', alamat='$alamat', jk='$jk' WHERE kdpel='$kdpel'";
	$result = mysqli_query($konek,$sql);				
	if (!$result) { echo mysqli_error($konek); }
}

function hapus_pelanggan()
{
	$konek = con();
	$kdpel = $_POST['kdpel'];
	$sql = "DELETE FROM pelanggan WHERE kdpel='$kdpel'";
	$result = mysqli_query($konek,$sql);				
	if (!$result) { echo mysqli_error($con); }
}

?>