<?php 
	require_once("connection.php");
	$email = $_POST["email"];
	$name = $_POST["name"];
	$pass = md5($_POST["pass"]);
	$query = "INSERT INTO users VALUES(null,'$email','$name','$pass',1)";
	if($con->query($query)){
		echo "OK";
	}else{
		echo $con->error;
	}
?>