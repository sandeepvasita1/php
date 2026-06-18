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
if(isset($_POST['num']))
{
	$n=$_POST['num'];
	for($i=1;$i<=$n;$i++)
	{
		if($i%2==0)
			echo $i."<br>";
	}
}
?>