<?php

$n=$_GET["name"];

if(strlen($n)<7)
{
	echo "too short";
}
elseif(strlen($n)>12)
{
	echo "too long";
}
else
{
	echo "valid input";
}

?>