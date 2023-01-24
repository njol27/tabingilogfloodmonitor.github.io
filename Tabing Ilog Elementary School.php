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
    <link href="css/starter-template.css" rel="stylesheet">

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
					<h6>TABING ILOG ELEMENTARY SCHOOL</h6>
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
					
					<?php						
				$cnt1 = mysqli_query($con, "SELECT SUM(count) AS value_sum FROM evaclist");
				
					while($val1 = mysqli_fetch_array($cnt1,MYSQLI_ASSOC)){ $valu1 = $val1['value_sum']; }	?>
							<script>							
								var tot1 = "<?php echo $valu1 ?>";
							
																
					var total = tot1;
					document.write(total + "&nbsp people"); //summation of evacuees

					</script>
				
			
					
					
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
			<form action = "<?php $_PHP_SELF ?>" method = "GET">
					<div class="form-group row ms-1 my-3">
							Family
									 <div class="col-sm-6 mx-sm-1">

						<?php						
				$result = mysqli_query($con, "SELECT * FROM evacuation WHERE evac='TabingIlog' AND arrive='' AND NOT(family='')");
									$row = array();
									while($key = mysqli_fetch_array($result,MYSQLI_ASSOC)){
									$row[] = $key;
									}					?>
																							
		<select class="form-select form-select-md" aria-label=".form-select-md example" id="mySelect1" name="sele">
						<option value=" " disabled selected hidden>Select</option>
							<?php foreach($row as $key => $value) { ?>
									<option  value="<?php echo $value["eid"] ?>" >
										<?php echo $value["family"] ?>
									</option>		
										<?php } ?>	 
																			
				</select>
					</div>
					 <div class="col-sm-1 mx-sm-1 container-fluid">
					<input class="btn btn-info text-white" type="submit" value="Select" name="assign" onclick="clckNme()"></input>
					</div>
			
				</div>
				</form>	
					<div class="mt-3 d-flex justify-content-center"><script>document.write(getCookie("chk"));</script>&nbsp Family</div>
				  	<div class="form-group row m-1">
					<div>MEMBERS:</div>										
					</div>						
				  	<div class="form-group row mb-3 mx-1">					
					<table class="text-white" style='align:center;'>						
					
					<!--function for each select-->
					<script>				
				function clckNme() { //function for memberlist shelter					
					document.getElementById("color").style.backgroundColor = getCookie("check1");
					setCookie("check1", "red");					
			var evid = document.getElementById("mySelect1").value; // get lastname	
			var setno = "set1";

			var httpr=new XMLHttpRequest();
			httpr.open("POST", "evaccntr.php", true);
			httpr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			httpr.onreadystatechange=function(){
				if(httpr.readyState==4 &&  httpr.status==200){
					
				}
			}
			httpr.send("eid="+evid+"&setno="+setno);
					var y = document.getElementById("mySelect1");
					z = y.options[y.selectedIndex].text;
					setCookie("chk", z);	//family name
			}																
			document.write("<tr><td>&nbsp</td><td>Firstname</td><td>Lastname</td><td>Age</td><td>Gender</td></tr>");
				
			<?php
				   	$mem = mysqli_query($con, "SELECT * FROM evacuation WHERE arrive = 'set1'");	//				
					$arr = array();
						while($fam = mysqli_fetch_array($mem,MYSQLI_ASSOC)){
						$arr[] = $fam;		}?>											

							var indexx = 0;	
	<?php			foreach($arr as $fam => $famlst) { 	?>  
							indexx++;							
			var String="<?php echo ' '.$famlst['firstname']. ' ' .$famlst['lastname']?>";
			var all="<?php echo $famlst['firstname'].'</td><td>'.$famlst['lastname'].'</td><td>'.$famlst['age'].'</td><td>'.$famlst['gender']?>";
			document.write("<tr><td><input type='checkbox' id='myCheck' name='myCheck' onclick='ch()' value='"+ String +"'></td><td> " + all + "</td></tr>");		
					 <?php  }  ?>				
											
 function ch() { // checkbox change color and count
  var markedCheckbox = document.getElementsByName('myCheck');
  var count = 0;	
 
 for (var chckbox of markedCheckbox) {	 
	if (chckbox.checked){		
		count++;
				var chkbxes = document.querySelectorAll('input[name="myCheck"]:checked');
            var chkval = [];
            chkbxes.forEach((checkbox) => {			
                chkval.push(checkbox.value);		
            });	
	}
	if(chckbox.checked == false){				
		var nchkbxes = document.querySelectorAll('input[name="myCheck"]:not(:checked)');
            var nchkval = [];
            nchkbxes.forEach((ncheckbox) => {
                nchkval.push(ncheckbox.value);
            });	
		}
  }
	if (count ==0){ 
		 document.getElementById("color").style.backgroundColor = "red";
		 setCookie("check1", "red");
		}		
		else if (count <indexx){ 
			document.getElementById("color").style.backgroundColor = "#dba400";
			setCookie("check1", "#dba400");
		}
		else if (count ==indexx){ 
			document.getElementById("color").style.backgroundColor = "green";		 
			setCookie("check1", "green");
		}
		else{ 
			document.getElementById("color").style.backgroundColor = "#dba400";
			setCookie("check1", "#dba400");
		}
	document.getElementById("examp").innerHTML =  count;//number clicked
	document.getElementById("examp2").innerHTML =  chkval;	
	document.getElementById("examp3").innerHTML =  nchkval;
	document.getElementById("examp4").innerHTML = indexx +"indeses"; //total checkbox count

	var ckie = getCookie("check1");
	document.getElementById("color").style.backgroundColor = ckie;	
}
 </script>
 <script>
  
 function submList(){
	 var cnt = document.getElementById("examp").innerHTML;
 var val = document.getElementById("examp2").innerHTML;
 	var nval = document.getElementById("examp3").innerHTML;
 var clor = document.getElementById("color").style.backgroundColor;
 	var shelt = "sh1";	 
	 
var setrq=new XMLHttpRequest();
			setrq.open("POST", "evaclist.php", true);
			setrq.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			setrq.onreadystatechange=function(){
				if(setrq.readyState==4 &&  setrq.status==200){					
				}
			}
		setrq.send("count="+cnt+"&chk="+val+"&nchk="+nval+"&shelt="+shelt+"&color="+clor);		
 }		
</script>	
					</table>							
				 <div id="examp" class="row mx-5 mt-3" ></div>
				 <div class="row mx-5" >Arrived:</div>
				 <div id="examp2" class="row mx-5" ></div>
				<div id="examp3" class="row mx-5" ></div>	
				<div id="examp4" class="row mx-5" ></div>
				</div>
				<form action="<?php $_PHP_SELF ?>" method="GET">		
				<div class="row mx-5">
				<input class="btn btn-info text-white" type="submit" value="Submit" onclick="submList()"></input>
				</div>
				</form>
	
		</div>
		</div>
		
