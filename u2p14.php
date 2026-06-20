<?php
$a=array(5,10,20,15,5,10,30);
$search=5;

$c=0;
foreach($a as $temp)
{
	if($temp ==  $search)
	{
		$c++;
    }
}
echo "$search appears $c times in array";
?>	
	
	