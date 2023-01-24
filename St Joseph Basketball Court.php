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
		  <a href="" type="button" class="w-75 btn-lg btn-dark text-white mx-4 fw-bold" style="box-shadow:none">Sign out</a>

  </div> 
</div>

<!--shelter design-->
<div class="container-fluid" id="container1">
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
	if(getCookie("lnameSJ") == null)setCookie("lnameSJ",""); // cookie for select
	if(getCookie("lname2SJ") == null)setCookie("lname2SJ","");
	if(getCookie("lname3SJ") == null)setCookie("lname3SJ","");
	if(getCookie("lname4SJ") == null)setCookie("lname4SJ","");
	if(getCookie("lname5SJ") == null)setCookie("lname5SJ","");
	if(getCookie("lname6SJ") == null)setCookie("lname6SJ","");
	if(getCookie("lname7SJ") == null)setCookie("lname7SJ","");
	if(getCookie("lname8SJ") == null)setCookie("lname8SJ","");
	if(getCookie("lname9SJ") == null)setCookie("lname9SJ","");
	
	if(getCookie("selfiltSJ") == null)setCookie("selfiltSJ",""); // cookie for index filter in selection
	if(getCookie("selfilt2SJ") == null)setCookie("selfilt2SJ","");
	if(getCookie("selfilt3SJ") == null)setCookie("selfilt3SJ","");
	if(getCookie("selfilt4SJ") == null)setCookie("selfilt4SJ","");
	if(getCookie("selfilt5SJ") == null)setCookie("selfilt5SJ","");
	if(getCookie("selfilt6SJ") == null)setCookie("selfilt6SJ","");
	if(getCookie("selfilt7SJ") == null)setCookie("selfilt7SJ","");
	if(getCookie("selfilt8SJ") == null)setCookie("selfilt8SJ","");
	if(getCookie("selfilt9SJ") == null)setCookie("selfilt9SJ","");

function getCookie(name)
  {
    var re = new RegExp(name + "=([^;]+)");
    var value = re.exec(document.cookie);
    return (value != null) ? unescape(value[1]) : null;
  }


</script>
	
		<!--EVACUATION CENTER-->
	<div class="row ms-1 me-1 container-fluid">
<div class="col-4 my-3"></div>

		<div class="col-4 my-3">
			<div class="card shadow">			 
			    <a class="btn btn-lg btn-primary text-white" style="height:200px; font-weight:bolder">
							EVACUATION CENTER				
						<div class="form-group row m-3">
									 <div class="col-sm-9 mx-sm-4">
						
								<select class="form-select form-select-md" aria-label=".form-select-md example" id="mySelect0" name="sele"  onchange="evacHandler(this.value)">
											<option value=" " disabled selected hidden>Select</option>
											<option value="Tabing Ilog Elementary School">Tabing Ilog Elementary School</option>
											<option value="St Joseph Basketball Court">St Joseph Basketball Court</option>
								</select>
								</div>
							</div>
				
				<div class="form-group row">
					<h6>ST JOSEPH BASKETBALL COURT</h6>
						<script>	
						function evacHandler(value) {
								window.location.assign(`${value}.php`); //select evac center
							}	
						</script>
				  </div>
			<br>
			<div class="form-group row">
					<div class="col-6">no. of evacuees:</div>					
					<div class="col-4" hidden></div>
							<script>							
								
							var totppl = parseInt(getCookie("pplCountSJ"));
							var totppl2 = parseInt(getCookie("pplCount2SJ"));
							var totppl3 = parseInt(getCookie("pplCount3SJ"));
							var totppl4 = parseInt(getCookie("pplCount4SJ"));
							var totppl5 = parseInt(getCookie("pplCount5SJ"));
							var totppl6 = parseInt(getCookie("pplCount6SJ"));
							var totppl7 = parseInt(getCookie("pplCount7SJ"));
							var totppl8 = parseInt(getCookie("pplCount8SJ"));
							var totppl9 = parseInt(getCookie("pplCount9SJ"));
																
					var total = totppl + totppl2 + totppl3 + totppl4 + totppl5 + totppl6 + totppl7 + totppl8 + totppl9;
					document.write(total + "&nbsp people"); //summation of evacuees
					setCookie("totalCountSJ", total);
					</script>
				
					<?php 
					
					$totl = $_COOKIE["totalCountSJ"];
					$evc = "REPLACE INTO evaccntr (id, arrive, evaccenter, evacid) VALUES (10, '$totl','TabingIlog', '10')";
						if(mysqli_query($con, $evc)) {
					}
				else {
						echo "0 record";
					}
					?>
					
					
			</div>					  
                </a>
        </div>
  </div>
  <div class="col-4 my-3"></div>
   </div>	
	
		<!--1st row-->
	<div class="row ms-1 me-1 container-fluid">
		<div class="col-4 my-1"> 
			<div class="btn-lg shadow-lg text-white" style="height:400px; font-weight:bolder; background-color:red;" id="color">			 
			  
				Shelter #1	
			<form action="Tabing Ilog Elementary School.php">
					<div class="form-group row ms-1 my-3">
							Family
									 <div class="col-sm-6 mx-sm-1">

						<?php						
									$result = mysqli_query($con, "SELECT * FROM info WHERE usertype='user'");
									$row = array();
									while($key = mysqli_fetch_array($result,MYSQLI_ASSOC)){
									$row[] = $key;
									}										
									
					$filr = intval($_COOKIE['selfiltSJ']); $filt = $filr - 1; unset($row[$filt]);	//filter in selection						
					$filr2 = intval($_COOKIE['selfilt2SJ']); $filt2 = $filr2 - 1; unset($row[$filt2]);
					$filr3 = intval($_COOKIE['selfilt3SJ']);	$filt3 = $filr3 - 1; unset($row[$filt3]);									
					$filr4 = intval($_COOKIE['selfilt4SJ']);	$filt4 = $filr4 - 1; unset($row[$filt4]);									
					$filr5 = intval($_COOKIE['selfilt5SJ']); $filt5 = $filr5 - 1; unset($row[$filt5]);									
					$filr6 = intval($_COOKIE['selfilt6SJ']);	$filt6 = $filr6 - 1; unset($row[$filt6]);
					$filr7 = intval($_COOKIE['selfilt7SJ']); $filt7 = $filr7 - 1; unset($row[$filt7]);	
					$filr8 = intval($_COOKIE['selfilt8SJ']);	$filt8 = $filr8 - 1; unset($row[$filt8]);
					$filr9 = intval($_COOKIE['selfilt9SJ']);	$filt9 = $filr9 - 1; unset($row[$filt9]);
									?>
									
														
		<select class="form-select form-select-md" aria-label=".form-select-md example" id="mySelect1" name="sele">
						<option value=" " disabled selected hidden>Select</option>
							<?php foreach($row as $key => $value) { ?>
									<option  value="<?php echo $value["id"] ?>" >
										<?php echo $value["lastname"] ?>
									</option>		
										<?php } ?>	 
																			
				</select>
					</div>
					 <div class="col-sm-1 mx-sm-1 container-fluid">
					<input class="btn btn-info text-white" type="submit" value="Select" name="assign" onclick="clckNme()"></input>
					</div>
			
				</div>
				</form>	
					<div class="mt-3 d-flex justify-content-center"><script>document.write(getCookie("chkSJ"));</script>&nbsp Family</div>
				  	<div class="form-group row m-1">
					<div>MEMBERS:</div>					
					
				</div>
							
				  	<div class="form-group row mb-3 mx-1">					
					<table class="text-white" style='align:center;'>						
					
					<!--function for each select-->
					<script>				
				function clckNme() { //function for memberlist shelter
					setCookie("check1SJ", "red");
					document.getElementById("color").style.backgroundColor = getCookie("check1SJ");
					var x = document.getElementById("mySelect1").value; // get lastname	
					var y = document.getElementById("mySelect1");
					z = y.options[y.selectedIndex].text;
					setCookie("chkSJ", z);	//family name
					setCookie("lnameSJ", x, "/");//insert lastname to cookie	
					var filt = document.getElementById("mySelect1").selectedIndex; //select option index
					setCookie("selfiltSJ", filt); //set select option index cookies
					}
																
				document.write("<tr><td>&nbsp</td><td>Firstname</td><td>Lastname</td><td>Age</td><td>Gender</td></tr>");	 
			<?php	
								$uid =  $_COOKIE["lnameSJ"];	
							   																												
				$mem = mysqli_query($con, "SELECT * FROM info WHERE id = '$uid'");	//				
					$arr = array();
						while($fam = mysqli_fetch_array($mem,MYSQLI_ASSOC)){
						$arr[] = $fam;		?>											
							var indexx = 0;	
	<?php			foreach($arr as $fam => $famlst) { 	?>  
							indexx++;	
			var htmlString="<?php echo $famlst['firstname'].'</td><td>'.$famlst['lastname'].'</td><td>'.$famlst['age'].'</td><td>'.$famlst['gender'];?>";
			document.write("<tr><td><input type='checkbox' id='myCheck' name='myCheck' onclick='ch()' value='"+ htmlString +"'></td><td> " + htmlString + "</td></tr>");
					<?php } } ?>								
			
		<?php	$mem2 = mysqli_query($con, "SELECT * FROM memberlist WHERE addid = '$uid'");					
					$arr2 = array();
						while($fam2 = mysqli_fetch_array($mem2,MYSQLI_ASSOC)){
						$arr2[] = $fam2;
							}	?>							
									
					<?php	foreach($arr2 as $fam2 => $famlst2) { 	?>  
								indexx++;
			var htmlString2="<?php echo $famlst2['fname'].'</td><td>'.$famlst2['lname'].'</td><td>'.$famlst2['ages'].'</td><td>'.$famlst2['gnder'].'<br>'; ?>";
			document.write("<tr><td><input type='checkbox' id='myCheck2' name='myCheck2' onclick='ch()' value='"+ htmlString2 +"'></td><td> " + htmlString2 + "</td></tr>");
									  <?php } ?>
									  
									  
					
											
 function ch() { // checkbox change color and count
  var markedCheckbox = document.getElementsByName('myCheck2');
  var markedCheckbox2 = document.getElementsByName('myCheck');

  var count = 0;
for (var chckbox2 of markedCheckbox2) {	 
  if (chckbox2.checked){	
		count++;
			var chkval2 = htmlString;						
		}		
}
  for (var chckbox of markedCheckbox) {	 
	if (chckbox.checked){		
		count++;
			var chkbxes = document.querySelectorAll('input[name="myCheck2"]:checked');
            var chkval = [];
            chkbxes.forEach((checkbox) => {
                chkval.push(checkbox.value);
            });			
	}	
  }
	if (count ==0){ 
		 document.getElementById("color").style.backgroundColor = "red";
		 setCookie("check1SJ", "red");
		}		
		else if (count <indexx){ 
			document.getElementById("color").style.backgroundColor = "#dba400";
			setCookie("check1SJ", "#dba400");
		}
		else if (count ==indexx){ 
			document.getElementById("color").style.backgroundColor = "green";
			setCookie("check1SJ", "green");
		}
		else{ 
			document.getElementById("color").style.backgroundColor = "#dba400";
			setCookie("check1SJ", "#dba400");
		}
	document.getElementById("examp").innerHTML =  count;//number clicked
	document.getElementById("examp2").innerHTML =  chkval;
	setCookie("memfamSJ", document.getElementById("examp2").innerHTML); 
	document.getElementById("examp3").innerHTML =  chkval2;
	setCookie("headfamSJ", document.getElementById("examp3").innerHTML); 
	document.getElementById("examp4").innerHTML = indexx +"indeses"; //total checkbox count
			setCookie("pplCountSJ", count); 	
		
 }
		var ckie = getCookie("check1SJ");
		document.getElementById("color").style.backgroundColor = ckie;		
