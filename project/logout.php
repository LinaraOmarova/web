<?php 
	session_start();
	session_destroy();
	header("Location:/project/login1.php");
?>