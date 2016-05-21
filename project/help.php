<html>
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min1.css">
    <script src="js/jquery-1.12.3.min.js"></script>
    <script src="js/jquery-1.5.1.min.js"></script>
    <script src="js/menu.js"></script>
  </head>

  <body>
    <style>
    div.opis{
      display:none;
      text-decoration: none;
      height:200px;
      width:600px;
      padding:30px;
      margin-left: 260px;
      margin-top:30px;
      border-radius:10px;  
      box-shadow: 0px 5px 18px #000;
    }
    a.opislink {
      margin-top:30px;
      display:block;
    }
    </style>
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
        <i class="fa fa-bars" ></i>Menu</div>
        <img src="img/menu.png" height="18" width="18" style="margin-top:-22px; margin-left:10px;" >
        <div class="login" style="margin-top:-22px; margin-left:1170px;"> <a href="login1.php">Login</a></div><img src="img/login.png" height="18" width="18" style="margin-top:-22px; margin-left:1145px;" >
        <div class="reg" style="margin-top:-22px; margin-left:1250px;"><a href="reg.php">Sign up</a></div><img src="img/signup.png" height="18" width="18" style="margin-top:-22px; margin-left:1230px;"></div>
        <img src="img/pr1.jpg" height="600" width="1380" style="margin-top:-32px; -webkit-filter: blur(5px);">
        <div class="rectangle" style="width:900px;">
          <img src="img/list.png" style="width:47px; height:47px; margin-top:70px; margin-left:100px;">
          <div class="Wrap">
            <a href="#" class="opislink" style="text-decoration: none; margin-left: 160px; margin-top:-20px; color:white;" >How is the price determined for my reservation?</a>
            <div class="opis" style="color:white;">The total price of a reservation on Airbnb is based on a few factors. Note that the price is charged in full once a host accepts your reservation request (or if you use Instant Book).Costs determined by the host: Nightly price: Nightly rate decided by the host. Cleaning fee: One-time fee charged by some hosts to cover the cost of cleaning their space. Extra guest fees: One-time fee charged by some hosts to cover other costs related to using their space</div>
            <img src="img/list.png" style="width:47px; height:47px; margin-top:50px; margin-left:100px;">
            <div class="Wrap">
              <a href="#" class="opislink" style="text-decoration: none; margin-left: 160px; margin-top:-30px;color:white;" >How do reviews work?</a>
              <div class="opis" style="color:white;">All the reviews on Airbnb are written by hosts and travelers from our community, so any review you see is based on a stay that a guest had in a host's listing. Writing a review To leave a review for a recent trip, go to your Reviews. Reviews are limited to 500 words and must. follow Airbnb's review guidelines. You can edit your review for up to 48 hours, or until your host or guest completes their review.Review history To see reviews you've written or reviews about you, go to your Reviews. </div>
              <img src="img/list.png" style="width:47px; height:47px; margin-top:50px; margin-left:100px;">
              <div class="Wrap">
                <a href="#" class="opislink" style="text-decoration: none; margin-left: 160px; margin-top:-30px; color:white; ">Cancel a reservation as a guest</a>
                <div class="opis" style="color:white;">Before canceling a reservation, you should check your host’s cancellation policy to see if you’re eligible refund.Go to Your Trips. Next to the reservation you want to cancel, click View Itinerary. Under “Cancellation Policy”, find the host’s policy.See more information on the different cancellation policies.</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>

<script type="text/javascript">

$(document).ready(function(){

  $('a.opislink:not(.active)').live('click',function(){
    $(this).addClass('active');
    $(this).html('How is the price determined for my reservation?')
    $(this).parent().find('div.opis').slideDown(760)
    return false;
  });

  $('a.opislink.active').live('click',function(){
    $(this).removeClass('active');
    $(this).html('How is the price determined for my reservation?')
    $(this).parent().find('div.opis').slideUp(760)
    return false;
  });
});


</script>

 
