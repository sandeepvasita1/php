<html>
<body>
<form method="post">
Enter a radius:
<input type="number" name="num">
<input type="submit" value="calculate">
</form>
</body>
</html>
<?php
if(isset($_POST['num']))
{
	$r=$_POST['num'];
	$area=3.14*$r*$r;
	
	echo "circle area =$area";
}
?>