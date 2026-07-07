<?php
$n=$_GET["name"];

if($n=="")
{
	echo "please enter the number";
}
elseif($n>50)
{
	echo "number is greater than 50";
}
else
{
	echo"number is not greater the 50";
}
?>