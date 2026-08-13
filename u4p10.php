<?php

$users = array(
    1 => array("name" => "Sandeep", "email" => "sandeep@gmail.com", "city" => "Ahmedabad"),
    2 => array("name" => "suhani", "email" => "suhanni@gmail.com", "city" => "Surat"),
    3 => array("name" => "priya", "email" => "amit@gmail.com", "city" => "Vadodara")
);

$uid = $_GET["uid"];

if (isset($users[$uid]))
{
    echo "User ID : " . $uid . "<br>";
    echo "Name : " . $users[$uid]["name"] . "<br>";
    echo "Email : " . $users[$uid]["email"] . "<br>";
    echo "City : " . $users[$uid]["city"];
}
else
{
    echo "User not found";
}

?>