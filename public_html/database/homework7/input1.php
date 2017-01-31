

 <!DOCTYPE html>

<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
	<title>
Avaliable housing
	</title>
	<head>

    <link rel="icon" href="http://getbootstrap.com/favicon.ico">




    <link href="css/bootstrap.min.css" rel="stylesheet">


    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

   
    <link href="css/custom.css" rel="stylesheet">



	<script src="js/jquery-3.1.0.min.js"></script>


	
	<script src="js/jquery-3.1.0.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>

	
	
	
  </head>




 <body background="pics/data.jpg">
	<!--start of nav-->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
		  <a class="navbar-brand" href="../../index.html">Home Page</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="../../WebProgramming/index.html">Database Design and Web Implementation</a></li>
            <li><a href="">Web Development and Programming</a></li>
			<li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Taken CS courses <span class="caret"></span></a>
                  <ul class="dropdown-menu dropdowninside">
                    <li><a href="Python.html">Python:Intro to Prog</a></li>
                    <li><a href="JAVA.html">JAVA:Object-oriented Prog</a></li>
					<li><a href="C++.html">C++:Object-oriented Prog </a></li>
                   
                  </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
	<!--end of nav-->
	
	<div class = "contain">
	
	<!--informtion about position-->
		<ol class="breadcrumb ">
			<li class = "pos"><a href="../../index.html">Home</a></li>
			<li><a href="../index.html">CSCI-UA.60-1</a></li>
			<li class="active">Assignment1</li>
		</ol>
	<!--information about position-->
	
	<div>
	<!--start of header-->

	<div class=" col-md-2" >
	</div>

		<div class="page-header col-md-8 maintext">
			<h1>Add to Employees' table</h1>
		</div>


	<div class="col-md-2 header" >
	</div>	
	</div>
	<!--end of header-->
	
	<!--start of assignment-->
<div class = "container">

	</div>	
	<!--end of assignment-->
	
	<div class = "container">

	<p style = "text-align:justify;">

	</p>
	
	<div class = "container">
	<?php
	include("/home/xl1638/config.php");
	$db_link = new mysqli($db_server,$db_user,$db_password,$db_name);
	if($db_link->connect_errno){
		die('Connect Error: ' . $db_link->connect_errno);
	}else{
		print("<p>Connected to database successfully</p>");
	}
	$first_name = mysqli_real_escape_string($db_link,$_POST['fname']);
	$last_name = mysqli_real_escape_string($db_link,$_POST['lname']);
	$user_name = mysqli_real_escape_string($db_link,$_POST['user_name']);
	$email = mysqli_real_escape_string($db_link,$_POST['email']);
	$working_location = mysqli_real_escape_string($db_link,$_POST['working_location']);
	$phone = mysqli_real_escape_string($db_link,$_POST['phone']);
	$position = mysqli_real_escape_string($db_link,$_POST['position']);
	$start = mysqli_real_escape_string($db_link,$_POST['start_date']);
	$web = mysqli_real_escape_string($db_link,$_POST["web"]);
	$flag = 0;
	
	
	
	/*
	First Name<input type = "text" name = "fname">
	Last Name<input type = "text" name = "lname">
	User Name<input type = "text" name = "user_name">
	Email<input type = "email" name = "lname"><br>
	working_location<input type ="number" name = "working location" min = "1" max = "13">
	phone_number<input type = "number" name = "phone">
	position<input type = "text" name = "position"><br>
	start_date<input type = "start" name = "start_date">
	personal_web<input type = "text" name = "web">
	*/
		
	if ((empty ($first_name)) OR (empty($last_name)) OR (empty($user_name))OR (empty($email)) OR (empty($position))OR (empty($working_location))OR (empty($phone))OR (empty($start))OR (empty($web))){
		$flag = 1;
	}
	/*
	
print("<h3><i>Added to the Artist's Table: </i></h3>\n");
print("\t<i>Name:</i> $aname <br>\n");
print("\t<i>Nationality:</i> $country<br>\n ");
print("\t<i>Year born:</i> $byear <br>\n");
print("\t<i>Year died:</i> $dyear<br>\n");
print("\t<i>URL:</i> $URL\n");
	*/
	if($flag==0){
	print("<h1 style = 'text-align:center;'>Information that has been added:</h1>");
	print("<h3 style = 'text-align:center;'>First Name:$first_name</h3>");
	print("<h3 style = 'text-align:center;'>Last Name:$last_name</h3>");
	print("<h3 style = 'text-align:center;'>User Name:$user_name</h3>");
	print("<h3 style = 'text-align:center;'>Email:$email</h3>");
	print("<h3 style = 'text-align:center;'>Working_location:$working_location</h3>");
	print("<h3 style = 'text-align:center;'>Phone:$phone</h3>");
	print("<h3 style = 'text-align:center;'>Position:$position</h3>");
	print("<h3 style = 'text-align:center;'>Start_date:$start</h3>");
	print("<h3 style = 'text-align:center;'>Personal_website:$web</h3>");
	}else{
	die("<h2 style = 'text-align:center;'>Please complete all the data.<h2>");
	}
	
	
	$query ="INSERT INTO employees (first_name,last_name,user_name,email,working_location,phone_number,position,deal,start_date,end_date,personal_web)
           VALUES (\"$first_name\",\"$last_name\",\"$email\",\"$working_location\", \"$phone\",\"$position\",0,\"$start\",NULL,\"$web\")"; 
	
	if ($stmt = $db_link->prepare("INSERT INTO employees (first_name,last_name,user_name,email,working_location,phone_number,position,deal,start_date,end_date,personal_web)
           VALUES (?,?,?,?,?,?,?,?,?,?,?)")){
		  /* (\"$first_name\",\"$last_name\",\"$email\",\"$working_location\", \"$phone\",\"$position\",0,\"$start\",NULL,\"$web\")")*/
		  $end = NULL;
		  $deal = 0;
		  $stmt->bind_param("ssssiisisss",$first_name,$last_name,$user_name,$email,$working_location,$phone,$position,$deal,$start,$end,$web);
		  $stmt->execute();
		  $stmt->close();
		   }
	//mysqli_free_result($stmt);


	mysqli_close($db_link);
	?>
	<br><br><br>
	<hr>
	</div><!--end of part all text division-->
	
	</div><!--end of biggest contain-->
	


	

	
	</html>