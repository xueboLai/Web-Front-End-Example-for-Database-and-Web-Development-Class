 <!DOCTYPE html>

<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
	<title>Web Development and Programmin, Section 002 </title>
	<head>

    <link rel="icon" href="http://getbootstrap.com/favicon.ico">




    <link href="css/bootstrap.min.css" rel="stylesheet">


    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

   
    <link href="css/custom.css" rel="stylesheet">



	<script src="js/jquery-3.1.0.min.js"></script>
	<script src = "design.js"></script>

	
	<script src="js/jquery-3.1.0.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>

	
	
	
  </head>




 <body background="pics/grass4.jpg">
	<div class = "contain">
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
		  <a class="navbar-brand" href="../index.html">Home Page</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="../database/index.html">Database Design and Web Implementation</a></li>
            <li><a href="index.html">Web Development and Programming</a></li>
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
	
	<!--informtion about position-->
		<ol class="breadcrumb ">
			<li class = "pos"><a href="../../index.html">Home</a></li>
			<li class="active"><a href="../index.html">Web Programming home</a></li>
			<li class="active">Assignment7</li>
		</ol>
	<!--information about position-->
	
	<div>
	<!--start of header-->

	<div class=" col-md-2" >
	</div>

		<div class="page-header col-md-8 maintext">
			<h1 style = "font-family:'Georgia'; font-style: oblique;font-size:45px;", Times, serif;">Welcome to Xuebo's online robotic shop!!!!</h1>
			<br>

			<a href = "login.html"> <button type="button" class="btn btn-default btn-lg" id = "b0" >
			Log in
			</button></a>
			<a style = "color: white;"href = "signup.html"><button type="button" class="btn btn-primary btn-lg" id = "b1">
			Sign up 
			</button></a>
			<a href = "search.html"><button type="button" class="btn btn-success btn-lg" id = "b2">
			Search 
			</button></a>
			<a href = "product.php"><button type="button" class="btn btn-info btn-lg" id = "b3" >
			Products
			</button></a>
			<button type="button" class="btn btn-warning btn-lg" id = "b4">
			About
			</button>
			<button type="button" class="btn btn-danger btn-lg" id = "b5">
			Video
			</button>
			</div>


	<div class="col-md-2 header" >
	</div>	
	</div>
	<!--end of header-->
	



	
	
	
	<div class = "container">
	
	</div>
		<div class = "container">
	
	</div>
	
	
	
	
	
	<br><br>
	
	<div class = "container" id = "demo" height = "600px;" style = "text-align:center;">
	



	</div>
	<div class = "container" id = "demo1" height = "600px;" style = "text-align:center;">
	<?php
		$name = $_POST['name'];
		$password = $_POST['passwd'];
		$open_file = fopen("users.txt","a") or die("Something about the file you are looking for is wrong.");
		fwrite($open_file,$name.":".$password."\n");
		fclose($open_file);

	print("<p style = 'font-size:28px;text-align:center;'>Congrats! $name <br>The user name and password have been written into our databases</p>");

	
	?>
	<br>
	<br>	
	<a href = "signup1.php" style = "font-size:24px; color:brown;">Click here to see the php source code for signup.php</a>



	</div>
	
	<br><br>
	<hr>
	<div class="col-md-12">
		<img src = "pics/welcome.jpg" alt = "there is pic" class = "top">
	</div>	
	<br><br>
	<hr>
	
	</div>

	</div>

	
	</html>