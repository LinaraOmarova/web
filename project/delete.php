<?php 
	require_once("connection.php");
	$id = $_GET['id'];
	$query = "DELETE FROM users WHERE id=".$id;
	$con->query($query);
	header("Location:/project/admin.php");
?>