</script>

		
	
					</table>
							
				 <div id="examp" class="row mx-5 mt-3" ></div>
				 <div class="row mx-5" hidden>Arrived:</div>
				 <div id="examp2" class="row mx-5" hidden></div>
				 <div id="examp3" class="row mx-5" hidden></div>
				<div id="examp4" class="row mx-5" hidden></div>
				</div>
				<form action="evaccntr.php">		
				<div class="row mx-5">
				<input class="btn btn-info text-white" type="submit" value="Submit" onclick="ch()"></input>
				</div>
				</form>
			
		
	
		</div>
		</div>
		
<div class="col-4 my-1"> 
			<div class="btn-lg shadow-lg text-white" style="height:400px; font-weight:bolder; background-color:red;" id="color2">			 
			  
				Shelter #2	
					<form action="Tabing Ilog Elementary School.php">				
					<div class="form-group row ms-1 my-3">
							Family
									 <div class="col-sm-6 mx-sm-1">
									 
									 <?php
					$filr = intval($_COOKIE['selfiltSJ']); $filt = $filr - 1; unset($row[$filt]);									
					$filr2 = intval($_COOKIE['selfilt2SJ']); $filt2 = $filr2 - 1; unset($row[$filt2]);
					$filr3 = intval($_COOKIE['selfilt3SJ']);	$filt3 = $filr3 - 1; unset($row[$filt3]);									
					$filr4 = intval($_COOKIE['selfilt4SJ']);	$filt4 = $filr4 - 1; unset($row[$filt4]);									
					$filr5 = intval($_COOKIE['selfilt5SJ']); $filt5 = $filr5 - 1; unset($row[$filt5]);									
					$filr6 = intval($_COOKIE['selfilt6SJ']);	$filt6 = $filr6 - 1; unset($row[$filt6]);
					$filr7 = intval($_COOKIE['selfilt7SJ']); $filt7 = $filr7 - 1; unset($row[$filt7]);	
					$filr8 = intval($_COOKIE['selfilt8SJ']);	$filt8 = $filr8 - 1; unset($row[$filt8]);
					$filr9 = intval($_COOKIE['selfilt9SJ']);	$filt9 = $filr9 - 1; unset($row[$filt9]);
									?>

						
		<select class="form-select form-select-md" aria-label=".form-select-md example" id="mySelect2" name="sele">
						<option value=" " disabled selected hidden>Select</option>
							<?php foreach($row as $key => $value) { ?>
									<option  value="<?php echo $value["id"] ?>" >
										<?php echo $value["lastname"] ?>
									</option>		
										<?php } ?>	   
									
																		
				</select>
					</div>
					<div class="col-sm-1 mx-sm-1 container-fluid">
					<input class="btn btn-info text-white" type="submit" value="Submit" name="assign" onclick="clckNmeTwo()"></input>
				</div>
				</div>
			</form>	
					<div class="mt-3 d-flex justify-content-center"><script>document.write(getCookie("chk2SJ"));</script>&nbsp Family</div>
				  	<div class="form-group row m-1">
					<div>MEMBERS:</div>
				</div>
					
				  	<div class="form-group row mb-3 m-1">					
					<table class="text-white" style='align:center;'>						
					
					<!--function for each select-->
					<script>
				
				function clckNmeTwo() { //function for memberlist shelter
					setCookie("check2SJ", "red");
					document.getElementById("color2").style.backgroundColor = getCookie("check2SJ");
					var x2 = document.getElementById("mySelect2").value; // get lastname	
					setCookie("lname2SJ", x2, "/");//insert lastname to cookie
					var y2 = document.getElementById("mySelect2");
					z2 = y2.options[y2.selectedIndex].text;
					setCookie("chk2SJ", z2);	//family name
					var filt2 = document.getElementById("mySelect2").selectedIndex;
					setCookie("selfilt2SJ", filt2);
					}				
			

			document.write("<tr><td>&nbsp</td><td>Firstname</td><td>Lastname</td><td>Age</td><td>Gender</td></tr>");
			<?php	
				$uid2 =  $_COOKIE["lname2SJ"];
				   	
								
				$mem21 = mysqli_query($con, "SELECT * FROM info WHERE id = '$uid2'");					
					$arr21 = array();
						while($fam21 = mysqli_fetch_array($mem21,MYSQLI_ASSOC)){
						$arr21[] = $fam21;													
								
				foreach($arr21 as $fam21 => $famlst21) { 	?>  						
			var htmlString21="<?php echo $famlst21['firstname'].'</td><td>'.$famlst21['lastname'].'</td><td>'.$famlst21['age'].'</td><td>'.$famlst21['gender'];?>";
			document.write("<tr><td><input type='checkbox' id='myCheck21' name='myCheck21' onclick='chTwo()' value='"+ htmlString21 +"'></td><td> " + htmlString21 + "</td></tr>");
								<?php }
								} ?>

<?php	$mem22 = mysqli_query($con, "SELECT * FROM memberlist WHERE addid = '$uid2'");					
					$arr22 = array();
						while($fam22 = mysqli_fetch_array($mem22,MYSQLI_ASSOC)){
						$arr22[] = $fam22;
							}	?>							
					
					var indexx2 = 0;
					<?php	foreach($arr22 as $fam22 => $famlst22) { 	?>  
								indexx2++;
			var htmlString22="<?php echo $famlst22['fname'].'</td><td>'.$famlst22['lname'].'</td><td>'.$famlst22['ages'].'</td><td>'.$famlst22['gnder'].'<br>'; ?>";
			document.write("<tr><td><input type='checkbox' id='myCheck22' name='myCheck22' onclick='chTwo()' value='"+ htmlString22 +"'></td><td> " + htmlString22 + "</td></tr>");
									  <?php } ?>
							indexx2++;


 function chTwo() { // checkbox change color and count
  var markedCheckbox2 = document.getElementsByName('myCheck22');
  var count2 = 0;

  if (document.querySelector('#myCheck21').checked){
		
		count2++;
			var chkval21 = htmlString21;					
	}		
  for (var chckbox22 of markedCheckbox2) {	 
	if (chckbox22.checked){		
		count2++;
			var chkbxes22 = document.querySelectorAll('input[name="myCheck22"]:checked');
            var chkval22 = [];
            chkbxes22.forEach((checkbox) => {
                chkval22.push(checkbox.value);
            });			
	}
  }	
	if (count2 ==0){ 
		 document.getElementById("color2").style.backgroundColor = "red";
		 setCookie("check2SJ", "red");
		}		
		else if (count2 <indexx2){ 
			document.getElementById("color2").style.backgroundColor = "#dba400";
			setCookie("check2SJ", "#dba400");
		}
		else if (count2 ==indexx2){ 
			document.getElementById("color2").style.backgroundColor = "green";
			setCookie("check2SJ", "green");
		}
		else{ 
			document.getElementById("color2").style.backgroundColor = "#dba400";
			setCookie("check2SJ", "#dba400");
		}

	document.getElementById("examp21").innerHTML =  count2;//number clicked
	document.getElementById("examp22").innerHTML =  chkval21;
	setCookie("headfam2SJ", document.getElementById("examp22").innerHTML); 
	document.getElementById("examp23").innerHTML =  chkval22;
	setCookie("memfam2SJ", document.getElementById("examp23").innerHTML);
	document.getElementById("examp24").innerHTML = indexx2 +"indeses"; //total checkbox count
			setCookie("pplCount2SJ", count2); 
		
 }
		var ckie2 = getCookie("check2SJ");
		document.getElementById("color2").style.backgroundColor = ckie2;							
