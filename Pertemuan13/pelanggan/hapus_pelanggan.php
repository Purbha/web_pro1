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
<font face="Geneva, Arial, Helvetica, sans-serif" size="+2" color="#666666">
	<a href="index.php?page=master_pelanggan">View Pelanggan</a>
</font>
<table border="1" bordercolor="#CCCCCC" cellpadding="5" cellspacing="0">
	<tr>
    	<td align="center" colspan="2" bgcolor="#999999"><strong>Delete Data Pelanggan</strong></td>
    </tr>
    <form action="index.php?page=master_pelanggan" method="post">
    <tr>
    	<td>Nama Pelanggan</td>
        <td><input type="text" name="nmpel" maxlength="25" size="20" value="<?php echo $nmpel ?>" disabled></td>
    </tr>
    <tr>
    	<td>Alamat</td>
        <td><textarea name="alamat" rows="4" cols="20" disabled="disabled"><?php echo $alamat ?></textarea></td>
    </tr>
    <tr>
    	<td bgcolor="#999999" colspan="2" align="center">
		   	<input type="hidden" name="kdpel" value="<?php echo $kdpel ?>">
        	<input type="hidden" value="hapus_pelanggan" name="operator" />
            <input type="submit" value="Hapus Data">
        </td>
    </tr>
	</form>
</table>
