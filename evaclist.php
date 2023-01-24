<?php

require "connect.php"; // Using database connection file here

	$chk = $_POST["chk"];
	$nchk = $_POST["nchk"];	
	$color = $_POST["color"];
	$count = $_POST["count"];
	$shelt = $_POST["shelt"];
	
	 $test = "SELECT * FROM evaclist WHERE shelter = '$shelt'";
	
        if($res = mysqli_query($con, $test)) {

          $dat = mysqli_fetch_assoc($res);
		  
	 if($shelt == $dat['shelter']){
		 $evc2 = "UPDATE evaclist SET `checkn`='$chk',`uncheckn`='$nchk', `color`='$color', `count`='$count', `shelter`='$shelt' WHERE shelter = '$shelt'";

				if(mysqli_query($con, $evc2)) {
					}
				else {
						echo "0 record";
					}
	
		}else {			
       $evc = "INSERT INTO `evaclist` (`checkn`,`uncheckn`, `color`, `count`, `shelter`) VALUE ('$chk','$nchk', '$color', '$count', '$shelt')";

				if(mysqli_query($con, $evc)) {
					}
				else {
						echo "0 record";
					}
		}
	}else {
		}
			
			
$con->close();

header("location:Tabing Ilog Elementary School.php");
    exit;
?>

	
	
   
   