</script>

					</table>				 
				 <div id="examp21" class="row mx-5 mt-3" hidden></div>
				 <div class="row mx-5" hidden>Arrived:</div>
				 <div id="examp22" class="row mx-5" hidden></div>
				 <div id="examp23" class="row mx-5"hidden ></div>
				<div id="examp24" class="row mx-5"hidden></div>
				</div>
					<form action="evaccntr2.php">
				<div class="row mx-5">
				<input class="btn btn-info text-white" type="submit" value="Submit" name="assign" onclick="chTwo()"></input>
				</div>
				</form>
			</div>
		</div> <!--end row 1 col 2-->
		
 <div class="col-4 my-1"> 
			<div class="btn-lg shadow-lg text-white" style="height:400px; font-weight:bolder; background-color:red;" id="color3">			 
			  
				Shelter #3	
					<form action="Tabing Ilog Elementary School.php">					
					<div class="form-group row ms-1 my-3">
							Family
									 <div class="col-sm-6 mx-sm-1">
									 
									 <?php
					$filr = intval($_COOKIE['selfiltSJ']); $filt = $filr - 1; unset($row[$filt]);									
					$filr2 = intval($_COOKIE['selfilt2SJ']); $filt2 = $filr2 - 1; unset($row[$filt2]);
					$filr3 = intval($_COOKIE['selfilt3SJ']);	$filt3 = $filr3 - 1; unset($row[$filt3]);									
					$filr4 = intval($_COOKIE['selfilt4SJ']);	$filt4 = $filr4 - 1; unset($row[$filt4]);									
					$filr5 = intval($_COOKIE['selfilt5SJ']); $filt5 = $filr5 - 1; unset($row[$filt5]);									
					$filr6 = intval($_COOKIE['selfilt6SJ']);	$filt6 = $filr6 - 1; unset($row[$filt6]);
					$filr7 = intval($_COOKIE['selfilt7SJ']); $filt7 = $filr7 - 1; unset($row[$filt7]);	
					$filr8 = intval($_COOKIE['selfilt8SJ']);	$filt8 = $filr8 - 1; unset($row[$filt8]);
					$filr9 = intval($_COOKIE['selfilt9SJ']);	$filt9 = $filr9 - 1; unset($row[$filt9]);
									?>
						
		<select class="form-select form-select-md" aria-label=".form-select-md example" id="mySelect3" name="sele">
						<option value=" " disabled selected hidden>Select</option>
							<?php foreach($row as $key => $value) { ?>
									<option  value="<?php echo $value["id"] ?>" >
										<?php echo $value["lastname"] ?>
									</option>		
										<?php } ?>	

									
				</select>
					</div>
					<div class="col-sm-1 mx-sm-1 container-fluid">
					<input class="btn btn-info text-white" type="submit" value="Submit" name="assign" onclick="clckNmeThree()"></input>
				</div>
				</div>
			</form>	
					<div class="mt-3 d-flex justify-content-center"><script>document.write(getCookie("chk3SJ"));</script>&nbsp Family</div>
				  	<div class="form-group row m-1">
					<div>MEMBERS:</div>
				</div>
					
				  	<div class="form-group row mb-3 m-1">					
					<table class="text-white" style='align:center;'>						
					
					<!--function for each select-->
					<script>

				function clckNmeThree() { //function for memberlist shelter
					setCookie("check3SJ", "red");
					document.getElementById("color3").style.backgroundColor = getCookie("check3SJ");
					var x3 = document.getElementById("mySelect3").value; // get lastname	
					setCookie("lname3SJ", x3, "/");//insert lastname to cookie					
					var y3 = document.getElementById("mySelect3");
					z3 = y3.options[y3.selectedIndex].text;
					setCookie("chk3SJ", z3);	//family name					
					var filt3 = document.getElementById("mySelect3").selectedIndex;
					setCookie("selfilt3SJ", filt3);
				}
				
	document.write("<tr><td>&nbsp</td><td>Firstname</td><td>Lastname</td><td>Age</td><td>Gender</td></tr>");
			<?php	
					
				   $uid3 =  $_COOKIE["lname3SJ"];
									
				$mem31 = mysqli_query($con, "SELECT * FROM info WHERE id = '$uid3'");					
					$arr31 = array();
						while($fam31 = mysqli_fetch_array($mem31,MYSQLI_ASSOC)){
						$arr31[] = $fam31;	?>												
					var indexx3 = 0;			
		<?php		foreach($arr31 as $fam31 => $famlst31) { 	?>  
							indexx3++;				
			var htmlString31="<?php echo $famlst31['firstname'].'</td><td>'.$famlst31['lastname'].'</td><td>'.$famlst31['age'].'</td><td>'.$famlst31['gender'];?>";
			document.write("<tr><td><input type='checkbox' id='myCheck31' name='myCheck31' onclick='chThree()' value='"+ htmlString31 +"'></td><td> " + htmlString31 + "</td></tr>");
								<?php }
								} ?>

<?php	$mem32 = mysqli_query($con, "SELECT * FROM memberlist WHERE addid = '$uid3'");					
					$arr32 = array();
						while($fam32 = mysqli_fetch_array($mem32,MYSQLI_ASSOC)){
						$arr32[] = $fam32;
							}	?>							
					
				
					<?php	foreach($arr32 as $fam32 => $famlst32) { 	?>  
								indexx3++;
			var htmlString32="<?php echo $famlst32['fname'].'</td><td>'.$famlst32['lname'].'</td><td>'.$famlst32['ages'].'</td><td>'.$famlst32['gnder'].'<br>'; ?>";
			document.write("<tr><td><input type='checkbox' id='myCheck32' name='myCheck32' onclick='chThree()' value='"+ htmlString32 +"'></td><td> " + htmlString32 + "</td></tr>");
									  <?php } ?>
							


 function chThree() { // checkbox change color and count
  var markedCheckbox3 = document.getElementsByName('myCheck32');
  var count3 = 0;

  if (document.querySelector('#myCheck31').checked){	
  			document.getElementById("color3").style.backgroundColor = "#dba400";
			setCookie("check3SJ", "#dba400");
			count3++;
			var chkval31 = htmlString31;					
	}		
  for (var chckbox32 of markedCheckbox3) {	 
	if (chckbox32.checked){		
		count3++;
			var chkbxes32 = document.querySelectorAll('input[name="myCheck32"]:checked');
            var chkval32 = [];
            chkbxes32.forEach((checkbox) => {
                chkval32.push(checkbox.value);
            });			
	}	
  }
	if (count3 ==0){ 
		 document.getElementById("color3").style.backgroundColor = "red";
		 setCookie("check3SJ", "red");
		}

			
		else if (count3 <indexx3){ 
			document.getElementById("color3").style.backgroundColor = "#dba400";
			setCookie("check3SJ", "#dba400");
		}
		else if (count3 ==indexx3){ 
			document.getElementById("color3").style.backgroundColor = "green";
			setCookie("check3SJ", "green");
		}
		else{ 
			document.getElementById("color3").style.backgroundColor = "#dba400";
			setCookie("check3SJ", "#dba400");
		}

	document.getElementById("examp31").innerHTML =  count3;//number clicked
	document.getElementById("examp32").innerHTML =  chkval31;
	document.getElementById("examp33").innerHTML =  chkval32;
	document.getElementById("examp34").innerHTML = indexx3 +"indeses"; //total checkbox count
			setCookie("pplCount3SJ", document.getElementById("examp31").innerHTML); 	
			setCookie("headfam3SJ", document.getElementById("examp32").innerHTML); 
setCookie("memfam3SJ", document.getElementById("examp33").innerHTML); 
		 
 }
		var ckie3 = getCookie("check3SJ");
		document.getElementById("color3").style.backgroundColor = ckie3;							
