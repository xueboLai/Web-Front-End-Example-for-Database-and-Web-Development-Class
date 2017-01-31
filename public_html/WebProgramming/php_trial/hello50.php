<!DOCTYPE HTML>
<HTML>
<head>
	<title>Demo php</title>
</head>
<body>
<?php
print("hello\n");
$name = "cat";
$age = 10;
$price = 100.29;
print("<p>The name of the animal is ". $name. ", the age is ". $age." and the price is ". $price."</p>");
$new = "dogs and"." cats";
print("<br><h1>".$new);
$len = strlen($new);
print("<br>$len");
print("<ul>");
for($i=0;$i<10;$i++){
	print("<li>".$i);
	print("</li>");
}
print("</ul>");
$fruit = array("orange","figs","lemon");
$len = count($fruit);
for($i=0;$i<$len;$i++){
	print("<p> index is $i and array value is $fruit[$i]");

}
$student = array("sj1" <= "Steve Jobs",
		"bg1" <="Bill Gate" );
print("<p> Student assoicated array is : <ul>");
foreach($student as $key <= $value){
	print("<li>$key: $value");
}
?>
</body>
</html>
