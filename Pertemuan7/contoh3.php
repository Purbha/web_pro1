<!DOCTYPE html>
<html>
<head>
	<title>Contoh Array 1</title>
</head>

<body>
	<font size="+3">A</font>rray menyimpan satu atau lebih nilai pada sebuah variable.<br>
    Dibawah ini adalah contoh array
    <?php
		$band = array("Muse","Sheila On 7","Cake","Cokelat");
	?>
    <p>
    	Daftar band favorit:
        <ol start="1" type="1">
        	<li><?php print($band[0]); ?></li>
        	<li><?php print($band[1]); ?></li>
        	<li><?php print($band[2]); ?></li>
        	<li><?php print($band[3]); ?></li>
        </ol>
    </p>
    <p>
    	Cetak array dengan metode looping:
        <ol start="1" type="1">
 			<?php 
				for($i=0;$i<=3;$i++)
				{
					echo "<li>".$band[$i]."</li>";
				}
			?>
        </ol>       
    </p>
    <p>Jumlah array adalah <?php echo count($band); ?></p>
</body>
</html>
