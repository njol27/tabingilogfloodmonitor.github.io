
<?php 
  session_start();

  require 'connect.php';
  require 'functions.php';

  if(isset($_SESSION['email'], $_SESSION['password'])) {
	 


 $cfr="SELECT reliefkey FROM `relief` WHERE `reliefkey`=(SELECT id FROM info WHERE email = '".$_SESSION['email']."' AND password = '".$_SESSION['password']."') ";
 $result = $con-> query($cfr);
			
			$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
			 
			 if (!$row) {
				 	
					  header("location:USER_ReliefGoods.php");
			 }

			 else {
				  
				 
				  header("location:USER_ReliefUpdate.php");
			 }
			 
} else {
    header("location:ADMIN_signin.php");
    exit;
  }

  mysqli_close($con);
?>