<div class="col-4 my-1"> 
			<div class="btn-lg shadow-lg text-white" style="height:400px; font-weight:bolder; background-color:red;" id="color2">			 
			  
					Shelter #2	
			<form action = "<?php $_PHP_SELF ?>" method = "GET">
					<div class="form-group row ms-1 my-3">
							Family
									 <div class="col-sm-6 mx-sm-1">

						<?php						
				$result2 = mysqli_query($con, "SELECT * FROM evacuation WHERE evac='TabingIlog' AND arrive='' AND NOT(family='')");
									$row2 = array();
									while($key2 = mysqli_fetch_array($result2,MYSQLI_ASSOC)){
									$row2[] = $key2;
									}					?>
									
														
		<select class="form-select form-select-md" aria-label=".form-select-md example" id="mySelect2" name="sele">
						<option value=" " disabled selected hidden>Select</option>
							<?php foreach($row2 as $key2 => $value2) { ?>
									<option  value="<?php echo $value2["eid"] ?>" >
										<?php echo $value2["family"] ?>
									</option>		
										<?php } ?>	 
																			
				</select>
					</div>
					 <div class="col-sm-1 mx-sm-1 container-fluid">
					<input class="btn btn-info text-white" type="submit" value="Select" name="assign" onclick="clckNmeTwo()"></input>
					</div>
			
				</div>
				</form>	
					<div class="mt-3 d-flex justify-content-center"><script>document.write(getCookie("chk2"));</script>&nbsp Family</div>
				  	<div class="form-group row m-1">
					<div>MEMBERS:</div>					
					
				</div>
							
				  	<div class="form-group row mb-3 mx-1">					
					<table class="text-white" style='align:center;'>						
					
					<!--function for each select-->
					<script>				
				function clckNmeTwo() { //function for memberlist shelter
					
					document.getElementById("color2").style.backgroundColor = getCookie("check2");
					setCookie("check2", "red");
					
			var evid2 = document.getElementById("mySelect2").value; // get lastname	
			var setno2 = "set2";

			var httpr2=new XMLHttpRequest();
			httpr2.open("POST", "evaccntr.php", true);
			httpr2.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			httpr2.onreadystatechange=function(){
				if(httpr2.readyState==4 &&  httpr2.status==200){
					
				}
			}
			httpr2.send("eid="+evid2+"&setno="+setno2);
					var y2 = document.getElementById("mySelect2");
					z2 = y2.options[y2.selectedIndex].text;
					setCookie("chk2", z2);	//family name
						}
																
				document.write("<tr><td>&nbsp</td><td>Firstname</td><td>Lastname</td><td>Age</td><td>Gender</td></tr>");
				

				
			<?php
				   	$mem2 = mysqli_query($con, "SELECT * FROM evacuation WHERE arrive = 'set2'");	//				
					$arr2 = array();
						while($fam2 = mysqli_fetch_array($mem2,MYSQLI_ASSOC)){
						$arr2[] = $fam2;		}?>											

							var indexx2 = 0;	
	<?php			foreach($arr2 as $fam2 => $famlst2) { 	?>  
							indexx2++;
							
			var String2="<?php echo ' '.$famlst2['firstname']. ' ' .$famlst2['lastname']?>";
			var all2="<?php echo $famlst2['firstname'].'</td><td>'.$famlst2['lastname'].'</td><td>'.$famlst2['age'].'</td><td>'.$famlst2['gender']?>";
			document.write("<tr><td><input type='checkbox' id='myCheck2' name='myCheck2' onclick='chTwo()' value='"+ String2 +"'></td><td> " + all2 + "</td></tr>");
		
					 <?php  }  ?>				

											
 function chTwo() { // checkbox change color and count
  var markedCheckbox2 = document.getElementsByName('myCheck2');
  var count2 = 0;
	
  for (var chckbox2 of markedCheckbox2) {	 
	if (chckbox2.checked){		
		count2++;
				var chkbxes2 = document.querySelectorAll('input[name="myCheck2"]:checked');
            var chkval2 = [];
            chkbxes2.forEach((checkbox2) => {			
                chkval2.push(checkbox2.value);		
            });	
	}
	if(chckbox2.checked == false){		
		
		var nchkbxes2 = document.querySelectorAll('input[name="myCheck2"]:not(:checked)');
            var nchkval2 = [];
            nchkbxes2.forEach((ncheckbox2) => {
                nchkval2.push(ncheckbox2.value);
            });	
		}
  }
	if (count2 ==0){ 
		 document.getElementById("color2").style.backgroundColor = "red";
		 setCookie("check2", "red");
		}		
		else if (count2 <indexx2){ 
			document.getElementById("color2").style.backgroundColor = "#dba400";
			setCookie("check2", "#dba400");
		}
		else if (count2 ==indexx2){ 
			document.getElementById("color2").style.backgroundColor = "green";		 
			setCookie("check2", "green");
		}
		else{ 
			document.getElementById("color2").style.backgroundColor = "#dba400";
			setCookie("check2", "#dba400");
		}
	document.getElementById("examp21").innerHTML =  count2;//number clicked
	document.getElementById("examp22").innerHTML =  chkval2;
	
		document.getElementById("examp23").innerHTML =  nchkval2;
	
	document.getElementById("examp24").innerHTML = indexx2 +"indeses"; //total checkbox count

		var ckie2 = getCookie("check2");
		document.getElementById("color2").style.backgroundColor = ckie2;	
 }	
		</script>
		<script>
		 function submListTwo(){
		 var cnt2 = document.getElementById("examp21").innerHTML;		
 var val2 = document.getElementById("examp22").innerHTML;
 var nval2 = document.getElementById("examp23").innerHTML;
  var clor2 = document.getElementById("color2").style.backgroundColor;
 	var shelt2 = "sh2";	 

var setrq2=new XMLHttpRequest();
			setrq2.open("POST", "evaclist.php", true);
			setrq2.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			setrq2.onreadystatechange=function(){
				if(setrq2.readyState==4 &&  setrq2.status==200){					
				}
			}
		setrq2.send("count="+cnt2+"&chk="+val2+"&nchk="+nval2+"&shelt="+shelt2+"&color="+clor2);		
 }		
