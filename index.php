<?php 

  session_start();

  require 'connect.php';
  require 'functions.php';
  
 

  if(isset($_POST['login'])) {


  $uname = clean($_POST['email']);
    $pword = clean($_POST['password']);

    $query = "SELECT * FROM info WHERE email = '$uname'  AND password = '$pword'";
	
	    $result = mysqli_query($con, $query);


    if(mysqli_num_rows($result) > 0) {

      $row = mysqli_fetch_assoc($result);

	if($row["usertype"]=="")
	{	
      $_SESSION['email'] = $row['email'];
      $_SESSION['password'] = $row['password'];
		$usr = "UPDATE info SET usertype='user' WHERE email = '$uname'  AND password = '$pword'";
		if($con->query($usr) === TRUE){
			}
			else{
				echo "Error inserting record"; // display error message if not delete 
				}

		header("location:USER_Menu.php");
		exit;
	}

	elseif($row["usertype"]=="admin")
	{
      $_SESSION['email'] = $row['email'];
      $_SESSION['password'] = $row['password'];
		
		header("location:ADMIN_Flood Monitoring and Evacuation System v1.php");
		exit;
		}
	
	elseif($row["usertype"]=="chairman")
	{
      $_SESSION['email'] = $row['email'];
      $_SESSION['password'] = $row['password'];
		
		header("location:Brgy_FloodMonitor.php");
		exit;
		}
	
		else {
      $_SESSION['errprompt'] = "Wrong username or password.";

    }
  }
  } 


?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="google-signin-client_id" content="172656000723-dndoif37qelg3la5dsqtd5q37nu94n1o.apps.googleusercontent.com">
	
    <meta name="description" content="">
    <meta name="author" content="Noel Jason Lusung">
    <meta name="generator" content="Flood Monitor 1.0">
    <title>Flood Monitoring and Evacuation Signin</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">

    

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
    <link href="bootstrap.css" rel="stylesheet">
	
    <link href="starter-template.css" rel="stylesheet">

	
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
	
  </head>
  <body class="text-center bg-gradient bg-primary">
    


 <div class="container px-5 py-5">

        <div class="card o-hidden border-0 shadow-lg my-5 mx-5"  style="border-radius:1.5em; background-color:#FFFFF6 ">
            <div class="card-body p-0">
                           


  <!-- logo-->
    <img class="my-5 mb-3" src="baha.png" alt="" width="62" height="57"> </img>
    <h1 class="h2 fw-bolder mb-4">Flood Monitoring and Evacuation System</h1>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">	
	   <div class="row mb-3">	
	         <div class="col-3"> </div>
	  <div class="col-6">
	 <?php 
        if(isset($_SESSION['prompt'])) {
          showPrompt();
        }

        if(isset($_SESSION['errprompt'])) {
          showError();
        }
      ?>
		</div>
		</div>
 <div class="row mb-3">	
      <div class="col-3">

	  </div>
	    <div class="form-floating col-6">
      <input type="email" class="form-control"  name="email" placeholder="name@example.com" style="border-radius:1em" id='email' required>
      <label for="floatingInput" class="ms-3">Email Address</label>
	  </div> 
	  <div class="col-2"></div>
	  
    </div>

		   <div class="row mb-4">	
	   
      <div class="col-3"><p id="demo2" class="text-danger"></p></div>
    <div class="form-floating col-6">
      <input type="password" class="form-control col-3" name="password" placeholder="Password" style="border-radius:1em" id="pass" required>
      <label for="floatingPassword" class="ms-3">Password</label>
    </div>
	
	      <div class="col-2"></div>
	
	    </div>
		


    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me" style="border-radius:10em" id="remember_me"> Remember me
      </label>
    </div>
    <button class="w-25 btn btn-md btn-dark" name="login" type="submit" style="border-radius:1em">Sign in</button>
	
	
	                     <hr>
		<div class="text-center">
                                        
		<div class="g-signin2 d-flex justify-content-center rounded-3"  data-width="400" data-height="50" data-longtitle="true" data-onsuccess="onSignIn">
		</div>
										
		</div>
		<br>
		<div class="fb-login-button rounded-3 shadow-lg" data-width="500" data-size="large" data-button-type="continue_with" data-layout="default" data-auto-logout-link="false" data-use-continue-as="false" onlogin="checkLoginState();"></div>
										
         <div class="text-center">
            <a class="small" href="USER_forgot-password.php">Forgot Password?</a>
          </div>
            <div class="text-center">
               <a class="small" href="USER_Register.php">Create an Account!</a>
            </div>

