<?php
	$data = ambil_barang($_GET['kdbar']);
   	while($row = mysqli_fetch_array($data))
	{
		$kdbar = $row['kdbar'];
		$nmbar = $row['nmbar'];
		$harga_std = $row['harga_std'];
		$stok = $row['stok'];
		$kategori = $row['kategori'];
		$garansi = $row['garansi'];
	}
?>
<a href="index.php?page=master_barang">View Barang</a>
<table border="1" bordercolor="#CCCCCC" cellpadding="5" cellspacing="0">
	<tr>
    	<td align="center" colspan="2" bgcolor="#999999"><strong>Delete Data Barang</strong></td>
    </tr>
    <form action="index.php?page=master_barang" method="post">
    <tr>
    	<td>Nama Barang</td>
        <td><input type="text" name="nmbar" maxlength="25" size="20" value="<?php echo $nmbar ?>" disabled></td>
    </tr>
    <tr>
    	<td>Stok</td>
        <td><input type="text" name="stok" maxlength="5" size="3" value="<?php echo $stok ?>" disabled></td>
    </tr>
    <tr>
    	<td>Harga Standar</td>
        <td><input type="text" name="harga_std" maxlength="10" size="8" value="<?php echo $harga_std ?>" disabled></td>
    </tr>
    <tr>
    	<td bgcolor="#999999" colspan="2" align="center">
		   	<input type="hidden" name="kdbar" value="<?php echo $kdbar ?>">
        	<input type="hidden" value="hapus_barang" name="operator" />
            <input type="submit" value="Hapus Data">
        </td>
    </tr>
	</form>
</table>
