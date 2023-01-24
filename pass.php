<?php

 require 'connect.php';

$sql2 = "SELECT * FROM info";
$result2 = $con-> query($sql2);

 if($result2 -> num_rows > 0 )
{
	while ($row = $result2 -> fetch_assoc())
			{

$email=$row['email']; 
	}
}
 else {
	echo "Error: " . $sql2 . "<br>" . $con->error;
			}
			
					 mysqli_close($con); // Close connection
    header("location:USER_MailVerify.php"); // redirects to all records page
    exit;
?>

