<?php 

	$host = "localhost";
	$username = "root";
	$password = "";
	$db_name = "account1";

	$con = mysqli_connect($host, $username, $password, $db_name);

	if(!$con) {
		die("Cannot connect to the database");
	}

?>