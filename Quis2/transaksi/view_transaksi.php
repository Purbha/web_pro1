<font face="Geneva, Arial, Helvetica, sans-serif" size="+2" color="#666666">
	View Data Transaksi&nbsp;
	(<a href='index.php?page=add_transaksi'>Tambah Data</a>)
</font>
<table border="1" bordercolor="#CCCCCC" cellpadding="5" cellspacing="0">
	<tr>
    	<th>No</th><th>Tanggal</th><th>Kode Pelanggan</th><th>Nama</th><th>Kode Barang</th><th>Nama Barang</th>
        <th>Harga</th><th>Jumlah Beli</th><th>Subtotal</th><th>Diskon</th><th>Total</th>
    </tr>
    <?php
		$no = 1;
		$data = ambil_transaksi();
    	while($row = mysqli_fetch_array($data))
		{
			echo "<tr>";
				echo "<td align='center'>".$no."</td>";
				echo "<td align='center'>".$row['tgl_trans']."</td>";
				echo "<td align='center'>".$row['kdpel']."</td>";
				echo "<td>".$row['nmpel']."</td>";
				echo "<td align='center'>".$row['kdbar']."</td>";
				echo "<td>".$row['nmbar']."</td>";
				echo "<td align='center'>".$row['harga']."</td>";
				echo "<td align='center'>".$row['jumbel']."</td>";
				echo "<td align='center'>".$row['subtotal']."</td>";
				echo "<td align='center'>".$row['diskon']."</td>";
				echo "<td align='center'>".$row['total']."</td>";
			echo "</tr>";
			$no++;
		}
	?>
</table>
