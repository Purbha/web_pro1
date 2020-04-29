<!DOCTYPE html>
<html>
<head><title>Mysql Connect</title></head>
<body>
    <h2>How 2 Connect To Mysql Database</h2>
    <ol start="1" type="A">
        <li>If the MySQL database you are connecting to is <= 4.1.3, then use mysql_connect. </li>
        <li>If the MySQL database you are connecting to is > 4.1.3, then use mysqli_connect. </li>
    </ol>
    Note:<br>
    <i>Though you can use mysql_connect with newer versions there are certain functions you cannot access.</i><br>
    Sumber:
    <a href="http://ca3.php.net/manual/en/mysqli.overview.php" target="_blank">
    	http://ca3.php.net/manual/en/mysqli.overview.php
    </a> 
    <p>
        Syntax: <strong>mysqli_connect(host,username,password,dbname);</strong>
        <table bgcolor="#CCCCCC" cellpadding="5" cellpadding="0">
            <tr><th>No</th><th>Parameter</th><th>Deskripsi</th></tr>
            <tr><td>1</td><td>host</td><td>Nama host atau IP Address</td></tr>
            <tr><td>2</td><td>username</td><td>Username dari database</td></tr>
            <tr><td>3</td><td>password</td><td>Password dari database</td></tr>
            <tr><td>3</td><td>dbname</td><td>Nama database</td></tr>
        </table>
    </p>
    <p>
        <strong>Contoh</strong>
        <?php
            $con=mysqli_connect("localhost","dba_penjualan","dba_penjualan","dba_penjualan");
            if ($con) { echo "Koneksi Sukses..!!!"; } else { echo "Koneksi Gagal..!!!"; }		
        ?>
    </p>
</body>
</html>