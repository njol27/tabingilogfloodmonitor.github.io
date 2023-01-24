<?php

  session_start();

require "connect.php"; // Using database connection file here


	

$eadd = $_GET['email'];

$sql2 = "SELECT * FROM emailverify WHERE email = '$eadd'";
$result2 = $con-> query($sql2);

 if($result2 -> num_rows > 0 )
{
	while ($row = $result2 -> fetch_assoc())
			{

    $pirsname= $row['firstname'];
    $lasname= $row['lastname'];
    $edad= $row['age'];
    $gnder =  $row['gender'];
    $rol = $row['role'];
    $handi = $row['handicap'];
    $numb= $row['contact'];
    $home = $row['home_no'];
    $vill =  $row['village'];
    $street= $row['street'];
    $mail= $row['email'];
    $pword= $row['password'];
$id = $row['hshID'];
	  
	 
	}
}
 else {
		echo "Error: " . $sql2 . "<br>" . $con->error;
			}
			
$sql = "INSERT INTO `info` (`firstname`, `lastname`, `age`, `gender`, `role`, `handicap`, `contact`, `home_no`, `village`, `street`,`email`, `password`, `evacID`, `hshID`) VALUES ('$pirsname','$lasname', '$edad', '$gnder', '$rol', '$handi', '$numb', '$home', '$vill', '$street', '$mail', '$pword', '1', '$id')";


if($con->query($sql) === TRUE){
	
		 $delt = mysqli_query($con,"DELETE FROM emailverify WHERE email='$eadd'"); // delete query

		if($delt){		  
		  	}
			else{
					echo "Error deleting record"; // display error message if not delete
				}	
}
else
{
    echo "Error inserting record"; // display error message if not delete
}
			
mysqli_close($con); // Close connection
header("location:pass.php"); // redirects to all records page
exit;	
		
 
?>