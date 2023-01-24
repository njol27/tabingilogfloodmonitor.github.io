<?php 

  session_start();

  require 'connect.php';
  require 'functions.php';
   	include 'log.php';

  if(isset($_SESSION['email'], $_SESSION['password'])) {
	  
	  	$user = $_SESSION['email'];

	if($user != NULL){
		$log = "login successful ($user) - USER ";
		logger($log);
	
	}
	else
	{
		$log = "login failed ($user) - USER";
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
	
<div class="modal fade" id="EvacAssign" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-dark" id="exampleModalLabel">Evacuation Assignment</h5>
        <button type="button" class="close text-dark" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-dark">
       An Evacuation Center Designation has been issue. Your'e Family will be Assign at <b>Tabing Ilog Elementary School</b>. A notification will recieve for the actual evacuation. 
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
<div class="modal fade" id="EvacAssign2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-dark" id="exampleModalLabel">Evacuation Assignment</h5>
        <button type="button" class="close text-dark" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-dark">
       An Evacuation Center Designation has been issue. Your'e Family will be Assign at <b>St Joseph Basketball Court</b>. A notification will recieve for the actual evacuation. 
      </div>
    </div>
  </div>
</div>
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
       Flash Flood Alert. Severe Weather condition might be close in your area
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
        High Risk of roadway and street flooding in your area. Avoid Unnecessary travels.
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
    <ul class="list-unstyled ps-1">
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
  
	
<!--Dashboard-->
<div class="col-9" style="background-color:#f6f9fe">

	<script>
    $(document).ready(function(){
        $("#myModal").modal('show');
    });
</script>

	<div class="row mx-1 my-3">
			<div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Subscribe our Newsletter</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <p>Subscribe to our mailing list to get the latest updates straight in your inbox.</p>
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Email Address">
                    </div>
                    <button type="submit" class="btn btn-primary">Subscribe</button>
                </form>
            </div>
        </div>
    </div>
</div>
			
	</div>
	<div class="row mx-1 my-3">
			<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>Welcome<?php echo " ".$row['firstname']."!";?></strong>
				<button type="button" class="btn-close" data-mdb-dismiss="alert" aria-label="Close"></button>
			</div>
	</div>
	
		<!--1st row-->
			<div class="row mx-1 my-3">

 <iframe src="244513894_239919744827661_6898209797231500086_n.jpg" width="500" height="580" style="border:none;overflow:hidden" scrolling="yes" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
</div>
</div>
		
		
	<div class="row mx-1 my-3">

 <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2FMarileNews%2Fposts%2F303005668519068&show_text=true&width=500" width="500" height="580" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
</div>


	<div class="row mx-1 my-3">
<iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2FMarileNews%2Fposts%2F304066615079640&show_text=true&width=500" width="500" height="812" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
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
    <input type="text" id="mesag" placeholder="Type message.." size="30px" >
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
	const pos = childData.postAlert;
			             
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
      b.innerHTML += '<button class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModal"></button>';
	  }
	 var pAl = document.getElementById("posAlert");
		pAl.innerHTML = pos;
  });
}, {
  onlyOnce: true
});

</script>
<?php
 $cntr = "SELECT * FROM evacuation WHERE email = '".$_SESSION['email']."'";
       $res1 = $con-> query($cntr);

				if($res1 -> num_rows > 0 )
					{
					while ($dat = $res1 -> fetch_assoc())
							{ ?>
	<script>
		  var b = document.getElementById("notif");
		  var dta = "<?php echo $dat['evac']?>";
  if(dta=="TabingIlog"){
      b.innerHTML += '<button class="dropdown-item" data-bs-toggle="modal" data-bs-target="#EvacAssign">Evacuation Center Assignment: Tabing Ilog Elementary School</button>';
	  
	  }
  else if(dta=="StJoseph"){
	   b.innerHTML += '<button class="dropdown-item" data-bs-toggle="modal" data-bs-target="#EvacAssign2">Evacuation Center Assignment: St Joseph Basketball Court</button>';
	  
	  }
	   else {
      b.innerHTML += '<button class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModal"></button>';
	  }

	</script>
	<?php
		}
	}	else {
    echo "error";
	}
	?>

	 <script src="js/bootstrap.bundle.min.js"></script>
	    <script src="js/bootstrap.js"></script>
	
		<script src="js/bootstrap.min.js"></script>
			
		<!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"
></script>


<?php

		}
  } else {
    header("location:ADMIN_signin.php");
    exit;
  }

  unset($_SESSION['prompt']);
  mysqli_close($con);

?>