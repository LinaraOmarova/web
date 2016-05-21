<?php 
	$email = $_POST['email'];
	$pass = md5($_POST['pass']);
	require_once("connection.php");
	$query = "SELECT * FROM users WHERE email='".$email."' AND password='".$pass."'";
	if($res = $con->query($query)){
		if(mysqli_num_rows($res)>0){/*Gets the number of rows in a result*/
			$row = $res->fetch_assoc();/*Извлекает результирующий ряд в виде ассоциативного массива*/
			session_start();
			$_SESSION['uid'] = $row['id'];
			$_SESSION['name'] = $row['name'];
			$_SESSION['email'] = $row['email'];
			$_SESSION['status'] = $row['status'];
			echo $row['status'];
		}else{
			echo "No such user";
		}
	}else{
		echo $con->error;
	}
?>