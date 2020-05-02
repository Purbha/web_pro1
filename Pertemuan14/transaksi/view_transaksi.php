<p <?=$font4;?>>Input Transaksi</p>
<br>
<table <?=$table;?>>
	<tr>
    	<th <?=$th;?> colspan="4">Data Pelanggan</th>
    </tr>
    <form action="index.php?page=transaksi" method="post">
        <tr>
        	<td <?=$td;?>>ID Transaksi</td>
            <td <?=$td;?>>
            <?php
				if (isset($_POST['kdpel']))
				{
					$idtrans = set_idtrans(); echo $idtrans;
				}
				else
				{
					echo '-';
				}
			?>
            </td>
            <td <?=$td;?>>Kode Pelanggan</td>
            <td <?=$td;?>>
            <?php
				if (isset($_POST['kdpel']))
				{
					$pel = ambil_pelanggan($_POST['kdpel']);
					while ($row = mysqli_fetch_array($pel))
					{
						echo '('.$row['kdpel'].') &nbsp;'.$row['nmpel'];
						$kdpel = $row['kdpel'];
					}
				}
				else
				{
					echo '<select name="kdpel">';
						$pel = ambil_pelanggan();
						while($row = mysqli_fetch_array($pel))
						{ 
							echo '<option value="'.$row['kdpel'].'" >'.'('.$row['kdpel'].') &nbsp;'.
							$row['nmpel'].'</option>>';
						}
					echo '</select>';
				}
			?>
            </td>
        </tr>
        <tr>
        	<td <?=$td;?>>Tanggal</td>
            <td <?=$td;?>><?php echo date('d M Y'); ?></td>
            <td <?=$td;?>>Total Bayar</td>
            <td <?=$td;?>>
            <?php
				echo 'Rp. 0,-';	
            	if (isset($_POST['kdpel']))
				{
					
				}
				else
				{
					
				}
			?>
            </td>
        </tr>
        <tr>
            <td <?=$td;?> colspan="4">
			<?php
                if (isset($_POST['kdpel']))
                {
					echo '<input type="submit" value="Batal" '.$button.' />';
				}
                else
                {
					echo '<input type="submit" value="Tambah" '.$button.' />';
				}
            ?>
        	</td>
        </tr>
	</form>
</table>
<?php require('transaksi/add_transaksi.php'); ?>