</script>

					</table>				 
				 <div id="examp21" class="row mx-5 mt-3"></div>
				 <div class="row mx-5" hidden>Arrived:</div>
				 <div id="examp22" class="row mx-5" ></div>
				 <div id="examp23" class="row mx-5" ></div>
				<div id="examp24" class="row mx-5"hidden></div>
				</div>
					<form action="<?php $_PHP_SELF ?>" method="GET">
				<div class="row mx-5">
				<input class="btn btn-info text-white" type="submit" value="Submit" name="assign" onclick="submListTwo()"></input>
				</div>
				</form>
			</div>
		</div> <!--end row 1 col 2-->
		
 <div class="col-4 my-1"> 
			<div class="btn-lg shadow-lg text-white" style="height:400px; font-weight:bolder; background-color:red;" id="color3">			 
			  
					Shelter #3	
			<form action = "<?php $_PHP_SELF ?>" method = "GET">
					<div class="form-group row ms-1 my-3">
							Family
									 <div class="col-sm-6 mx-sm-1">

						<?php						
				$result3 = mysqli_query($con, "SELECT * FROM evacuation WHERE evac='TabingIlog' AND arrive='' AND NOT(family='')");
									$row3 = array();
									while($key3 = mysqli_fetch_array($result3,MYSQLI_ASSOC)){
									$row3[] = $key3;
									}					?>
									
														
		<select class="form-select form-select-md" aria-label=".form-select-md example" id="mySelect3" name="sele">
						<option value=" " disabled selected hidden>Select</option>
							<?php foreach($row3 as $key3 => $value3) { ?>
									<option  value="<?php echo $value3["eid"] ?>" >
										<?php echo $value3["family"] ?>
									</option>		
										<?php } ?>	 
																			
				</select>
					</div>
					 <div class="col-sm-1 mx-sm-1 container-fluid">
					<input class="btn btn-info text-white" type="submit" value="Select" name="assign" onclick="clckNmeThree()"></input>
					</div>
			
				</div>
				</form>	
					<div class="mt-3 d-flex justify-content-center"><script>document.write(getCookie("chk3"));</script>&nbsp Family</div>
				  	<div class="form-group row m-1">
					<div>MEMBERS:</div>					
					
				</div>
							
				  	<div class="form-group row mb-3 mx-1">					
					<table class="text-white" style='align:center;'>						
					
					<!--function for each select-->
					<script>				
				function clckNmeThree() { //function for memberlist shelter
					
					document.getElementById("color3").style.backgroundColor = getCookie("check3");
					setCookie("check3", "red");
					
			var evid3 = document.getElementById("mySelect3").value; // get lastname	
			var setno3 = "set3";

			var httpr3=new XMLHttpRequest();
			httpr3.open("POST", "evaccntr.php", true);
			httpr3.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			httpr3.onreadystatechange=function(){
				if(httpr3.readyState==4 &&  httpr3.status==200){
					
				}
			}
			httpr3.send("eid="+evid3+"&setno="+setno3);
					var y3 = document.getElementById("mySelect3");
					z3 = y3.options[y3.selectedIndex].text;
					setCookie("chk3", z3);	//family name
						}
																
				document.write("<tr><td>&nbsp</td><td>Firstname</td><td>Lastname</td><td>Age</td><td>Gender</td></tr>");
				

				
			<?php
				   	$mem3 = mysqli_query($con, "SELECT * FROM evacuation WHERE arrive = 'set3'");	//				
					$arr3 = array();
						while($fam3 = mysqli_fetch_array($mem3,MYSQLI_ASSOC)){
						$arr3[] = $fam3;		}?>											

							var indexx3 = 0;	
	<?php			foreach($arr3 as $fam3 => $famlst3) { 	?>  
							indexx3++;
							
			var String3="<?php echo ' '.$famlst3['firstname']. ' ' .$famlst3['lastname']?>";
			var all3="<?php echo $famlst3['firstname'].'</td><td>'.$famlst3['lastname'].'</td><td>'.$famlst3['age'].'</td><td>'.$famlst3['gender']?>";
			document.write("<tr><td><input type='checkbox' id='myCheck3' name='myCheck3' onclick='chThree()' value='"+ String3 +"'></td><td> " + all3 + "</td></tr>");
		
					 <?php  }  ?>				

											
 function chThree() { // checkbox change color and count
  var markedCheckbox3 = document.getElementsByName('myCheck3');
  var count3 = 0;
	
  for (var chckbox3 of markedCheckbox3) {	 
	if (chckbox3.checked){		
		count3++;
				var chkbxes3 = document.querySelectorAll('input[name="myCheck3"]:checked');
            var chkval3 = [];
            chkbxes3.forEach((checkbox3) => {			
                chkval3.push(checkbox3.value);		
            });	
	}
	if(chckbox3.checked == false){		
		
		var nchkbxes3 = document.querySelectorAll('input[name="myCheck3"]:not(:checked)');
            var nchkval3 = [];
            nchkbxes3.forEach((ncheckbox3) => {
                nchkval3.push(ncheckbox3.value);
            });	
		}
  }
	if (count3 ==0){ 
		 document.getElementById("color3").style.backgroundColor = "red";
		 setCookie("check3", "red");
		}		
		else if (count3 <indexx3){ 
			document.getElementById("color3").style.backgroundColor = "#dba400";
			setCookie("check3", "#dba400");
		}
		else if (count3 ==indexx3){ 
			document.getElementById("color3").style.backgroundColor = "green";		 
			setCookie("check3", "green");
		}
		else{ 
			document.getElementById("color3").style.backgroundColor = "#dba400";
			setCookie("check3", "#dba400");
		}
	document.getElementById("examp31").innerHTML =  count3;//number clicked
	document.getElementById("examp32").innerHTML =  chkval3;
	
		document.getElementById("examp33").innerHTML =  nchkval3;
	
	document.getElementById("examp34").innerHTML = indexx3 +"indeses"; //total checkbox count

		var ckie3 = getCookie("check3");
		document.getElementById("color3").style.backgroundColor = ckie3;	
 }	
		</script>
		<script>
		 function submListThree(){
		 var cnt3 = document.getElementById("examp31").innerHTML;		
 var val3 = document.getElementById("examp32").innerHTML;
 var nval3 = document.getElementById("examp33").innerHTML;
  var clor3 = document.getElementById("color3").style.backgroundColor;
 	var shelt3 = "sh3";	 

var setrq3=new XMLHttpRequest();
			setrq3.open("POST", "evaclist.php", true);
			setrq3.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			setrq3.onreadystatechange=function(){
				if(setrq3.readyState==4 &&  setrq3.status==200){					
				}
			}
		setrq3.send("count="+cnt3+"&chk="+val3+"&nchk="+nval3+"&shelt="+shelt3+"&color="+clor3);		
 }		
