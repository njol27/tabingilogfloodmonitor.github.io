<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Noel Jason Lusung">
    <meta name="generator" content="FLOMES 1.0">
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

   
  <!-- logo-->
  <div class="col-md-2">
    <img class="img-responsive mx-5" src="baha.png" alt="" width="50" height="50"> </img>
	</div>
		
					<!--title-->
  <h3 class="col-md-8">Flood Monitoring and Evacuation Center System</h3>
 
   <div class="col-md-2">
       <a href="ADMIN_signin.php" class="btn btn-hover btn-outline-light mx-1" type="button" style="border-radius:0.3em">Log in</a>
	   <a href="USER_Register.php" class="btn text-dark" type="button" style="border-radius:0.3em; background-color: #ffef00">Sign-up</a>
  </div>
</nav>
</div> <!--end of wrapper-->



<!--form-->
 <div class="container">

      <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
           <!-- Nested Row within Card Body -->
          <div class="row">
            <div class="col-lg-4 d-none d-lg-block"><img class="img-responsive" src="ulan.jpg" width="400" height="800"></img></div>
               <div class="col-lg-8">
                <div class="p-3">
                 <div class="text-center">
 <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                      </div>
			<form class="user" name="myForm" onsubmit="return validate()" action="http://localhost/flood%20monitoring%20and%20evacuation%20system/register.php" method="post">
                   <div class="form-group row m-3">
                    <div class="col-sm-6 mb-sm-0">
								Name
              <input type="text" class="form-control form-control-user" id="exfirstname" name="firstname" placeholder="First Name" required>
                </div>
                  <div class="col-sm-6 mb-sm-0">
	<br>
          <input type="text" class="form-control form-control-user" id="exlastname" name="lastname" placeholder="Last Name" required>
                  </div>
					</div>	
								
	  <div class="form-group row m-3">
			<div class="col-sm-6 mb-sm-0">
					Mobile no.
			<div class="input-group mb-3">
				<span class="input-group-text" id="basic-addon1">09</span>
		<input type="text" class="form-control" placeholder="Enter your 9 digit no. " aria-label="Username" aria-describedby="basic-addon1" id="contact" name="contact" maxlength="9">
						</div>
						</div>
					<div class="col-sm-6 mb-sm-0">
						Email Address
	<input type="email" class="form-control form-control-user" id="email" name="email" placeholder="example@mail.com">
									</div>
                                </div>

                    <div class="form-group row m-3">
                      <div class="col-sm-6 mb-sm-0">
						Password 
            <input type="password" class="form-control form-control-user" id="pword1" name="password" placeholder="Password">
                      </div>
                        <div class="col-sm-6">
						
							Confirm Password
                   <input type="password" class="form-control form-control-user" id="pword2" "placeholder="Repeat Password">
                     </div>
						<div class="form-group row m-1">		
						<div class="col-sm-6 mb-sm-0">									 
					<!-- An element to toggle between password visibility -->
					<input type="checkbox" onclick="toggleShow()"> Show Password
									
			<script>
	function toggleShow() {
			  var x = document.getElementById("pword1");
			 var y = document.getElementById("pword2");
				if (x.type === "password") {
					x.type = "text";
					y.type = "text";
			 } else {
				x.type = "password";
				y.type = "password";
				  }
			}
				</script>
			</div>
	<div class="col-sm-6">
		<p id="demo" class="text-danger">
				</div>
					</div>
						</div>		
								
			<div class="form-group row m-3">
						 <div class="col-sm-2  mb-sm-0">
							Age
            <input type="text" class="form-control form-control-user" id="exage" name="age" placeholder="Age" maxlength="3" required>
                            </div>
                          <div class="col-sm-2 mb-sm-0">
							Gender
             <select class="form-select form-select-md" aria-label=".form-select-md example" id="exgender" name="gender" required>

						<option value="Male">Male</option>
						<option value="Female">Female</option>
							</select>
                               </div>
				 <div class="col-sm-4 mb-sm-0">
						Role
             <select class="form-select form-select-md" aria-label=".form-select-md example" id="exrole" name="role" required>
				<option value="GrandParent">GrandParent</option>
				<option value="Parent">Parent</option>
				<option value="Child">Child</option>
				<option value="Extended">Extended</option>
					</select>
                        </div>
								
				<div class="col-sm-3 mb-sm-0">
						Handicapped? 					
				<fieldset class="m-1">
			<div class="form-check">
						<input type="radio" name="radios" class="form-check-input" id="exradio" value="Yes">
					<label class="form-check-label" for="exampleRadio1">Yes</label>
						</div>
					<div class="form-check">
				<input type="radio" name="radios" class="form-check-input" id="exradio2" value="No">
					<label class="form-check-label" for="exampleRadio2">No</label>
					</div>
				</fieldset>
					</div>
                       </div>
		 <div class="form-group row m-3 mb-5">
			<div class="col-sm-4 mb-sm-0">
				Home Address
			<input type="text" class="form-control form-control-user" id="housenum" name="housenum" placeholder="Blk no./ House no." maxlength="3" required>
						</div>
					<div class="col-sm-4 mb-sm-0">
				Subd./Village/Compound
	    <select class="form-select form-select-md" aria-label=".form-select-md example" id="village" name="village">
				<option value="Caneville">Caneville/Arcega</option>
				<option value="Caneville">Motorpool</option>
				<option value="Intia Compound">Intia Compound</option>
				<option value="Dorothyville">Dorothyville</option>
				<option value="Meralco">Meralco</option>
					</select>
						</div>
				<div class="col-sm-4 mb-sm-0">
										Road/Street
		<select class="form-select form-select-md" aria-label=".form-select-md example" id="street" name="street" required>
				<option value="M.Villarica">M. Villarica</option>
				<option value="E.Natividad">E. Natividad</option>

				</select>
				</div>
				</div>
				<hr>