</script>

					</table>				 
				 <div id="examp31" class="row mx-5 mt-3" hidden></div>
				 <div class="row mx-5" hidden>Arrived:</div>
				 <div id="examp32" class="row mx-5" hidden></div>
				 <div id="examp33" class="row mx-5" hidden></div>
				<div id="examp34" class="row mx-5" hidden>
				</div>
				</div>
				<form action="evaccntr3.php">
				<div class="row mx-5">
				<input class="btn btn-info text-white" type="submit" value="Submit" name="assign" onclick='chThree()'></input>
				</div>
				</form>
			</div>
		</div><!--end row 1 col3-->
		
	</div>	<!--end of 1st row-->
	
	
			<!--2nd row-->
	<div class="row ms-1 me-1 container-fluid">

 <div class="col-4 my-1"> <!-- row 2 col 1-->
			<div class="btn-lg shadow-lg text-white" style="height:400px; font-weight:bolder; background-color:red;" id="color4">			 
			  
				Shelter #4
					<form action="Tabing Ilog Elementary School.php">					
					<div class="form-group row ms-1 my-3">
							Family
									 <div class="col-sm-6 mx-sm-1">
			 <?php
					$filr = intval($_COOKIE['selfiltSJ']); $filt = $filr - 1; unset($row[$filt]);									
					$filr2 = intval($_COOKIE['selfilt2SJ']); $filt2 = $filr2 - 1; unset($row[$filt2]);
					$filr3 = intval($_COOKIE['selfilt3SJ']);	$filt3 = $filr3 - 1; unset($row[$filt3]);									
					$filr4 = intval($_COOKIE['selfilt4SJ']);	$filt4 = $filr4 - 1; unset($row[$filt4]);									
					$filr5 = intval($_COOKIE['selfilt5SJ']); $filt5 = $filr5 - 1; unset($row[$filt5]);									
					$filr6 = intval($_COOKIE['selfilt6SJ']);	$filt6 = $filr6 - 1; unset($row[$filt6]);
					$filr7 = intval($_COOKIE['selfilt7SJ']); $filt7 = $filr7 - 1; unset($row[$filt7]);	
					$filr8 = intval($_COOKIE['selfilt8SJ']);	$filt8 = $filr8 - 1; unset($row[$filt8]);
					$filr9 = intval($_COOKIE['selfilt9SJ']);	$filt9 = $filr9 - 1; unset($row[$filt9]);
									?>
						
		<select class="form-select form-select-md" aria-label=".form-select-md example" id="mySelect4" name="sele">
						<option value=" " disabled selected hidden>Select</option>
							<?php foreach($row as $key => $value) { ?>
									<option  value="<?php echo $value["id"] ?>" >
										<?php echo $value["lastname"] ?>
									</option>		
										<?php } ?>	        
				</select>
					</div>
					<div class="col-sm-1 mx-sm-1 container-fluid">
					<input class="btn btn-info text-white" type="submit" value="Submit" name="assign" onclick="clckNmeFour()"></input>
				</div>
				</div>
				</form>
					<div class="mt-3 d-flex justify-content-center"><script>document.write(getCookie("chk4SJ"));</script>&nbsp Family</div>
				  	<div class="form-group row m-1">
					<div id="ipost1"></div>
					<div>MEMBERS:</div>
					
					
				</div>
				
				  	<div class="form-group row mb-3 m-1">					
					<table class="text-white" style='align:center;'>						
					
					<!--function for each select-->
					<script>

				function clckNmeFour() { //function for memberlist shelter
					setCookie("check4SJ", "red");
					document.getElementById("color4").style.backgroundColor = getCookie("check4SJ");					
					var x4 = document.getElementById("mySelect4").value; // get lastname	
					setCookie("lname4SJ", x4, "/");//insert lastname to cookie			
					var y4 = document.getElementById("mySelect4");
					z4 = y4.options[y4.selectedIndex].text;
					setCookie("chk4SJ", z4);	//family name
					var filt4 = document.getElementById("mySelect4").selectedIndex;
					setCookie("selfilt4SJ", filt4);
				}
				
	document.write("<tr><td>&nbsp</td><td>Firstname</td><td>Lastname</td><td>Age</td><td>Gender</td></tr>");				
<?php				

			  			 
			$uid4 = $_COOKIE["lname4SJ"];

				$mem41 = mysqli_query($con, "SELECT * FROM info WHERE id = '$uid4'");					
					$arr41 = array();
						while($fam41 = mysqli_fetch_array($mem41,MYSQLI_ASSOC)){
						$arr41[] = $fam41;	
						
								
				foreach($arr41 as $fam41 => $famlst41) { 	?>  						
			var htmlString41="<?php echo $famlst41['firstname'].'</td><td>'.$famlst41['lastname'].'</td><td>'.$famlst41['age'].'</td><td>'.$famlst41['gender'];?>";
			document.write("<tr><td><input type='checkbox' id='myCheck41' name='myCheck41' onclick='chFour()' value='"+ htmlString41 +"'></td><td> " + htmlString41 + "</td></tr>");
								<?php }
								} ?>

<?php	$mem42 = mysqli_query($con, "SELECT * FROM memberlist WHERE addid = '$uid4'");					
					$arr42 = array();
						while($fam42 = mysqli_fetch_array($mem42,MYSQLI_ASSOC)){
						$arr42[] = $fam42;
							}	?>							
					
					var indexx4 = 0;
					<?php	foreach($arr42 as $fam42 => $famlst42) { 	?>  
								indexx4++;
			var htmlString42="<?php echo $famlst42['fname'].'</td><td>'.$famlst42['lname'].'</td><td>'.$famlst42['ages'].'</td><td>'.$famlst42['gnder'].'<br>'; ?>";
			document.write("<tr><td><input type='checkbox' id='myCheck42' name='myCheck42' onclick='chFour()' value='"+ htmlString42 +"'></td><td> " + htmlString42 + "</td></tr>");
									  <?php } ?>
							indexx4++;

 										
function chFour() { // checkbox change color and count
  var markedCheckbox4 = document.getElementsByName('myCheck42');
  var count4 = 0;

  if (document.querySelector('#myCheck41').checked){	
		count4++;
			var chkval41 = htmlString41;					
	}		
  for (var chckbox42 of markedCheckbox4) {	 
	if (chckbox42.checked){		
		count4++;
			var chkbxes42 = document.querySelectorAll('input[name="myCheck42"]:checked');
            var chkval42 = [];
            chkbxes42.forEach((checkbox) => {
                chkval42.push(checkbox.value);
            });			
	}
  }	
	if (count4 ==0){ 
		 document.getElementById("color4").style.backgroundColor = "red";
		 setCookie("check4SJ", "red");
		}		
		else if (count4 <indexx4){ 
			document.getElementById("color4").style.backgroundColor = "#dba400";
			setCookie("check4SJ", "#dba400");
		}
		else if (count4 ==indexx4){ 
			document.getElementById("color4").style.backgroundColor = "green";
			setCookie("check4SJ", "green");
		}
		else{ 
			document.getElementById("color4").style.backgroundColor = "#dba400";
			setCookie("check4SJ", "#dba400");
		}

	document.getElementById("examp41").innerHTML =  count4;//number clicked
	document.getElementById("examp42").innerHTML =  chkval41;
	document.getElementById("examp43").innerHTML =  chkval42;
	document.getElementById("examp44").innerHTML = indexx4 +"indeses"; //total checkbox count
			setCookie("pplCount4SJ", count4); 
setCookie("headfam4SJ", document.getElementById("examp42").innerHTML); 
setCookie("memfam4SJ", document.getElementById("examp43").innerHTML); 			
		 
 }
		var ckie4 = getCookie("check4SJ");
		document.getElementById("color4").style.backgroundColor = ckie4;
