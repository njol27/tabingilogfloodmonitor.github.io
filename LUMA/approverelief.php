<?php

include "connect.php"; // Using database connection file here

$relkey = $_GET['relkey']; // get id through query string



	$sql = "INSERT INTO `apprelief` (`food`, `beverage`, `clothing`, `blanket`, `pillows`, `toilet`,`firstaid`,`medicine`,`medicineqty`,`vitamins`,`vitaminsqty`, `additional`, `approverel`) SELECT relief.food, relief.beverage, relief.clothing, relief.blanket ,relief.pillows, relief.toilet, relief.firstaid, relief.medicine, relief.medicineqty, relief.vitamins, relief.vitaminsqty, relief.additional, relief.reliefkey FROM relief WHERE reliefkey = '$relkey'";
									
  if(mysqli_query($con, $sql)) {
	  
	  $del = mysqli_query($con,"delete from relief where reliefkey = '$relkey'"); // delete query

	if($del)
	{
	
    mysqli_close($con); // Close connection
    header("location:ADMIN_ReliefGoodsRequest.php"); // redirects to all records page
    exit;			

	} else {

 echo "0 record";
	}	
  }
  else {

 echo "0 record";
	}
	

$pword = $_GET['password'];

$sql2 = "SELECT * FROM emailverify WHERE password = '$pword'";

 if(mysqli_num_rows($result) > 0) {

      $row = mysqli_fetch_assoc($result);

      $_SESSION['EVer'] = $row['email'];
	  $email = $row['email'];
	  
	  $sql3 = "UPDATE info SET email = '$email' WHERE password = '$pword'";
	  if ($con->query($sql3) === TRUE){
		  
		   mysqli_close($con); // Close connection
    header("location:USER_MailVerify.html"); // redirects to all records page
    exit;	
		  
				} else {
					echo "Error: " . $sql3 . "<br>" . $con->error;
				}
 }
 else {
		echo "Error: " . $sql3 . "<br>" . $con->error;
			}
?>