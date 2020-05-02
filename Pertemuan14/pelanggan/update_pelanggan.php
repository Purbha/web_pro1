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
<p <?=$font4;?>>Update Pelanggan - <a href='index.php?page=master_pelanggan'>Back</a></p>
<br>
<table <?=$table;?>>
	<tr>
    	<th <?=$th;?>>Field</th>
    	<th <?=$th;?>>Value</th>
    </tr>
    <form action="index.php?page=master_pelanggan" method="post">
    <tr>
    	<td <?=$td;?>>Nama Pelanggan</td>
        <td <?=$td;?>><input type="text" name="nmpel" maxlength="25" size="20" value="<?=$nmpel;?>"></td>
    </tr>
    <tr>
    	<td <?=$td;?>>Alamat</td>
        <td <?=$td;?>><textarea name="alamat" rows="4" cols="20"><?=$alamat;?></textarea></td>
    </tr>
    <tr>
    	<td <?=$td;?>>Jenis Kelamin</td>
        <td <?=$td;?>>
        	<?php
				if ($jk == "Pria")
				{
					echo '<input type="radio" value="Pria" name="jk" checked="checked" />Pria &nbsp;';
					echo '<input type="radio" value="Wanita" name="jk" />Wanita';					
				}
				else
				{
					echo '<input type="radio" value="Pria" name="jk"/>Pria &nbsp;';
					echo '<input type="radio" value="Wanita" name="jk" checked="checked" />Wanita';					
				}
			?>
        </td>
   	</tr>
    <tr>
    	<td colspan="2" <?=$td;?>>
		   	<input type="hidden" name="kdpel" value="<?=$kdpel;?>">
        	<input type="hidden" value="edit_pelanggan" name="operator" />
            <input type="submit" value="Update" <?=$button;?>>
        </td>
    </tr>
	</form>
</table>
