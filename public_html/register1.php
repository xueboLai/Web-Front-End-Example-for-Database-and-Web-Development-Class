<?php
$username = $_POST["name"];
$password = $_POST["password"];

$line = $username .":".$password."\n";
//open a file to append the line with "a" mode inside:
$wf = fopen("myusers.txt","a") or die ("can't write into files");
fwrite($wf,"$line");
?>
