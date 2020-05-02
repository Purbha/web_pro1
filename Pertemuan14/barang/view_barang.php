<p <?=$font4;?>>Master Barang - <a href='index.php?page=add_barang'>Tambah Data</a></p>
<br>
<table <?=$table;?>>
	<tr>
    	<th <?=$th;?>>No</th>
        <th <?=$th;?>>Kode</th>
        <th <?=$th;?>>Nama Barang</th>
        <th <?=$th;?>>Stok</th>
        <th <?=$th;?>>Harga</th>
        <th <?=$th;?>>Kategori</th>
        <th <?=$th;?>>Garansi</th>
        <th <?=$th;?>>Tools</th>
    </tr>
    <?php
		$no = 1;
		$data = ambil_barang();
		while($row = mysqli_fetch_array($data))
		{
			$kdbar = $row['kdbar'];
			echo "<tr>";
				echo '<td '.$td.'>'.$no.'</td>';
				echo '<td '.$td.'>'.$kdbar."</td>";
				echo '<td '.$td.'>'.$row['nmbar']."</td>";
				echo '<td '.$td.'>'.$row['stok']."</td>";
				echo '<td '.$td.'>'.number_format($row['harga_std'])."</td>";
				echo '<td '.$td.'>'.$row['kategori']."</td>";
				echo '<td '.$td.'>'.garansi($row['garansi'])."</td>";
				echo '<td '.$td.'>';
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
