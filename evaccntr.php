<?php

require "connect.php"; // Using database connection file here


      

	$eid = $_POST["eid"];
	  $set = $_POST["setno"];


$evc = "UPDATE evacuation SET arrive ='' WHERE arrive = '$set'";

				if(mysqli_query($con, $evc)) {
					}
				else {
						echo "0 record";
					}
					
      $evc2 = "UPDATE evacuation SET arrive ='$set' WHERE eid = '$eid'";

				if(mysqli_query($con, $evc2)) {
					}
				else {
						echo "0 record";
					}

	
			
$con->close();

header("location:Tabing Ilog Elementary School.php");
    exit;
?>

	
	
   
   