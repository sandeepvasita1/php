
Write a PHP script to delete a cookie named "welcome". 
<?php
setcookie("welcome", "", time() - 3600);

echo "Cookie deleted successfully";
?>
