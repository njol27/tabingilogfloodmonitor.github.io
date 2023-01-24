<?php

include "connect.php"; // Using database connection file here

$firstname = $_GET['fname']; // get id through query string

$del = mysqli_query($con,"delete from memberlist where fname = '$firstname'"); // delete query

if($del)
{
    mysqli_close($con); // Close connection
    header("location:USER_MemRegList.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>