</script>
					</table>				 
				 <div id="examp31" class="row mx-5 mt-3" hidden></div>
				 <div class="row mx-5" hidden>Arrived:</div>
				 <div id="examp32" class="row mx-5" hidden></div>
				 <div id="examp33" class="row mx-5" hidden></div>
				<div id="examp34" class="row mx-5" hidden>
				</div>
				</div>
				<form action="<?php $_PHP_SELF ?>" method = "GET">
				<div class="row mx-5">
				<input class="btn btn-info text-white" type="submit" value="Submit" name="assign" onclick='submListThree()'></input>
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
			<form action = "<?php $_PHP_SELF ?>" method = "GET">
					<div class="form-group row ms-1 my-3">
							Family
									 <div class="col-sm-6 mx-sm-1">

						<?php						
				$result4 = mysqli_query($con, "SELECT * FROM evacuation WHERE evac='TabingIlog' AND arrive='' AND NOT(family='')");
									$row4 = array();
									while($key4 = mysqli_fetch_array($result4,MYSQLI_ASSOC)){
									$row4[] = $key4;
									}					?>
									
														
		<select class="form-select form-select-md" aria-label=".form-select-md example" id="mySelect4" name="sele">
						<option value=" " disabled selected hidden>Select</option>
							<?php foreach($row4 as $key4 => $value4) { ?>
									<option  value="<?php echo $value4["eid"] ?>" >
										<?php echo $value4["family"] ?>
									</option>		
										<?php } ?>	 
																			
				</select>
					</div>
					 <div class="col-sm-1 mx-sm-1 container-fluid">
					<input class="btn btn-info text-white" type="submit" value="Select" name="assign" onclick="clckNmeFour()"></input>
					</div>
			
				</div>
				</form>	
					<div class="mt-3 d-flex justify-content-center"><script>document.write(getCookie("chk4"));</script>&nbsp Family</div>
				  	<div class="form-group row m-1">
					<div>MEMBERS:</div>					
					
				</div>
							
				  	<div class="form-group row mb-3 mx-1">					
					<table class="text-white" style='align:center;'>						
					
					<!--function for each select-->
					<script>				
				function clckNmeFour() { //function for memberlist shelter
					
					document.getElementById("color4").style.backgroundColor = getCookie("check4");
					setCookie("check4", "red");
					
			var evid4 = document.getElementById("mySelect4").value; // get lastname	
			var setno4 = "set4";

			var httpr4=new XMLHttpRequest();
			httpr4.open("POST", "evaccntr.php", true);
			httpr4.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			httpr4.onreadystatechange=function(){
				if(httpr4.readyState==4 &&  httpr4.status==200){
					
				}
			}
			httpr4.send("eid="+evid4+"&setno="+setno4);
					var y4 = document.getElementById("mySelect4");
					z4 = y4.options[y4.selectedIndex].text;
					setCookie("chk4", z4);	//family name
						}
																
				document.write("<tr><td>&nbsp</td><td>Firstname</td><td>Lastname</td><td>Age</td><td>Gender</td></tr>");
				

				
			<?php
				   	$mem4 = mysqli_query($con, "SELECT * FROM evacuation WHERE arrive = 'set4'");	//				
					$arr4 = array();
						while($fam4 = mysqli_fetch_array($mem4,MYSQLI_ASSOC)){
						$arr4[] = $fam4;		}?>											

							var indexx4 = 0;	
	<?php			foreach($arr4 as $fam4 => $famlst4) { 	?>  
							indexx4++;
							
			var String4="<?php echo ' '.$famlst4['firstname']. ' ' .$famlst4['lastname']?>";
			var all4="<?php echo $famlst4['firstname'].'</td><td>'.$famlst4['lastname'].'</td><td>'.$famlst4['age'].'</td><td>'.$famlst4['gender']?>";
			document.write("<tr><td><input type='checkbox' id='myCheck4' name='myCheck4' onclick='chFour()' value='"+ String4 +"'></td><td> " + all4 + "</td></tr>");
		
					 <?php  }  ?>				

											
 function chFour() { // checkbox change color and count
  var markedCheckbox4 = document.getElementsByName('myCheck4');
  var count4 = 0;
	
  for (var chckbox4 of markedCheckbox4) {	 
	if (chckbox4.checked){		
		count4++;
				var chkbxes4 = document.querySelectorAll('input[name="myCheck4"]:checked');
            var chkval4 = [];
            chkbxes4.forEach((checkbox4) => {			
                chkval4.push(checkbox4.value);		
            });	
	}
	if(chckbox4.checked == false){		
		
		var nchkbxes4 = document.querySelectorAll('input[name="myCheck4"]:not(:checked)');
            var nchkval4 = [];
            nchkbxes4.forEach((ncheckbox4) => {
                nchkval4.push(ncheckbox4.value);
            });	
		}
  }
	if (count4 ==0){ 
		 document.getElementById("color4").style.backgroundColor = "red";
		 setCookie("check4", "red");
		}		
		else if (count4 <indexx4){ 
			document.getElementById("color4").style.backgroundColor = "#dba400";
			setCookie("check4", "#dba400");
		}
		else if (count4 ==indexx4){ 
			document.getElementById("color4").style.backgroundColor = "green";		 
			setCookie("check4", "green");
		}
		else{ 
			document.getElementById("color4").style.backgroundColor = "#dba400";
			setCookie("check4", "#dba400");
		}
	document.getElementById("examp41").innerHTML =  count4;//number clicked
	document.getElementById("examp42").innerHTML =  chkval4;
	
		document.getElementById("examp43").innerHTML =  nchkval4;
	
	document.getElementById("examp44").innerHTML = indexx4 +"indeses"; //total checkbox count

		var ckie4 = getCookie("check4");
		document.getElementById("color4").style.backgroundColor = ckie4;	
 }	
		</script>
		<script>
		 function submListFour(){
		 var cnt4 = document.getElementById("examp41").innerHTML;		
 var val4 = document.getElementById("examp42").innerHTML;
 var nval4 = document.getElementById("examp43").innerHTML;
  var clor4 = document.getElementById("color4").style.backgroundColor;
 	var shelt4 = "sh4";	 

var setrq4=new XMLHttpRequest();
			setrq4.open("POST", "evaclist.php", true);
			setrq4.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			setrq4.onreadystatechange=function(){
				if(setrq4.readyState==4 &&  setrq4.status==200){					
				}
			}
		setrq4.send("count="+cnt4+"&chk="+val4+"&nchk="+nval4+"&shelt="+shelt4+"&color="+clor4);		
 }		
</script>
</table>
				<div id="examp41" class="row mx-5 mt-3" hidden></div>
				 <div class="row mx-5" hidden>Arrived:</div>
				 <div id="examp42" class="row mx-5" hidden></div>
				 <div id="examp43" class="row mx-5" hidden></div>
				<div id="examp44" class="row mx-5" hidden>
				</div>
				</div>
				<form action="<?php $_PHP_SELF ?>" method = "GET">
				<div class="row mx-5">
				<input class="btn btn-info text-white" type="submit" value="Submit" name="assign" onclick='submListFour()'></input>
				</div>
				</form>
			</div>
		</div><!--end row 2 col1-->
		


 <div class="col-4 my-1"> <!-- row 2 col 2-->
			<div class="btn-lg shadow-lg text-white" style="height:400px; font-weight:bolder; background-color:red;" id="color5">			 
			  
									Shelter #5	
			<form action = "<?php $_PHP_SELF ?>" method = "GET">
					<div class="form-group row ms-1 my-3">
							Family
									 <div class="col-sm-6 mx-sm-1">

						<?php						
				$result5 = mysqli_query($con, "SELECT * FROM evacuation WHERE evac='TabingIlog' AND arrive='' AND NOT(family='')");
									$row5 = array();
									while($key5 = mysqli_fetch_array($result5,MYSQLI_ASSOC)){
									$row5[] = $key5;
									}					?>
									
														
		<select class="form-select form-select-md" aria-label=".form-select-md example" id="mySelect5" name="sele">
						<option value=" " disabled selected hidden>Select</option>
							<?php foreach($row5 as $key5 => $value5) { ?>
									<option  value="<?php echo $value5["eid"] ?>" >
										<?php echo $value5["family"] ?>
									</option>		
										<?php } ?>	 
																			
				</select>
					</div>
					 <div class="col-sm-1 mx-sm-1 container-fluid">
					<input class="btn btn-info text-white" type="submit" value="Select" name="assign" onclick="clckNmeFive()"></input>
					</div>
			
				</div>
				</form>	
					<div class="mt-3 d-flex justify-content-center"><script>document.write(getCookie("chk5"));</script>&nbsp Family</div>
				  	<div class="form-group row m-1">
					<div>MEMBERS:</div>					
					
				</div>
							
				  	<div class="form-group row mb-3 mx-1">					
					<table class="text-white" style='align:center;'>						
					
					<!--function for each select-->
					<script>				
				function clckNmeFive() { //function for memberlist shelter
					
					document.getElementById("color5").style.backgroundColor = getCookie("check5");
					setCookie("check5", "red");
					
			var evid5 = document.getElementById("mySelect5").value; // get lastname	
			var setno5 = "set5";

			var httpr5=new XMLHttpRequest();
			httpr5.open("POST", "evaccntr.php", true);
			httpr5.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			httpr5.onreadystatechange=function(){
				if(httpr5.readyState==4 &&  httpr5.status==200){
					
				}
			}
			httpr5.send("eid="+evid5+"&setno="+setno5);
					var y5 = document.getElementById("mySelect5");
					z5 = y5.options[y5.selectedIndex].text;
					setCookie("chk5", z5);	//family name
						}
																
				document.write("<tr><td>&nbsp</td><td>Firstname</td><td>Lastname</td><td>Age</td><td>Gender</td></tr>");
				

				
			<?php
				   	$mem5 = mysqli_query($con, "SELECT * FROM evacuation WHERE arrive = 'set5'");	//				
					$arr5 = array();
						while($fam5 = mysqli_fetch_array($mem5,MYSQLI_ASSOC)){
						$arr5[] = $fam5;		}?>											

							var indexx5 = 0;	
	<?php			foreach($arr5 as $fam5 => $famlst5) { 	?>  
							indexx5++;
							
			var String5="<?php echo ' '.$famlst5['firstname']. ' ' .$famlst5['lastname']?>";
			var all5="<?php echo $famlst5['firstname'].'</td><td>'.$famlst5['lastname'].'</td><td>'.$famlst5['age'].'</td><td>'.$famlst5['gender']?>";
			document.write("<tr><td><input type='checkbox' id='myCheck5' name='myCheck5' onclick='chFive()' value='"+ String5 +"'></td><td> " + all5 + "</td></tr>");
		
					 <?php  }  ?>				

											
 function chFive() { // checkbox change color and count
  var markedCheckbox5 = document.getElementsByName('myCheck5');
  var count5 = 0;
	
  for (var chckbox5 of markedCheckbox5) {	 
	if (chckbox5.checked){		
		count5++;
				var chkbxes5 = document.querySelectorAll('input[name="myCheck5"]:checked');
            var chkval5 = [];
            chkbxes5.forEach((checkbox5) => {			
                chkval5.push(checkbox5.value);		
            });	
	}
	if(chckbox5.checked == false){		
		
		var nchkbxes5 = document.querySelectorAll('input[name="myCheck5"]:not(:checked)');
            var nchkval5 = [];
            nchkbxes5.forEach((ncheckbox5) => {
                nchkval5.push(ncheckbox5.value);
            });	
		}
  }
	if (count5 ==0){ 
		 document.getElementById("color5").style.backgroundColor = "red";
		 setCookie("check5", "red");
		}		
		else if (count5 <indexx5){ 
			document.getElementById("color5").style.backgroundColor = "#dba400";
			setCookie("check5", "#dba400");
		}
		else if (count5 ==indexx5){ 
			document.getElementById("color5").style.backgroundColor = "green";		 
			setCookie("check5", "green");
		}
		else{ 
			document.getElementById("color5").style.backgroundColor = "#dba400";
			setCookie("check5", "#dba400");
		}
	document.getElementById("examp51").innerHTML =  count5;//number clicked
	document.getElementById("examp52").innerHTML =  chkval5;
	
		document.getElementById("examp53").innerHTML =  nchkval5;
	
	document.getElementById("examp54").innerHTML = indexx5 +"indeses"; //total checkbox count

		var ckie5 = getCookie("check5");
		document.getElementById("color5").style.backgroundColor = ckie5;	
 }	
		</script>
		<script>
		 function submListFive(){
		 var cnt5 = document.getElementById("examp51").innerHTML;		
 var val5 = document.getElementById("examp52").innerHTML;
 var nval5 = document.getElementById("examp53").innerHTML;
  var clor5 = document.getElementById("color5").style.backgroundColor;
 	var shelt5 = "sh5";	 

var setrq5=new XMLHttpRequest();
			setrq5.open("POST", "evaclist.php", true);
			setrq5.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			setrq5.onreadystatechange=function(){
				if(setrq5.readyState==4 &&  setrq5.status==200){					
				}
			}
		setrq5.send("count="+cnt5+"&chk="+val5+"&nchk="+nval5+"&shelt="+shelt5+"&color="+clor5);		
 }		
