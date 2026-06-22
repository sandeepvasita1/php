
<?php
#firse step is create database in admin pannel name mydb
$c=mysqli_connect('localhost','root','');
mysqli_select_db($c,'mydb');

$s="create table product
(pid integer(2),
pname varchar(30),
pqty integer(4)
)";

$retval=mysqli_query($c,$s);
if(!$retval)
{
	die('could not create table');
}
echo "table create successfully";

mysqli_close($c);
?>