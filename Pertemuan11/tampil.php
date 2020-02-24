<font color="#FFFFFF" face="ravie" size="5">View Data Pelanggan</font><br>

<?php
	$query = mysqli_query($con,"SELECT * FROM pelanggan ORDER BY kdpel ASC");
	if (!$query) { echo mysqli_error(); }
?>

Fungsi "require" digunakan ketika kita ingin menyertakan suatu file kedalam file yang saat ini sedang berjalan.
<table bgcolor="#FFFFFF" cellpadding="10" cellspacing="0" bordercolordark="#999999" bordercolorlight="#CCCCCC" border="5">
	<tr>
    	<th align="center">No</th><th>Kode Pelanggan</th>
        <th>Nama</th><th>Alamat</th><th>Jenis Kelamin</th><th>Create On</th>
        <th>Update On</th><th>Tools</th>
    </tr>
	<?php
		$no = 1;
    	while($row = mysqli_fetch_array($query))
		{
			$kdpel = $row['kdpel'];
			echo "<tr>";
				echo "<td align='center'>".$no."</td>";
				echo "<td align='center'>".$kdpel."</td>";
				echo "<td>".$row['nmpel']."</td>";
				echo "<td>".$row['alamat']."</td>";
				echo "<td align='center'>".$row['jk']."</td>";
				echo "<td align='center'>".date("d-m-Y H:i:s",strtotime($row['dibuat']))."</td>";
				echo "<td align='center'>".date("d-m-Y H:i:s",strtotime($row['diupdate']))."</td>";
				echo "<td>
						<a href='edit.php?kdpel=$kdpel'>Update</a>&nbsp;
						<a href='hapus.php?kdpel=$kdpel'>Delete</a>
					</td>";			
			echo "</tr>";
			$no++;
		}
	?>
</table>
