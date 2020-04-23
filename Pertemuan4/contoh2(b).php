<!DOCTYPE html>
<html>
<head>
       <title>Contoh 2(b)</title>
</head>
<body bgcolor="#FFCCFF">
	Selamat datang <?php echo $_GET["nama"]; ?><br>
    Alamat anda sekarang adalah <?php echo $_GET["alamat"]; ?><br>
    Sumber: <a href="http://www.w3schools.com/php/php_forms.asp" target="_blank">
    	http://www.w3schools.com/php/php_forms.asp</a><br>
	<!--Catatan-->
	    1. Information sent from a form with the GET method is visible to everyone<br>
    	2. GET may be used for sending non-sensitive data.<br>
        3. GET should NEVER be used for sending passwords or other sensitive information!<br>
</body>
</html>
