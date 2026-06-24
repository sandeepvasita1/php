<?php

$conn=mysqli_connect('localhost','root','');
mysqli_select_db($conn,'mydb');

if(isset($_POST['demo']))
{
	$a=$_POST['t1'];
	$b=$_POST['t2'];
	$c=$_POST['t3'];
	
	$sql="insert into product values('$a','$b','$c')";
	
	if(mysqli_query($conn,$sql))
	{
		echo "new record created successfully";
		
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
product name:
<input type="text" name="t2">
<br>
product qty:
<input type="text" name="t3">
<br>
<br>
<input type="submit" name="demo" value="submit">
</form>
</body>
</html>
	