<html>
<head>
<title>
PHP: SAMPLE FORM 1...CSCI-UA.60<title>
</head>
<body>

<h4>composer on file for <?php echo $_POST['lname'];?></h4>
<hr>
<?php
if(isset($_POST["sumbit"])){
ehco ("hello1");
include("/home/xl1638/config.php");
$db_link = new mysqli($db_server,$db_user,$db_password,$db_name);
if($db_link->connect_errno){
print("Failed to connect to MySQL:(".$db_link->connect_erro.")");
}
print("<p>Connection:".$db_link->host_info."\n");
print("\n<br> Connected successfully</p>\n");
/*Printing result in HTML:*/
}
echo "hello2"
?>
