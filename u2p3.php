<?php
session_start();

$_SESSION["loginid"] = "Sandeep";

echo "Login ID: " . $_SESSION["loginid"];
?>