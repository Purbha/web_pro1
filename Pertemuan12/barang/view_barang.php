<font face="Geneva, Arial, Helvetica, sans-serif" size="+2" color="#666666">
	Data Master Barang&nbsp;
	(<a href='index.php?page=add_barang'>Tambah Data</a>)
</font>
<table border="1" bordercolor="#CCCCCC" cellpadding="5" cellspacing="0">
	<tr>
    	<th>No</th><th>Kode</th><th>Nama Barang</th><th>Stok</th><th>Harga</th>
        <th>Kategori</th><th>Garansi</th><th>Tools</th>
    </tr>
    <?php
		$no = 1;
		$data = ambil_barang();
		while($row = mysqli_fetch_array($data))
		{
			$kdbar = $row['kdbar'];
			echo "<tr>";
				echo "<td align='center'>".$no."</td>";
				echo "<td align='center'>".$kdbar."</td>";
				echo "<td>".$row['nmbar']."</td>";
				echo "<td align='center'>".$row['stok']."</td>";
				echo "<td align='center'>".number_format($row['harga_std'])."</td>";
				echo "<td>".$row['kategori']."</td>";
				echo "<td align='center'>".garansi($row['garansi'])."</td>";
				echo "<td>";
		?>
        <a href='index.php?page=update_barang&kdbar=
		<?php echo $kdbar ?>'>Update</a>&nbsp;
        <a href='index.php?page=delete_barang&kdbar=
		<?php echo $kdbar ?>'>Delete</a>
    <?php
        		echo "</td>";			
			echo "</tr>";
			$no++;
		}
	?>
</table>
