<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Tiket Kereta Api</title>
</head>
<body background="bg.JPG">
	    
    <form action="form2.php" method="post">
        <table align="center" border="1" cellpadding="5" cellspacing="1" bgcolor="#CCCCCC" bordercolor="#FFFFFF">
            <tr><th align="center" colspan="2">Tiket Kereta Api</th></tr>
            <tr><td>Nama Pembeli</td><td><input type="text" name="nama" maxlength="10" size="15"></td></tr>
            <tr>
            	<td>Kode Kereta</td>
                <td>
                	<select name="kode">
						<option value="AP">AP</option>
						<option value="AD">AD</option>
						<option value="AB">AB</option>
                	</select>
				</td>
           	</tr>
            <tr>
            	<td>Kelas</td>
                <td>
                	<select name="kelas">
						<option value="1">1 - Executive</option>
						<option value="2">2 - Bussines</option>
						<option value="3">3 - Economy</option>
                	</select>
				</td>
           	</tr>
            <tr>
                <td>Makan</td>
                <td>
                	<input type="radio" name="makan" value="Ya">Ya
                	<input type="radio" name="makan" value="Tidak">Tidak
                </td>
            </tr>
            <tr><td colspan="2" align="center"><input type="submit" value="Proses"></td></tr>
        </table>
	</form>
    	
    <br>
	
    <table align="center" border="1" cellpadding="5" cellspacing="1" bgcolor="#CCCCCC" bordercolor="#FFFFFF">
		<tr><th align="center" colspan="4">Daftar Harga Kereta Api</th></tr>
    	<tr>
        	<td align="center">Kode / Kelas</td>
            <td align="center">3 - Economy</td>
            <td align="center">2 - Bussines</td>
            <td align="center">1 - Executive</td>
    	</tr>
        <tr>
        	<td>AP -  Argo Parahyangan</td>
            <td align="center">35000</td><td align="center">40000</td><td align="center">45000</td>
        </tr>
    	<tr>
        	<td>AD - Argo Dwipangga</td>
            <td align="center">55000</td><td align="center">60000</td><td align="center">65000</td>
        </tr>
    	<tr>
        	<td>AB - Argo Bromo</td>
        	<td align="center">75000</td><td align="center">80000</td><td align="center">85000</td>
        </tr>
    	<tr><td colspan="4">Jika dengan makan maka tambah 15000</td></tr>
    </table>

</body>
</html>
