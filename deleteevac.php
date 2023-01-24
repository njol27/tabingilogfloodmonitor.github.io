<?php

require "connect.php"; // Using database connection file here

	$id = $_GET['eid']; 
	
	 $evc = "UPDATE info SET evacID = '1' WHERE hshID = '$id'";

				if(mysqli_query($con, $evc)) {
					}
				else {
						echo " ";
					}

$del = mysqli_query($con,"delete from evacuation where eid = '$id'"); // delete query

if($del) {}
else {
    echo " "; // display error message if not delete
}
			
		
mysqli_close($con); // Close connection
header("location:Brgy_AssignEvacuation.php"); // redirects to all records page
exit;	
?>

	
	
   
   