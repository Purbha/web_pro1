<table border="1" bordercolor="#CCCCCC" cellpadding="5" cellspacing="0">
	<tr>
    	<th>No</th><th>Kode</th><th>Nama Barang</th><th>Stok</th><th>Harga</th>
        <th>Kategori</th><th>Garansi</th><th>Tools</th>
    </tr>
    <?php
		$no = 1;
		$data = ambil();
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
        	<a href='index.php?hal=update&kdbar=<?php echo $kdbar ?>'>Update</a>&nbsp;
			<a href='index.php?hal=delete&kdbar=<?php echo $kdbar ?>' onClick='return confirm("Apakah anda ingin menghapus data..?")'>Delete</a>
    <?php
        		echo "</td>";			
			echo "</tr>";
			$no++;
		}
	?>
</table>
