<p <?=$font4;?>>Master Pelanggan - <a href='index.php?page=add_pelanggan'>Tambah Data</a></p>
<br>
<table <?=$table;?>>
	<tr>
    	<th <?=$th;?>>No</th>
        <th <?=$th;?>>Kode</th>
        <th <?=$th;?>>Nama Pelanggan</th>
        <th <?=$th;?>>Alamat</th>
        <th <?=$th;?>>Jenis Kelamin</th>
        <th <?=$th;?>>Tools</th>
    </tr>
    <?php
		$no = 1;
		$data = ambil_pelanggan();
    	while($row = mysqli_fetch_array($data))
		{
			$kdpel = $row['kdpel'];
			echo "<tr>";
				echo '<td '.$td.'>'.$no."</td>";
				echo '<td '.$td.'>'.$kdpel."</td>";
				echo '<td '.$td.'>'.$row['nmpel']."</td>";
				echo '<td '.$td.'>'.$row['alamat']."</td>";
				echo '<td '.$td.'>'.$row['jk']."</td>";
				echo '<td '.$td.'>';
		?>
        <a href='index.php?page=update_pelanggan&kdpel=
		<?php echo $kdpel ?>'>Update</a>&nbsp;
        <a href='index.php?page=delete_pelanggan&kdpel=
		<?php echo $kdpel ?>'>Delete</a>
    <?php
        		echo "</td>";			
			echo "</tr>";
			$no++;
		}
	?>
</table>
