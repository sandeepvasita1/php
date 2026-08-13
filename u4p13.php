<?php

$c = mysqli_connect("localhost", "root", "", "college");

$stu_id=$_GET['stu_id'];
$name = $_GET['name'];
$mob = $_GET['mob'];
$country = $_GET['country'];

$sql = "SELECT * FROM student WHERE mobilno='$mob'";

$result = mysqli_query($c, $sql);

if (mysqli_num_rows($result) > 0)
{
    echo "Mobile Number Already registered. Try another Mobile Number";
}
else
{
    $sql = "INSERT INTO student(stu_id,stu_name, mobilno, country)
            VALUES('$stu_id','$name', '$mob', '$country')";

    if (mysqli_query($c, $sql))
    {
        echo "Student Registered Successfully";
    }
    else
    {
        echo "Error while inserting data";
    }
}

mysqli_close($c);

?>