<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Contoh 3</title>
</head>
<?php 
	if (isset($_POST['border'])) { $border = $_POST['border']; } else { $border = 0; } 
	if (isset($_POST['cp'])) { $cp = $_POST['cp']; } else { $cp = 0; } 
	if (isset($_POST['cs'])) { $cs = $_POST['cs']; } else { $cs = 0; } 
	if (isset($_POST['bg'])) { $bg = $_POST['bg']; } else { $bg = '#CCCCCC"'; } 
	if (isset($_POST['tb_align'])) { $tb_align = $_POST['tb_align']; } else { $tb_align = 'center"'; } 
?>

<body bgcolor="<?php echo $bg; ?>">
<form action="contoh3.php" method="post">
    <table border="<?php echo $border ?>" align="<?php echo $tb_align ?>" cellpadding="<?php echo $cp ?>"
    	cellspacing="<?php echo $cs ?>">
        <tr>
            <th align="center" colspan="2">Border & Warna</th>
        </tr>
        <tr>
        	<td>Border</td><td><input type="number" name="border"></td>
        </tr>
        <tr>
        	<td>Cell Padding</td><td><input type="number" name="cp"></td>
        </tr>
        <tr>
        	<td>Cell Spacing</td><td><input type="number" name="cs"></td>
        </tr>
        <tr>
        	<td>Table Align</td>
            <td>
            	<select name="tb_align">
                	<option value="center">Center</option>
                	<option value="left">Left</option>
                	<option value="right">Right</option>
                </select>
            </td>
        </tr>
        <tr>
        	<td>Bg Color</td>
            <td>
            	<select name="bg">
                	<option value="#CCCCCC">#CCCCCC</option>
                	<option value="#99FFFF">#99FFFF</option>
                	<option value="#CCFFFF">#CCFFFF</option>
                	<option value="#FF99FF">#FF99FF</option>
                </select>
            </td>
        </tr>
		<tr>
			<td align="center" colspan="2"><input type="submit" value="Submit"></td>        	
        </tr>
    </table>
</form>
</body>
</html>
