

 <!DOCTYPE html>

<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
	<title>
	Input employee
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
			<h1>Add new employee</h1>
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
	<h3 class = "maintext"></h3>
	<p style = "text-align:justify;">
	Please notice that for working location, each number from 1 to 13 stands for a location of an office that can be found in the offices table;
	<br>
	Please select the field(s) to use for sorting the data in the report
	
	</p>
	
	<div class = "container">

	<form action = 'input1.php' style = "text-align:center;" method = "post">
	First Name<input type = "text" name = "fname">
	Last Name<input type = "text" name = "lname">
	User Name<input type = "text" name = "user_name">
	Email<input type = "email" name = "email"><br>
	working_location<input type ="number" name = "working_location" min = "1" max = "13">
	phone_number<input type = "number" name = "phone">
	
	<?php
	include("/home/xl1638/config.php");
	$db_link = new mysqli($db_server,$db_user,$db_password,$db_name);
	$query = "
	SELECT DISTINCT(position)
	FROM employees;
	";
	$result = mysqli_query($db_link,$query);
	print("position: <select name = 'position'>");
	while ($line = mysqli_fetch_array($result))   {
    print("<option value=\"$line[0]\">$line[0]</option>\n");
		} // end of while
	print("</select>\n");
	?>
	start_date<input type = "start" name = "start_date">
	personal_web<input type = "text" name = "web">
	
	<br><br><br>
	<input type = 'submit' value = 'submit' name = 'submit'>
	<br>
	<hr>
	</form>

		
	</div><!--end of part all text division-->
	</div><!--end of biggest contain-->
	


	

	
	</html>