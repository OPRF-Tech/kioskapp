<?php
	
	require_once("../config.php");

	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$email = $_POST['email'];
	$date = date('m/d/y');

	$connection = mysql_connect('127.0.0.1', 'root', ' ');
	mysql_select_db('techin');
	$Q1 = "INSERT INTO members (firstName, lastName, dateJoined, email) VALUES ('$firstName', '$lastName', '$date', '$email')";
	$query = mysql_query($Q1);
	
	//echo("<result>true</result><error>" . $query . "</error>");
	//header('Location: signup.php');
?>
<!doctype html>
<html>
<head>
	<link rel="stylesheet" href="style.css" />
</head>
<body>
	<span class="pulse dark"><span></span></span>
	<h3>You may close the window</h3>
</body>
</html>