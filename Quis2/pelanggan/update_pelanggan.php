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
<a href="index.php?page=master_pelanggan">View Pelanggan</a>
<table border="1" bordercolor="#CCCCCC" cellpadding="5" cellspacing="0">
	<tr>
    	<td align="center" colspan="2" bgcolor="#999999"><strong>Update Data Pelanggan</strong></td>
    </tr>
    <form action="index.php?page=master_pelanggan" method="post">
    <tr><td>Nama Pelanggan</td><td><input type="text" name="nmpel" maxlength="25" size="20" value="<?php echo $nmpel; ?>"></td></tr>
    <tr><td>Alamat</td><td><textarea name="alamat" rows="4" cols="20"><?php echo $alamat ?></textarea></td></tr>
    <tr>
    	<td>Jenis Kelamin</td>
        <td>
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
    	<td bgcolor="#999999" colspan="2" align="center">
		   	<input type="hidden" name="kdpel" value="<?php echo $kdpel ?>">
        	<input type="hidden" value="edit_pelanggan" name="operator" />
            <input type="submit" value="Update">&nbsp;<input type="reset" value="Batal">
        </td>
    </tr>
	</form>
</table>
