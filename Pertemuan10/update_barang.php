<?php
	$data = ambil($_GET['kdbar']);
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
<table border="1" bordercolor="#CCCCCC" cellpadding="5" cellspacing="0">
	<tr>
    	<td align="center" colspan="2"><strong>Update Data Barang</strong></td>
    </tr>
    <form action="index.php" method="post">
    <tr><td>Nama Barang</td><td><input type="text" name="nmbar" maxlength="25" size="20" value="<?php echo $nmbar ?>"></td></tr>
    <tr><td>Stok</td><td><input type="text" name="stok" maxlength="5" size="3" value="<?php echo $stok ?>"></td></tr>
    <tr><td>Harga Standar</td><td><input type="text" name="harga_std" maxlength="10" size="8" value="<?php echo $harga_std ?>"></td></tr>
    <tr>
    	<td>Kategori</td>
        <td>
        	<select name="kategori" size="1">
			<?php
 				if ($kategori == "Komputer")
				{
	            	echo '<option value=Komputer" selected="selected">Alat Komputer</option>';
            		echo '<option value="Elektronik">Alat Elektronik</option>';
				}
				else
				{
            		echo '<option value="Elektronik" selected="selected">Alat Elektronik</option>';
	            	echo '<option value=Komputer">Alat Komputer</option>';
				}           
            ?>       
            </select>
        </td>
   	</tr>
    <tr>
    	<td>Garansi</td>
        <td>
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
    	<td bgcolor="#999999" colspan="2" align="center">
		   	<input type="hidden" name="kdbar" value="<?php echo $kdbar ?>">
        	<input type="hidden" value="edit" name="operator" />
            <input type="submit" value="Update">&nbsp;<input type="reset" value="Batal">
        </td>
    </tr>
	</form>
</table>