</script>	
</table>
				<div id="examp41" class="row mx-5 mt-3" hidden></div>
				 <div class="row mx-5" hidden>Arrived:</div>
				 <div id="examp42" class="row mx-5" hidden></div>
				 <div id="examp43" class="row mx-5" hidden></div>
				<div id="examp44" class="row mx-5" hidden>
				</div>
				</div>
				<form action="evaccntr4.php">
				<div class="row mx-5">
				<input class="btn btn-info text-white" type="submit" value="Submit" name="assign" onclick='chFour()'></input>
				</div>
				</form>
			</div>
		</div><!--end row 2 col1-->
		


 <div class="col-4 my-1"> <!-- row 2 col 2-->
			<div class="btn-lg shadow-lg text-white" style="height:400px; font-weight:bolder; background-color:red;" id="color5">			 
			  
				Shelter #5	
					<form action="Tabing Ilog Elementary School.php">					
					<div class="form-group row ms-1 my-3">
							Family
									 <div class="col-sm-6 mx-sm-1">

						
		<select class="form-select form-select-md" aria-label=".form-select-md example" id="mySelect5" name="sele">
						<option value=" " disabled selected hidden>Select</option>
							<?php foreach($row as $key => $value) { ?>
									<option  value="<?php echo $value["id"] ?>" >
										<?php echo $value["lastname"] ?>
									</option>		
										<?php } ?>	        
				</select>
					</div>
					<div class="col-sm-1 mx-sm-1 container-fluid">
					<input class="btn btn-info text-white" type="submit" value="Submit" name="assign" onclick="clckNmeFive()"></input>
				</div>
				</div>
				</form>
					<div class="mt-3 d-flex justify-content-center"><script>document.write(getCookie("chk5"));</script>&nbsp Family</div>
				  	<div class="form-group row m-1">
					<div>MEMBERS:</div>
				</div>
					
				  	<div class="form-group row mb-3 m-1">					
					<table class="text-white" style='align:center;'>	
										<!--function for each select-->
					<script>

				function clckNmeFive() { //function for memberlist shelter
					setCookie("check5SJ", "red");
					document.getElementById("color5").style.backgroundColor = getCookie("check5SJ");				
					var x5= document.getElementById("mySelect5SJ").value; // get lastname					
					setCookie("lname5SJ", x5, "/");//insert lastname to cookie
					var y5 = document.getElementById("mySelect5");
					z5 = y5.options[y5.selectedIndex].text;
					setCookie("chk5SJ", z5);	//family name
					var filt5 = document.getElementById("mySelect5").selectedIndex;
					setCookie("selfilt5SJ", filt5);					
				}
				
			document.write("<tr><td>&nbsp</td><td>Firstname</td><td>Lastname</td><td>Age</td><td>Gender</td></tr>");
	<?php				
			  			 
			$uid5 = $_COOKIE["lname5SJ"];

		$mem51 = mysqli_query($con, "SELECT * FROM info WHERE id = '$uid5'");					
					$arr51 = array();
						while($fam51 = mysqli_fetch_array($mem51,MYSQLI_ASSOC)){
						$arr51[] = $fam51;	
						
								
				foreach($arr51 as $fam51 => $famlst51) { 	?>  						
			var htmlString51="<?php echo $famlst51['firstname'].'</td><td>'.$famlst51['lastname'].'</td><td>'.$famlst51['age'].'</td><td>'.$famlst51['gender'];?>";
			document.write("<tr><td><input type='checkbox' id='myCheck51' name='myCheck51' onclick='chFive()' value='"+ htmlString51 +"'></td><td> " + htmlString51 + "</td></tr>");
								<?php }
								} ?>

<?php	$mem52 = mysqli_query($con, "SELECT * FROM memberlist WHERE addid = '$uid5'");					
					$arr52 = array();
						while($fam52 = mysqli_fetch_array($mem52,MYSQLI_ASSOC)){
						$arr52[] = $fam52;
							}	?>							
					
					var indexx5 = 0;
					<?php	foreach($arr52 as $fam52 => $famlst52) { 	?>  
								indexx5++;
			var htmlString52="<?php echo $famlst52['fname'].'</td><td>'.$famlst52['lname'].'</td><td>'.$famlst52['ages'].'</td><td>'.$famlst52['gnder'].'<br>'; ?>";
			document.write("<tr><td><input type='checkbox' id='myCheck52' name='myCheck52' onclick='chFive()' value='"+ htmlString52 +"'></td><td> " + htmlString52 + "</td></tr>");
									  <?php } ?>
							indexx5++;

function chFive() { // checkbox change color and count
  var markedCheckbox5 = document.getElementsByName('myCheck52');
  var count5 = 0;

  if (document.querySelector('#myCheck51').checked){	
		count5++;
			var chkval51 = htmlString51;					
	}		
  for (var chckbox52 of markedCheckbox5) {	 
	if (chckbox52.checked){		
		count5++;
			var chkbxes52 = document.querySelectorAll('input[name="myCheck52"]:checked');
            var chkval52 = [];
            chkbxes52.forEach((checkbox) => {
                chkval52.push(checkbox.value);
            });			
	}
  }	
	if (count5 ==0){ 
		 document.getElementById("color5").style.backgroundColor = "red";
		 setCookie("check5SJ", "red");
		}		
		else if (count5 <indexx5){ 
			document.getElementById("color5").style.backgroundColor = "#dba400";
			setCookie("check5SJ", "#dba400");
		}
		else if (count5 ==indexx5){ 
			document.getElementById("color5").style.backgroundColor = "green";
			setCookie("check5SJ", "green");
		}
		else{ 
			document.getElementById("color5").style.backgroundColor = "#dba400";
			setCookie("check5SJ", "#dba400");
		}

	document.getElementById("examp51").innerHTML =  count5;//number clicked
	document.getElementById("examp52").innerHTML =  chkval51;
	document.getElementById("examp53").innerHTML =  chkval52;
	document.getElementById("examp54").innerHTML = indexx5 +"indeses"; //total checkbox count
			setCookie("pplCount5SJ", count5); 	
		 setCookie("headfam5SJ", document.getElementById("examp52").innerHTML); 
setCookie("memfam5SJ", document.getElementById("examp53").innerHTML); 
 }
		var ckie5 = getCookie("check5SJ");
		document.getElementById("color5").style.backgroundColor = ckie5;							
					</script>
					</table>
						<div id="examp51" class="row mx-5 mt-3" hidden></div>
				 <div class="row mx-5" hidden>Arrived:</div>
				 <div id="examp52" class="row mx-5" hidden></div>
				 <div id="examp53" class="row mx-5" hidden></div>
				<div id="examp54" class="row mx-5" hidden>
				</div>
				</div>
					<form action="evaccntr5.php">
				<div class="row mx-5">
				<input class="btn btn-info text-white" type="submit" value="Submit" name="assign" onclick='chFive()'></input>
				</div>
				</form>	
			</div>
		</div><!--end row 2 col2-->

 <div class="col-4 my-1"> <!-- row 2 col 3-->
			<div class="btn-lg shadow-lg text-white" style="height:400px; font-weight:bolder; background-color:red;" id="color6">			 
			  
				Shelter #6	
					<form action="Tabing Ilog Elementary School.php">					
					<div class="form-group row ms-1 my-3">
							Family
									 <div class="col-sm-6 mx-sm-1">
									 
									 <?php
									 $filr = intval($_COOKIE['selfilt']); $filt = $filr - 1; unset($row[$filt]);									
					$filr2 = intval($_COOKIE['selfilt2SJ']); $filt2 = $filr2 - 1; unset($row[$filt2]);
					$filr3 = intval($_COOKIE['selfilt3SJ']);	$filt3 = $filr3 - 1; unset($row[$filt3]);									
					$filr4 = intval($_COOKIE['selfilt4SJ']);	$filt4 = $filr4 - 1; unset($row[$filt4]);									
					$filr5 = intval($_COOKIE['selfilt5SJ']); $filt5 = $filr5 - 1; unset($row[$filt5]);									
					$filr6 = intval($_COOKIE['selfilt6SJ']);	$filt6 = $filr6 - 1; unset($row[$filt6]);
					$filr7 = intval($_COOKIE['selfilt7SJ']); $filt7 = $filr7 - 1; unset($row[$filt7]);	
					$filr8 = intval($_COOKIE['selfilt8SJ']);	$filt8 = $filr8 - 1; unset($row[$filt8]);
					$filr9 = intval($_COOKIE['selfilt9SJ']);	$filt9 = $filr9 - 1; unset($row[$filt9]);
									?>

						
		<select class="form-select form-select-md" aria-label=".form-select-md example" id="mySelect6" name="sele">
						<option value=" " disabled selected hidden>Select</option>
							<?php foreach($row as $key => $value) { ?>
									<option  value="<?php echo $value["id"] ?>" >
										<?php echo $value["lastname"] ?>
									</option>		
										<?php } ?>	        
				</select>
					</div>
					<div class="col-sm-1 mx-sm-1 container-fluid">
					<input class="btn btn-info text-white" type="submit" value="Submit" name="assign" onclick="clckNmeSix()"></input>
				</div>
				</div>
				</form>
					<div class="mt-3 d-flex justify-content-center"><script>document.write(getCookie("chk6"));</script>&nbsp Family</div>
				  	<div class="form-group row m-1">
					<div>MEMBERS:</div>
				</div>
					
				  	<div class="form-group row mb-3 m-1">					
					<table class="text-white" style='align:center;'>	
										<!--function for each select-->
	<script>

				function clckNmeSix() { //function for memberlist shelter
						setCookie("check6SJ", "red");
					document.getElementById("color6").style.backgroundColor = getCookie("check6SJ");
					var x6= document.getElementById("mySelect6").value; // get lastname					
					setCookie("lname6SJ", x6, "/");//insert lastname to cookie
					var y6 = document.getElementById("mySelect6");
					z6 = y6.options[y6.selectedIndex].text;
					setCookie("chk6SJ", z6);	//family name
					var filt6 = document.getElementById("mySelect6").selectedIndex;
					setCookie("selfilt6SJ", filt6);
					
				}
		document.write("<tr><td>&nbsp</td><td>Firstname</td><td>Lastname</td><td>Age</td><td>Gender</td></tr>");
	<?php				
			  			 
			$uid6 = $_COOKIE["lname6SJ"];

		$mem61 = mysqli_query($con, "SELECT * FROM info WHERE id = '$uid6'");					
					$arr61 = array();
						while($fam61 = mysqli_fetch_array($mem61,MYSQLI_ASSOC)){
						$arr61[] = $fam61;	
						
								
				foreach($arr61 as $fam61 => $famlst61) { 	?>  						
			var htmlString61="<?php echo $famlst61['firstname'].'</td><td>'.$famlst61['lastname'].'</td><td>'.$famlst61['age'].'</td><td>'.$famlst61['gender'];?>";
			document.write("<tr><td><input type='checkbox' id='myCheck61' name='myCheck61' onclick='chSix()' value='"+ htmlString61 +"'></td><td> " + htmlString61 + "</td></tr>");
								<?php }
								} ?>

		<?php	$mem62 = mysqli_query($con, "SELECT * FROM memberlist WHERE addid = '$uid6'");					
					$arr62 = array();
						while($fam62 = mysqli_fetch_array($mem62,MYSQLI_ASSOC)){
						$arr62[] = $fam62;
							}	?>							
					
					var indexx6 = 0;
					<?php	foreach($arr62 as $fam62 => $famlst62) { 	?>  
								indexx6++;
			var htmlString62="<?php echo $famlst62['fname'].'</td><td>'.$famlst62['lname'].'</td><td>'.$famlst62['ages'].'</td><td>'.$famlst62['gnder'].'<br>'; ?>";
			document.write("<tr><td><input type='checkbox' id='myCheck62' name='myCheck62' onclick='chSix()' value='"+ htmlString62 +"'></td><td> " + htmlString62 + "</td></tr>");
									  <?php } ?>
							indexx6++;