</script>
					</table>
						<div id="examp51" class="row mx-5 mt-3" hidden></div>
				 <div class="row mx-5" hidden>Arrived:</div>
				 <div id="examp52" class="row mx-5" hidden></div>
				 <div id="examp53" class="row mx-5" hidden></div>
				<div id="examp54" class="row mx-5" hidden>
				</div>
				</div>
					<form action = "<?php $_PHP_SELF ?>" method = "GET">
				<div class="row mx-5">
				<input class="btn btn-info text-white" type="submit" value="Submit" name="assign" onclick='submListFive()'></input>
				</div>
				</form>	
			</div>
		</div><!--end row 2 col2-->

 <div class="col-4 my-1"> <!-- row 2 col 3-->
			<div class="btn-lg shadow-lg text-white" style="height:400px; font-weight:bolder; background-color:red;" id="color6">			 
			  
									Shelter #6	
			<form action = "<?php $_PHP_SELF ?>" method = "GET">
					<div class="form-group row ms-1 my-3">
							Family
									 <div class="col-sm-6 mx-sm-1">

						<?php						
				$result6 = mysqli_query($con, "SELECT * FROM evacuation WHERE evac='TabingIlog' AND arrive='' AND NOT(family='')");
									$row6 = array();
									while($key6 = mysqli_fetch_array($result6,MYSQLI_ASSOC)){
									$row6[] = $key6;
									}					?>
									
														
		<select class="form-select form-select-md" aria-label=".form-select-md example" id="mySelect6" name="sele">
						<option value=" " disabled selected hidden>Select</option>
							<?php foreach($row6 as $key6 => $value6) { ?>
									<option  value="<?php echo $value6["eid"] ?>" >
										<?php echo $value6["family"] ?>
									</option>		
										<?php } ?>	 
																			
				</select>
					</div>
					 <div class="col-sm-1 mx-sm-1 container-fluid">
					<input class="btn btn-info text-white" type="submit" value="Select" name="assign" onclick="clckNmeSix()"></input>
					</div>
			
				</div>
				</form>	
					<div class="mt-3 d-flex justify-content-center"><script>document.write(getCookie("chk6"));</script>&nbsp Family</div>
				  	<div class="form-group row m-1">
					<div>MEMBERS:</div>					
					
				</div>
							
				  	<div class="form-group row mb-3 mx-1">					
					<table class="text-white" style='align:center;'>						
					
					<!--function for each select-->
					<script>				
				function clckNmeSix() { //function for memberlist shelter
					
					document.getElementById("color6").style.backgroundColor = getCookie("check6");
					setCookie("check6", "red");
					
			var evid6 = document.getElementById("mySelect6").value; // get lastname	
			var setno6 = "set6";

			var httpr6=new XMLHttpRequest();
			httpr6.open("POST", "evaccntr.php", true);
			httpr6.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			httpr6.onreadystatechange=function(){
				if(httpr6.readyState==4 &&  httpr6.status==200){
					
				}
			}
			httpr6.send("eid="+evid6+"&setno="+setno6);
					var y6 = document.getElementById("mySelect6");
					z6 = y6.options[y6.selectedIndex].text;
					setCookie("chk6", z6);	//family name
						}
																
				document.write("<tr><td>&nbsp</td><td>Firstname</td><td>Lastname</td><td>Age</td><td>Gender</td></tr>");
				

				
			<?php
				   	$mem6 = mysqli_query($con, "SELECT * FROM evacuation WHERE arrive = 'set6'");	//				
					$arr6 = array();
						while($fam6 = mysqli_fetch_array($mem6,MYSQLI_ASSOC)){
						$arr6[] = $fam6;		}?>											

							var indexx6 = 0;	
	<?php			foreach($arr6 as $fam6 => $famlst6) { 	?>  
							indexx6++;
							
			var String6="<?php echo ' '.$famlst6['firstname']. ' ' .$famlst6['lastname']?>";
			var all6="<?php echo $famlst6['firstname'].'</td><td>'.$famlst6['lastname'].'</td><td>'.$famlst6['age'].'</td><td>'.$famlst6['gender']?>";
			document.write("<tr><td><input type='checkbox' id='myCheck6' name='myCheck6' onclick='chSix()' value='"+ String6 +"'></td><td> " + all6 + "</td></tr>");
		
					 <?php  }  ?>				

											
 function chSix() { // checkbox change color and count
  var markedCheckbox6 = document.getElementsByName('myCheck6');
  var count6 = 0;
	
  for (var chckbox6 of markedCheckbox6) {	 
	if (chckbox6.checked){		
		count6++;
				var chkbxes6 = document.querySelectorAll('input[name="myCheck6"]:checked');
            var chkval6 = [];
            chkbxes6.forEach((checkbox6) => {			
                chkval6.push(checkbox6.value);		
            });	
	}
	if(chckbox6.checked == false){		
		
		var nchkbxes6 = document.querySelectorAll('input[name="myCheck6"]:not(:checked)');
            var nchkval6 = [];
            nchkbxes6.forEach((ncheckbox6) => {
                nchkval6.push(ncheckbox6.value);
            });	
		}
  }
	if (count6 ==0){ 
		 document.getElementById("color6").style.backgroundColor = "red";
		 setCookie("check6", "red");
		}		
		else if (count6 <indexx6){ 
			document.getElementById("color6").style.backgroundColor = "#dba400";
			setCookie("check6", "#dba400");
		}
		else if (count6 ==indexx6){ 
			document.getElementById("color6").style.backgroundColor = "green";		 
			setCookie("check6", "green");
		}
		else{ 
			document.getElementById("color6").style.backgroundColor = "#dba400";
			setCookie("check6", "#dba400");
		}
	document.getElementById("examp61").innerHTML =  count6;//number clicked
	document.getElementById("examp62").innerHTML =  chkval6;
	
		document.getElementById("examp63").innerHTML =  nchkval6;
	
	document.getElementById("examp64").innerHTML = indexx6 +"indeses"; //total checkbox count

		var ckie6 = getCookie("check6");
		document.getElementById("color6").style.backgroundColor = ckie6;	
 }	
		</script>
		<script>
		 function submListSix(){
		 var cnt6 = document.getElementById("examp61").innerHTML;		
 var val6 = document.getElementById("examp62").innerHTML;
 var nval6 = document.getElementById("examp63").innerHTML;
  var clor6 = document.getElementById("color6").style.backgroundColor;
 	var shelt6 = "sh6";	 

var setrq6=new XMLHttpRequest();
			setrq6.open("POST", "evaclist.php", true);
			setrq6.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			setrq6.onreadystatechange=function(){
				if(setrq6.readyState==4 &&  setrq6.status==200){					
				}
			}
		setrq6.send("count="+cnt6+"&chk="+val6+"&nchk="+nval6+"&shelt="+shelt6+"&color="+clor6);		
 }		
