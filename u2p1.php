<?php
setcookie("username", "Welcome", time() + 3600);

echo "Cookie Value: " . $_COOKIE["username"];
?>