function chSix() { // checkbox change color and count
  var markedCheckbox6 = document.getElementsByName('myCheck62');
  var count6 = 0;

  if (document.querySelector('#myCheck61').checked){	
		count6++;
			var chkval61 = htmlString61;					
	}		
  for (var chckbox62 of markedCheckbox6) {	 
	if (chckbox62.checked){		
		count6++;
			var chkbxes62 = document.querySelectorAll('input[name="myCheck62"]:checked');
            var chkval62 = [];
            chkbxes62.forEach((checkbox) => {
                chkval62.push(checkbox.value);
            });			
	}
  }	
	if (count6 ==0){ 
		 document.getElementById("color6").style.backgroundColor = "red";
		 setCookie("check6SJ", "red");
		}		
		else if (count6 <indexx6){ 
			document.getElementById("color6").style.backgroundColor = "#dba400";
			setCookie("check6SJ", "#dba400");
		}
		else if (count6 ==indexx6){ 
			document.getElementById("color6").style.backgroundColor = "green";
			setCookie("check6SJ", "green");
		}
		else{ 
			document.getElementById("color6").style.backgroundColor = "#dba400";
			setCookie("check6SJ", "#dba400");
		}

	document.getElementById("examp61").innerHTML =  count6;//number clicked
	document.getElementById("examp62").innerHTML =  chkval61;
	document.getElementById("examp63").innerHTML =  chkval62;
	document.getElementById("examp64").innerHTML = indexx6 +"indeses"; //total checkbox count
			setCookie("pplCount6SJ", count6); 	
		 setCookie("headfam6SJ", document.getElementById("examp62").innerHTML); 
setCookie("memfam6SJ", document.getElementById("examp63").innerHTML); 
 }
		var ckie6 = getCookie("check6SJ");
		document.getElementById("color6").style.backgroundColor = ckie6;							
												
		</script>
									</table>
						<div id="examp61" class="row mx-5 mt-3" hidden></div>
				 <div class="row mx-5" hidden>Arrived:</div>
				 <div id="examp62" class="row mx-5" hidden></div>
				 <div id="examp63" class="row mx-5" hidden></div>
				<div id="examp64" class="row mx-5" hidden>
				</div>
				</div>
				<form action="evaccntr6.php">
				<div class="row mx-5">
				<input class="btn btn-info text-white" type="submit" value="Submit" name="assign" onclick='chSix()'></input>
				</div>
				</form>		
			</div>
		</div><!--end row 2 col3-->	
		
	</div>	<!--end of 2nd row-->
	
	
	
			<!--3rd row-->
	<div class="row ms-1 me-1 container-fluid">

 <div class="col-4 my-1"> <!-- row 3 col 1-->
			<div class="btn-lg shadow-lg text-white" style="height:400px; font-weight:bolder; background-color:red;" id="color7">			 			  
				Shelter #7	
					<form action="Tabing Ilog Elementary School.php">					
					<div class="form-group row ms-1 my-3">
							Family
									 <div class="col-sm-6 mx-sm-1">
								
					<?php								
					$filr = intval($_COOKIE['selfiltSJ']); $filt = $filr - 1; unset($row[$filt]);									
					$filr2 = intval($_COOKIE['selfilt2SJ']); $filt2 = $filr2 - 1; unset($row[$filt2]);
					$filr3 = intval($_COOKIE['selfilt3SJ']);	$filt3 = $filr3 - 1; unset($row[$filt3]);									
					$filr4 = intval($_COOKIE['selfilt4SJ']);	$filt4 = $filr4 - 1; unset($row[$filt4]);									
					$filr5 = intval($_COOKIE['selfilt5SJ']); $filt5 = $filr5 - 1; unset($row[$filt5]);									
					$filr6 = intval($_COOKIE['selfilt6SJ']);	$filt6 = $filr6 - 1; unset($row[$filt6]);
					$filr7 = intval($_COOKIE['selfilt7SJ']); $filt7 = $filr7 - 1; unset($row[$filt7]);	
					$filr8 = intval($_COOKIE['selfilt8SJ']);	$filt8 = $filr8 - 1; unset($row[$filt8]);
					$filr9 = intval($_COOKIE['selfilt9SJ']);	$filt9 = $filr9 - 1; unset($row[$filt9]);
									?>
						
		<select class="form-select form-select-md" aria-label=".form-select-md example" id="mySelect7" name="sele">
						<option value=" " disabled selected hidden>Select</option>
							<?php foreach($row as $key => $value) { ?>
									<option  value="<?php echo $value["id"] ?>" >
										<?php echo $value["lastname"] ?>
									</option>		
										<?php } ?>	        
				</select>
					</div>
					<div class="col-sm-1 mx-sm-1 container-fluid">
					<input class="btn btn-info text-white" type="submit" value="Submit" name="assign" onclick="clckNmeSeven()"></input>
				</div>
				</div>
				</form>
					<div class="mt-3 d-flex justify-content-center"><script>document.write(getCookie("chk7"));</script>&nbsp Family</div>
				  	<div class="form-group row m-1">
					<div>MEMBERS:</div>
				</div>
					
				  	<div class="form-group row mb-3 m-1">					
					<table class="text-white" style='align:center;'>	
						<!--function for each select-->
							<script>

				function clckNmeSeven() { //function for memberlist shelter
					setCookie("check7SJ", "red");
					document.getElementById("color7").style.backgroundColor = getCookie("check7SJ");
					var x7= document.getElementById("mySelect7").value; // get lastname					
					setCookie("lname7SJ", x7, "/");//insert lastname to cookie
					var y7 = document.getElementById("mySelect7");
					z7 = y7.options[y7.selectedIndex].text;
					setCookie("chk7SJ", z7);	//family name
					var filt7 = document.getElementById("mySelect7").selectedIndex;
					setCookie("selfilt7SJ", filt7);
				}
		document.write("<tr><td>&nbsp</td><td>Firstname</td><td>Lastname</td><td>Age</td><td>Gender</td></tr>");
	<?php				
			  			 
			$uid7 = $_COOKIE["lname7SJ"];

		$mem71 = mysqli_query($con, "SELECT * FROM info WHERE id = '$uid7'");					
					$arr71 = array();
						while($fam71 = mysqli_fetch_array($mem71,MYSQLI_ASSOC)){
						$arr71[] = $fam71;	
						
								
				foreach($arr71 as $fam71 => $famlst71) { 	?>  						
			var htmlString71="<?php echo $famlst71['firstname'].'</td><td>'.$famlst71['lastname'].'</td><td>'.$famlst71['age'].'</td><td>'.$famlst71['gender'];?>";
			document.write("<tr><td><input type='checkbox' id='myCheck71' name='myCheck71' onclick='chSeven()' value='"+ htmlString71 +"'></td><td> " + htmlString71 + "</td></tr>");
								<?php }
								} ?>

		<?php	$mem72 = mysqli_query($con, "SELECT * FROM memberlist WHERE addid = '$uid7'");					
					$arr72 = array();
						while($fam72 = mysqli_fetch_array($mem72,MYSQLI_ASSOC)){
						$arr72[] = $fam72;
							}	?>							
					
					var indexx7 = 0;
					<?php	foreach($arr72 as $fam72 => $famlst72) { 	?>  
								indexx7++;
			var htmlString72="<?php echo $famlst72['fname'].'</td><td>'.$famlst72['lname'].'</td><td>'.$famlst72['ages'].'</td><td>'.$famlst72['gnder'].'<br>'; ?>";
			document.write("<tr><td><input type='checkbox' id='myCheck72' name='myCheck72' onclick='chSeven()' value='"+ htmlString72 +"'></td><td> " + htmlString72 + "</td></tr>");
									  <?php } ?>
							indexx7++;

