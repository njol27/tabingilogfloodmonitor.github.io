<?php

include "connect.php"; // Using database connection file here

$relkey = $_GET['relkey']; // get id through query string

$del = mysqli_query($con,"delete from relief where reliefkey = '$relkey'"); // delete query

if($del)
{
    mysqli_close($con); // Close connection
    header("location:ADMIN_ReliefGoodsRequet.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>