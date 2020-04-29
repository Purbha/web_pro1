<font face="Geneva, Arial, Helvetica, sans-serif" size="+2" color="#666666">
	<a href="index.php?page=master_pelanggan">View Pelanggan</a>
</font>
<table border="1" bordercolor="#CCCCCC" cellpadding="5" cellspacing="0">
	<tr>
    	<td align="center" colspan="2"  bgcolor="#999999"><strong>Input Data Pelanggan</strong></td>
    </tr>
    <form action="index.php?page=master_pelanggan" method="post">
    <tr><td>Kode</td><td><input type="text" name="kdpel" maxlength="10" size="10"></td></tr>
    <tr><td>Nama Pelanggan</td><td><input type="text" name="nmpel" maxlength="25" size="20"></td></tr>
    <tr><td>Alamat</td><td><textarea name="alamat" rows="4" cols="20"></textarea></td></tr>
    <tr>
    	<td>Jenis Kelamin</td>
        <td>
			<input type="radio" value="Pria" name="jk" />Pria &nbsp;
			<input type="radio" value="Wanita" name="jk" />Wanita
        </td>
   	</tr>
    <tr>
    	<td bgcolor="#999999" colspan="2" align="center">
        	<input type="hidden" value="add_pelanggan" name="operator" />
            <input type="submit" value="Tambah">&nbsp;<input type="reset" value="Batal">
        </td>
    </tr>
	</form>
</table>
