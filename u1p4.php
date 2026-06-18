<html>
<body>
<form method="post">
Enter a string:
<input type="text" name="str">
<input type="submit" value="check">
</form>
</body>
</html>
<?php
if(isset($_POST['str']))
{
	$str=$_POST['str'];
	
	$reverse = strrev($str);
	
	if($str==$reverse)
	{
		echo "<h3>'$str' is a palidrom.</h3>";
	}
	else
	{
		echo "<h3>'$str' is a not palidrom.</h3>";
		
	}
}
?>