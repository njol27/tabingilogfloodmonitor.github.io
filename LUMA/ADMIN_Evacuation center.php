<?php 

  session_start();

  require 'connect.php';
  require 'functions.php';

  if(isset($_SESSION['email'], $_SESSION['password'])) {
	 
	
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
<link href="D:\casptone ko LUSUNG\pang app\gawa ko unang una/bootstrap.min.css" rel="stylesheet">


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
	  <button class="dropdown" value="Admin" id="name" style="border:none; color:white; background-color: transparent;">
		Admin
	   <i class="bi bi-person-circle" class="dropdown-toggle" type="button" id="dropdownMenuButtonSM2" data-mdb-toggle="dropdown" aria-expanded="false">		</i>	
	   <span class="caret"></span>
															
				
							<ul class="dropdown-menu dropdown-menu-sm-end" aria-labelledby="dropdownMenuButtonSM2">
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
			Monitor
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
		  <a href="" type="button" class="w-75 btn-lg btn-dark text-white mx-4 fw-bold" style="box-shadow:none">Sign out</a>

  </div> 
</div>

<!--shelter design-->
<div class="container" id="container1">
    <div class="card shadow my-5" style="border-radius:1em">
        <div class="card-body p-0">
		
	<!--store to cookie-->	
<script>
 var today = new Date();
  var expiry = new Date(today.getTime() + 30 * 24 * 3600 * 1000); // plus 30 days

  function setCookie(name, value)
  {
    document.cookie=name + "=" + escape(value) + "; path=/; expires=" + expiry.toGMTString();
  }
  function storeValues(form)  
  {
	setCookie("field1", document.getElementById("pass1").getElementsByTagName('div')[0].innerHTML);
    setCookie("field2", document.getElementById("mySelect2").value);
    setCookie("field3", document.getElementById("mySelect3").value);
    setCookie("field4", document.getElementById("mySelect4").value);
	setCookie("field5", document.getElementById("mySelect5").value);
	setCookie("field6", document.getElementById("mySelect6").value);
	setCookie("field7", document.getElementById("mySelect7").value);
	setCookie("field8", document.getElementById("mySelect8").value);
	setCookie("field9", document.getElementById("mySelect9").value);
	return true;
  }

  
  if(field1 = getCookie("field1")) document.myForm.getElementById("pass1").getElementsByTagName('div')[0].innerHTML = field1; 
  if(field2 = getCookie("field2")) document.myForm.getElementById("mySelect2").value = field2;
  if(field3 = getCookie("field3")) document.myForm.getElementById("mySelect3").value = field3;
  if(field4 = getCookie("field4")) document.myForm.getElementById("mySelect4").value = field4;
   if(field5 = getCookie("field5")) document.myForm.getElementById("mySelect5").value = field5;
  if(field6 = getCookie("field6")) document.myForm.getElementById("mySelect6").value = field6;
  if(field7 = getCookie("field7")) document.myForm.getElementById("mySelect7").value = field7;
  if(field8 = getCookie("field8")) document.myForm.getElementById("mySelect8").value = field8;
  if(field9 = getCookie("field9")) document.myForm.getElementById("mySelect9").value = field9;
  

function getCookie(name)
  {
    var re = new RegExp(name + "=([^;]+)");
    var value = re.exec(document.cookie);
    return (value != null) ? unescape(value[1]) : null;
  }


</script>
		
		
		
	<form name="myForm" method="post" action="" onsubmit="return storeValues(this);">
	
		<!--EVACUATION CENTER-->
	<div class="row ms-1 me-1">
<div class="col-4 my-3"></div>

 <div class="col-4 my-3">
        <div class="card shadow">			 
			      <a class="btn btn-lg btn-primary text-white" style="height:150px; font-weight:bolder" data-bs-toggle="modal" data-bs-target="#exampleModalCenteredScrollable2">
					EVACUATION CENTER
				
						<div class="form-group row m-3">

							
									 <div class="col-sm-9 mx-sm-1">

						
								<select class="form-select form-select-md" aria-label=".form-select-md example" id="mySelect0" name="sele"  onchange="evacHandler(this.value)">
											<option value=" " disabled selected hidden>Select</option>
											<option value="Tabing Ilog Elementary School">Tabing Ilog Elementary School</option>
											<option value="St Joseph Basketball Court">St Joseph Basketball Court</option>
										</select>
								</div>
							</div>
				
					<div class="form-group row m-3">
				<script>	
				function evacHandler(value) {
						window.location.assign(`${value}.php`);
					}
					document.write(getCookie("field0"));
					
				</script>
				<br>
					<div id="pplCount"></div>
					
				  </div>
					
                  </a>

        </div>
  </div>
  <div class="col-4 my-3"></div>
   </div>
	
	
		<!--1st row-->
	<div class="row ms-1 me-1">


 <div class="col-4 my-3">
        <div class="card shadow">			 
			      <a class="btn btn-lg btn-warning text-white" style="height:150px; font-weight:bolder" data-bs-toggle="modal" data-bs-target="#exampleModalCenteredScrollable2">
					Shelter #1
				
						<div class="form-group row m-3">

							Family
									 <div class="col-sm-9 mx-sm-1">

						<?php
									$result = mysqli_query($con, "SELECT * FROM info WHERE usertype = 'user'");

									$row = array();

									while($key = mysqli_fetch_array($result,MYSQLI_ASSOC)){

									$row[] = $key;
									}
							?>
						
								<select class="form-select form-select-md" aria-label=".form-select-md example" id="mySelect1" name="sele" onclick="passMe()">
											<option value=" " disabled selected hidden>Select</option>
												<?php foreach($row as $key => $value) { ?>
													<option value="<?php echo $value["lastname"] ?>" >
														<?php echo $value["lastname"] ?>
													</option>
			
														<?php } ?>	        
										</select>
								</div>
							</div>
				
					<div class="form-group row m-3">
					<div id="pass1"><div></div></div>
				<script>	
				
					document.write(getCookie("field1"));

				</script>		  
				  </div>
					
                  </a>

        </div>
  </div>
<div class="col-4 my-3">
        <div class="card shadow">			 
			      <a class="btn btn-lg btn-warning text-white" style="height:150px; font-weight:bolder" data-bs-toggle="modal" data-bs-target="#exampleModalCenteredScrollable2">
               Shelter #2
			 			<div class="form-group row m-3">

							Family
									 <div class="col-sm-9 mx-sm-1">

	
								<select class="form-select form-select-md" aria-label=".form-select-md example" id="mySelect2" name="sele">
								<option value=" " disabled selected hidden>Select</option>
									<?php foreach($row as $key => $value) { ?>
													<option value="<?php echo $value["lastname"] ?>">
														<?php echo $value["lastname"] ?>
													</option>
			
														<?php } ?>	 
										</select>
								</div>
							</div>
				
					<div class="form-group row m-3">
				<script>	
					document.write(getCookie("field2"));
				</script>		  
				  </div>
					
                  </a>

        </div>
		</div>

 <div class="col-4 my-3">
        <div class="card shadow">			 
			      <a class="btn btn-lg btn-warning text-white" style="height:150px; font-weight:bolder" data-bs-toggle="modal" data-bs-target="#exampleModalCenteredScrollable2">
               Shelter #3 
			   
			   	<div class="form-group row m-3">

							Family
									 <div class="col-sm-9 mx-sm-1">


								<select class="form-select form-select-md" aria-label=".form-select-md example" id="mySelect3" name="sele">
								<option value=" " disabled selected hidden>Select</option>
										<?php foreach($row as $key => $value) { ?>
													<option value="<?php echo $value["lastname"] ?>">
														<?php echo $value["lastname"] ?>
													</option>
			
														<?php } ?>	 
										</select>
								</div>
							</div>
				
					<div class="form-group row m-3">
				<script>	
					document.write(getCookie("field3"));
				</script>		  
				  </div>
					
                  </a>
        </div>
</div>
																
	</div>	<!--end of 1st row-->
	
	
			<!--2nd row-->
	<div class="row ms-1 me-1">

 <div class="col-4 my-3">
        <div class="card shadow">			 
			      <a class="btn btn-lg btn-warning text-white" style="height:150px; font-weight:bolder" data-bs-toggle="modal" data-bs-target="#exampleModalCenteredScrollable2">
               Shelter #4 
			   	<div class="form-group row m-3">

							Family
									 <div class="col-sm-9 mx-sm-1">

								<select class="form-select form-select-md" aria-label=".form-select-md example" id="mySelect4" name="sele">
								<option value=" " disabled selected hidden>Select</option>
										<?php foreach($row as $key => $value) { ?>
													<option value="<?php echo $value["lastname"] ?>">
														<?php echo $value["lastname"] ?>
													</option>
			
														<?php } ?>	 
										</select>
								</div>
							</div>
				
					<div class="form-group row m-3">
				<script>	
					document.write(getCookie("field4"));
				</script>		  
				  </div>
					
                  </a>

        </div>
  </div>
<div class="col-4 my-3">
        <div class="card shadow">			 
			      <a class="btn btn-lg btn-warning text-white" style="height:150px; font-weight:bolder" data-bs-toggle="modal" data-bs-target="#exampleModalCenteredScrollable2">
               Shelter #5
			   	<div class="form-group row m-3">

							Family
									 <div class="col-sm-9 mx-sm-1">

			
						
								<select class="form-select form-select-md" aria-label=".form-select-md example" id="mySelect5" name="sele">
								<option value=" " disabled selected hidden>Select</option>
										<?php foreach($row as $key => $value) { ?>
													<option value="<?php echo $value["lastname"] ?>">
														<?php echo $value["lastname"] ?>
													</option>
			
														<?php } ?>	 
										</select>
								</div>
							</div>
				
					<div class="form-group row m-3">
				<script>	
					document.write(getCookie("field5"));
				</script>		  
				  </div>
					
                  </a>

        </div>
		</div>

 <div class="col-4 my-3">
        <div class="card shadow">			 
			      <a class="btn btn-lg btn-warning text-white" style="height:150px; font-weight:bolder" data-bs-toggle="modal" data-bs-target="#exampleModalCenteredScrollable2">
               Shelter #6 
			   	<div class="form-group row m-3">

							Family
									 <div class="col-sm-9 mx-sm-1">

						
								<select class="form-select form-select-md" aria-label=".form-select-md example" id="mySelect6" name="sele">
								<option value=" " disabled selected hidden>Select</option>
										<?php foreach($row as $key => $value) { ?>
													<option value="<?php echo $value["lastname"] ?>">
														<?php echo $value["lastname"] ?>
													</option>
			
														<?php } ?>	 
										</select>
								</div>
							</div>
				
					<div class="form-group row m-3">
				<script>	
					document.write(getCookie("field6"));
				</script>		  
				  </div>
					
                  </a>

        </div>
</div>
																
	</div>	<!--end of 2nd row-->
	
	
	
			<!--3rd row-->
	<div class="row ms-1 me-1">

 <div class="col-4 my-3">
        <div class="card shadow">			 
			      <a class="btn btn-lg btn-warning text-white" style="height:150px; font-weight:bolder" data-bs-toggle="modal" data-bs-target="#exampleModalCenteredScrollable2">
               Shelter #7 
			   	<div class="form-group row m-3">

							Family
									 <div class="col-sm-9 mx-sm-1">


						
								<select class="form-select form-select-md" aria-label=".form-select-md example" id="mySelect7" name="sele">
								<option value=" " disabled selected hidden>Select</option>
										<?php foreach($row as $key => $value) { ?>
													<option value="<?php echo $value["lastname"] ?>">
														<?php echo $value["lastname"] ?>
													</option>
			
														<?php } ?>	 
										</select>
								</div>
							</div>
				
					<div class="form-group row m-3">
				<script>	
					document.write(getCookie("field7"));
				</script>		  
				  </div>
					
                  </a>

        </div>
  </div>
<div class="col-4 my-3">
        <div class="card shadow">			 
			      <a class="btn btn-lg btn-warning text-white" style="height:150px; font-weight:bolder" data-bs-toggle="modal" data-bs-target="#exampleModalCenteredScrollable2">
               Shelter #8
			   	<div class="form-group row m-3">

							Family
									 <div class="col-sm-9 mx-sm-1">

			
								<select class="form-select form-select-md" aria-label=".form-select-md example" id="mySelect8" name="sele">
								<option value=" " disabled selected hidden>Select</option>
									<?php foreach($row as $key => $value) { ?>
													<option value="<?php echo $value["lastname"] ?>">
														<?php echo $value["lastname"] ?>
													</option>
			
														<?php } ?>	 
										</select>
								</div>
							</div>
				
					<div class="form-group row m-3">
				<script>	
					document.write(getCookie("field8"));
				</script>		  
				  </div>
					
                  </a>

        </div>
		</div>

 <div class="col-4 my-3">
        <div class="card shadow">			 
			      <a class="btn btn-lg btn-warning text-white" style="height:150px; font-weight:bolder" data-bs-toggle="modal" data-bs-target="#exampleModalCenteredScrollable2">
               Shelter #9 
			   	<div class="form-group row m-3">

							Family
									 <div class="col-sm-9 mx-sm-1">

					
								<select class="form-select form-select-md" aria-label=".form-select-md example" id="mySelect9" name="sele" >
								<option value=" " disabled selected hidden>Select</option>
									<?php foreach($row as $key => $value) { ?>
													<option value="<?php echo $value["lastname"] ?>">
														<?php echo $value["lastname"] ?>
													</option>
			
														<?php } ?>	 
										</select>
								</div>
							</div>
				
					<div class="form-group row m-3">
				<script>	
					document.write(getCookie("field9"));
				</script>		  
				  </div>
					
                  </a>
        </div>
</div>
																
	</div>	<!--end of 3rd row-->
	
  </div>
</div>


<div class="row ms-6 me-1">

 <div class="col-6 my-3">
			 
			      <input class="btn btn-lg btn-info text-white" style="font-weight:bolder" type="submit" value="Assign Shelter" name="assign">
               
                 
        </div>

  </div> <!--end of shelter design-->
</form>

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


<!--function for shelter-->
<script>

function passMe() {

 var x = document.getElementById("mySelect1").value;
	
	document.getElementById("pass1").getElementsByTagName('div')[0].innerHTML = x;

   
 //all count
var element = document.getElementById("pass1");
var numberOfChildren = element.getElementsByTagName('div').length;

   document.getElementById("pplCount").innerHTML = numberOfChildren;
}
</script>		
		
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

<?php

		
  } else {
    header("location:ADMIN_signin.php");
    exit;
  }

  unset($_SESSION['prompt']);
  mysqli_close($con);

?>