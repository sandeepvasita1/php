Write a  PHP program to check whether the number entered 
is Positive / Negative or Zero entered by user 
<html>
<body>
<form method="post">
Enter number:
<input type="number" name="num">
<input type="submit" value="check" name="demo">
</form>

<?php
if(isset($_POST['demo']))
{

$n= $_POST['num'];

if($n> 0)
{
	echo "The number is positive";
}
elseif($n< 0)
{
	echo "The number is Negative";
}
else
{
	echo "The number is Zero";
}

}
	
?>

</body>
</html>
