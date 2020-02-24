<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Toko Baju Slim Fit</title>
</head>
<body background="clean.bmp">
	    
    <form action="contoh1(b).php" method="post">
        <table align="center" border="2" cellpadding="5" cellspacing="1" bgcolor="#CCCCCC" bordercolor="#FFFFFF">
            <tr><th align="center" colspan="2">Toko Baju Slim Fit</th></tr>
            <tr><td>Nama</td><td><input type="text" name="nama" maxlength="10" size="15"></td></tr>
            <tr><td>Alamat</td><td><textarea cols="50" rows="4" name="alamat"></textarea></td></tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>
                    <input type="radio" name="jk" value="pria">Pria
                    <input type="radio" name="jk" value="wanita">Wanita
                </td>
            </tr>
            <tr>
                <td>Ukuran Baju</td>
                <td>
                    <select name="ukuran">
                        <option value="S">Kecil - S</option>
                        <option value="M">Sedang - M</option>
                        <option value="XL">Besar - XL</option>
                    </select>
                </td>
            </tr>
            <tr><td>Jumlah Beli</td><td><input type="text" name="jumbel" maxlength="2" size="4"></td></tr>
            <tr><td colspan="2" align="center"><input type="submit" value="Proses"></td></tr>
        </table>
	</form>
    	
    <br>
	
    <table align="center" border="2" cellpadding="5" cellspacing="1" bgcolor="#CCCCCC" bordercolor="#FFFFFF">
		<tr><th align="center" colspan="3">Daftar Harga</th></tr>
    	<tr><td></td><td align="center">Pria</td><td align="center">Wanita</td></tr>
    	<tr><td>Kecil - S</td><td align="center">35000</td><td align="center">40000</td></tr>
    	<tr><td>Sedang - M</td><td align="center">45000</td><td align="center">50000</td></tr>
    	<tr><td>Besar - XL</td><td align="center">55000</td><td align="center">60000</td></tr>
    	<tr><td colspan="3">Jika pembelian lebih besar dari 5 maka diskon 5%</td></tr>
    	<tr><td colspan="3">Jika pembelian lebih besar dari 10 maka diskon 10%</td></tr>
    </table>

</body>
</html>


