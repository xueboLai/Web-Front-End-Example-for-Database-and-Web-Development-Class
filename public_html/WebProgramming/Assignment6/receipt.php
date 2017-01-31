<!DOCTYPE html>
<html>
<head>
<title>Assignment 6 Receipt</title>
<link rel="stylesheet" type="text/css" href="receipt.css">
</head>
<body>
	<header id = "header2">
	<h2>receipt</h2>
	<!--<p style = "text-align:center;">Select checkout when you finished</p>-->
	<br>
	</header>
<?php
$name = $_GET['name'];
$email = $_GET["email"];
$ice = $_GET["ice"];
$quantity = $_GET["quantity"];
$price_for_vanilla = 1;
$price_for_chocolate = 2;
if($ice = "vanilla"){
	$result = $price_for_vanilla * $quantity;
	}
else{
	$result = $price_for_chocolate * $quantity;
	}
print("<p>Thank you for buying our ice cream.And here's your receipt</p>");
print("<p>Name:".$name."</p>");
print("<p>Email: $email</p>");
print("<p>Item: $ice</p>");
print("<p>Quantity: $quantity</p>");
print("<p>Total price".$result."</p>");
print("<p><a id = 'click' href = 'receipt1.php'>click here to view php source code.</a></p>");
?>
</body>
</html>