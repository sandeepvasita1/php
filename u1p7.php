<html>
<body>
<form method="post">
Enter a number 1:
<input type="number" name="num1"><br><br>
Enter a number 2:
<input type="number" name="num2"><br><br>
<input type="submit" value="calculate" name="demo">
</form>
</body>
</html>
<?php
if(isset($_POST['demo']))
{
	$a=$_POST['num1'];
	$b=$_POST['num2'];
	
	echo "Addition=".($a+$b);
	echo "<br>substraction=".($a-$b);
	echo "<br>multiplication=".($a*$b);
}
?>
	
	