<!---------------------------------member list------------------------------------------------------------------------------>
		
	<div class="row mx-1">
	 <div class="col-sm-12 mb-sm-0 text-center"><b>Member's Form</b></div>
	</div>
				<!----------member 1-------------->
				<div class="row mx-3"> 
				 <div class="col-sm-4 mb-sm-0">
				 Name 1
              <input type="text" class="form-control form-control-user" id="exfirstname" name="fname1" placeholder="First Name">
			   </div>
                 <div class="col-sm-4 mb-sm-0">
				 &nbsp
              <input type="text" class="form-control form-control-user" id="exfirstname" name="lname1" placeholder="Last Name">
			   </div>

			    <div class="col-sm-2">
				Age
              <input type="text" class="form-control form-control-user" id="exfirstname" name="age1" placeholder="0">
			   </div>

				<div class="col-sm-2 mb-sm-0 me-0">
				Gender
               <select class="form-select form-select-md" aria-label=".form-select-md example" placeholder="Gender" id="exampleGender" name="gndr1">
						<option value="Male">Male</option>
						<option value="Female">Female</option>
				</select>
			   </div>	  
				</div>
					<div class="row mx-3">
					  <div class="col-sm-4 mb-sm-0">
					  Role
                  <select class="form-select form-select-md" aria-label=".form-select-md example" id="exampleRole" name="role1">
					<option value="GrandParent">GrandParent</option>
					<option value="Parent">Parent</option>
					<option value="Child">Child</option>
					<option value="Extended">Extended</option>
						</select>
                     </div>
			   	<div class="col-sm-3 mb-sm-0">
						Handicapped? 					
				<fieldset class="m-1">
			<div class="form-check form-check-inline">
						<input type="radio" name="hand1" class="form-check-input" id="exradio" value="Yes">
					<label class="form-check-label" for="exampleRadio1">Yes</label>
						</div>
					<div class="form-check form-check-inline">
				<input type="radio" name="hand1" class="form-check-input" id="exradio2" value="No">
					<label class="form-check-label" for="exampleRadio2">No</label>
					</div>
				</fieldset>
					</div>
					<div class="col-sm-5 mb-sm-0">
					Contact
					<div class="input-group">
						<span class="input-group-text" id="basic-addon1">09</span>
		<input type="text" class="form-control" placeholder="Enter your 9 digit no. " aria-label="Username" aria-describedby="basic-addon1" id="contact" name="num1" maxlength="9">
					</div>
					</div>
				</div> <!----------member 1-------------->
				<hr>
				<!----------member 2-------------->
				<div class="row mx-3"> 
				 <div class="col-sm-4 mb-sm-0">
				 Name 2
              <input type="text" class="form-control form-control-user" id="exfirstname" name="fname2" placeholder="First Name">
			   </div>
                 <div class="col-sm-4 mb-sm-0">
				 &nbsp
              <input type="text" class="form-control form-control-user" id="exfirstname" name="lname2" placeholder="Last Name">
			   </div>

			    <div class="col-sm-2">
				Age
              <input type="text" class="form-control form-control-user" id="exfirstname" name="age2" placeholder="0">
			   </div>

				<div class="col-sm-2 mb-sm-0 me-0">
				Gender
               <select class="form-select form-select-md" aria-label=".form-select-md example" placeholder="Gender" id="exampleGender" name="gndr2">
						<option value="Male">Male</option>
						<option value="Female">Female</option>
				</select>
			   </div>	  
				</div>
					<div class="row mx-3">
					  <div class="col-sm-4 mb-sm-0">
					  Role
                  <select class="form-select form-select-md" aria-label=".form-select-md example" id="exampleRole" name="role2">
					<option value="GrandParent">GrandParent</option>
					<option value="Parent">Parent</option>
					<option value="Child">Child</option>
					<option value="Extended">Extended</option>
						</select>
                     </div>
			   	<div class="col-sm-3 mb-sm-0">
						Handicapped? 					
				<fieldset class="m-1">
			<div class="form-check form-check-inline">
						<input type="radio" name="hand2" class="form-check-input" id="exradio" value="Yes">
					<label class="form-check-label" for="exampleRadio1">Yes</label>
						</div>
					<div class="form-check form-check-inline">
				<input type="radio" name="hand2" class="form-check-input" id="exradio2" value="No">
					<label class="form-check-label" for="exampleRadio2">No</label>
					</div>
				</fieldset>
					</div>
					<div class="col-sm-5 mb-sm-0">
					Contact
					<div class="input-group">
						<span class="input-group-text" id="basic-addon1">09</span>
		<input type="text" class="form-control" placeholder="Enter your 9 digit no. " aria-label="Username" aria-describedby="basic-addon1" id="contact" name="num2" maxlength="9">
					</div>
					</div>
				</div> <!----------member 2-------------->
				<hr>
				<!----------member 3-------------->
				<div class="row mx-3"> 
				 <div class="col-sm-4 mb-sm-0">
				 Name 3
              <input type="text" class="form-control form-control-user" id="exfirstname" name="fname3" placeholder="First Name">
			   </div>
                 <div class="col-sm-4 mb-sm-0">
				 &nbsp
              <input type="text" class="form-control form-control-user" id="exfirstname" name="lname3" placeholder="Last Name">
			   </div>

			    <div class="col-sm-2">
				Age
              <input type="text" class="form-control form-control-user" id="exfirstname" name="age3" placeholder="0">
			   </div>

				<div class="col-sm-2 mb-sm-0 me-0">
				Gender
               <select class="form-select form-select-md" aria-label=".form-select-md example" placeholder="Gender" id="exampleGender" name="gndr3">
						<option value="Male">Male</option>
						<option value="Female">Female</option>
				</select>
			   </div>	  
				</div>
					<div class="row mx-3">
					  <div class="col-sm-4 mb-sm-0">
					  Role
                  <select class="form-select form-select-md" aria-label=".form-select-md example" id="exampleRole" name="role3">
					<option value="GrandParent">GrandParent</option>
					<option value="Parent">Parent</option>
					<option value="Child">Child</option>
					<option value="Extended">Extended</option>
						</select>
                     </div>
			   	<div class="col-sm-3 mb-sm-0">
						Handicapped? 					
				<fieldset class="m-1">
			<div class="form-check form-check-inline">
						<input type="radio" name="hand3" class="form-check-input" id="exradio" value="Yes">
					<label class="form-check-label" for="exampleRadio1">Yes</label>
						</div>
					<div class="form-check form-check-inline">
				<input type="radio" name="hand3" class="form-check-input" id="exradio2" value="No">
					<label class="form-check-label" for="exampleRadio2">No</label>
					</div>
				</fieldset>
					</div>
					<div class="col-sm-5 mb-sm-0">
					Contact
					<div class="input-group">
						<span class="input-group-text" id="basic-addon1">09</span>
		<input type="text" class="form-control" placeholder="Enter your 9 digit no. " aria-label="Username" aria-describedby="basic-addon1" id="contact" name="num3" maxlength="9">
					</div>
					</div>
				</div> <!----------member 3-------------->
				<hr>
				<!----------member 4-------------->
				<div class="row mx-3"> 
				 <div class="col-sm-4 mb-sm-0">
				 Name 4
              <input type="text" class="form-control form-control-user" id="exfirstname" name="fname4" placeholder="First Name">
			   </div>
                 <div class="col-sm-4 mb-sm-0">
				 &nbsp
              <input type="text" class="form-control form-control-user" id="exfirstname" name="lname4" placeholder="Last Name">
			   </div>

			    <div class="col-sm-2">
				Age
              <input type="text" class="form-control form-control-user" id="exfirstname" name="age4" placeholder="0">
			   </div>

				<div class="col-sm-2 mb-sm-0 me-0">
				Gender
               <select class="form-select form-select-md" aria-label=".form-select-md example" placeholder="Gender" id="exampleGender" name="gndr4">
						<option value="Male">Male</option>
						<option value="Female">Female</option>
				</select>
			   </div>	  
				</div>
					<div class="row mx-3">
					  <div class="col-sm-4 mb-sm-0">
					  Role
                  <select class="form-select form-select-md" aria-label=".form-select-md example" id="exampleRole" name="role4">
					<option value="GrandParent">GrandParent</option>
					<option value="Parent">Parent</option>
					<option value="Child">Child</option>
					<option value="Extended">Extended</option>
						</select>
                     </div>
			   	<div class="col-sm-3 mb-sm-0">
						Handicapped? 					
				<fieldset class="m-1">
			<div class="form-check form-check-inline">
						<input type="radio" name="hand4" class="form-check-input" id="exradio" value="Yes">
					<label class="form-check-label" for="exampleRadio1">Yes</label>
						</div>
					<div class="form-check form-check-inline">
				<input type="radio" name="hand4" class="form-check-input" id="exradio2" value="No">
					<label class="form-check-label" for="exampleRadio2">No</label>
					</div>
				</fieldset>
					</div>
					<div class="col-sm-5 mb-sm-0">
					Contact
					<div class="input-group">
						<span class="input-group-text" id="basic-addon1">09</span>
		<input type="text" class="form-control" placeholder="Enter your 9 digit no. " aria-label="Username" aria-describedby="basic-addon1" id="contact" name="num4" maxlength="9">
					</div>
					</div>
				</div> <!----------member 4-------------->
				<hr>
				<!----------member 5-------------->
				<div class="row mx-3"> 
				 <div class="col-sm-4 mb-sm-0">
				 Name 5
              <input type="text" class="form-control form-control-user" id="exfirstname" name="fname5" placeholder="First Name">
			   </div>
                 <div class="col-sm-4 mb-sm-0">
				 &nbsp
              <input type="text" class="form-control form-control-user" id="exfirstname" name="lname5" placeholder="Last Name">
			   </div>

			    <div class="col-sm-2">
				Age
              <input type="text" class="form-control form-control-user" id="exfirstname" name="age5" placeholder="0">
			   </div>

				<div class="col-sm-2 mb-sm-0 me-0">
				Gender
               <select class="form-select form-select-md" aria-label=".form-select-md example" placeholder="Gender" id="exampleGender" name="gndr5">
						<option value="Male">Male</option>
						<option value="Female">Female</option>
				</select>
			   </div>	  
				</div>
					<div class="row mx-3">
					  <div class="col-sm-4 mb-sm-0">
					  Role
                  <select class="form-select form-select-md" aria-label=".form-select-md example" id="exampleRole" name="role5">
					<option value="GrandParent">GrandParent</option>
					<option value="Parent">Parent</option>
					<option value="Child">Child</option>
					<option value="Extended">Extended</option>
						</select>
                     </div>
			   	<div class="col-sm-3 mb-sm-0">
						Handicapped? 					
				<fieldset class="m-1">
			<div class="form-check form-check-inline">
						<input type="radio" name="hand5" class="form-check-input" id="exradio" value="Yes">
					<label class="form-check-label" for="exampleRadio1">Yes</label>
						</div>
					<div class="form-check form-check-inline">
				<input type="radio" name="hand5" class="form-check-input" id="exradio2" value="No">
					<label class="form-check-label" for="exampleRadio2">No</label>
					</div>
				</fieldset>
					</div>
					<div class="col-sm-5 mb-sm-0">
					Contact
					<div class="input-group">
						<span class="input-group-text" id="basic-addon1">09</span>
		<input type="text" class="form-control" placeholder="Enter your 9 digit no. " aria-label="Username" aria-describedby="basic-addon1" id="contact" name="contact" maxlength="9">
					</div>
					</div>
				</div> <!----------member 5-------------->
				
			
		
