<html>
<body>
<form method="post">
Enter a number 1:
<input type="number" name="num1"><br><br>
Enter a number 2:
<input type="number" name="num2"><br><br>
Enter a number 3:
<input type="number" name="num3"><br><br>
<input type="submit" value="calculate" name="demo">
</form>
</body>
</html>
<?php
function isprime($sum)
{
	if($sum<2)
	{
		return false;
	}
	for($i=2;$i<$sum;$i++)
	{
		if($sum % $i==0)
		{
			return false;
		}
	}
	return true;
}
if(isset($_POST['demo']))
{
	$a=$_POST['num1'];
	$b=$_POST['num2'];
	$c=$_POST['num3'];
	
	$sum=$a+$b+$c;
	if(isprime($sum))
	{
		echo "$sum is a prime number";
	}
	else
	{
		echo "$sum is not a prime number";
	}
}
?>