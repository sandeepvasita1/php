<html>
<body>
<form method="post">
Enter the number:
<input type="number" name="num">
<input type="submit" value="print fibonacci">
</form>
</body>
</html>
<?php

if(isset($_POST['num']))
{
	$n=$_POST['num'];
	
	$a=0;
	$b=1;
	
	echo "<h3>fibonacci series</h3>";
	
	while($a <= $n)
	{
		echo $a . "";
		
		$c=$a+$b;
		$a=$b;
		$b=$c;
	}
}
?>
