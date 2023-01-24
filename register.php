<?php

require "connect.php";

$fname=$_POST['firstname'];
$lname=$_POST['lastname'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$role=$_POST['role'];
$radio=$_POST['radios'];
$houseno=$_POST['housenum'];
$street=$_POST['street'];
$village=$_POST['village'];
$contact=$_POST['contact'];
$email=$_POST['email'];
$pword=$_POST['password'];

$str=rand();
$hsh= md5($str);

$sql = "INSERT INTO `emailverify` (`firstname`, `lastname`, `age`, `gender`, `role`, `handicap`, `contact`, `home_no`, `village`, `street`,`email`, `password`, `hshID`) VALUES ('$fname','$lname', '$age', '$gender', '$role', '$radio', '$contact', '$houseno', '$village', '$street', '$email', '$pword', '$hsh')";

if ($con->query($sql) === TRUE){
	
} else {
	echo "Error: " . $sql . "<br>" . $con->error;
}


$mem = "SELECT * FROM emailverify WHERE email = '$email'";
$res1 = $con-> query($mem);

 if($res1 -> num_rows > 0 )
{
	while ($row1 = $res1 -> fetch_assoc())
			{
	$id = $row1['hshID'];
$fname1=$_POST['fname1'];
$lname1=$_POST['lname1'];
$age1=$_POST['age1'];
$gender1=$_POST['gndr1'];
$role1=$_POST['role1'];
$radio1=$_POST['hand1'];
$contact1=$_POST['num1'];

$memr = "INSERT INTO `memberlist` (`fname`, `lname`, `ages`, `gnder`, `roles`, `handicp`, `cont`, `addid`) VALUES ('$fname1','$lname1', '$age1', '$gender1', '$role1', '$radio1', '$contact1', '$id')";

 if ($con->query($memr) === TRUE){	
				} else {
					echo "Error: " . $memr . "<br>" . $con->error;
						}
	}
}
 else {
	      echo "Registration Failed";	    
			}	 





$con->close();
header("location:USER_RegisterNeedVerify.php");
?>

	
	
   
   