<?php
$fname=$_POST['firstname'];
$lname=$_POST['lastname'];
$age1=$_POST['age'];
$gender1=$_POST['gender'];
$role1=$_POST['role'];
$radio1=$_POST['radios'];
$contact=$_POST['contact'];
$email=$_POST['email'];
$additional=$_POST['additional'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "account1";
//create connection
$conn = new mysqli ($servername, $username, $password, $dbname);

//check connection
if($conn->connect_error) {
	die("Connection Failed: ". $conn->connect_error);
}

$sql = "INSERT INTO `memberlist` (`fname`, `lname`, `ages`, `gnder`, `roles`, `handicp`, `cont`, `mail`, `additionl`) VALUES ('$fname','$lname', '$age1', '$gender1', '$role1', '$radio1', '$contact', '$email', '$additional')";

if ($conn->query($sql) === TRUE){
	
header ("Location: USER_MemReg.php");
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();


?>