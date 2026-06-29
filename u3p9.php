<?php
$conn=mysqli_connect('localhost','root','');
mysqli_select_db($conn,'mydb');

if(isset($_POST['demo']))
{
	$sql="update  student set address='ahmedabad' where student_id=13";
	if(mysqli_query($conn,$sql))
	{
		echo "update recors  successfully";
		
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
<input type="submit" name="demo" value="update">
</form>
</body>
</html>