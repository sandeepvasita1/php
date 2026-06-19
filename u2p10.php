<?php
$sub=array("math","science","english","hindi");

echo "Display useing for loop:<br>";

for($i=0;$i<count($sub);$i++)
{
	echo $sub[$i] . "<br>";
}
echo "<br>";
echo "display using foreach loop:<br>";

foreach($sub as $subject)
{
	echo $subject . "<br>";
}
?>