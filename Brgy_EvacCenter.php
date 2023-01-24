<?php 

  session_start();

  require 'connect.php';
  require 'functions.php';


  if(isset($_SESSION['email'], $_SESSION['password'])) {
	 	 $query = "SELECT * FROM info WHERE email = '".$_SESSION['email']."' AND password = '".$_SESSION['password']."'";	
        
        if($result = mysqli_query($con, $query)) {
          $row = mysqli_fetch_assoc($result);
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Evacuation Center System</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/starter-template/">

    

    <!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

	   .icon {
      background-color: var(--bs-light);
      border-radius: 0rem;
    }
    .bi {
      font-size: 1.7rem;
    }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="css/starter-template.css" rel="stylesheet">

	<link href="css/bootstrap.css" rel="stylesheet">
	
		<!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css"
  rel="stylesheet"
/>
	<link href="b-icons\bootstrap-icons.css" rel="stylesheet">
	<link href="css\chatpopup.css" rel="stylesheet">
	
	
		    <!-- JS for dropdown -->
<script src="js/popper.min.js"></script>

  </head>
  <body id="page-top" class="sidebar-toggled">
  
  
<div id="wrapper">
  
  <!-- topbar -->
   <nav class="navbar navbar-expand navbar-light topbar mb-1 static-top shadow" style="color:white; background-color:#1b95e0">

  
      <!-- Sidebar Toggle (Topbar) -->
   <div class="dropdown ms-3 col-2">
                        <i class="bi bi-card-text" style="height:25px" class="dropdown-toggle" type="button" data-mdb-toggle="offcanvas" data-mdb-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"></i>
						<span class="caret"></span>                 
</div>
		
					<!--title-->
	<div class="sectionTitle col-8">
  <h3>Flood Monitoring and Evacuation Center System</h3>
</div>
   
   <!--message dropdown-->
   <div class="col-0 me-5">
  
		<div class="dropdown">
			<i class="bi bi-envelope position-relative" class="dropdown-toggle btn" type="button" id="dropdownMenuButtonSM" data-mdb-toggle="dropdown" aria-expanded="false">							
			<span class="caret"></span>
										           <!-- Counter - Messages -->
              <span class="position-absolute top-50 start-100 translate-middle badge rounded-pill bg-danger border border-light p-2 rounded-circle">
			<span class="visually-hidden">unread messages</span>
				</span>
			</i>							
							
				<ul class="dropdown-menu dropdown-menu-lg-end" aria-labelledby="dropdownMenuButtonSM">
					<li><h6 class="dropdown-header">Message</h6></li>
					<li><a class="dropdown-item" href="#">Action</a></li>
				</ul>
		</div>                       
	</div>
	
   <div class="col-1">
	  <button class="dropdown" value="<?php echo " ".$row['firstname'];?>" id="name" style="border:none; color:white; background-color: transparent;">
		<?php echo " ".$row['firstname'];?>
	   <i class="bi bi-person-circle" class="dropdown-toggle" type="button" id="dropdownMenuButtonSM2" data-mdb-toggle="dropdown" aria-expanded="false">		</i>	
	   <span class="caret"></span>															
				
							<ul class="dropdown-menu dropdown-menu-sm-end" aria-labelledby="dropdownMenuButtonSM2">
								<li><h6 class="dropdown-header">Dropstart header</h6></li>
								<li><a href="logout.php" class="dropdown-item" href="#">Sign out</a></li>

							</ul>
							</button>   
	</div>
</nav>

</div> <!--end of wrapper-->

		<!-- Sidebar-->
	<div class="offcanvas offcanvas-start w-25 bg-dark text-white" data-mdb-scroll="true"
  data-mdb-backdrop="false"
  tabindex="-1"
  id="offcanvasScrolling"
  aria-labelledby="offcanvasScrollingLabel">

	
	 <div class="offcanvas-header m-3">
    <h5 class="offcanvas-title" id="offcanvasExampleLabel">Offcanvas</h5>
    <button type="button" class="btn-close text-reset btn-white" data-mdb-dismiss="offcanvas" aria-label="Close"></button>
  </div>
		
	<div class="offcanvas-body">
	
          <a href="Brgy_FloodMonitor.php" type="button" class="w-100 btn-lg btn-dark text-white fw-bold"  style="box-shadow:none">
			 	   <i class="bi bi-tv mx-3"></i>
			Monitor
        </a>


        <div>
		  <a href="Brgy_EvacCenter.php" type="button" class="w-100 btn-lg btn-dark text-white m-1 fw-bold"  style="box-shadow:none">
		   <i class="bi bi-file-earmark-text-fill mx-1"></i>	
          Evacuation Center List
		  </a>
		</div>
		
		<div>
		  <a href="Brgy_AssignEvacuation.php" type="button" class="w-100 btn-lg btn-dark text-white m-1 fw-bold"  style="box-shadow:none">
		   <i class="bi bi-house-door mx-1"></i>	
          Evacuation Center Assignment
		  </a>
		</div>
		
		<div>
		  <a href="Brgy_ApproveAccount.php" type="button" class="w-100 btn-lg btn-dark text-white m-1 fw-bold"  style="box-shadow:none">
		   <i class="bi bi-check-square mx-1"></i>	
          Resident Account Approval
		  </a>
		</div>
		
		<div>
		  <a href="Brgy_ReliefMonitor.php" type="button" class="w-100 btn-lg btn-dark text-white m-1 fw-bold"  style="box-shadow:none">
		   <i class="bi bi-bag-fill mx-1"></i>	
          Relief Goods Request
		  </a>
		</div>
			
    
      <div class="border-top my-3"></div>
		<div class="btn-lg fw-bold">
		
	   <i class="bi bi-person-circle mx-1"></i>	
          Account
        </div>
		  <a href="" type="button" class="w-75 btn-lg btn-dark text-white mx-4 fw-bold" style="box-shadow:none">Sign out</a>

  </div> 
</div>

<!--shelter design-->
<div class="container-fluid" id="container1">
    <div class="card shadow my-5" style="border-radius:1em; background-color:#FFFFB0">
        <div class="card-body p-0">
					
					<div class="row ms-1 me-1" >
					<div class="col-4 my-3"></div>
						<div class="col-4 my-3 d-flex justify-content-center rounded-3"> 
							<h4>EVACUATION CENTER LIST</h4>
						</div>
						<div class="col-4 my-3"></div>
					</div>


	<div class="row" style="background-color:transparent">
		<!--Tabing Ilog-->
		
	<div class="col-5 m-5 p-5" style=" background-color:white"> 
			<div style="font-weight:bolder" id="color">					
					<h5>TABING ILOG ELEMENTARY SCHOOL</h5>				
						<br>
			
					<h5 class="col-12">Total no. of evacuees:
			<?php						
				$cnt1 = mysqli_query($con, "SELECT SUM(count) AS value_sum FROM evaclist");
				
					while($val1 = mysqli_fetch_array($cnt1,MYSQLI_ASSOC)){ $valu1 = $val1['value_sum']; }	?>
							<script>							
					var tot1 = "<?php echo $valu1 ?>";					
					var total = tot1;
					document.write(total + "&nbsp people"); //summation of evacuees

					</script>
					</h5>	
						<br>		
			

				<div class="form-group row mb-3">
				  	<div class="form-group row m-1 text-success">
					<h5> Arrived:</h5>										
					</div>		
			<?php	
				error_reporting(E_ALL ^ E_WARNING);				
				$arriv = mysqli_query($con, "SELECT * FROM evaclist");
				
					while($dta = mysqli_fetch_array($arriv,MYSQLI_ASSOC)){	?>

										
			<h5>				
				<table style='align:center;'>						
					<tbody>
			<?php		if($dta['checkn']== 'undefined'){
				echo "\n";
			} else{										   							
				echo "<tr><td>".$dta['checkn']."</td></tr>";
					}									
						}?>	
						</tbody>
					</table>
				</h5>		
			</div>
			<br>
			<div class="form-group row mb-3">
				  	<div class="form-group row m-1 text-warning">
					<h5> Missing:</h5>										
					</div>		
			<?php	
				error_reporting(E_ALL ^ E_WARNING);				
				$arriv0 = mysqli_query($con, "SELECT * FROM evaclist");
				
					while($dta0 = mysqli_fetch_array($arriv0,MYSQLI_ASSOC)){	?>

										
			<h5>				
				<table style='align:center;'>						
					<tbody>
			<?php
					if ($dta0['uncheckn']== 'undefined'){
				echo "\n";
			} else{			
				echo "<tr><td>".$dta0['uncheckn']."</td></tr>";
					}									
					}?>	
						</tbody>
					</table>
				</h5>							
			</div>
				
					
			
			
			</div>	
	</div>	<!--tabingilog end-->	


<!---------------------------------------------------------------------------------------------------------------------------------------->
	<!--St Joseph-->
	
		<div class="col-5 m-5 p-5" style=" background-color:white"> 
			<div style="font-weight:bolder;" id="color">					
					<h5>ST JOSEPH BASKETBALL COURT</h5>				
						<br>
			
					<h5 class="col-12">Total no. of evacuees:
				<?php						
				$cnt2 = mysqli_query($con, "SELECT SUM(count) AS value_sum FROM evaclist");
				
					while($val2 = mysqli_fetch_array($cnt2,MYSQLI_ASSOC)){ $valu2 = $val2['value_sum']; }	?>
							<script>							
					var tot2 = "<?php echo $valu2 ?>";					
					var total2 = tot2;
					document.write(total2 + "&nbsp people"); //summation of evacuees

					</script>
					</h5>	
						<br>		
			 

				<div class="form-group row mb-3">
				  	<div class="form-group row m-1 text-success">
					<h5> Arrived:</h5>										
					</div>		
			<?php	
				error_reporting(E_ALL ^ E_WARNING);				
				$arriv2 = mysqli_query($con, "SELECT * FROM evaclist");
				
					while($dta2 = mysqli_fetch_array($arriv2,MYSQLI_ASSOC)){	?>

										
			<h5>				
				<table style='align:center;'>						
					<tbody>
			<?php if ($dta2['checkn']== 'undefined'){
				echo "\n";
			} else{
					
				echo "<tr><td>".$dta2['checkn']."</td></tr>";
					}									
					}?>	
						</tbody>
					</table>
				</h5>		
			</div>
			<br>
			<div class="form-group row mb-3">
				  	<div class="form-group row m-1 text-warning">
					<h5> Missing:</h5>										
					</div>		
			<?php	
				error_reporting(E_ALL ^ E_WARNING);				
				$arriv20 = mysqli_query($con, "SELECT * FROM evaclist");
				
					while($dta20 = mysqli_fetch_array($arriv20,MYSQLI_ASSOC)){	?>

										
			<h5>				
				<table style='align:center;'>						
					<tbody>
			<?php	if ($dta20['uncheckn']== 'undefined'){
				echo "\n";
			} else{
								
				echo "<tr><td>".$dta20['uncheckn']."</td></tr>";
					}									
					}?>	
						</tbody>
					</table>
				</h5>							
			</div>
			
			</div>
		</div> <!--St Joseph end-->	

	</div>		
	
	</div>		
  </div>
</div>




<!--chat pop up-->
<button class="open-button" onclick="openForm()">Chat</button>
<div class="chat-popup" id="myForm">
  <div class="form-container">

 <div class="offcanvas-header">
    <h4>CHAT</h4>
    <button type="button" class="btn-close text-reset btn-white" data-mdb-dismiss="offcanvas" aria-label="Close" onclick="closeForm()"></button>
  </div>

    <label><b>Message</b></label>
	<br><br>
	<div style="width: 280px; height: 250px; overflow: scroll;">
	<div id="cht"></div>
	</div>
	<br>
    <input type="text" id="mesag" placeholder="Type message.." size="30px">
	<br>
	<br>

    <button id="insrt" class="btn">Send</button>

  </div>
</div>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}
function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>
<!--end for chat-->

		
<?php              
if(isset($_POST['assign']))
{
$pst=$_POST['sele'];

date_default_timezone_set('Asia/Singapore');
	$time= date ('m/d/y h:iA', time());
	
	$data = "($time) assign ($pst) to shelter \r";

$fp = fopen('data.txt', 'a');

fwrite($fp, $data);
fclose($fp);
}
?>

 
<!--firebase-->
<script type="module">
  // Import the functions you need from the SDKs you need
  import { initializeApp } from "https://www.gstatic.com/firebasejs/9.6.4/firebase-app.js";
  import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.6.4/firebase-analytics.js";
  import { getDatabase, ref, set, child, push, onValue} from "https://www.gstatic.com/firebasejs/9.6.4/firebase-database.js";
  // TODO: Add SDKs for Firebase products that you want to use
  // https://firebase.google.com/docs/web/setup#available-libraries

  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  const firebaseConfig = {
    apiKey: "AIzaSyD8t90JAKFUOhNutg2pM0pDOQo13E5a_1g",
    authDomain: "flood-monitoring-njol.firebaseapp.com",
    databaseURL: "https://flood-monitoring-njol-default-rtdb.asia-southeast1.firebasedatabase.app/",
    projectId: "flood-monitoring-njol",
    storageBucket: "flood-monitoring-njol.appspot.com",
    messagingSenderId: "172656000723",
    appId: "1:172656000723:web:2a87ee8f27a16852e35e26",
    measurementId: "G-XC3ZWM5L7V"
  };

  // Initialize Firebase
  const app = initializeApp(firebaseConfig);
  const analytics = getAnalytics(app);

const db = getDatabase(app);
var namebox = document.getElementById("name");
var msgbox = document.getElementById("mesag");

var insbtn = document.getElementById("insrt");
 

 function InsertData(){
	 // Create a new post reference with an auto-generated id

const postListRef = ref(db, 'posts');
const newPostRef = push(postListRef);
set(newPostRef, {
    // ...
			 Name: namebox.value,
		 message: msgbox.value,
});

 }
const dbRef = ref(db, 'posts');

onValue(dbRef, (snapshot) => {
  snapshot.forEach((childSnapshot) => {
    const childData = childSnapshot.val();
    // ...
	const msg = "<li>" + childData.Name + " : " + childData.message + "</li>";
	document.getElementById("cht").insertAdjacentHTML("afterend", msg);
  });
}, {
  onlyOnce: true
});

 insbtn.addEventListener('click',InsertData);
 
 var evacbtn = document.getElementById("evacBut");   //notif
 function EvacButton(){
	 // Create a new post reference with an auto-generated id
const alertButton = ref(db, 'WarnAlertEvac');
const newPostRef = push(alertButton);
set(newPostRef, {
    // ...
			 AlertLevel: evacbtn.value,
});

 }
  evacbtn.addEventListener('click',EvacButton);
</script>


		 <script src="js/bootstrap.bundle.min.js"></script>
	    <script src="js/bootstrap.js"></script>
		<script src="js/bootstrap.min.js"></script>
			
		<!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"
></script>

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
      
  </body>
</html>

<?php

		}	
  } else {
    header("location:ADMIN_signin.php");
    exit;
  }

  unset($_SESSION['prompt']);
  mysqli_close($con);

?>