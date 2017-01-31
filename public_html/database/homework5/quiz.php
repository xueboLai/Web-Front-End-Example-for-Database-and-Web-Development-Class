<!DOCTYPE HTML>
<html>
<head>
<title>PHP: the result of quiz</title>

</head>
<body>
<?php print(" <h3> Thank you for taking the quiz! </h3><br><p>Here is your result</p>"); 
//initize a value result to count the quiz questions that the user got it right.
	$result = 0;
	/*if(isset($_POST[’purchased')) {}*/
	//use if statement to check each of user's answer;
	if(isset($_POST["q1"])&&$_POST["q1"]=="firefly"){
		$result = $result+1;
		}
	else{
		print("You got the first question wrong. For first question, the answer is The Light of a Firefly Forest"."<br>");}
	if(isset($_POST["q2"])&&$_POST["q2"]=="naruto"){
		$result = $result+1;
		}
	else{
		print("You got the second question wrong. For second question, the answer is Naruto"."<br>");}
	if(isset($_POST["q3"])&&$_POST["q3"]=="sword"){
		$result = $result+1;
		}
	else{
		print("You got the third question wrong. For third question, the answer is Sword Art Online"."<br>");}
	if(isset($_POST["q4"])&&$_POST["q4"]=="pet"){
		$result = $result+1;
		}
	else{
		print("You got the fourth question wrong. For fourth question, the answer is Pet girl of sakurasou"."<br>");
		}
	if(isset($_POST["q5"])&&$_POST["q5"]=="zero"){
		$result = $result+1;
		}
	else{
		print("You got the fifth question wrong. For fifth question, the answer is Re:Zero -Starting Life in Another World"."<br>");
		}
	if(isset($_POST["q6"])&&$_POST["q6"]=="diary"){
		$result = $result+1;
		}
	else{
		print("You got the sixth question wrong. For sixth question, the answer is Future Diary "."<br>");
		}
	if($result>3){
		print("<p>You got ".$result." out of 6 right. Great job!  </p>"); 
	}else{
		print("<p>You got ".$result." out of 6 right. That was awful!  </p>");  
		}
	
	?>

 </body>
 </html>
