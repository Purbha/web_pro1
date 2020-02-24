<!doctype html public "-//W3C//DTD HTML 4.0 //EN"> 
<html>
<head>
	<title>Contoh 4</title>
</head>
<body bgcolor="#CCCCCC">
    <div align="center"><h2>Contoh Tanggal Dengan PHP</h2></div>
    <?php
		date_default_timezone_set("Asia/Jakarta");
		$besok = mktime(0, 0, 0, date("m"), date("d")+1, date("Y"));
		$bulan_depan = mktime(0, 0, 0, date("m") + 1, date("d"), date("Y"));
		$tahun_depan = mktime(0, 0, 0, date("m"), date("d"), date("Y")+1);
	?>
    <table align="center" background="background2.jpg" cellpadding="10" cellspacing="0" border="1" bordercolor="#FFFFFF">
        <tr>
            <th align="center">No</th>
            <th align="center">Bentuk</th>
            <th align="center">Tampilan</th>
        </tr>	
        <tr>
            <td align="center">1</td>
            <td align="center">date("d F Y")</td>
            <td align="center"><?php print date("d F Y") ?></td>
        </tr>
        <tr>
            <td align="center">2</td>
            <td align="center">date("H:i:s")</td>
            <td align="center"><?php print date("H:i:s") ?></td>
        </tr>
        <tr>
            <td align="center">3</td>
            <td align="center">Besok</td>
            <td align="center"><?php echo date("d M Y",$besok) ?></td>
        </tr>
        <tr>
            <td align="center">4</td>
            <td align="center">Bulan Depan</td>
            <td align="center"><?php echo date("d F Y",$bulan_depan) ?></td>
        </tr>
        <tr>
            <td align="center">5</td>
            <td align="center">Tahun Depan</td>
            <td align="center"><?php echo date("d F Y",$tahun_depan) ?></td>
        </tr>
    </table>
    <p align="center">
        Sumber: <a href="http://www.php.net/manual/en/timezones.asia.php">
        	http://www.php.net/manual/en/timezones.asia.php</a><br>
        Sumber: <a href="http://php.net/manual/en/function.date.php">
        	http://php.net/manual/en/function.date.php</a><br>
        Sumber: <a href="http://www.php.net/manual/en/function.mktime.php">
        	http://www.php.net/manual/en/function.mktime.php</a>
    </p>
</body>
</html>
