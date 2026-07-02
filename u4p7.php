<?php

$n=$_GET["name"];

if($n == "")
{
	echo "fiels is blank";
}
elseif(strlen($n)<5)
{
	echo "minimum length is 5";
}
else
{
	echo "valid input";
}

?>