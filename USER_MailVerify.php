<?php

 require 'connect.php';

$sql2 = "SELECT * FROM info WHERE usertype = ''";
$result2 = $con-> query($sql2);

 if($result2 -> num_rows > 0 )
{
	while ($row = $result2 -> fetch_assoc())
			{
				
$email=$row['email'];
?>

<script src="https://smtpjs.com/v3/smtp.js"></script>
<script>

var emaila="<?php echo $email ?>";

Email.send({
    Host : "smtp25.elasticemail.com",
    Username : "njlusung27@gmail.com",
    Password : "D41617C976D759663DC1C4A0250C8EB5C4B4",
    To :   (emaila),
    From : "njlusung27@gmail.com",
    Subject : "This is the subject",
    Body : "--Tabing-Ilog Flood Monitoring and Evacuation System--	\n Hi, \n\n Please complete your Flood Monitoring and Evacuation System account by confirming your email address below: \n\n http://localhost/flood%20monitoring%20and%20evacuation%20system/USER_AccountVerified.php"
}).then(
  message => console.log(message)
); 


</script>

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
  
</nav>

</div> <!--end of wrapper-->

<div class="container my-3">
							<div class="text-center">
                                <h1 class="h4 text-gray-900 m-3">Register Approval Request</h1>
						 </div>
 <a href="http://localhost/flood%20monitoring%20and%20evacuation%20system/Brgy_ApproveAccount.php" class="btn btn-hover  type="button">back to Account Approval</a>
                           
                            </div>

<?php

 mysqli_close($con); // Close connectio  

	}
}
 else {
		echo "Error: " . $sql2 . "<br>" . $con->error;
			}
		
?>