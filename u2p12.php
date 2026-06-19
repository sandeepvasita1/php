<?php
$students=array(
array("sandeep",20,"BCA"),
array("sumit",22,"MCA"),
array("priti",25,"BCOM"),
array("sitaben",29,"BBA")
);

foreach($students as $s)
{
	echo "name:" .$s[0] . "<br>";
	echo "age:" .$s[1] . "<br>";
	echo "course:" .$s[2] . "<br><br>";
}


?>