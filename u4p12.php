<?php
$c=mysqli_connect('localhost','root','');
mysqli_select_db($c,'college');

if(isset($_POST['demo']))
{
$a=$_POST['t1'];
$s="select*from Student where stu_id='$a'";
$result=mysqli_query($c,$s);

if(mysqli_num_rows($result)>0)
{
while($row=mysqli_fetch_assoc($result))
{
	 echo "Student ID already exists<br>";
        echo "Student ID : " . $row['stu_id'] . "<br>";
        echo "Student Name : " . $row['stu_name'] . "<br>";
        echo "Mobile No : " . $row['mobilno'] . "<br>";
        echo "Country : " . $row['country'];
	
}
}
else
{
echo"no product in not found";
}
mysqli_close($c);
}
?>
<html>
<body>

<form method="post">

Enter Student ID:
<input type="text" name="t1">

<input type="submit" name="demo" value="demo">

</form>

</body>
</html>