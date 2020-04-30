<?php
	$th1 = ' width="150" align="left" ';
	$table1 = ' border="1" bordercolor="#CCCCCC" cellpadding="5" cellspacing="0" ';
	$button1 = ' style="padding:20px;color:#C1C1C1;font-weight:bold;background-color:#930B0E" ';
	$td1 = ' align="center" colspan="4" bgcolor="#999999" style="padding:15px;" ';
?>
<font face="Geneva, Arial, Helvetica, sans-serif" size="+2" color="#666666">
	Input Transaksi&nbsp;
</font>
<table <?=$table1;?>>
	<tr>
    	<td <?=$td1;?>>
        	<strong>Data Pelanggan</strong>
        </td>
    </tr>
    <form action="index.php?page=transaksi" method="post">
        <tr>
        	<th <?=$th1;?>>ID Transaksi</th>
            <td width="250">
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
            <th <?=$th1;?>>Kode Pelanggan</th>
            <td width="250">
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
        	<th <?=$th1;?>>Tanggal</th>
            <td><?php echo date('d M Y'); ?></td>
            <th <?=$th1;?>>Total Bayar</th>
            <td>
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
            <td <?=$td1;?>>
			<?php
                if (isset($_POST['kdpel']))
                {
					echo '<input type="submit" value="Batal" '.$button1.' />';
				}
                else
                {
					echo '<input type="submit" value="Tambah" '.$button1.' />';
				}
            ?>
        	</td>
        </tr>
	</form>
</table>
<?php require('transaksi/add_transaksi.php'); ?>
