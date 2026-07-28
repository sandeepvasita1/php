<?php
$students=array(
array("sandeep",20,"BCA"),
array("suhani",22,"MCA"),
array("priya",25,"BCOM"),
array("jaymini",29,"BBA")
);

foreach($students as $s)
{
	echo "name:" .$s[0] . "<br>";
	echo "age:" .$s[1] . "<br>";
	echo "course:" .$s[2] . "<br><br>";
}


?>
