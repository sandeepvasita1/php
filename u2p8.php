Write a PHP program that checks whether the element is 
exists in the array or not. Give acknowledgement from the 
same. 
<?php
$a=array("java","python","html","php");

$s="java";

if(in_array($s,$a))
{
	echo"$s exixting in the array";
}
else
{
	echo"$s exixting in not in the array";
}
	
?>
