<?php  
  require_once("connection.php");
  $query = "SELECT * FROM news";
  $res = $con->query($query)
?>
<html>
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min1.css">
    <script src="js/jquery-1.12.3.min.js"></script>
    <script src="js/menu.js"></script>
  </head>
  <body>

    <div class="menu">
      <div class="icon-close">
        <img src="img/close.jpg">
      </div>
      <ul>
        <li><a href="index1.php">Home</a></li>
        <li><a href="news.php">News</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="galary.php">Galary</a></li>
        <li><a href="help.php">Help</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </div>
    <div class="jumbotron" style="background: #343642;">

      <div class="icon-menu">
        <i class="fa fa-bars" ></i>
        Menu
      </div>
      <div><img src="img/menu.png" height="18" width="18" style="margin-top:-22px; margin-left:10px;" >
      <div class="login" style="margin-top:-22px; margin-left:1170px;"> <a href="login1.php">
        Login</a>
      </div>
      <div><img src="img/login.png" height="18" width="18" style="margin-top:-22px; margin-left:1145px;" ></div>
      <div class="reg" style="margin-top:-22px; margin-left:1250px;"><a href="reg.php">
        Sign up</a>
      </div>
      <img src="img/signup.png" height="18" width="18" style="margin-top:-22px; margin-left:1230px;">
      <img src="img/pr1.jpg" height="600" width="1380" style="margin-top:1px; -webkit-filter: blur(5px);">
      </div>
    
    </div>
  </div>

  <div class="row">
  <?php while($item = $res->fetch_assoc())/*Извлекает результирующий ряд в виде ассоциативного массива*/{?> 
    <div class="col-sm-6 col-md-4" style="display:inline-block; height:400px;">
      <div class="thumbnail">
        <img src="img/<?=$item['img']?>" alt="...">
        <div class="caption">
          <h3><?=$item['title'];?></h3>
          <p><?=$item['text'];?></p>
          <p><a href="newyork.php" class="btn btn-primary" role="button">More</a> 
        </div>
      </div>
    </div>
    <?php } ?>
  </div>
  </body>
</html>


 
