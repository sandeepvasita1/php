Write a PHP script to set a cookie named "username" with 
the value "Welcome" with an expiration time of one hour 
and display its value. 
<?php
setcookie("username", "Welcome", time() + 3600);

echo "Cookie Value: " . $_COOKIE["username"];
?>