</script>									</table>
						<div id="examp61" class="row mx-5 mt-3" hidden></div>
				 <div class="row mx-5" hidden>Arrived:</div>
				 <div id="examp62" class="row mx-5" hidden></div>
				 <div id="examp63" class="row mx-5" hidden></div>
				<div id="examp64" class="row mx-5" hidden>
				</div>
				</div>
				<form action = "<?php $_PHP_SELF ?>" method = "GET">
				<div class="row mx-5">
				<input class="btn btn-info text-white" type="submit" value="Submit" name="assign" onclick='submListSix()'></input>
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
			<form action = "<?php $_PHP_SELF ?>" method = "GET">
					<div class="form-group row ms-1 my-3">
							Family
									 <div class="col-sm-6 mx-sm-1">

						<?php						
				$result7 = mysqli_query($con, "SELECT * FROM evacuation WHERE evac='TabingIlog' AND arrive='' AND NOT(family='')");
									$row7 = array();
									while($key7 = mysqli_fetch_array($result7,MYSQLI_ASSOC)){
									$row7[] = $key7;
									}					?>
									
														
		<select class="form-select form-select-md" aria-label=".form-select-md example" id="mySelect7" name="sele">
						<option value=" " disabled selected hidden>Select</option>
							<?php foreach($row7 as $key7 => $value7) { ?>
									<option  value="<?php echo $value7["eid"] ?>" >
										<?php echo $value7["family"] ?>
									</option>		
										<?php } ?>	 
																			
				</select>
					</div>
					 <div class="col-sm-1 mx-sm-1 container-fluid">
					<input class="btn btn-info text-white" type="submit" value="Select" name="assign" onclick="clckNmeSeven()"></input>
					</div>
			
				</div>
				</form>	
					<div class="mt-3 d-flex justify-content-center"><script>document.write(getCookie("chk7"));</script>&nbsp Family</div>
				  	<div class="form-group row m-1">
					<div>MEMBERS:</div>					
					
				</div>
							
				  	<div class="form-group row mb-3 mx-1">					
					<table class="text-white" style='align:center;'>						
					
					<!--function for each select-->
					<script>				
				function clckNmeSeven() { //function for memberlist shelter
					
					document.getElementById("color7").style.backgroundColor = getCookie("check7");
					setCookie("check7", "red");
					
			var evid7 = document.getElementById("mySelect7").value; // get lastname	
			var setno7 = "set7";

			var httpr7=new XMLHttpRequest();
			httpr7.open("POST", "evaccntr.php", true);
			httpr7.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			httpr7.onreadystatechange=function(){
				if(httpr7.readyState==4 &&  httpr7.status==200){
					
				}
			}
			httpr7.send("eid="+evid7+"&setno="+setno7);
					var y7 = document.getElementById("mySelect7");
					z7 = y7.options[y7.selectedIndex].text;
					setCookie("chk7", z7);	//family name
						}
																
				document.write("<tr><td>&nbsp</td><td>Firstname</td><td>Lastname</td><td>Age</td><td>Gender</td></tr>");
				

				
			<?php
				   	$mem7 = mysqli_query($con, "SELECT * FROM evacuation WHERE arrive = 'set7'");	//				
					$arr7 = array();
						while($fam7 = mysqli_fetch_array($mem7,MYSQLI_ASSOC)){
						$arr7[] = $fam7;		}?>											

							var indexx7 = 0;	
	<?php			foreach($arr7 as $fam7 => $famlst7) { 	?>  
							indexx7++;
							
			var String7="<?php echo ' '.$famlst7['firstname']. ' ' .$famlst7['lastname']?>";
			var all7="<?php echo $famlst7['firstname'].'</td><td>'.$famlst7['lastname'].'</td><td>'.$famlst7['age'].'</td><td>'.$famlst7['gender']?>";
			document.write("<tr><td><input type='checkbox' id='myCheck7' name='myCheck7' onclick='chSeven()' value='"+ String7 +"'></td><td> " + all7 + "</td></tr>");
		
					 <?php  }  ?>				

											
 function chSeven() { // checkbox change color and count
  var markedCheckbox7 = document.getElementsByName('myCheck7');
  var count7 = 0;
	
  for (var chckbox7 of markedCheckbox7) {	 
	if (chckbox7.checked){		
		count7++;
				var chkbxes7 = document.querySelectorAll('input[name="myCheck7"]:checked');
            var chkval7 = [];
            chkbxes7.forEach((checkbox7) => {			
                chkval7.push(checkbox7.value);		
            });	
	}
	if(chckbox7.checked == false){		
		
		var nchkbxes7 = document.querySelectorAll('input[name="myCheck7"]:not(:checked)');
            var nchkval7 = [];
            nchkbxes7.forEach((ncheckbox7) => {
                nchkval7.push(ncheckbox7.value);
            });	
		}
  }
	if (count7 ==0){ 
		 document.getElementById("color7").style.backgroundColor = "red";
		 setCookie("check7", "red");
		}		
		else if (count7 <indexx7){ 
			document.getElementById("color7").style.backgroundColor = "#dba400";
			setCookie("check7", "#dba400");
		}
		else if (count7 ==indexx7){ 
			document.getElementById("color7").style.backgroundColor = "green";		 
			setCookie("check7", "green");
		}
		else{ 
			document.getElementById("color7").style.backgroundColor = "#dba400";
			setCookie("check7", "#dba400");
		}
	document.getElementById("examp71").innerHTML =  count7;//number clicked
	document.getElementById("examp72").innerHTML =  chkval7;
	
		document.getElementById("examp73").innerHTML =  nchkval7;
	
	document.getElementById("examp74").innerHTML = indexx7 +"indeses"; //total checkbox count

		var ckie7 = getCookie("check7");
		document.getElementById("color7").style.backgroundColor = ckie7;	
 }	
		</script>
		<script>
		 function submListSeven(){
		 var cnt7 = document.getElementById("examp71").innerHTML;		
 var val7 = document.getElementById("examp72").innerHTML;
 var nval7 = document.getElementById("examp73").innerHTML;
  var clor7 = document.getElementById("color7").style.backgroundColor;
 	var shelt7 = "sh7";	 

var setrq7=new XMLHttpRequest();
			setrq7.open("POST", "evaclist.php", true);
			setrq7.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			setrq7.onreadystatechange=function(){
				if(setrq7.readyState==4 &&  setrq7.status==200){					
				}
			}
		setrq7.send("count="+cnt7+"&chk="+val7+"&nchk="+nval7+"&shelt="+shelt7+"&color="+clor7);		
 }		
