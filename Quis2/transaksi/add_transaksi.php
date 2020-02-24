<table border="1" bordercolor="#CCCCCC" cellpadding="5" cellspacing="0">
	<tr>
    	<td align="center" colspan="2"  bgcolor="#999999"><strong>Input Data Transaksi</strong></td>
    </tr>
    <form action="index.php?page=simpan_transaksi" method="post">
    <tr>
    	<td>Tanggal Transaksi</td><td><?php echo date("d-F-Y") ?></td>
    </tr>
    <tr>
    	<td>Pilih Pelanggan</td>
        <td>
        	<select name="kdpel">    
		<?php
			$pelanggan = ambil_pelanggan();
			while ($pel = mysqli_fetch_array($pelanggan))
			{ echo "<option value=".$pel['kdpel']." selected='selected'>".$pel['nmpel']." (".$pel['alamat'].")"."</option>"; }
		?>
        	</select>
        </td>
    </tr>
    <tr>
    	<td>Pilih Barang</td>
        <td>
        	<select name="kdbar">    
		<?php
			$barang = ambil_barang();
			while ($bar = mysqli_fetch_array($barang))
			{ echo "<option value=".$bar['kdbar']." selected='selected'>".$bar['nmbar']." (".$bar['harga_std'].")"."</option>"; }
		?>
        	</select>
        </td>
    </tr>
    <tr>
    	<td>Jumlah Beli</td><td><input type="text" size="5" maxlength="2" name="jumbel" /></td>
    </tr>
    <tr>
    	<td bgcolor="#999999" colspan="2" align="center">
            <input type="submit" value="Tambah">
        </td>
    </tr>
	</form>
</table>
<p>
    Ketentuan:<br />
    <ol start="1" type="A">
    	<li>Jika jumlah beli lebih dari 10 maka diskon adalah 2 persen dari total</li>
    	<li>Jika jumlah beli lebih dari 5 maka diskon adalah 1 persen dari total</li>
    </ol>
</p>