

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
			<h1>Select available or unavailable housing</h1>
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
	<h3 class = "maintext">Menu</h3>
	<p style = "text-align:justify;">
	(If a house has shown up in the transaction table, it's considered sold; otherwise, it's still available);<br>
	(Using two table, properties and transaction);<br>
	(The form is created by php).<br>
	(Result includes picture)<br>
	(Result indicates how many records that meet the criteria or there is no records meeting the criteria)<br>
	Please select whehter you want to see the house that is still available or has been sold.
	</p>
	
	<div class = "container">
	<?php
	include("/home/xl1638/config.php");
	$db_link = new mysqli($db_server,$db_user,$db_password,$db_name);
	$query = "
	SELECT DISTINCT(status)
	FROM properties;
	";
	$result = mysqli_query($db_link,$query);
	print("<form action = 'housing1.php'>\n");
	print("<select name = 'checkp'>\n");
	$counter = 0;
	$nameOfO;
	while ($line = mysqli_fetch_array($result))   {
    print("<option value=\"$line[0]\">$line[0]</option>\n");
		} // end of while
	print("</select>\n");
	print("<input type = 'submit' value = 'submit' name = 'submit'>\n");
	?>
	<br><br><br>
	<hr>
	</div><!--end of part all text division-->
	
	</div><!--end of biggest contain-->
	


	

	
	</html>