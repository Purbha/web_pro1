<!doctype html public "-//W3C//DTD HTML 4.0 //EN"> 
<html>
<head>
       <title>Contoh 2</title>
</head>
<body bgcolor="#FFCCFF">
<?php
	define("phi",3.14);
	$jari = $_POST["jari"];
	$luas = phi * $jari * $jari;
	$kell = 2 * $jari * phi;
?>
Selamat datang <?php echo $_POST["nama"]; ?><br>
Anda melakukan input jari-jari lingkaran sebesar <?php echo $jari ?><br>
Maka luas lingkaran adalah <?php printf("%.2f",$luas) ?> dan keliling lingkaran adalah <?php printf("%.2f",$kell) ?><br> 	

    Sumber: <a href="http://www.w3schools.com/php/php_constants.asp" target="_blank">
    	http://www.w3schools.com/php/php_constants.asp</a><br>
	<!--Catatan-->
	    1. Information sent from a form with the POST method is invisible to others<br>
    	2. The variables are not displayed in the URL, it is not possible to bookmark the page.<b
        3. Developers prefer POST for sending form data.<br>
        
</body>
</html>