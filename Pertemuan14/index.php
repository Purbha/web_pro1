<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" href="favicon.ico">
	<title>Toko ABC</title>
	<?php require('koneksi.php'); ?>
</head>
<body <?=$bodyStyle;?>>
	<table <?=$tableStyle1;?>>
  		<tr>
        	<td colspan="2" <?=$tdIndexHeader;?>>
				<?php require('home/header.php'); ?>
            </td>
        </tr>
  		<tr>
    		<td <?=$tdIndexLeft;?>>
				<?php require('home/menu_kiri.php'); ?>
            </td>
    		<td <?=$tdIndexRight;?>>
            	<?php require('pesan.php'); ?>
            	<?php require('page.php'); ?>
            </td>
  		</tr>
  		<tr>
    		<td colspan="2" <?=$tdIndexFooter;?>><?php require('home/footer.php'); ?></td>
  		</tr>
	</table>
</body>
</html>
