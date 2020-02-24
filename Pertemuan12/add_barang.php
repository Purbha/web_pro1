<table border="1" bordercolor="#CCCCCC" cellpadding="5" cellspacing="0">
	<tr>
    	<td align="center" colspan="2"><strong>Input Data Barang</strong></td>
    </tr>
    <form action="index.php" method="post">
    <tr><td>Kode</td><td><input type="text" name="kdbar" maxlength="10" size="10"></td></tr>
    <tr><td>Nama Barang</td><td><input type="text" name="nmbar" maxlength="25" size="20"></td></tr>
    <tr><td>Stok</td><td><input type="text" name="stok" maxlength="5" size="3"></td></tr>
    <tr><td>Harga Standar</td><td><input type="text" name="harga_std" maxlength="10" size="8"></td></tr>
    <tr>
    	<td>Kategori</td>
        <td>
        	<select name="kategori" size="1">
            	<option value="Komputer">Alat Komputer</option>
            	<option value="Elektronik">Alat Elektronik</option>
            </select>
        </td>
   	</tr>
    <tr>
    	<td>Garansi</td>
        <td>
			<input type="radio" value="1" name="garansi" />Bergaransi &nbsp;
			<input type="radio" value="0" name="garansi" />Tidak Bergaransi
        </td>
   	</tr>
    <tr>
    	<td bgcolor="#999999" colspan="2" align="center">
        	<input type="hidden" value="add" name="operator" />
            <input type="submit" value="Tambah">&nbsp;<input type="reset" value="Batal">
        </td>
    </tr>
	</form>
</table>
