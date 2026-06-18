<html>
<body>
<form method="post">
Enter a number:
<input type="number" name="num">
<input type="submit" value="calculate">
</form>
</body>
</html>
<?php
if(isset($_POST['num']))
{
	$n=$_POST['num'];
	
	$square=$n*$n;
	$cube=$n*$n*$n;
	
	echo "<h3> Number:$n</h3>";
	echo "<h3> square:$square</h3>";
	echo "<h3> cude:$cube</h3>";
}
?>
