<table bgcolor="#CCCCCC" bordercolor="#FFFFFF" border="2" cellpadding="5" cellpadding="0">
	<tr>
    	<td bgcolor="#999999" align="center" colspan="2"><strong>Input Data Pelanggan</strong></td>
    </tr>
    <form action="index.php" method="post">
    <tr><td>Kode Pelanggan</td><td><input type="text" name="kdpel" maxlength="25" size="20"></td></tr>
    <tr><td>Nama</td><td><input type="text" name="nmpel" maxlength="25" size="20"></td></tr>
	<tr><td>Alamat</td><td><textarea name="alamat" rows="3" cols="20"></textarea></td></tr>
    <tr>
    	<td>Jenis Kelamin</td>
    	<td>
        	<select name="jk" size="1">
            	<option value="Pria">1. Pria</option><option value="Wanita">2. Wanita</option>
            </select>
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
