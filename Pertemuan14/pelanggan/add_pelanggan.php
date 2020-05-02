<p <?=$font4;?>>Add Pelanggan - <a href='index.php?page=master_pelanggan'>Back</a></p>
<br>
<table <?=$table;?>>
	<tr>
    	<th <?=$th;?>>Field</th>
    	<th <?=$th;?>>Value</th>
    </tr>
    <form action="index.php?page=master_pelanggan" method="post">
    <tr>
    	<td <?=$td;?>>Kode</td>
        <td <?=$td;?>><input type="text" name="kdpel" maxlength="10" size="10"></td>
    </tr>
    <tr>
    	<td <?=$td;?>>Nama Pelanggan</td>
        <td <?=$td;?>><input type="text" name="nmpel" maxlength="25" size="20"></td>
    </tr>
    <tr>
    	<td <?=$td;?>>Alamat</td>
        <td <?=$td;?>><textarea name="alamat" rows="4" cols="20"></textarea></td>
    </tr>
    <tr>
    	<td <?=$td;?>>Jenis Kelamin</td>
        <td <?=$td;?>>
			<input type="radio" value="Pria" name="jk" />Pria &nbsp;
			<input type="radio" value="Wanita" name="jk" />Wanita
        </td>
   	</tr>
    <tr>
    	<td colspan="2" <?=$td;?>>
        	<input type="hidden" value="add_pelanggan" name="operator" />
            <input type="submit" value="Tambah" <?=$button;?>>
        </td>
    </tr>
	</form>
</table>
