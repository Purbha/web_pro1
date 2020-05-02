<p <?=$font4;?>>Add Barang - <a href="index.php?page=master_barang">Back</a></p>
<br>
<table <?=$table;?>>
	<tr>
    	<th <?=$th;?>>Field</th>
        <th <?=$th;?>>Value</th>
    </tr>
    <form action="index.php?page=master_barang" method="post">
    <tr>
    	<td <?=$td;?>>Kode</td>
        <td <?=$td;?>><input type="text" name="kdbar" maxlength="10" size="10"></td>
    </tr>
    <tr>
    	<td <?=$td;?>>Nama Barang</td>
        <td <?=$td;?>><input type="text" name="nmbar" maxlength="25" size="20"></td>
    </tr>
    <tr>
    	<td <?=$td;?>>Stok</td>
        <td <?=$td;?>><input type="text" name="stok" maxlength="5" size="3"></td>
    </tr>
    <tr>
    	<td <?=$td;?>>Harga Standar</td>
        <td <?=$td;?>><input type="text" name="harga_std" maxlength="10" size="8"></td>
    </tr>
    <tr>
    	<td <?=$td;?>>Kategori</td>
        <td <?=$td;?>>
        	<select name="kategori" size="1">
            	<option value="Komputer">Alat Komputer</option>
            	<option value="Elektronik">Alat Elektronik</option>
            </select>
        </td>
   	</tr>
    <tr>
    	<td <?=$td;?>>Garansi</td>
        <td <?=$td;?>>
			<input type="radio" value="1" name="garansi" />Bergaransi &nbsp;
			<input type="radio" value="0" name="garansi" />Tidak Bergaransi
        </td>
   	</tr>
    <tr>
    	<td colspan="2" <?=$td;?>>
        	<input type="hidden" value="add_barang" name="operator" />
            <input type="submit" value="Tambah" <?=$button;?>>
        </td>
    </tr>
	</form>
</table>
