<?php 

  session_start();

  require 'connect.php';
  require 'functions.php';
  	include 'log.php';

  if(isset($_SESSION['email'], $_SESSION['password'])) {
	  
	$admin = $_SESSION['email'];

	if($admin != NULL){
		$log = "login successful ($admin) - ADMIN ";
		logger($log);
	
	}
	else
	{
		$log = "login failed ($admin) - ADMIN";
		logger($log);
	}

	 $query = "SELECT * FROM info WHERE email = '".$_SESSION['email']."' AND password = '".$_SESSION['password']."'";
	
        ;

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
    <title>Flood Monitoring and Evacuation</title>

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
	  
	  
	  .map-responsive{
		overflow:hidden;
		padding-bottom:56.25%;
		position:relative;
		height:0;
		}

	.map-responsive iframe{
    left:0;
    top:0;
    height:100%;
    width:100%;
    position:absolute;
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
							<i class="bi bi-envelope position-relative" class="dropdown-toggle" type="button" id="dropdownMenuButtonSM" data-mdb-toggle="dropdown" aria-expanded="false">							
								
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
 
	</div> <!--message dropdown end-->
	
   <div class="col-1">
	   <button class="dropdown" value="<?php echo " ".$row['firstname'];?>" id="name" style="border:none; color:white; background-color: transparent;">
		<?php echo " ".$row['firstname'];?>
	   <i class="bi bi-person-circle" class="dropdown-toggle" type="button" id="dropdownMenuButtonSM2" data-mdb-toggle="dropdown" aria-expanded="false">		</i>	
	   <span class="caret"></span>
															
				
							<ul class="dropdown-menu dropdown-menu-lg-end" aria-labelledby="dropdownMenuButtonSM2">
								<li><h6 class="dropdown-header">Dropstart header</h6></li>
								<li><a class="dropdown-item" href="#">Profile</a></li>
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
	
             <a href="ADMIN_Flood Monitoring and Evacuation System v1.php" type="button" class="w-100 btn-lg btn-dark text-white fw-bold"  style="box-shadow:none">
			 	   <i class="bi bi-tv mx-3"></i>
			Flood Monitor
        </a>

        <div>
		  <a href="Tabing Ilog Elementary School.php" type="button" class="w-100 btn-lg btn-dark text-white m-1 fw-bold"  style="box-shadow:none">
		   <i class="bi bi-house-door mx-1"></i>	
          Evacuation Center
		  </a>
		</div>
		
				 <div>
		  <a href="ADMIN_ReliefGoodsRequest.php" type="button" class="w-100 btn-lg btn-dark text-white m-1 fw-bold"  style="box-shadow:none">
		   <i class="bi bi-bag-fill mx-1"></i>	
          Relief Goods Request
		  </a>
		</div>
		
		
		
    
      <div class="border-top my-3"></div>
		<div class="btn-lg fw-bold">
		
	   <i class="bi bi-person-circle mx-1"></i>	
          Account
        </div>
        
		  <a href="" type="button" class="w-75 btn-lg btn-dark text-white mx-4 fw-bold"  style="box-shadow:none">Profile</a>
            <a href="" type="button" class="w-75 btn-lg btn-dark text-white mx-4 fw-bold" style="box-shadow:none">Settings</a>
		  <a href="logout.php" type="button" class="w-75 btn-lg btn-dark text-white mx-4 fw-bold" style="box-shadow:none">Sign out</a>

  </div> 
</div>

	<!--row dashboard-->

<div class="row mx-3">
<div class="container-fluid" id="container1">
  <div class="card shadow">
    <div class="card-body p-0">
	
	<div class="row m-3">
		<!--camera1-->
	<div class="col-sm-5 btn btn-dark rounded text-start container-fluid " style="font-weight:bolder">

	<div class="embed-responsive embed-responsive-16by9"> 
	
	<iframe class="embed-responsive-item" width="560" height="315" src="https://vdo.ninja/?view=dp2GQCG&label=tempo_camera" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	</div>
	<h6>
	<div class="mb-3"></div>

	<div class="ms-3">
	 <i class="bi bi-signpost-split-fill" style="color:#ffffff"></i>
         <b>Area:&nbsp; </b><b id="area" style="color: yellow;">Talipapa/M. Villarica</b>
     </div>
	  
	  <div class="mb-3"></div>
      <div class=" ms-3">
	  	 <i class="bi bi-water" style="color:#ffffff"></i>
         <b>Water Level: <input type="text" id="level"  size="1" style="border:none; background:rgba(0,0,0,0);text-align:right; color: white"/> (feet)</b>
      </div>
	  	<div class="mb-3"></div>
      <div class=" ms-3">
			 <i class="bi bi-tsunami" style="color:#ffffff"></i>
		<b>Water Flow Rate:  <input type="text" id="level"  size="1" style="border:none ; background: rgba(0,0,0,0); text-align:right; color: white"/> (L/min)</b> 
      </div>

	  <div class="mb-3"></div> 
	 <div class="ms-3">
	 	 <i class="bi bi-people" style="color:#ffffff"></i>
      <b>Number of Registered:&nbsp; &nbsp;  <b id="numfam" style="color: yellow;"></b></b>
      </div>
	<div class="mb-3"></div>

	<div id="demo">
	<button class="btn btn-warning btn-icon-split ms-5" id="evacBut" name="button1" value="Alert">Alert</button>							</div>
	</h6>
		</div>
		<!--end of camera 1-->

			<!--camera2-->
	<div class="col-sm-5 btn btn-dark rounded text-start container-fluid " style="font-weight:bolder">

	<div class="embed-responsive embed-responsive-16by9"> 
	<iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/J641ATZ__VY341" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	</div>
	<h6>
	<div class="mb-3"></div>
	<div class="ms-3">
	 <i class="bi bi-signpost-split-fill" style="color:#ffffff"></i>
         <b>Area:&nbsp; </b> <b id="area" style="color: yellow;">Motorpool/M.Vilarica</b>
     </div>
	  
	  <div class="mb-3"></div>
      <div class=" ms-3">
	  	 <i class="bi bi-water" style="color:#ffffff"></i>
         <b>Water Level: <input type="text" id="level2"  size="1" style="border:none; background:rgba(0,0,0,0);text-align:right; color: white"/> (feet)</b>
      </div>
	  	<div class="mb-3"></div>
      <div class=" ms-3">
			 <i class="bi bi-tsunami" style="color:#ffffff"></i>
		<b>Water Flow Rate:  <input type="text" id="level2" size="1" style="border:none ; background: rgba(0,0,0,0); text-align:right; color: white"/> (L/min)</b> 
      </div>

	  <div class="mb-3"></div> 
	 <div class="ms-3">
	 	 <i class="bi bi-people" style="color:#ffffff"></i>
      <b>Number of Registered:&nbsp; &nbsp;  <b id="numfam" style="color: yellow;"></b></b>
      </div>
	<div class="mb-3"></div>

	<div id="demo">
	<button class="btn btn-warning btn-icon-split ms-5" id="evacBut2" name="button1" value="Alert">Alert</button>							</div>
	</h6>
		</div>
		<!--end of camera 2-->
</div>

<div class="row m-3">
	<div class="col-sm-3"></div>
		<!--camera 3-->
		
	<div class="col-sm-6 btn btn-dark rounded text-start container-fluid " style="font-weight:bolder">

	<div class="embed-responsive embed-responsive-16by9"> 
	<iframe src="https://www.youtube.com/embed/zpOULjyy-n3248?rel=0124" class="embed-responsive-item" allowfullscreen></iframe>
	</div>
	<h6>
	<div class="mb-3"></div>
	<div class="ms-3">
	 <i class="bi bi-signpost-split-fill" style="color:#ffffff"></i>
         <b>Area:&nbsp; </b> <b id="area" style="color: yellow;">Sitio Bukid/E.Natividad</b>
     </div>
	  
	  <div class="mb-3"></div>
      <div class=" ms-3">
	  	 <i class="bi bi-water" style="color:#ffffff"></i>
         <b>Water Level: <input type="text" id="level3"  size="1" style="border:none; background:rgba(0,0,0,0);text-align:right; color: white"/> (feet)</b>
      </div>
	  	<div class="mb-3"></div>
      <div class=" ms-3">
			 <i class="bi bi-tsunami" style="color:#ffffff"></i>
		<b>Water Flow Rate:  <input type="text" id="level3"  size="1" style="border:none ; background: rgba(0,0,0,0); text-align:right; color: white"/> (L/min)</b> 
      </div>

	  <div class="mb-3"></div> 
	 <div class="ms-3">
	 	 <i class="bi bi-people" style="color:#ffffff"></i>
      <b>Number of Registered:&nbsp; &nbsp;  <b id="numfam" style="color: yellow;"></b></b>
      </div>
	<div class="mb-3"></div>

	<div id="demo">
	<button class="btn btn-warning btn-icon-split ms-5" id="evacBut3" name="button1" value="Alert">Alert</button>							</div>
	</h6>
		</div>
		<div class="col-sm-3"></div>
		</div>
		<!--end of camera 3-->
</div> 
	</div>
  </div>
  </div>
 </div>  <!--end of container-->

<!--end row dashboard-->


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

<!--audit log-->
<?php
              
if(isset($_POST['button1']))
{
$pst=$_POST['button1'];


date_default_timezone_set('Asia/Singapore');
	$time= date ('m/d/y h:iA', time());
	
	$data = "($time) announced ($pst) to residences \r";

$fp = fopen('data.txt', 'a');

fwrite($fp, $data);
fclose($fp);
}
?>

		 <script src="js/bootstrap.bundle.min.js"></script>
	    <script src="js/bootstrap.js"></script>
		<script src="js/bootstrap.min.js"></script>
		
	<!--change button-->
<script>
		
	document.getElementById("level").addEventListener("change", myFunction);
function myFunction() {

 
  var t = document.getElementById("level");
  var b = document.getElementById("evacBut");
  if(t.value >=4){
      b.value = "Evacuate";
	  b.className = "btn btn-danger btn-icon-split ms-5";
	  b.innerHTML = "Evacuate";
	  }
  else if(t.value >=3){
	        b.value = "Warning";
	  b.className = "btn btn-secondary btn-icon-split ms-5";
	  b.innerHTML = "Warning";
	  }
	   else {
	  	        b.value = "Alert";
	  b.className = "btn btn-warning btn-icon-split ms-5";
	  b.innerHTML = "Alert";
	  }
}

</script>


<!--map marker js-->
<script>
function purok3() {
  document.getElementById("area").innerHTML = "Talipapa/M. Villarica";
  document.getElementById("numfam").innerHTML = "<?php echo $row2['COUNT(*)'] ?>";
}
</script>


<script>
function WtrPool() {
  document.getElementById("area").innerHTML = "Waterpool";
  document.getElementById("numfam").innerHTML = "<?php echo $row2['COUNT(*)'] ?>";
}
</script>

<script>
function IntiaCmp() {
  document.getElementById("area").innerHTML = "Sitio Bukid";
  document.getElementById("numfam").innerHTML = "<?php echo $row2['COUNT(*)'] ?>";
}
</script>

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
 
 var evacbtn = document.getElementById("evacBut");
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

<?php

		}
  } else {
    header("location:ADMIN_signin.php");
    exit;
  }

  unset($_SESSION['prompt']);
  mysqli_close($con);

?>