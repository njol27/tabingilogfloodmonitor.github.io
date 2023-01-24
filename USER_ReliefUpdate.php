<?php  

  session_start();

  require 'connect.php';
  require 'functions.php';

  if(isset($_SESSION['email'], $_SESSION['password'])) {

  if(isset($_POST['update'])) {

	      $food=clean($_POST['food']);
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

$sql = "UPDATE  `relief` SET `food`='$food', `beverage`='$beverage', `clothing`='$clothing', `blanket`='$blanket', `pillows`='$pillows', `toilet`='$toilet', `firstaid`='$firstaid', `medicine`='$medicine',`medicineqty`='$medicineqty',`vitamins`='$vitamins',`vitaminsqty`='$vitaminsqty', `additional`='$additional'  WHERE `reliefkey`=(SELECT id FROM info WHERE email = '".$_SESSION['email']."' AND password = '".$_SESSION['password']."') ";

   if(mysqli_query($con, $sql)) {
	
		header ("Location: USER_ReliefGoods.php");
			$_SESSION['prompt'] = "Successfully Requested";

	} else {
	      $_SESSION['errprompt'] = "Failed Request";
	}	
 }
 
		else{
		 echo "<div></div>";
		}
 
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
    <link href="starter-template.css" rel="stylesheet">

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
   <div class="ms-3 col-2">
                        <img src="baha.png" style="height:40px"></img>
            
</div>
		

  
	
		
					<!--title-->
	<div class="sectionTitle col-8">
  <h3><a href="USER_Menu.php" class="text-white">Flood Monitoring and Evacuation Center System</a></h3>
</div>
   
   <!--message dropdown-->
   <div class="col-0 me-5">
  

							<div class="dropdown">
							<i class="bi bi-envelope position-relative" class="dropdown-toggle" type="button" id="dropdownMenuButtonSM" data-mdb-toggle="dropdown" aria-expanded="false">							
								
								<span class="caret"></span>
						
																           <!-- Counter - Messages -->
                                <span class="position-absolute top-50 start-100 translate-middle badge rounded-pill bg-danger border border-light p-2 rounded-circle">
								<span class="visually-hidden">unread messages</span>
								</span>
															</i>	

							
							<ul class="dropdown-menu dropdown-menu-lg-end" aria-labelledby="dropdownMenuButtonSM">
								<li><div id="notif"><button type="button" class="dropdown-item link-danger" data-bs-toggle="modal" data-bs-target="#exampleModal1">Notification</button></div></li>
							</ul>
							</div>                      
 
	</div> <!--message dropdown end-->
	
<!-- Modal -->
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-warning" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close text-warning" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-warning">
        ...
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-secondary" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close text-secondary" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-secondary">
        ...
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-danger" id="exampleModalLabel">Announcement for Evacuation</h5>
        <button type="button" class="close text-danger" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-danger">
        CRITICAL FLOOD UPDATE: Evacuation orders are in effect in [LOCATION]. DO NOT attempt
to enter or return to evacuated areas at this time. Please cooperate with barangay authority and
first responders
      </div>
    </div>
  </div>
</div>
<!--end of modal-->
	
  <div class="col-1">
	  <button class="dropdown" value='<?php echo " ".$row['firstname'];?>' id="name" style="border:none; color:white; background-color: transparent;">
		<?php echo " ".$row['firstname'];?>
	   <i class="bi bi-person-circle" class="dropdown-toggle" type="button" id="dropdownMenuButtonSM2" data-mdb-toggle="dropdown" aria-expanded="false">		</i>	
	   <span class="caret"></span>
															
				
							<ul class="dropdown-menu dropdown-menu-lg-end" aria-labelledby="dropdownMenuButtonSM2">
								<li><a class="dropdown-item" href="#">Profile</a></li>
								<li><a href="logout.php" class="dropdown-item" name="signout">Sign out</a></li>

							</ul>
							</button>   

	</div>  
</nav>

</div> <!--end of wrapper-->


	<!-- Sidebar-->
<div class="row"> 

    
  <div class="col-3 bg-primary"> 

    <div class="flex-shrink-0 py-5" style="border:1em ; font-weight:bolder">
    
	
	<h5 class="p-3 text-white">Name</h5>
    <ul class="list-unstyled ps-3">
      <li class="mb-4">
             <a href="USER_MemReg.php" type="button" class="w-100 btn-lg btn-primary text-white"  style="box-shadow:none">
			 	  <i class="bi bi-people-fill" style="color:#ffffff"></i>
			Member Registration
        </a>

      </li>
       <li class="mb-4">
             <a href="requestupdate.php" type="button" class="w-100 btn-lg btn-primary text-white"  style="box-shadow:none">
			 	  <i class="bi bi-bag-fill" style="color:#ffffff"></i>
			Relief Goods Request
        </a>
      </li>
	         <li class="mb-4">
             <a href="USER_Emergency.php" type="button" class="w-100 btn-lg btn-primary text-white" style="box-shadow:none">
			 	  <i class="bi bi-exclamation-octagon-fill" style="color:#ffffff"></i>
			Emergency Hotline
        </a>
      </li>
	         <li class="mb-4">
             <a href="USER_Feedback.php" type="button" class="w-100 btn-lg btn-primary text-white"  style="box-shadow:none">
			 	  <i class="bi bi-journals" style="color:#ffffff"></i>
			Feedback and Reviews
        </a>
      </li>
    
      <li class="border-top my-3"></li>
  
        <a class="w-100 btn-lg btn-primary text-white"  style="box-shadow:none" type="button" data-mdb-toggle="collapse" data-mdb-target="#account-collapse" aria-expanded="false">
					 	  <i class="bi bi-person-circle" style="color:#ffffff"></i>
          Account
        </a>
        <div class="collapse" id="account-collapse">
          <ul class="btn-toggle-nav list-unstyled fw-normal my-3 medium">
            <li><a href="#" class="w-30 btn btn-primary text-white"  style="box-shadow:none">-Profile</a></li>
            <li><a href="#" class="w-30 btn btn-primary text-white"  style="box-shadow:none">-Settings</a></li>
            <li><a href="#" class="w-30 btn btn-primary text-white"  style="box-shadow:none">-Sign out</a></li>
          </ul>
        </div>

    </ul>

 </div> 
  </div> 

	<!--member registration-->

             <div class="col-9 p-2"  style="background-color:#f6f9fe">
				<form class="container user" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">

                                
								<div class="text-center">
                                <h1 class="h4 text-gray-900 m-3">Relief Goods Request</h1>
								</div>
                                <div class="form-group row m-3">
									

									
									Food
                                  
									<div class="col-sm-2 mb-sm-3 me-5">
                                        <input type="text" class="form-control" id="exampleFirstName"
                                            placeholder="2" name="food">
                                    </div>
										
									Beverage
									<div class="col-sm-3 mb-sm-3">
                                        <input type="text" class="form-control form-control-user" id="exampleAge"
                                            placeholder="2" name="beverage">
                                    </div>

									Clothing
 
									<div class="col-sm-3 mb-sm-3">
                                        <input type="text" class="form-control form-control-user" id="exampleFirstName"
                                            placeholder="2" name="clothing">
                                    </div>
                                </div>
                                 <div class="form-group row m-3">

									Blanket
                                    <div class="col-sm-3 mb-sm-3">
                                        <input type="text" class="form-control form-control-user" id="exampleFirstName"
                                            placeholder="2" name="blanket">
                                    </div>
									
									Pillows
									<div class="col-sm-3 mb-sm-3">									
                                        <input type="text" class="form-control form-control-user" id="exampleFirstName"
                                            placeholder="2" name="pillows">
                                    </div>									

									Toiletries
									<div class="col-sm-3 mb-sm-3">	
                                        <input type="text" class="form-control form-control-user" id="exampleFirstName"
                                            placeholder="2" name="toilet">
                                    </div>
								</div>
								
								<div class="form-group row m-3">
								
								
										<div class="col-2 mb-sm-0">
										First Aid
                                        <input type="text" class="form-control form-control-user" id="exampleFirstName"
                                            placeholder="2" name="firstaid">
                                    </div>
									
									
									 <div class="col-3">
 									 	Medicine
                                        <select class="form-select form-select-md" aria-label=".form-select-md example" id="medicine" name="medicine">
											<option value="Paracetamol">Paracetamol</option>
											<option value="Mefanamic">Mefanamic</option>
											<option value="Antibiotic">Antibiotic</option>
											<option value="Loperamide">Loperamide</option>
										</select>
                                    </div>
									

									<div class="col-2 mb-sm-0 me-1">
										<br>
										<div class="input-group mb-3">
											<span class="input-group-text" id="basic-addon1">Qty:</span>
                                        <input type="text" class="form-control form-control-user" id="exampleFirstName"
                                            placeholder="2" name="medicineqty">
											</div>
                                    </div>
									
																		
									 <div class="col-2 mb-sm-0">
									  	Vitamins
                                        <select class="form-select form-select-md" aria-label=".form-select-md example" id="vitamins" name="vitamins">
											<option value="Multivitamins">Multivitamins</option>
											<option value="Ascorbic">Ascorbic</option>
											<option value="B+">B+</option>
											<option value="Zinc">Zinc</option>
										</select>
                                    </div>
								

                           
									<div class="col-sm-2 mb-sm-0">	
										<br>
										<div class="input-group mb-3">
											<span class="input-group-text" id="basic-addon1">Qty:</span>
																				
                                        <input type="text" class="form-control" id="exampleFirstName"
                                            placeholder="2" name="vitaminsqty">
											</div>	
                                    </div>
									
								</div>
								<div class="form-group row m-3">
									<div class="col-sm-11 mb-sm-3">
									Additional Request:
										<textarea type="text" class="form-control form-control-user" id="TextArea"
                                            placeholder="Input Here..." name="additional"></textarea>
									</div>
								</div>

								
								    <div class="form-group row my-5">
									<div class="col-sm-4"></div>
                                    <div class="col-sm-6 mb-3 mb-sm-0">

										<input type="submit" value="Request" name="request" class="btn btn-dark btn-user me-2" disabled>
										
										
										<input type="submit" value="Update" name="update" class="btn btn-light btn-user me-2">
                                    </div>
                                    <div class="col-sm-2"></div>
									
									<div class="form-group row m-3">
										<div class="col-sm-4"></div>
										<div class="col-sm-4 mb-sm-3">
									<?php 
										if(isset($_SESSION['prompt'])) {
													showPrompt();
																		}

										if(isset($_SESSION['errprompt'])) {
													showError();
																			}
									?>
										</div>
										<div class="col-sm-4"></div>
									</div>

                            </form>


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

		 <script src="js/bootstrap.bundle.min.js"></script>
	    <script src="js/bootstrap.js"></script>
		<script src="js/bootstrap.min.js"></script>
			
		<!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"
></script>
      
  </body>
</html>

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
 
 //for notif
const evacRef = ref(db, 'WarnAlertEvac');

onValue(evacRef, (snapshot) => {
  snapshot.forEach((childSnapshot) => {
    const childData = childSnapshot.val();
    // ...
	const eva = childData.AlertLevel;
			             
  var b = document.getElementById("notif");
  if(eva =="Evacuate"){
      b.innerHTML += '<button class="dropdown-item" style="background:red;" data-bs-toggle="modal" data-bs-target="#exampleModal3">Evacuate</button>';
	  
	  }
  else if(eva =="Warning"){
	   b.innerHTML += '<button class="dropdown-item" style="background:violet;" data-bs-toggle="modal" data-bs-target="#exampleModal2">Warning</button>';
	  
	  }
	  else if(eva =="Alert"){
	   b.innerHTML += '<button class="dropdown-item" style="background:yellow;" data-bs-toggle="modal" data-bs-target="#exampleModal1">Alert</button>';
	  
	  }
	   else {
      b.innerHTML += '<button class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModal">Notification</button>';
	  }


  });
}, {
  onlyOnce: true
});
</script>

<?php

		}
  } else {
    header("location:ADMIN_signin.php");
    exit;
  }



  mysqli_close($con);

?>