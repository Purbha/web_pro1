<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>PHP Nested For</title>
</head>
<body bgcolor="#CCCCCC">
<?php 
	$no = 1;
	for($i=1;$i<=3;$i++)
	{
		for($y=1;$y<=2;$y++)
		{
			print $no." Freddie Mercury<br>";
			$no++;
		}		
	}
?>
<br>
<?php 
	for($i=1;$i<=5;$i++)
	{
		for($y=1;$y<=5;$y++)
		{
			print $y;
		}
		print "<br>";		
	}
?>
<br>
<?php 
	for($i=1;$i<=5;$i++)
	{
		for($y=1;$y<=5;$y++)
		{
			print $i;
		}
		print "<br>";		
	}
?>
<br>
<?php 
	for($i=1;$i<=5;$i++)
	{
		for($y=1;$y<=$i;$y++)
		{
			print $i;
		}
		print "<br>";		
	}
?>
<br>
<?php 
	for($i=1;$i<=5;$i++)
	{
		for($y=1;$y<=$i;$y++)
		{
			print $y;
		}
		print "<br>";		
	}
?>
</body>
</html>
