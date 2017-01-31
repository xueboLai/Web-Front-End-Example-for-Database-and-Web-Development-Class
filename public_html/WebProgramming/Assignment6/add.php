<!DOCTYPE html>
<html>
<head>
<title>Assignment 6</title>
</head>
<body>
<?php
$n1 = floatval($_GET['num1']) or exit("unable to convert");
$n2 = floatval($_GET['num2']) or exit("unable to convert");
$operator = $_GET['operator'];
	if($operator=="+"){
		$result = $n1+$n2;
		print("$n1 + $n2 = $result");
	}elseif($operator=="-"){
		$result = $n1-$n2;
		print("$n1 - $n2 = $result");
	}elseif($operator=="*"){
		$result = $n1*$n2;
		print("$n1 * $n2 = $result");
	}elseif($operator=="/"){
		$result = $n1/$n2;
		print("$n1 / $n2 = $result");
	}else{
	print("The operator is not supported");
	}
print("<p><a id = 'click' href = 'add1.php'>click here to view php source code.</a></p>");
?>
</body>
</html>