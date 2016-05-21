<?php 
	require_once("connection.php");
	$target_dir = "img/";
	$target_file = $target_dir . basename($_FILES["img"]["name"]);
	$img = "";
	if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
	    echo "The file ". basename( $_FILES["img"]["name"]). " has been uploaded.";
	    $img = basename( $_FILES["img"]["name"]);
	} else {
	    echo "Sorry, there was an error uploading your file.";
	}
	$title = $_POST['title'];
	$text = $_POST['text'];
	$query = "INSERT INTO news VALUES(null,'$title','$text','$img')";
	if($con->query($query)){
		header("Location:/project/login1.php");
	}else{
		$con->error;
	}
?>
<html>
<head></head>
<body><style type="text/css">
	body{
		background-image: url(img/pr1.jpg);
	}
	</style></body>
</html>