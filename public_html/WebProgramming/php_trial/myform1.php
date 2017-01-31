
<DOCTYPE HTML>
<HEAD>
<TITLE> TRIAL</TITLE>
</HEAD>
<BODY>
<h1>Thank you for shopping at my online store</h1>
<?php
$fname = $_POST["fname"];
$email = $_POST["email"];
$num1 = floatval($_POST["num1"]);
$num2 = floatval($_POST["num2"]);
print("Hello, $fname<br>");
print($email."<br>");
print($num1."<br>");
print($num2."<br>");
print($num1+$num2."<br>");


print("<ul>");
foreach($_POST as $key => $value){
	print("<li>$value");
}
print("</ul>");
?>

</BODY>
</HTML>

