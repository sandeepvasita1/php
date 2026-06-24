<?php

$conn=mysqli_connect('localhost','root','');
mysqli_select_db($conn,'mydb');

if(isset($_POST['demo']))
{
	$a=$_POST['t1'];
	
	
	$sql="delete from product where pid=$a";
	
	if(mysqli_query($conn,$sql))
	{
		echo "recors delect successfully";
		
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
product id:
<input type="text" name="t1">
<br>

<input type="submit" name="demo" value="submit">
</form>
</body>
</html>
	