function chSeven() { // checkbox change color and count
  var markedCheckbox7 = document.getElementsByName('myCheck72');
  var count7 = 0;

  if (document.querySelector('#myCheck71').checked){	
		count7++;
			var chkval71 = htmlString71;					
	}		
  for (var chckbox72 of markedCheckbox7) {	 
	if (chckbox72.checked){		
		count7++;
			var chkbxes72 = document.querySelectorAll('input[name="myCheck72"]:checked');
            var chkval72 = [];
            chkbxes72.forEach((checkbox) => {
                chkval72.push(checkbox.value);
            });			
	}
  }	
	if (count7 ==0){ 
		 document.getElementById("color7").style.backgroundColor = "red";
		 setCookie("check7SJ", "red");
		}		
		else if (count7 <indexx7){ 
			document.getElementById("color7").style.backgroundColor = "#dba400";
			setCookie("check7SJ", "#dba400");
		}
		else if (count7 ==indexx7){ 
			document.getElementById("color7").style.backgroundColor = "green";
			setCookie("check7SJ", "green");
		}
		else{ 
			document.getElementById("color7").style.backgroundColor = "#dba400";
			setCookie("check7SJ", "#dba400");
		}

	document.getElementById("examp71").innerHTML =  count7;//number clicked
	document.getElementById("examp72").innerHTML =  chkval71;
	document.getElementById("examp73").innerHTML =  chkval72;
	document.getElementById("examp74").innerHTML = indexx7 +"indeses"; //total checkbox count
			setCookie("pplCount7SJ", count7); 	
		 setCookie("headfam7SJ", document.getElementById("examp72").innerHTML); 
setCookie("memfam7SJ", document.getElementById("examp73").innerHTML); 
 }
		var ckie7 = getCookie("check7SJ");
		document.getElementById("color7").style.backgroundColor = ckie7;							

							</script>
								</table>
						<div id="examp71" class="row mx-5 mt-3" hidden></div>
				 <div class="row mx-5" hidden>Arrived:</div>
				 <div id="examp72" class="row mx-5" hidden></div>
				 <div id="examp73" class="row mx-5" hidden></div>
				<div id="examp74" class="row mx-5" hidden>
				</div>
				</div>
				<form action="evaccntr7.php">
				<div class="row mx-5">
				<input class="btn btn-info text-white" type="submit" value="Submit" name="assign" onclick='chSeven()'></input>
				</div>
				</form>											
			</div>
		</div><!--end row 3 col 1-->
					
					
<div class="col-4 my-1"> <!-- row 3 col 2-->
			<div class="btn-lg shadow-lg text-white" style="height:400px; font-weight:bolder; background-color:red;" id="color8">			 			  
				Shelter #8
					<form action="Tabing Ilog Elementary School.php">					
					<div class="form-group row ms-1 my-3">
							Family
									 <div class="col-sm-6 mx-sm-1">
									 
<?php
					$filr = intval($_COOKIE['selfiltSJ']); $filt = $filr - 1; unset($row[$filt]);									
					$filr2 = intval($_COOKIE['selfilt2SJ']); $filt2 = $filr2 - 1; unset($row[$filt2]);
					$filr3 = intval($_COOKIE['selfilt3SJ']);	$filt3 = $filr3 - 1; unset($row[$filt3]);									
					$filr4 = intval($_COOKIE['selfilt4SJ']);	$filt4 = $filr4 - 1; unset($row[$filt4]);									
					$filr5 = intval($_COOKIE['selfilt5SJ']); $filt5 = $filr5 - 1; unset($row[$filt5]);									
					$filr6 = intval($_COOKIE['selfilt6SJ']);	$filt6 = $filr6 - 1; unset($row[$filt6]);
					$filr7 = intval($_COOKIE['selfilt7SJ']); $filt7 = $filr7 - 1; unset($row[$filt7]);	
					$filr8 = intval($_COOKIE['selfilt8SJ']);	$filt8 = $filr8 - 1; unset($row[$filt8]);
					$filr9 = intval($_COOKIE['selfilt9SJ']);	$filt9 = $filr9 - 1; unset($row[$filt9]);
									?>
						
		<select class="form-select form-select-md" aria-label=".form-select-md example" id="mySelect8" name="sele">
						<option value=" " disabled selected hidden>Select</option>
							<?php foreach($row as $key => $value) { ?>
									<option  value="<?php echo $value["id"] ?>" >
										<?php echo $value["lastname"] ?>
									</option>		
										<?php } ?>	        
				</select>
					</div>
					<div class="col-sm-1 mx-sm-1 container-fluid">
					<input class="btn btn-info text-white" type="submit" value="Submit" name="assign" onclick="clckNmeEight()"></input>
				</div>
				</div>
				</form>
					<div class="mt-3 d-flex justify-content-center"><script>document.write(getCookie("chk8"));</script>&nbsp Family</div>
				  	<div class="form-group row m-1">
					<div>MEMBERS:</div>
				</div>
					
				  	<div class="form-group row mb-3 m-1">					
					<table class="text-white" style='align:center;'>	
						<!--function for each select-->
							<script>
				function clckNmeEight() { //function for memberlist shelter
					setCookie("check8SJ", "red");
					document.getElementById("color8").style.backgroundColor = getCookie("check8SJ");
					var x8= document.getElementById("mySelect8").value; // get lastname					
					setCookie("lname8SJ", x8, "/");//insert lastname to cookie
					var y8 = document.getElementById("mySelect8");
					z8 = y8.options[y8.selectedIndex].text;
					setCookie("chk8SJ", z8);	//family name
					var filt8 = document.getElementById("mySelect8").selectedIndex;
					setCookie("selfilt8SJ", filt8);
				}
		document.write("<tr><td>&nbsp</td><td>Firstname</td><td>Lastname</td><td>Age</td><td>Gender</td></tr>");
	<?php							  			 
			$uid8 = $_COOKIE["lname8SJ"];

		$mem81 = mysqli_query($con, "SELECT * FROM info WHERE id = '$uid8'");					
					$arr81 = array();
						while($fam81 = mysqli_fetch_array($mem81,MYSQLI_ASSOC)){
						$arr81[] = $fam81;							
								
				foreach($arr81 as $fam81 => $famlst81) { 	?>  						
			var htmlString81="<?php echo $famlst81['firstname'].'</td><td>'.$famlst81['lastname'].'</td><td>'.$famlst81['age'].'</td><td>'.$famlst81['gender'];?>";
			document.write("<tr><td><input type='checkbox' id='myCheck81' name='myCheck81' onclick='chEight()' value='"+ htmlString81 +"'></td><td> " + htmlString81 + "</td></tr>");
								<?php }
								} ?>

		<?php	$mem82 = mysqli_query($con, "SELECT * FROM memberlist WHERE addid = '$uid8'");					
					$arr82 = array();
						while($fam82 = mysqli_fetch_array($mem82,MYSQLI_ASSOC)){
						$arr82[] = $fam82;
							}	?>							
					
					var indexx8 = 0;
					<?php	foreach($arr82 as $fam82 => $famlst82) { 	?>  
								indexx8++;
			var htmlString82="<?php echo $famlst82['fname'].'</td><td>'.$famlst82['lname'].'</td><td>'.$famlst82['ages'].'</td><td>'.$famlst82['gnder'].'<br>'; ?>";
			document.write("<tr><td><input type='checkbox' id='myCheck82' name='myCheck82' onclick='chEight()' value='"+ htmlString82 +"'></td><td> " + htmlString82 + "</td></tr>");
									  <?php } ?>
							indexx8++;

