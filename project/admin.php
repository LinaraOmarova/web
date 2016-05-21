<?php 
	session_start();
	if(!isset($_SESSION['uid']) || $_SESSION['status']!=0){
		header("Location:/project/login1.php");
	}
	require_once("connection.php");/*позволяет включать файлы в PHP сценарий до выполнения сценария PHP*/
	$query = "SELECT * FROM users";
	$res = $con->query($query)
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min1.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<meta charset="utf-8">
</head>
<body>
	<style type="text/css">
	body{
		background-image: url(img/pr1.jpg);
	}
	</style>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Add News</h4>
      </div>
      <div class="modal-body">
        <form method="POST" action="addNews.php" enctype="multipart/form-data">
          <div class="form-group">
		    <label for="exampleInputFile">Image</label>
		    <input type="file" id="exampleInputFile" name="img">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputEmail1">Title</label>
		    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Title" name="title">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputPassword1">Text</label>
		    <textarea class="form-control" id="exampleInputPassword1" name="text" rows="7"></textarea>
		  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Add News</button>
      </div>
      </form>
    </div>
  </div>
</div>
<center><a href="logout.php"><button class="btn btn-success" style="margin-left:-1050px;opacity: 0.6; cursor: not-allowed; color:#ff4081;">Logout</button></a>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" class="btn btn-success" style="opacity: 0.6; cursor: not-allowed; color:#f50057">Add News</button>
<a href="adminNews.php"><button type="button" class="btn btn-success" style="color:#ff4081; opacity: 0.6; cursor: not-allowed;">News</button></a>
</center>
<table class="table table-bordered">
<thead>
  <tr>
    <th>Id</th>
    <th>Name</th>
    <th>Email</th>
    <th>Status</th>
    <th>Delete</th>
  </tr>
</thead>
<tbody>
<?php while($item = $res->fetch_assoc()){?>
	<tr><td><?=$item['id']?></td><td><?=$item['name']?></td><td><?=$item['email']?></td><td><?=$item['status']?></td><td><a href="delete.php?id=<?=$item['id']?>"><button class="btn btn-danger">Delete</button></a></td></tr>
<?php } ?>
</tbody>
</table>
</body>
</html>