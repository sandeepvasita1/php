<?php

$conn=mysqli_connect('localhost','root','');
mysqli_select_db($conn,'mydb');

if(isset($_POST['demo']))
{
		
$sql="update product set price=100 where id<4";
if(mysqli_query($conn,$sql))
	{
		echo "product price  successfully";
		
	}
	else
	{
		echo "error";
	}
	mysqli_close($conn);	
		
}
?>
<html>
<body>
<form method="post">
<input type="submit" name="demo" value="set">
</form>
</body>
</html>