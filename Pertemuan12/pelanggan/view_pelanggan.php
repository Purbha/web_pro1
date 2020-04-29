<font face="Geneva, Arial, Helvetica, sans-serif" size="+2" color="#666666">
	Data Master Pelanggan&nbsp;
	(<a href='index.php?page=add_pelanggan'>Tambah Data</a>)
</font>
<table border="1" bordercolor="#CCCCCC" cellpadding="5" cellspacing="0">
	<tr>
    	<th>No</th><th>Kode</th><th>Nama Pelanggan</th><th>Alamat</th><th>Jenis Kelamin</th><th>Tools</th>
    </tr>
    <?php
		$no = 1;
		$data = ambil_pelanggan();
    	while($row = mysqli_fetch_array($data))
		{
			$kdpel = $row['kdpel'];
			echo "<tr>";
				echo "<td align='center'>".$no."</td>";
				echo "<td align='center'>".$kdpel."</td>";
				echo "<td>".$row['nmpel']."</td>";
				echo "<td>".$row['alamat']."</td>";
				echo "<td align='center'>".$row['jk']."</td>";
				echo "<td>";
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
