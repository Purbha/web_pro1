<?php
	$data = ambil_pelanggan($_GET['kdpel']);
   	while($row = mysqli_fetch_array($data))
	{
		$kdpel = $row['kdpel'];
		$nmpel = $row['nmpel'];
		$alamat = $row['alamat'];
		$jk = $row['jk'];
	}
?>
<p <?=$font4;?>>Delete Pelanggan - <a href='index.php?page=master_pelanggan'>Back</a></p>
<br>
<table <?=$table;?>>
	<tr>
    	<th <?=$th;?>>Field</th>
        <th <?=$th;?>>Value</th>
    </tr>
    <form action="index.php?page=master_pelanggan" method="post">
    <tr>
    	<td <?=$td;?>>Nama Pelanggan</td>
        <td <?=$td;?>><input type="text" name="nmpel" maxlength="25" size="20" value="<?=$nmpel;?>" disabled></td>
    </tr>
    <tr>
    	<td <?=$td;?>>Alamat</td>
        <td <?=$td;?>><textarea name="alamat" rows="4" cols="20" disabled="disabled"><?=$alamat;?></textarea></td>
    </tr>
    <tr>
    	<td colspan="2" <?=$td;?>>
		   	<input type="hidden" name="kdpel" value="<?=$kdpel;?>">
        	<input type="hidden" value="hapus_pelanggan" name="operator" />
            <input type="submit" value="Hapus Data" <?=$button;?>>
        </td>
    </tr>
	</form>
</table>
