<!DOCTYPE html>
<html>
<head>
	<title>PHP While Loop</title>
</head>
<body bgcolor="#CCCCCC">
<?php 
	$x=1; 
	while($x<=5)
  	{
  		echo "Ini adalah baris ke: $x <br>";
		$x++;
  		
  	}
	for($i=1;$i<5;$i++) { echo "<br>"; } 
	$x=1; 
	do
  	{
  		echo "Ini adalah baris ke: $x <br>";
  		$x++;
  	}while ($x<=5);	
	
?>
</body>
</html>
