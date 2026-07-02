<?php

$n=$_GET["name"];

if(filter_var($n,FILTER_VALIDATE_EMAIL))
{
	echo"<br>valid email formate";
}
else
{
	echo"<br> invalid email formate";
}

?>