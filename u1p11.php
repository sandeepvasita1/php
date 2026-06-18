<html>
<body>
<form method="post">
Enter the number:
<input type="number" name="num">
<input type="submit" value="print">
</form>
</body>
</html>
<?php
function sumofdigits($n)
{
	$sum=0;
	while ($n>0)
	{
		$sum += $n % 10;
		$n = (int) ($n/10);
	}
	echo "SUM OF DIGITS IS:$sum";
}
if(isset($_POST['num']))
{
	$n=$_POST['num'];
	sumofdigits($n);
}
?>