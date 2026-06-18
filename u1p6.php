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
	$sum=0;
	for($i=1;$i<=$n;$i++)
	{
		$sum = $sum+$i;
	}
	echo "sum of $n natural numbers=$sum";
}
?>