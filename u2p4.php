Write a PHP script to check if a cookie named "visited" 
exists. If it does, display a welcome message; otherwise, 
display a default message.
<?php
if(isset($_COOKIE["visited"]))
{
    echo "Welcome back!";
}
else
{
    echo "Welcome to our website!";
}
?>
