<?php
	$kdpel = $_POST['kdpel'];
	$jumbel = $_POST['jumbel'];
	$pelanggan = ambil_pelanggan($kdpel);
	while ($pel = mysqli_fetch_array($pelanggan))
	{
		$nmpel = $pel['nmpel'];
		$alamat = $pel['alamat'];
	}
	$kdbar = $_POST['kdbar'];
	$barang = ambil_barang($kdbar);
	while ($bar = mysqli_fetch_array($barang))
	{
		$nmbar = $bar['nmbar'];
		$harga = $bar['harga_std'];
	}

?>
<table border="1" bordercolor="#CCCCCC" cellpadding="5" cellspacing="0">
	<tr>
    	<td align="center" colspan="2"  bgcolor="#999999"><strong>Input Data Transaksi</strong></td>
    </tr>
    <tr>
    	<td colspan="2">Dear <strong><?php echo $nmpel ?></strong>, berikut adalah data belanja anda.</td>
    </tr>
    <form action="index.php?page=view_transaksi" method="post">
    <tr>
    	<td>Tanggal Transaksi</td>
        <td><?php echo date("d-F-Y") ?></td>
    </tr>
    <tr><td>Kode</td><td><?php echo $kdbar ?></td></tr>
    <tr><td>Nama Barang</td><td><?php echo $nmbar ?></td></tr>
    <tr><td>Harga</td><td><?php echo $harga ?></td></tr>       
    <tr><td>Jumlah Beli</td><td><?php echo $jumbel ?></td></tr>

    <?php $subtotal = $harga * $jumbel; ?>
    
    <tr>
    	<td>Subtotal</td>
        <td><?php echo $subtotal ?></td>
    </tr>

    <?php
		if ($jumbel>10)
		{ $diskon = 0.02 * $subtotal; }
		else if ($jumbel>5)
		{ $diskon = 0.01 * $subtotal; }
		else
		{ $diskon = 0; }
	?>
    <tr>
    	<td>Diskon</td>
        <td><?php echo $diskon ?></td>
    </tr>
    
    <?php $total = $subtotal - $diskon; ?>
    <tr>
    	<td>Total Bayar</td>
        <td><?php echo $total ?></td>
    </tr>
    <tr>
    	<td colspan="2">
        	Barang yang anda belanjakan akan kami kirim ke alamat:<br />
         	<strong><?php echo $alamat ?></strong>
    	</td>
    </tr>
    <tr>
    	<td bgcolor="#999999" colspan="2" align="center">
        	<input type="hidden" value="<?php echo $kdpel ?>" name="kdpel" />
        	<input type="hidden" value="<?php echo $kdbar ?>" name="kdbar" />
        	<input type="hidden" value="<?php echo $harga ?>" name="harga" />
        	<input type="hidden" value="<?php echo $jumbel ?>" name="jumbel" />
        	<input type="hidden" value="<?php echo $subtotal ?>" name="subtotal" />
        	<input type="hidden" value="<?php echo $diskon ?>" name="diskon" />
        	<input type="hidden" value="<?php echo $total ?>" name="total" />
        	<input type="hidden" value="simpan_transaksi" name="operator" />
            <input type="submit" value="Simpan">
        </td>
    </tr>
	</form>
</table>

