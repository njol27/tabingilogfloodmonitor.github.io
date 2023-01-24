<?php

require "connect.php"; // Using database connection file here


	$id = $_GET['eid']; 
	
$sql2 = "SELECT * FROM evacuation WHERE eid = '$id'";
$result2 = $con-> query($sql2);

 if($result2 -> num_rows > 0 )
{
	while ($row = $result2 -> fetch_assoc())
			{

	
	if($row['evac'] == 'TabingIlog') {
	 $evc = "UPDATE evacuation SET evac = 'StJoseph' WHERE eid = '$id'";

				if(mysqli_query($con, $evc)) {
					}
				else {
						echo "0 record";
					}
					
	}else if($row['evac'] == 'StJoseph'){
	 $evc2 = "UPDATE evacuation SET evac = 'TabingIlog' WHERE eid = '$id'";

				if(mysqli_query($con, $evc2)) {
					}
				else {
						echo "0 record";
					}
			
		}else {	
			}	
			
	}
		}else {	
			}

			
mysqli_close($con); // Close connection
header("location:Brgy_AssignEvacuation.php"); // redirects to all records page
exit;	
?>

	
	
   
   