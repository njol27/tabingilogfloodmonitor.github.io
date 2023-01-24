<?php 

  session_start();

  require 'connect.php';
  require 'functions.php';

  if(isset($_SESSION['contact'], $_SESSION['password'])) {
	  
	



	 
	 $query = "SELECT * FROM info WHERE contact = '".$_SESSION['contact']."' AND password = '".$_SESSION['password']."'";


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
								<li><h6 class="dropdown-header">Dropdown header</h6></li>
								<li><a class="dropdown-item" href="#">Action</a></li>
								<li><a class="dropdown-item" href="#">Another action</a></li>
								<li><a class="dropdown-item" href="#">Something else here</a></li>
								<li><a class="dropdown-item" href="#">Separated link</a></li>
							</ul>
							</div>                      
 
	</div> <!--message dropdown end-->
	
  <div class="col-1">
	   <div class="dropdown">
				<?php echo " ".$row['firstname'];?>
	   <i class="bi bi-person-circle" class="dropdown-toggle" type="button" id="dropdownMenuButtonSM2" data-mdb-toggle="dropdown" aria-expanded="false">		</i>	
	   <span class="caret"></span>
															
				
							<ul class="dropdown-menu dropdown-menu-lg-end" aria-labelledby="dropdownMenuButtonSM2">
								<li><h6 class="dropdown-header">Dropstart header</h6></li>
								<li><a class="dropdown-item" href="#">Profile</a></li>
								<li><a href="logout.php" class="dropdown-item">Sign out</a></li>

							</ul>
							</div>   

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
             <a href="LGU_AuditLog.php" type="button" class="w-100 btn-lg btn-primary text-white"  style="box-shadow:none">
			 	  <i class="bi bi-journal-text" style="color:#ffffff"></i>
			Audit Log
        </a>

      </li>
       <li class="mb-4">
             <a href="LGU_Report.php" type="button" class="w-100 btn-lg btn-primary text-white"  style="box-shadow:none">
			 	  <i class="bi bi-archive-fill" style="color:#ffffff"></i>
			Activity Report
        </a>
      </li>
	         <li class="mb-4">
             <a href="USER_Emergency.php" type="button" class="w-100 btn-lg btn-primary text-white" style="box-shadow:none">
			 	  <i class="bi bi-exclamation-octagon-fill" style="color:#ffffff"></i>
			Emergency Hotline
        </a>
      </li>
	         <li class="mb-4">
             <a href="LGU_FeedbackReport.php" type="button" class="w-100 btn-lg btn-primary text-white"  style="box-shadow:none">
			 	  <i class="bi bi-star-fill" style="color:#ffffff"></i>
			Feedback and Reviews Reports
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

	<!--Audit Log-->

   <div class="col-9 p-3"  style="background-color:#f6f9fe">
   
   
	<form method="POST">
		<input type="text" name="number"/>
		<input type="submit" />
	</form>
<?php


include 'log.php';

if($_SERVER['REQUEST_METHOD'] === "POST"){
	
	$number = $_POST['number'];
	

if($number != NULL){
		$log = "login ($number)";
	logger($log);
	
		echo "report generated";
	}
	else
	{
		$log = "empty";
	logger($log);
		echo "report failed";
	}
}

?>


</div>





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

		}
  } else {
    header("location:ADMIN_signin.php");
    exit;
  }
  unset($_SESSION['prompt']);
    unset($_SESSION['errprompt']);
  mysqli_close($con);

?>