</script>
								</table>
						<div id="examp71" class="row mx-5 mt-3" hidden></div>
				 <div class="row mx-5" hidden>Arrived:</div>
				 <div id="examp72" class="row mx-5" hidden></div>
				 <div id="examp73" class="row mx-5" hidden></div>
				<div id="examp74" class="row mx-5" hidden>
				</div>
				</div>
				<form action="evaccntr8.php">
				<div class="row mx-5">
				<input class="btn btn-info text-white" type="submit" value="Submit" name="assign" onclick='submListSeven()'></input>
				</div>
				</form>
			</div>
		</div><!--end row 3 col 1-->
		
		
<div class="col-4 my-1"> <!-- row 3 col 2-->
			<div class="btn-lg shadow-lg text-white" style="height:400px; font-weight:bolder; background-color:red;" id="color8">			 			  
			  
									Shelter #8	
			<form action = "<?php $_PHP_SELF ?>" method = "GET">
					<div class="form-group row ms-1 my-3">
							Family
									 <div class="col-sm-6 mx-sm-1">

						<?php						
				$result8 = mysqli_query($con, "SELECT * FROM evacuation WHERE evac='TabingIlog' AND arrive='' AND NOT(family='')");
									$row8 = array();
									while($key8 = mysqli_fetch_array($result8,MYSQLI_ASSOC)){
									$row8[] = $key8;
									}					?>
									
														
		<select class="form-select form-select-md" aria-label=".form-select-md example" id="mySelect8" name="sele">
						<option value=" " disabled selected hidden>Select</option>
							<?php foreach($row8 as $key8 => $value8) { ?>
									<option  value="<?php echo $value8["eid"] ?>" >
										<?php echo $value8["family"] ?>
									</option>		
										<?php } ?>	 
																			
				</select>
					</div>
					 <div class="col-sm-1 mx-sm-1 container-fluid">
					<input class="btn btn-info text-white" type="submit" value="Select" name="assign" onclick="clckNmeEight()"></input>
					</div>
			
				</div>
				</form>	
					<div class="mt-3 d-flex justify-content-center"><script>document.write(getCookie("chk8"));</script>&nbsp Family</div>
				  	<div class="form-group row m-1">
					<div>MEMBERS:</div>					
					
				</div>
							
				  	<div class="form-group row mb-3 mx-1">					
					<table class="text-white" style='align:center;'>						
					
					<!--function for each select-->
					<script>				
				function clckNmeEight() { //function for memberlist shelter
					
					document.getElementById("color8").style.backgroundColor = getCookie("check8");
					setCookie("check8", "red");
					
			var evid8 = document.getElementById("mySelect8").value; // get lastname	
			var setno8 = "set8";

			var httpr8=new XMLHttpRequest();
			httpr8.open("POST", "evaccntr.php", true);
			httpr8.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			httpr8.onreadystatechange=function(){
				if(httpr8.readyState==4 &&  httpr8.status==200){
					
				}
			}
			httpr8.send("eid="+evid8+"&setno="+setno8);
					var y8 = document.getElementById("mySelect8");
					z8 = y8.options[y8.selectedIndex].text;
					setCookie("chk8", z8);	//family name
						}
																
				document.write("<tr><td>&nbsp</td><td>Firstname</td><td>Lastname</td><td>Age</td><td>Gender</td></tr>");
				

				
			<?php
				   	$mem8 = mysqli_query($con, "SELECT * FROM evacuation WHERE arrive = 'set8'");	//				
					$arr8 = array();
						while($fam8 = mysqli_fetch_array($mem8,MYSQLI_ASSOC)){
						$arr8[] = $fam8;		}?>											

							var indexx8 = 0;	
	<?php			foreach($arr8 as $fam8 => $famlst8) { 	?>  
							indexx8++;
							
			var String8="<?php echo ' '.$famlst8['firstname']. ' ' .$famlst8['lastname']?>";
			var all8="<?php echo $famlst8['firstname'].'</td><td>'.$famlst8['lastname'].'</td><td>'.$famlst8['age'].'</td><td>'.$famlst8['gender']?>";
			document.write("<tr><td><input type='checkbox' id='myCheck8' name='myCheck8' onclick='chEight()' value='"+ String8 +"'></td><td> " + all8 + "</td></tr>");
		
					 <?php  }  ?>				

											
 function chEight() { // checkbox change color and count
  var markedCheckbox8 = document.getElementsByName('myCheck8');
  var count8 = 0;
	
  for (var chckbox8 of markedCheckbox8) {	 
	if (chckbox8.checked){		
		count8++;
				var chkbxes8 = document.querySelectorAll('input[name="myCheck8"]:checked');
            var chkval8 = [];
            chkbxes8.forEach((checkbox8) => {			
                chkval8.push(checkbox8.value);		
            });	
	}
	if(chckbox8.checked == false){		
		
		var nchkbxes8 = document.querySelectorAll('input[name="myCheck8"]:not(:checked)');
            var nchkval8 = [];
            nchkbxes8.forEach((ncheckbox8) => {
                nchkval8.push(ncheckbox8.value);
            });	
		}
  }
	if (count8 ==0){ 
		 document.getElementById("color8").style.backgroundColor = "red";
		 setCookie("check8", "red");
		}		
		else if (count8 <indexx8){ 
			document.getElementById("color8").style.backgroundColor = "#dba400";
			setCookie("check8", "#dba400");
		}
		else if (count8 ==indexx8){ 
			document.getElementById("color8").style.backgroundColor = "green";		 
			setCookie("check8", "green");
		}
		else{ 
			document.getElementById("color8").style.backgroundColor = "#dba400";
			setCookie("check8", "#dba400");
		}
	document.getElementById("examp81").innerHTML =  count8;//number clicked
	document.getElementById("examp82").innerHTML =  chkval8;
	
		document.getElementById("examp83").innerHTML =  nchkval8;
	
	document.getElementById("examp84").innerHTML = indexx8 +"indeses"; //total checkbox count

		var ckie8 = getCookie("check8");
		document.getElementById("color8").style.backgroundColor = ckie8;	
 }	
		</script>
		<script>
		 function submListEight(){
		 var cnt8 = document.getElementById("examp81").innerHTML;		
 var val8 = document.getElementById("examp82").innerHTML;
 var nval8 = document.getElementById("examp83").innerHTML;
  var clor8 = document.getElementById("color8").style.backgroundColor;
 	var shelt8 = "sh8";	 

var setrq8=new XMLHttpRequest();
			setrq8.open("POST", "evaclist.php", true);
			setrq8.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			setrq8.onreadystatechange=function(){
				if(setrq8.readyState==4 &&  setrq8.status==200){					
				}
			}
		setrq8.send("count="+cnt8+"&chk="+val8+"&nchk="+nval8+"&shelt="+shelt8+"&color="+clor8);		
 }		
