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
<p <?=$font4;?>>Update Barang - <a href="index.php?page=master_barang">Back</a></p>
<br>
<table <?=$table;?>>
	<tr>
    	<th <?=$th;?>>Field</th><th <?=$th;?>>Value</th>
    </tr>
    <form action="index.php?page=master_barang" method="post">
    <tr>
    	<td <?=$td;?>>Nama Barang</td>
        <td <?=$td;?>><input type="text" name="nmbar" maxlength="25" size="20" value="<?=$nmbar;?>"></td>
    </tr>
    <tr>
    	<td <?=$td;?>>Stok</td>
        <td <?=$td;?>><input type="text" name="stok" maxlength="5" size="3" value="<?=$stok;?>"></td>
    </tr>
    <tr>
    	<td <?=$td;?>>Harga Standar</td>
        <td <?=$td;?>><input type="text" name="harga_std" maxlength="10" size="8" value="<?=$harga_std;?>"></td>
    </tr>
    <tr>
        <td <?=$td;?>>Kategori</td>
        <td <?=$td;?>>
            <select name="kategori" size="1">
            <?php
                if ($kategori == "Komputer")
                {
                    echo '<option value="Komputer" selected="selected">Alat Komputer</option>';
                    echo '<option value="Elektronik">Alat Elektronik</option>';
                }
                else
                {
                    echo '<option value="Elektronik" selected="selected">Alat Elektronik</option>';
                    echo '<option value="Komputer">Alat Komputer</option>';
                }           
            ?>       
            </select>
        </td>
    </tr>
    <tr>
        <td <?=$td;?>>Garansi</td>
        <td <?=$td;?>>
            <?php
                if ($garansi == 1)
                {
                    echo '<input type="radio" value="1" name="garansi" checked="checked" />Bergaransi &nbsp;';
                    echo '<input type="radio" value="0" name="garansi" />Tidak Bergaransi';					
                }
                else
                {
                    echo '<input type="radio" value="1" name="garansi"/>Bergaransi &nbsp;';
                    echo '<input type="radio" value="0" name="garansi" checked="checked" />Tidak Bergaransi';					
                }
            ?>
        </td>
    </tr>
    <tr>
        <td colspan="2" <?=$td;?>>
            <input type="hidden" name="kdbar" value="<?=$kdbar;?>">
            <input type="hidden" value="edit_barang" name="operator" />
            <input type="submit" value="Update" <?=$button;?>>
        </td>
    </tr>
	</form>
</table>
