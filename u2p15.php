<?php

function myfun()
{
	$first="hellow";
	$last="MCA";
	$result=$first . " " . $last;
	
	echo $result;
}
function newfun($first,$last)
{
	echo "<br>";
	$result=$first . " " . $last;
	
	echo $result;
}
myfun();
newfun("php","java");

?>
	