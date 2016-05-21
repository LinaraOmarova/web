<html>
  <head>
    <meta charset="UTF-8">
  
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min1.css">
  <script src="js/jquery-1.12.3.min.js"></script>
  <script src="js/menu.js"></script>

  <script type="text/javascript" src="js/jquery.js"></script>
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
      <div class="login" style="margin-top:-22px; margin-left:1170px;"><a href="login1.php">
        Login</a>
      </div>
      <div><img src="img/login.png" height="18" width="18" style="margin-top:-22px; margin-left:1145px;" ></div>
      <div class="reg" style="margin-top:-22px; margin-left:1250px;"> <a href="reg.php">
        Sign up</a>
      </div>
      <img src="img/signup.png" height="18" width="18" style="margin-top:-22px; margin-left:1230px;">
      <img src="img/pr1.jpg" height="800" width="1530" style="margin-top:1px; -webkit-filter: blur(5px);">
    </div>
  <div class="row">
    <div class="col-md-8 col-md-offset-2" style = "padding:30px; width:500px;  margin-left:400px; margin-top: -700px;">
      <div class="col-md-5" style="margin-left:70px; ">
      <div class="col-md-5">
        <h3>Login</h3>
        <div class="form-group">
          <label for="exampleInputEmail1">Email_address</label>
          <input type="email" class="form-control" id="email1" placeholder="Email" style = "width:245px;">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" id="pass1" placeholder="Password" style = "width:245px;">
        </div>
        <button type="submit" class="btn btn-warning" onClick="login()" style = "margin-left:85px; text-decoration: none;">Login</button>
        <div class="result2"></div>
      </div>
    </div>    
  </div>

  </body>
</html>
<script type="text/javascript">
  function login(){
    var email = $('#email1').val();
    $.ajax({
      type: 'POST',
      url: 'login.php',
      data: "email="+email+"&pass="+pass,
      success: function(data){
        console.log(data); /*вывести отладочную информацию, не мешая пользователю*/
        if(data=="0"){
          window.location.replace("admin.php");/* Получает/устанавливает URL окна и его компоненты.заменить 
          текущий документ на документ по указанному url.страница не записывается в истории посещений.*/
        }else if(data=="1"){
          window.location.replace("index1.php");
        }else{
          $('.result2').html(data);
        }
      }
    });
  }
</script>


 
