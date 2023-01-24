<?php
$food=$_POST['food'];
$beverage=$_POST['beverage'];
$clothing=$_POST['clothing'];
$blanket=$_POST['blanket'];
$pillows=$_POST['pillows'];
$toilet=$_POST['toilet'];
$firstaid=$_POST['firstaid'];
$medicine=$_POST['medicine'];
$medicineqty=$_POST['medicineqty'];
$vitamins=$_POST['vitamins'];
$vitaminsqty=$_POST['vitaminsqty'];
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

$sql = "INSERT INTO `relief` (`food`, `beverage`, `clothing`, `blanket`, `pillows`, `toilet`, `firstaid`, `medicine`,`medicineqty`,`vitamins`,`vitaminsqty`, `additional`) VALUES ('$food','$beverage', '$clothing', '$blanket', '$pillows', '$toilet', '$firstaid', '$medicine', '$medicineqty', '$vitamins', '$vitaminsqty', '$additional')";

if ($conn->query($sql) === TRUE){
	
header ("Location: USER_ReliefGoods.php");
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();


?>