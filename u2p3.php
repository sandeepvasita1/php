Write a PHP script to retrieve and display the value of the 
session variable "loginid".
<?php
session_start();

$_SESSION["loginid"] = "Sandeep";

echo "Login ID: " . $_SESSION["loginid"];
?>