<!----------------------------------------------member list------------------------------------------------------------------------------>
                              
		<div class="form-group row m-3">
			<input type="submit" value="Register Account" class="btn btn-primary btn-user btn-block">

                  </div>
					<hr>
                     <div class="form-group row m-3">
                <a href="index.html" class="btn btn-user btn-danger btn-block" style="background-color: #dd4b39">
                   <i class="bi bi-google"></i> Register with Google
                          </a>
                          </div>
                   <div class="form-group row m-3">
					<a href="index.html" class="btn btn-user btn-primary btn-block" style="background-color: #3b5998">
                      <i class="bi bi-facebook"></i> Register with Facebook
                     </a>
          </div>
			</form>
                    <hr>
               <div class="text-center">
              <a class="small" href="USER_forgot-password.php">Forgot Password?</a>
                 </div>
                <div class="text-center">
                      <a class="small" href="ADMIN_signin.php">Already have an account? Login!</a>
                  </div>
                 </div>
                </div>
              </div>
          </div>
        </div>

    </div><!--end of form-->

<script>

function validate() {
   let x = document.forms["myForm"]["pword1"].value;
      let y = document.forms["myForm"]["pword2"].value;
	  let txt;
		if (x == y)
		{

		return true;
		
		}
		else
		{
			txt = "Password not equal";	
	document.getElementById("demo").innerHTML = txt;
		return false;				
		}


}

</script>

		 <script src="js/bootstrap.bundle.min.js"></script>
	    <script src="js/bootstrap.min.js"></script>
		
		<!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"
></script>
			

      
  </body>
</html>