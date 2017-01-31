<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>assignment6 Part4</title>
<link rel="stylesheet" type="text/css" href="main.css">
<script type = "text/javascript" src = "cart.js">
</script>
</head>
<body id = "body_part" style = "background-color:#FFFFFF;">
<div id = "whole">

<div style = "position:fixed;">
<nav>	

		<div class = "insideNav">
		<a href = "../../index.html" id  = "firstElement">Home Page</a>
		<a href = "../index.html" class = "navSelection">Home Page For Web Implementation</a>
		<a href = "madlib.html" class = "navSelection">Assignemnt6 Part 1-3</a>

		</div><!--end of insideNav-->
</nav><!--end of navigation bar-->
</div>
<div class ="main-part" style = "margin-left:12%; background-color:#FFFFFF; margin-right:12%;">
<header id = "header2">
	<h1>part 4, Online Quiz Application</h1>

	<h2>American history</h2>
	<!--<p style = "text-align:center;">Select checkout when you finished</p>-->
	</header>
	<form name = "history" id = "history" style= "text-align:center;line-height:300%" action = "quiz.php" method = "get">
	First Name<input type = "text" name = "fname"><br>
	Last Name<input type = "text" name = "lname"><br>
	<br>
	<p>
	Who is the first president of America?
	</p>
	George Washington <input type = "radio" name = "first" value ="washington" >
	John Adams <input type = "radio" name = "first" value ="john" >
	Thomas Jefferson <input type = "radio" name = "first" value ="thomas" >
	<br><br>
	<p>
	Who is the first secretary of state of America?
	</p>
	George Washington <input type = "radio" name = "second" value ="washington" >
	John Adams <input type = "radio" name = "second" value ="john" >
	Thomas Jefferson <input type = "radio" name = "second" value ="thomas" >
	<br><br>
	<p>
	Who is the first Secretary of the Treasury of America?
	</p>
	George Washington <input type = "radio" name = "third" value ="washington" >
	Alexander Hamilton <input type = "radio" name = "third" value ="hamilton" >
	Thomas Jefferson <input type = "radio" name = "third" value ="thomas" >
	<br><br>
		<p>
	Which is the first national bank of America?
	</p>
	Bank of the United States <input type = "radio" name = "fourth" value ="US" >
	Bank of America <input type = "radio" name = "fourth" value ="america" >
	Chase Bank <input type = "radio" name = "fourth" value ="chase" >
	<br>
	<input type = "reset" value = "reset">
	<input type = "submit" value = "submit" name = "submit">
	<br><br>
	</form>
<?php

if(isset($_GET['submit'])){
print("<head><link rel='stylesheet' type='text/css' href='quiz.css'></head>");
$fname = $_GET['fname'];
$lname = $_GET['lname'];
print("<p style = 'font-size:22px;'>Hello $fname $lname</p>");
print("<p>Here is your quiz result</p>");
$correct = 0;
if($_GET['first']=="washington"){
	print("<p>Your answer for question1 is correct</p>");
	print("<p>The answer is George Washington</p>");
	$correct+=1;
}else{
	print("<p>Your answer for question1 is incorrect</p>");
	print("<p>The answer should be George Washington</p>");
	}
	
if($_GET['second']=="thomas"){
	print("<p>Your answer for question2 is correct</p>");
	print("<p>The answer is Thomas Jefferson</p>");
	$correct+=1;
}else{
	print("<p>Your answer for question2 is incorrect</p>");
	print("<p>The answer should be Thomas Jefferson</p>");
	}
	
if($_GET['third']=="hamilton"){
	print("<p>Your answer for question3 is correct</p>");
	print("<p>The answer is Alexander Hamilton.</p>");
	$correct+=1;
}else{
	print("<p>Your answer for question3 is incorrect</p>");
	print("<p>The answer should be Alexander Hamilton.</p>");
	}

if($_GET['fourth']=="US"){
	print("<p>Your answer for question4 is correct</p>");
	print("<p>The answer is Bank of the United States</p>");
	$correct+=1;
}else{
	print("<p>Your answer for question4 is incorrect</p>");
	print("<p>The answer should be Bank of the United States</p>");
	}
	
$percentage = ($correct/4*100)."%";
print("<p>You got $percentage of the questions correct.</p>");
print("<p><a id = 'a12' style = 'background-color:black;' href = 'quiz1.php'>click here to view php source code.</a></p>");
}else{
echo "Please fullfill all the blankets.";
}

?>
</div>
</div>
</body>
</html>