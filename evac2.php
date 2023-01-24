<?php

  session_start();

require "connect.php"; // Using database connection file here


	

$eadd = $_GET['email'];

$sql2 = "SELECT * FROM info WHERE email = '$eadd'";
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
   $id = $row['hshID'];
   $evac= 'StJoseph';

	  $sql = "INSERT INTO `evacuation` (`family`, `firstname`, `lastname`, `age`, `gender`, `role`, `handicap`, `contact`, `home_no`, `village`, `street`,`email`, `evac`, `eid`) VALUES ('$lasname','$pirsname','$lasname', '$edad', '$gnder', '$rol', '$handi', '$numb', '$home', '$vill', '$street', '$mail', '$evac', '$id')";


if($con->query($sql) === TRUE){
	
	$delt = mysqli_query($con,"UPDATE info SET evacID = '' WHERE email='$eadd'"); // delete query
	

	  if($delt){		  
				}
		else{
				echo "Error deleting record"; // display error message if not delete
			}	
	
				}
				else {
		echo "Error: " . $sql2 . "<br>" . $con->error;
			}
		}
}
 else {
		echo "Error: " . $sql2 . "<br>" . $con->error;
			}
			
			
			$mem = "SELECT * FROM memberlist WHERE addid = '$id'";
			$resu = $con-> query($mem);
				if($resu -> num_rows > 0 )
					{
				while ($rw2 = $resu -> fetch_assoc())
				{				
	 $pirsname2= $rw2['fname'];
    $lasname2= $rw2['lname'];
	$edad2= $rw2['ages'];
    $gnder2 =  $rw2['gnder'];
    $rol2 = $rw2['roles'];
    $handi2 = $rw2['handicp'];
	   $numb2= $rw2['cont'];	  
		
	 $mem = "INSERT INTO `evacuation` ( `firstname`, `lastname`, `age`, `gender`, `role`, `handicap`, `contact`, `home_no`, `village`, `street`, `evac`, `eid`) VALUES ('$pirsname2','$lasname2', '$edad2', '$gnder2', '$rol2', '$handi2', '$numb2', '$home', '$vill', '$street', '$evac', '$id')";
	 if($con->query($mem) === TRUE){}
	else {
			}
	 
	 
				}
		}else {	
			}	
			
			


			
mysqli_close($con); // Close connection
header("location:Brgy_AssignEvacuation.php"); // redirects to all records page
exit;	
		
 
?>