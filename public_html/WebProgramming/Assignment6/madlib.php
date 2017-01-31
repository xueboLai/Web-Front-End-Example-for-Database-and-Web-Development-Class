<!DOCTYPE html>
<html>
<head>
<title>Assignment 6</title>
</head>
<body>
<?php

$a1 = $_POST['adjective1'];
$a2 = $_POST['adjective2'];
$n1 = $_POST['noun1'];
$n2 = $_POST['noun2'];
$n3 = $_POST['noun3'];
$v1 = $_POST['verb1'];
$v2 = $_POST['verb2'];
$num = $_POST['num'];
print("<p>Here is your mad lib output</p>\n");
print("<p>The $a1 $n1 $v1 the $a2 house</p>\n");
print("<p>There he/she saw a $n2 $v2"."ing "."with $num $n3.");
print("<p><a id = 'click' href = 'madlib1.php'>click here to view php source code.</a></p>");
?>
</body>
</html>