</script>
								</table>
						<div id="examp81" class="row mx-5 mt-3" hidden></div>
				 <div class="row mx-5" hidden>Arrived:</div>
				 <div id="examp82" class="row mx-5" hidden></div>
				 <div id="examp83" class="row mx-5" hidden></div>
				<div id="examp84" class="row mx-5" hidden>
				</div>
				</div>
					<form action = "<?php $_PHP_SELF ?>" method = "GET">
				<div class="row mx-5">
				<input class="btn btn-info text-white" type="submit" value="Submit" name="assign" onclick='submListEight()'></input>
				</div>
				</form>
			</div>
		</div><!--end row 3 col 2-->
		
		
 <div class="col-4 my-1"> <!-- row 3 col 3-->
			<div class="btn-lg shadow-lg text-white" style="height:400px; font-weight:bolder; background-color:red;" id="color9">			 			  
				Shelter #9	
			<form action = "<?php $_PHP_SELF ?>" method = "GET">
					<div class="form-group row ms-1 my-3">
							Family
									 <div class="col-sm-6 mx-sm-1">

						<?php						
				$result9 = mysqli_query($con, "SELECT * FROM evacuation WHERE evac='TabingIlog' AND arrive='' AND NOT(family='')");
									$row9 = array();
									while($key9 = mysqli_fetch_array($result9,MYSQLI_ASSOC)){
									$row9[] = $key9;
									}					?>
									
														
		<select class="form-select form-select-md" aria-label=".form-select-md example" id="mySelect9" name="sele">
						<option value=" " disabled selected hidden>Select</option>
							<?php foreach($row9 as $key9 => $value9) { ?>
									<option  value="<?php echo $value9["eid"] ?>" >
										<?php echo $value9["family"] ?>
									</option>		
										<?php } ?>	 
																			
				</select>
					</div>
					 <div class="col-sm-1 mx-sm-1 container-fluid">
					<input class="btn btn-info text-white" type="submit" value="Select" name="assign" onclick="clckNmeNine()"></input>
					</div>
			
				</div>
				</form>	
					<div class="mt-3 d-flex justify-content-center"><script>document.write(getCookie("chk9"));</script>&nbsp Family</div>
				  	<div class="form-group row m-1">
					<div>MEMBERS:</div>					
					
				</div>
							
				  	<div class="form-group row mb-3 mx-1">					
					<table class="text-white" style='align:center;'>						
					
					<!--function for each select-->
					<script>				
				function clckNmeNine() { //function for memberlist shelter
					
					document.getElementById("color9").style.backgroundColor = getCookie("check9");
					setCookie("check9", "red");
					
			var evid9 = document.getElementById("mySelect9").value; // get lastname	
			var setno9 = "set9";

			var httpr9=new XMLHttpRequest();
			httpr9.open("POST", "evaccntr.php", true);
			httpr9.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			httpr9.onreadystatechange=function(){
				if(httpr9.readyState==4 &&  httpr9.status==200){
					
				}
			}
			httpr9.send("eid="+evid9+"&setno="+setno9);
					var y9 = document.getElementById("mySelect9");
					z9 = y9.options[y9.selectedIndex].text;
					setCookie("chk9", z9);	//family name
						}
																
				document.write("<tr><td>&nbsp</td><td>Firstname</td><td>Lastname</td><td>Age</td><td>Gender</td></tr>");
				

				
			<?php
				   	$mem9 = mysqli_query($con, "SELECT * FROM evacuation WHERE arrive = 'set9'");	//				
					$arr9 = array();
						while($fam9 = mysqli_fetch_array($mem9,MYSQLI_ASSOC)){
						$arr9[] = $fam9;		}?>											

							var indexx9 = 0;	
	<?php			foreach($arr9 as $fam9 => $famlst9) { 	?>  
							indexx9++;
							
			var String9="<?php echo ' '.$famlst9['firstname']. ' ' .$famlst9['lastname']?>";
			var all9="<?php echo $famlst9['firstname'].'</td><td>'.$famlst9['lastname'].'</td><td>'.$famlst9['age'].'</td><td>'.$famlst9['gender']?>";
			document.write("<tr><td><input type='checkbox' id='myCheck9' name='myCheck9' onclick='chNine()' value='"+ String9 +"'></td><td> " + all9 + "</td></tr>");
		
					 <?php  }  ?>				

											
 function chNine() { // checkbox change color and count
  var markedCheckbox9 = document.getElementsByName('myCheck9');
  var count9 = 0;
	
  for (var chckbox9 of markedCheckbox9) {	 
	if (chckbox9.checked){		
		count9++;
				var chkbxes9 = document.querySelectorAll('input[name="myCheck9"]:checked');
            var chkval9 = [];
            chkbxes9.forEach((checkbox9) => {			
                chkval9.push(checkbox9.value);		
            });	
	}
	if(chckbox9.checked == false){		
		
		var nchkbxes9 = document.querySelectorAll('input[name="myCheck9"]:not(:checked)');
            var nchkval9 = [];
            nchkbxes9.forEach((ncheckbox9) => {
                nchkval9.push(ncheckbox9.value);
            });	
		}
  }
	if (count9 ==0){ 
		 document.getElementById("color9").style.backgroundColor = "red";
		 setCookie("check9", "red");
		}		
		else if (count9 <indexx9){ 
			document.getElementById("color9").style.backgroundColor = "#dba400";
			setCookie("check9", "#dba400");
		}
		else if (count9 ==indexx9){ 
			document.getElementById("color9").style.backgroundColor = "green";		 
			setCookie("check9", "green");
		}
		else{ 
			document.getElementById("color9").style.backgroundColor = "#dba400";
			setCookie("check9", "#dba400");
		}
	document.getElementById("examp91").innerHTML =  count9;//number clicked
	document.getElementById("examp92").innerHTML =  chkval9;
	
		document.getElementById("examp93").innerHTML =  nchkval9;
	
	document.getElementById("examp94").innerHTML = indexx9 +"indeses"; //total checkbox count

		var ckie9 = getCookie("check9");
		document.getElementById("color9").style.backgroundColor = ckie9;	
 }	
		</script>
		<script>
		 function submListNine(){
		 var cnt9 = document.getElementById("examp91").innerHTML;		
 var val9 = document.getElementById("examp92").innerHTML;
 var nval9 = document.getElementById("examp93").innerHTML;
  var clor9 = document.getElementById("color9").style.backgroundColor;
 	var shelt9 = "sh9";	 

var setrq9=new XMLHttpRequest();
			setrq9.open("POST", "evaclist.php", true);
			setrq9.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			setrq9.onreadystatechange=function(){
				if(setrq9.readyState==4 &&  setrq9.status==200){					
				}
			}
		setrq9.send("count="+cnt9+"&chk="+val9+"&nchk="+nval9+"&shelt="+shelt9+"&color="+clor9);		
 }		
</script>
								</table>
						<div id="examp91" class="row mx-5 mt-3" hidden></div>
				 <div class="row mx-5" hidden>Arrived:</div>
				 <div id="examp92" class="row mx-5" hidden></div>
				 <div id="examp93" class="row mx-5" hidden></div>
				<div id="examp94" class="row mx-5" hidden>
				</div>
				</div>
				<form action = "<?php $_PHP_SELF ?>" method = "GET">
				<div class="row mx-5">
				<input class="btn btn-info text-white" type="submit" value="Submit" name="assign" onclick='submListNine()'></input>
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
 
 var evacbtn = document.getElementById("evacBut");   //notif
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

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
      
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