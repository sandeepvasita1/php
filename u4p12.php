<?php
$c=mysqli_connect('localhost','root','');
mysqli_select_db($c,'college');

if(!$c)
{
    die("Connection failed");
}
$a=$_GET['t1'];

$s="select*from Student where stu_id='$a'";
$result=mysqli_query($c,$s);

if(mysqli_num_rows($result)>0)

{
echo"student id  already exist";
}
else
{
	echo "student id dose not found";
}
mysqli_close($c);

?>
