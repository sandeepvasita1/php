<html>
<body>
<form method="post">
enter product id searcch:
<input type="text" name="t1">
<br>
<br>
<input type="submit" name="demo" value="search">
</form>
</body>
</html>
<?php
$conn=mysqli_connect('localhost','root','');
mysqli_select_db($conn,'mydb');

if(isset($_POST['demo']))
{
	$a=$_POST['t1'];
$sql="select*from product where pid='$a'";
$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0)
{
while($row=mysqli_fetch_assoc($result))
{
	echo"product id:" .$row["pid"] . "<br>";
	echo"product name:" .$row["pname"] . "<br>";
	echo"pqty:" .$row["pqty"] . "<br>";
	
}
}
else
{
echo"no product in not found";
}
mysqli_close($conn);
}
?>	