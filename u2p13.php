<?php
$a=array(50,20,10,40,30);
sort($a);

foreach($a as $temp)
{
	echo "$temp <br>";
}
rsort($a);

foreach($a as $temp)
{
	echo "$temp <br>";
}
?>