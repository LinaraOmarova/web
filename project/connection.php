<?php 
	$con = new mysqli("localhost","root","","project");
	if(!$con){
		die($con->error);
	}
	$con->set_charset("utf-8");
?>