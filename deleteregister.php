<?php

include "connect.php"; // Using database connection file here

$email = $_GET['email']; // get id through query string

$del2 = mysqli_query($con,"DELETE FROM emailverify WHERE email = '$email'"); // delete query

if($del2){

    mysqli_close($con); // Close connection
    header("location:Brgy_ApproveAccount.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>