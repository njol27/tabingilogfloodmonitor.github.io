
<?php 

  session_start();

  require 'connect.php';
  require 'functions.php';

  if(isset($_SESSION['email'], $_SESSION['password'])) {
	 
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
	   <button class="dropdown" value="<?php echo " ".$row['firstname'];?>" id="name" style="border:none; color:white; background-color: transparent;">
		<?php echo " ".$row['firstname'];?>
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
        
		  <a href="" type="button" class="w-75 btn-lg btn-dark text-white mx-4 fw-bold"  style="box-shadow:none">Profile</a>
            <a href="" type="button" class="w-75 btn-lg btn-dark text-white mx-4 fw-bold" style="box-shadow:none">Settings</a>
		  <a href="logout.php" type="button" class="w-75 btn-lg btn-dark text-white mx-4 fw-bold" style="box-shadow:none">Sign out</a>

  </div> 
</div>	

<div class="container my-5">
							<div class="text-center">
                                <h1 class="h4 text-gray-900 m-3">Relief Goods Request</h1>
                            </div>
	<div class="table-responsive">
								<div class="col-sm-12">
								<table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                                    <thead>
                                        <tr role="row">
										<th class="sorting sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 55px;">
										Lastname
										</th>

										<th class="sorting sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 55px;">
										Food
										</th>
										<th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 61px;">
										Beverage
										</th>
										<th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 30px;">
										Clothing
										</th>
										<th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 64px;">
										Blanket
										</th>
										<th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 58px;">
										Pillows
										</th>
										
										<th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Salary: activate to 
										sort column ascending" style="width: 64px;">
										Toiletries
										</th>
										
										<th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 58px;">
										First Aid
										</th>
										
										
										<th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 58px;">
										Medicine
										</th>
											
										<th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 58px;">
										
										</th>
											
										<th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 58px;">
										Vitamins
										</th>
											
										<th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 58px;">
										
										</th>
									
										
										<th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 58px;">
										Additional Info.
										</th>
										</tr>
                                    </thead>

                                    <tbody>
							<?php
										$sql2 = "SELECT lastname, relief.* FROM info, relief WHERE info.id =relief.reliefkey";
										$result2 = $con-> query($sql2);

									if($result2 -> num_rows > 0 )
									{
									while ($row2 = $result2 -> fetch_assoc())
									{
										echo "<tr><td>".  $row2["lastname"]."</td><td>". $row2["food"]."</td><td>".$row2["beverage"]."</td><td>". $row2["clothing"]."</td><td>". $row2["blanket"]."</td><td>". $row2["pillows"]."</td><td>". $row2["toilet"]."</td><td>". $row2["firstaid"]."</td><td>". $row2["medicine"]."</td><td>". $row2["medicineqty"]."</td><td>".$row2["vitamins"]."</td><td>".$row2["vitaminsqty"]."</td><td>".$row2["additional"]."</td></tr>";
									}
										echo "</tbody>";
									}
										else {
											echo "0 result";
									}
									
									?>
                                </table>
                            </div>
                        </div>
						
		</div> <!--end of container-->				
						
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