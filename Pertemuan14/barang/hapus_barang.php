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
<p <?=$font4;?>>Delete Barang - <a href="index.php?page=master_barang">Back</a></p>
<br>
<table <?=$table;?>>
	<tr>
    	<th <?=$th;?>>Field</th>
    	<th <?=$th;?>>Value</th>
    </tr>
    <form action="index.php?page=master_barang" method="post">
    <tr>
    	<td <?=$td;?>>Nama Barang</td>
        <td <?=$td;?>><input type="text" name="nmbar" maxlength="25" size="20" value="<?=$nmbar;?>" disabled></td>
    </tr>
    <tr>
    	<td <?=$td;?>>Stok</td>
        <td <?=$td;?>><input type="text" name="stok" maxlength="5" size="3" value="<?=$stok;?>" disabled></td>
    </tr>
    <tr>
    	<td <?=$td;?>>Harga Standar</td>
        <td <?=$td;?>><input type="text" name="harga_std" maxlength="10" size="8" value="<?=$harga_std;?>" disabled></td>
    </tr>
    <tr>
    	<td colspan="2" <?=$td;?>>
		   	<input type="hidden" name="kdbar" value="<?=$kdbar;?>">
        	<input type="hidden" value="hapus_barang" name="operator" />
            <input type="submit" value="Hapus Data" <?=$button;?>>
        </td>
    </tr>
	</form>
</table>
