

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
			<h1>Result of available/unavailable housing</h1>
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
	$a = $_GET["checkp"];
	//print("<p>$a</p>");
	if(strcmp($a,"available")==0){
	$a = "WHERE t.transaction_time IS NULL"; 
	//print("<p>WHERE t.transaction_time IS NULL</p>");
	}else{
	$a = "WHERE t.transaction_time IS NOT NULL";
	//print("<p>WHERE t.transaction_time IS NOT NULL</p>");
	}
	$query = "
	 SELECT p.id,p.country,p.state_name,p.city,p.street,p.zip,p.area,t.price,t.transaction_time,p.picture
	 FROM properties p LEFT JOIN transactions t ON t.property_id = p.id 
	 $a
	 ORDER BY p.id;
	";
	print("<p>Query for sql: $query</p>");
	$result = mysqli_query($db_link,$query);
	$numOfRows = mysqli_num_rows($result);
	if($numOfRows<=0){
	print("<p>No records meet the criteria.</p>");
	}else{
	print("\n<table>\n");
	print("<tr>");
	print("<th>id</th>");
	print("<th>country</th>");
	print("<th>state</th>");
	print("<th>city</th>");
	print("<th>street</th>");
	print("<th>zip code</th>");
	print("<th>area of the property</th>");
	print("<th>price</th>");
	print("<th>transaction_time</th>");
	print("<th>picture</th>");
	print("</tr>");
	while($row = mysqli_fetch_array($result,MYSQL_ASSOC)){
	print("<tr>");
		foreach($row as $col_value){
			if(substr($col_value,-3)=="jpg"){
				print("<td>");
				print("<figure><img src = '$col_value'></img></figure>");
				print("</td>");
			}else{
				print("<td>");
				print($col_value);
				print("</td>");
			}
		}
	print("</tr>");
	}
	print("\n</table>");
	print("\n<p>There are $numOfRows records that meet the criteria.</p>");
	}
	mysqli_free_result($result);
	mysqli_close($db_link);
	?>
	<br><br><br>
	<hr>
	</div><!--end of part all text division-->
	
	</div><!--end of biggest contain-->
	


	

	
	</html>