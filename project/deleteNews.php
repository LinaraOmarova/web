<?php 
	require_once("connection.php");
	$id = $_GET['id'];
	$query = "DELETE FROM news WHERE id=".$id;
	$con->query($query);
	header("Location:/project/adminNews.php");
?>