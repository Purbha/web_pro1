<!DOCTYPE html>
<html>
<head>
	<title>Edit Pelanggan</title>
</head>
<body background="2.jpg">
<?php
	require "koneksi.php";
	$kdpel = $_GET['kdpel'];
	$query = mysqli_query($con,"SELECT * FROM pelanggan WHERE kdpel='$kdpel'");
	while ($row = mysqli_fetch_array($query))
	{
		$kdpel = $row['kdpel'];
		$nmpel = $row['nmpel'];
		$alamat = $row['alamat'];
		$jk = $row['jk'];
	}
?>
<table bgcolor="#CCCCCC" bordercolor="#FFFFFF" border="2" cellpadding="5" cellpadding="0">
	<tr>
    	<td bgcolor="#999999" align="center" colspan="2"><strong>Ubah Data Pelanggan</strong></td>
    </tr>
    <form action="index.php" method="post">
    <tr>
    	<td>Kode Pelanggan</td>
        <td><?php echo $kdpel ?></td>
    </tr>
    <tr>
    	<td>Nama</td>
        <td><input type="text" name="nmpel" value="<?php echo $nmpel ?>" maxlength="25" size="20"></td>
    </tr>
	<tr>
    	<td>Alamat</td>
        <td><textarea name="alamat" rows="3" cols="20"><?php echo $alamat ?></textarea></td>
    </tr>
    <tr>
    	<td>Jenis Kelamin</td>
    	<td>
        	<select name="jk" size="1">
			<?php
                if ($jk == 'Pria')
                { echo "<option value='Pria' selected='selected'>1. Pria</option><option value='Wanita'>2. Wanita</option>"; }
                else
                { echo "<option value='Pria'>1. Pria</option><option value='Wanita' selected='selected'>2. Wanita</option>"; }
             ?>
            </select>
        </td>
    </tr>
    <tr>
    	<td bgcolor="#999999" colspan="2" align="center">
        	<input type="hidden" value="edit" name="operator" />
        	<input type="hidden" value="<?php echo $kdpel ?>" name="kdpel" />
            <input type="submit" value="Ubah">&nbsp;<input type="reset" value="Batal">
        </td>
    </tr>
	</form>
</table>
</body>
</html>