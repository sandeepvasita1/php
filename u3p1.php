<?php
$c=mysqli_connect('localhost','root','');

$s="create database bca";
$retval=mysqli_query($c,$s);
if(!$retval)
{
	die('could not create database');
}
echo "database create successfully";

mysqli_close($c);
?>