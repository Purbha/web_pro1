<!DOCTYPE html>
<html>
<head>
	<title>Toko Sepatu Sukasol</title>
</head>
<body background="web2.JPG">
	    
    <form action="contoh2(b).php" method="post">
        <table align="center" border="1" cellpadding="5" cellspacing="1" bgcolor="#CCCCCC" bordercolor="#FFFFFF">
            <tr><th align="center" colspan="2">Toko Sepatu Sukasol</th></tr>
            <tr><td>Nama Pembeli</td><td><input type="text" name="nama" maxlength="10" size="15" required></td></tr>
            <tr><td>Alamat</td><td><textarea cols="50" rows="4" name="alamat"></textarea></td></tr>
            <tr>
                <td>Pilih Ukuran Sepatu</td>
                <td>
					<select name="ukuran">
                    <?php
                        for($i=27;$i<=49;$i++)
						{ echo "<option value=".$i.">".$i."</option>"; }
					?>
                	</select>
                </td>
            </tr>
            <tr>
                <td>Merk</td>
                <td>
                    <select name="merk">
                        <option value="adidas">Adidas</option>
                        <option value="nike">Nike</option>
                    </select>
                </td>
            </tr>
            <tr><td>Jumlah Beli</td><td><input type="text" name="jumbel" maxlength="2" size="4"></td></tr>
            <tr><td colspan="2" align="center"><input type="submit" value="Proses"></td></tr>
        </table>
	</form>
    	
    <br>
	
    <table align="center" border="1" cellpadding="5" cellspacing="1" bgcolor="#CCCCCC" bordercolor="#FFFFFF">
		<tr><th align="center" colspan="3">Daftar Harga</th></tr>
    	<tr><td></td><td align="center">Adidas</td><td align="center">Nike</td></tr>
    	<tr><td align="center">27 - 35</td><td align="center">35000</td><td align="center">40000</td></tr>
    	<tr><td align="center">36 - 42</td><td align="center">45000</td><td align="center">50000</td></tr>
    	<tr><td align="center">43 - 49</td><td align="center">55000</td><td align="center">60000</td></tr>
    	<tr><td colspan="3">Jika pembelian lebih besar dari 500.000 maka diskon 5%</td></tr>
    	<tr><td colspan="3">Jika pembelian lebih besar dari 1.000.000 maka diskon 10%</td></tr>
    </table>

</body>
</html>