function chEight() { // checkbox change color and count
  var markedCheckbox8 = document.getElementsByName('myCheck82');
  var count8 = 0;

  if (document.querySelector('#myCheck81').checked){	
		count8++;
			var chkval81 = htmlString81;					
	}		
  for (var chckbox82 of markedCheckbox8) {	 
	if (chckbox82.checked){		
		count8++;
			var chkbxes82 = document.querySelectorAll('input[name="myCheck82"]:checked');
            var chkval82 = [];
            chkbxes82.forEach((checkbox) => {
                chkval82.push(checkbox.value);
            });			
	}
  }	
	if (count8 ==0){ 
		 document.getElementById("color8").style.backgroundColor = "red";
		 setCookie("check8SJ", "red");
		}		
		else if (count8 <indexx8){ 
			document.getElementById("color8").style.backgroundColor = "#dba400";
			setCookie("check8SJ", "#dba400");
		}
		else if (count8 ==indexx8){ 
			document.getElementById("color8").style.backgroundColor = "green";
			setCookie("check8SJ", "green");
		}
		else{ 
			document.getElementById("color8").style.backgroundColor = "#dba400";
			setCookie("check8SJ", "#dba400");
		}

	document.getElementById("examp81").innerHTML =  count8;//number clicked
	document.getElementById("examp82").innerHTML =  chkval81;
	document.getElementById("examp83").innerHTML =  chkval82;
	document.getElementById("examp84").innerHTML = indexx8 +"indeses"; //total checkbox count
			setCookie("pplCount8SJ", count8); 	
		 setCookie("headfam8SJ", document.getElementById("examp82").innerHTML); 
setCookie("memfam8SJ", document.getElementById("examp83").innerHTML); 
 }
		var ckie8 = getCookie("check8SJ");
		document.getElementById("color8").style.backgroundColor = ckie8;							

							</script>
								</table>
						<div id="examp81" class="row mx-5 mt-3" hidden></div>
				 <div class="row mx-5" hidden>Arrived:</div>
				 <div id="examp82" class="row mx-5" hidden></div>
				 <div id="examp83" class="row mx-5" hidden></div>
				<div id="examp84" class="row mx-5" hidden>
				</div>
				</div>
				<form action="evaccntr8.php">
				<div class="row mx-5">
				<input class="btn btn-info text-white" type="submit" value="Submit" name="assign" onclick='chEight()'></input>
				</div>
				</form>
			</div>
		</div><!--end row 3 col 2-->
		
 <div class="col-4 my-1"> <!-- row 3 col 3-->
			<div class="btn-lg shadow-lg text-white" style="height:400px; font-weight:bolder; background-color:red;" id="color9">			 			  
				Shelter #9	
					<form action="Tabing Ilog Elementary School.php">					
					<div class="form-group row ms-1 my-3">
							Family
									 <div class="col-sm-6 mx-sm-1">
<?php
					$filr = intval($_COOKIE['selfiltSJ']); $filt = $filr - 1; unset($row[$filt]);									
					$filr2 = intval($_COOKIE['selfilt2SJ']); $filt2 = $filr2 - 1; unset($row[$filt2]);
					$filr3 = intval($_COOKIE['selfilt3SJ']);	$filt3 = $filr3 - 1; unset($row[$filt3]);									
					$filr4 = intval($_COOKIE['selfilt4SJ']);	$filt4 = $filr4 - 1; unset($row[$filt4]);									
					$filr5 = intval($_COOKIE['selfilt5SJ']); $filt5 = $filr5 - 1; unset($row[$filt5]);									
					$filr6 = intval($_COOKIE['selfilt6SJ']);	$filt6 = $filr6 - 1; unset($row[$filt6]);
					$filr7 = intval($_COOKIE['selfilt7SJ']); $filt7 = $filr7 - 1; unset($row[$filt7]);	
					$filr8 = intval($_COOKIE['selfilt8SJ']);	$filt8 = $filr8 - 1; unset($row[$filt8]);
					$filr9 = intval($_COOKIE['selfilt9SJ']);	$filt9 = $filr9 - 1; unset($row[$filt9]);
									?>
						
		<select class="form-select form-select-md" aria-label=".form-select-md example" id="mySelect9" name="sele">
						<option value=" " disabled selected hidden>Select</option>
							<?php foreach($row as $key => $value) { ?>
									<option  value="<?php echo $value["id"] ?>" >
										<?php echo $value["lastname"] ?>
									</option>		
										<?php } ?>	        
				</select>
					</div>
					<div class="col-sm-1 mx-sm-1 container-fluid">
					<input class="btn btn-info text-white" type="submit" value="Submit" name="assign" onclick="clckNmeNine()"></input>
				</div>
				</div>
			</form>	
					<div class="mt-3 d-flex justify-content-center"><script>document.write(getCookie("chk"));</script>&nbsp Family</div>
				  	<div class="form-group row m-1">
					<div>MEMBERS:</div>
				</div>
					
				  	<div class="form-group row mb-3 m-1">					
					<table class="text-white" style='align:center;'>	
						<!--function for each select-->
							<script>

				function clckNmeNine() { //function for memberlist shelter
					setCookie("check9SJ", "red");
					document.getElementById("color9").style.backgroundColor = getCookie("check9SJ");				
					var x9= document.getElementById("mySelect9").value; // get lastname					
					setCookie("lname9SJ", x9, "/");//insert lastname to cookie
					var y9 = document.getElementById("mySelect9");
					z9 = y9.options[y9.selectedIndex].text;
					setCookie("chk9SJ", z9);	//family name
					var filt9 = document.getElementById("mySelect9").selectedIndex;
					setCookie("selfilt9SJ", filt9);
				}
		document.write("<tr><td>&nbsp</td><td>Firstname</td><td>Lastname</td><td>Age</td><td>Gender</td></tr>");
	<?php							  			 
			$uid9 = $_COOKIE["lname9SJ"];

		$mem91 = mysqli_query($con, "SELECT * FROM info WHERE id = '$uid9'");					
					$arr91 = array();
						while($fam91 = mysqli_fetch_array($mem91,MYSQLI_ASSOC)){
						$arr91[] = $fam91;							
								
				foreach($arr91 as $fam91 => $famlst91) { 	?>  						
			var htmlString91="<?php echo $famlst91['firstname'].'</td><td>'.$famlst91['lastname'].'</td><td>'.$famlst91['age'].'</td><td>'.$famlst91['gender'];?>";
			document.write("<tr><td><input type='checkbox' id='myCheck91' name='myCheck91' onclick='chNine()' value='"+ htmlString91 +"'></td><td> " + htmlString91 + "</td></tr>");
								<?php }
								} ?>

		<?php	$mem92 = mysqli_query($con, "SELECT * FROM memberlist WHERE addid = '$uid9'");					
					$arr92 = array();
						while($fam92 = mysqli_fetch_array($mem92,MYSQLI_ASSOC)){
						$arr92[] = $fam92;
							}	?>							
					
					var indexx9 = 0;
					<?php	foreach($arr92 as $fam92 => $famlst92) { 	?>  
								indexx9++;
			var htmlString92="<?php echo $famlst92['fname'].'</td><td>'.$famlst92['lname'].'</td><td>'.$famlst92['ages'].'</td><td>'.$famlst92['gnder'].'<br>'; ?>";
			document.write("<tr><td><input type='checkbox' id='myCheck92' name='myCheck92' onclick='chNine()' value='"+ htmlString92 +"'></td><td> " + htmlString92 + "</td></tr>");
									  <?php } ?>
							indexx9++;
				
							
		function chNine() { // checkbox change color and count
  var markedCheckbox9 = document.getElementsByName('myCheck92');
  var count9 = 0;

  if (document.querySelector('#myCheck91').checked){	
		count9++;
			var chkval91 = htmlString91;					
	}		
  for (var chckbox92 of markedCheckbox9) {	 
	if (chckbox92.checked){		
		count9++;
			var chkbxes92 = document.querySelectorAll('input[name="myCheck92"]:checked');
            var chkval92 = [];
            chkbxes92.forEach((checkbox) => {
                chkval92.push(checkbox.value);
            });			
	}	
  }
	if (count9 ==0){ 
		 document.getElementById("color9").style.backgroundColor = "red";
		 setCookie("check9SJ", "red");
		}		
		else if (count9 <indexx9){ 
			document.getElementById("color9").style.backgroundColor = "#dba400";
			setCookie("check9SJ", "#dba400");
		}
		else if (count9 ==indexx9){ 
			document.getElementById("color9").style.backgroundColor = "green";
			setCookie("check9SJ", "green");
		}
		else{ 
			document.getElementById("color9").style.backgroundColor = "#dba400";
			setCookie("check9SJ", "#dba400");
		}

	document.getElementById("examp91").innerHTML =  count9;//number clicked
	document.getElementById("examp92").innerHTML =  chkval91;
	document.getElementById("examp93").innerHTML =  chkval92;
	document.getElementById("examp94").innerHTML = indexx9 +"indeses"; //total checkbox count
			setCookie("pplCount9SJ", count9); 	
		setCookie("headfam9SJ", document.getElementById("examp92").innerHTML); 
setCookie("memfam9SJ", document.getElementById("examp93").innerHTML); 
 }
		var ckie9 = getCookie("check9SJ");
		document.getElementById("color9").style.backgroundColor = ckie9;							
					
							</script>
								</table>
						<div id="examp91" class="row mx-5 mt-3" hidden></div>
				 <div class="row mx-5" hidden>Arrived:</div>
				 <div id="examp92" class="row mx-5" hidden></div>
				 <div id="examp93" class="row mx-5" hidden></div>
				<div id="examp94" class="row mx-5" hidden>
				</div>
				</div>
				<form action="evaccntr9.php">
				<div class="row mx-5">
				<input class="btn btn-info text-white" type="submit" value="Submit" name="assign" onclick='chNine()'></input>
				</div>
				</form>				
			</div>
		</div><!--end row 3 col 3-->
		
	</div>	<!--end of 3rd row-->

  </div>
</div>



  </div> <!--end of shelter design-->



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

   document.getElementById("pplCount").innerHTML = numberOfChildren + " " + "people";
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

		}	
  } else {
    header("location:ADMIN_signin.php");
    exit;
  }

  unset($_SESSION['prompt']);
  mysqli_close($con);

?>