</form>		
    <p class="mt-5 mb-3 text-muted">&copy; 2020–2022</p>

   </div>
      </div>
	     </div>
		  


  </div>
   </div>
   
<script>
            $(function() {
 
                if (localStorage.chkbx && localStorage.chkbx != '') {
                    $('#remember_me').attr('checked', 'checked');
                    $('#contact').val(localStorage.usrname);
                    $('#pass').val(localStorage.pass);
                } else {
                    $('#remember_me').removeAttr('checked');
                    $('#contact').val('');
                    $('#pass').val('');
                }
 
                $('#remember_me').click(function() {
 
                    if ($('#remember_me').is(':checked')) {
                        // save username and password
                        localStorage.usrname = $('#contact').val();
                        localStorage.pass = $('#pass').val();
                        localStorage.chkbx = $('#remember_me').val();
                    } else {
                        localStorage.usrname = '';
                        localStorage.pass = '';
                        localStorage.chkbx = '';
                    }
                });
            });
 
        </script>


<script>
// This is called with the results from from FB.getLoginStatus().
function statusChangeCallback(response) {
console.log('statusChangeCallback');
console.log(response);
// The response object is returned with a status field that lets the
// app know the current login status of the person.
// Full docs on the response object can be found in the documentation
// for FB.getLoginStatus().
if (response.status === 'connected') {
// Logged into your app and Facebook.
testAPI();
} else if (response.status === 'not_authorized') {
// The person is logged into Facebook, but not your app.
document.getElementById('status').innerHTML = 'Login with Facebook ';
} else {
// The person is not logged into Facebook, so we're not sure if
// they are logged into this app or not.
document.getElementById('status').innerHTML = 'Login with Facebook ';
}
}
// This function is called when someone finishes with the Login
// Button. See the onlogin handler attached to it in the sample
// code below.
function checkLoginState() {
FB.getLoginStatus(function(response) {
statusChangeCallback(response);
});
}
window.fbAsyncInit = function() {
FB.init({
appId : '479619360400990',
cookie : true, // enable cookies to allow the server to access
// the session
xfbml : true, // parse social plugins on this page
version : 'v12.0' // use version 2.2
});
// Now that we've initialized the JavaScript SDK, we call
// FB.getLoginStatus(). This function gets the state of the
// person visiting this page and can return one of three states to
// the callback you provide. They can be:
//
// 1. Logged into your app ('connected')
// 2. Logged into Facebook, but not your app ('not_authorized')
// 3. Not logged into Facebook and can't tell if they are logged into
// your app or not.
//
// These three cases are handled in the callback function.

FB.getLoginStatus(function(response) {
statusChangeCallback(response);
});
};
// Load the SDK asynchronously
(function(d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) return;
js = d.createElement(s); js.id = id;
js.src = "//connect.facebook.net/en_US/sdk.js";
fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

// Here we run a very simple test of the Graph API after login is
// successful. See statusChangeCallback() for when this call is made.
function testAPI() {
console.log('Welcome! Fetching your information.... ');
FB.api('/me?fields=name,email', function(response) {
console.log('Successful login for: ' + response.name);
		window.location.href = "USER_Menu.php";
    });
  }

</script>
<script>
function onSignIn(googleUser) {
  var profile = googleUser.getBasicProfile();
  console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
  console.log('Name: ' + profile.getName());
  console.log('Image URL: ' + profile.getImageUrl());
  console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
  
}



</script>

<script src="https://apis.google.com/js/platform.js" async defer></script>


		 <script src="js/bootstrap.bundle.min.js"></script>
	    <script src="js/bootstrap.js"></script>
		<script src="js/bootstrap.min.js"></script>
			
		<!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"></script>


  </body>
</html>

<?php
	  

  unset($_SESSION['prompt']);
  unset($_SESSION['errprompt']);

  mysqli_close($con);

?>