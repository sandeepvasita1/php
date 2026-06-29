
<?php
#firse step is create database in admin pannel name mydb
$c=mysqli_connect('localhost','root','');
mysqli_select_db($c,'mydb');

$s="create table student
(student_id integer(2),
student_name varchar(30),
course varchar(20),
age integer(3),
mobileno integer(11)
)";

$retval=mysqli_query($c,$s);
if(!$retval)
{
	die('could not create table');
}
echo "table create successfully";

mysqli_close($c);
?>