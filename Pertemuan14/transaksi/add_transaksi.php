<?php if (isset($_POST['kdpel'])) { ?>
	<br>
	<form action="index.php?page=transaksi" method="post">
    <table <?=$table;?>>
        <tr><th colspan="3" <?=$th;?>>Detail Pembelian</th></tr>
        <tr>
            <td <?=$td;?>>Kode Barang</td>
            <td <?=$td;?>>Qty</td>
            <td rowspan="2" <?=$td;?>><input type="submit" value="Simpan" <?=$button;?> /></td></tr>
        <tr>
            <td <?=$td;?>>
                <select name="kdbar">
                <?php
                    $brg = ambil_barang();
                    while($row = mysqli_fetch_array($brg))
                    { 
                        echo '<option value="'.$row['kdbar'].'" >'.'('.$row['kdbar'].') &nbsp;'.
                        $row['nmbar'].' - '.$row['harga_std'].'</option>>';
                    }
                ?>
                </select>
            </td>
            <td <?=$td;?>>
                <input type="hidden" value="add_transaksi" name="operator" />
                <input type="hidden" value="<?=$idtrans;?>" name="idtrans">
                <input type="hidden" value="<?=$kdpel;?>" name="kdpel">
                <input type="text" name="jumbel" maxlength="2" size="2" value="0" />
            </td>
        </tr>
    </table>
    <br />
   	</form> 
<?php } ?>
