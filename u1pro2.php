<html>
<body>
<form method="post">
Enter number 1:
<input type="number" name="num1"><br><br>
Enter number 2:
<input type="number" name="num2"><br><br>
<input type="submit" name="demo" value="Find max number">
</form>
</body>
</html>
<?php

if(isset($_POST['demo']))
{
	$a=$_POST['num1'];
	$b=$_POST['num2'];
	
	if($a>$b)
		echo "Maximam number is=:",$a;
	else
		echo "Maximam number is =:",$b;
}
?>