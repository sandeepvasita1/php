
<html>
<body style="background-color:
<?php
if(isset($_POST['add']))
{
	switch($_POST['c'])
	{
		case 'red':
		$color = 'red';
		break;
		
		case 'green':
		$color = 'green';
		break;
		
		case 'blue':
		$color = 'blue';
		break;
		default:
		$color = 'white';
	}
	echo $color;
}
?>
">
<form method="post">
<select name="c">
<option value="red">RED</option>
<option value="green">GREEN</option>
<option value="blue">BLUE</option>
</select>
<input type="submit" name="add" value="change">
</form>
</body>
</html>