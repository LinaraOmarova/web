<?php  
	require_once("connection.php");
	$query = "SELECT * FROM news";
	$res = $con->query($query)
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<meta charset="utf-8">
</head>
<body> 
	<div class="row">
	<?php while($item = $res->fetch_assoc()){?>
	  <div class="col-sm-6 col-md-4" style="display:inline-block; height:400px;">
	    <div class="thumbnail">
	      <img src="img/<?=$item['img']?>" alt="...">
	      <div class="caption">
	        <h3><?=$item['title'];?></h3>
	        <p><?=$item['text'];?></p>
	        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
	      </div>
	    </div>
	  </div>
	  <?php } ?>
	</div>
</body>
</html>