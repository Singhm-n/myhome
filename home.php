<?php
include_once 'conn.php';
session_start();
$email=$_SESSION['email'];
$usererr="";
if(isset($_POST['feed12'])){

  $mess=$_POST['mess'];
  if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    $usererr="Enter a valid Email";
}
else{
    $sql="INSERT INTO feedback(email,mess) VALUES ('$email','$mess')";
    mysqli_query($conn,$sql);
    echo "<script type'text/javascript'> document.location ='home.php';</script>";
  }
}
$result1=mysqli_query($conn,"select count(*) from cart");
$answer=mysqli_fetch_array($result1);
 ?>

<!DOCTYPE html>
<html>
<title>Welcome, <?php echo $_SESSION['fname']; ?></title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}

body, html {
  height: 100%;
  line-height: 1.8;
}
* {box-sizing: border-box;}


.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}


.form-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}


.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}


.form-container .btn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}


.form-container .cancel {
  background-color: red;
}


.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}


.bgimg-1 {
  background-position: center;
  background-size: cover;
  background-image: url("home1.jpg");
  min-height: 100%;
}

.w3-bar .w3-button {
  padding: 16px;
}

</style>
<body>



    <div class="w3-top">
      <div class="w3-bar w3-black w3-card" id="myNavbar">
        <a href="home.php" class="w3-bar-item w3-button w3-wide">HOME</a>
        <a href="bedroom.php" class="w3-bar-item w3-button w3-wide">BEDROOM</a>
        <a href="livingroom.php" class="w3-bar-item w3-button w3-wide">LIVING ROOM</a>
        <a href="kitchen.php" class="w3-bar-item w3-button w3-wide">KITCHEN</a>
        <a href="babies.php" class="w3-bar-item w3-button w3-wide">BABIES</a>


        <div class="w3-right w3-hide-small">
          <a href="aboutafter.php" class="w3-bar-item w3-button">ABOUT</a>
          <a href="cart.php" class="w3-bar-item w3-button"> CART(<?php echo $answer[0]; ?>)</a>
          <a href="profileuser.php" class="w3-bar-item w3-button"><i class="fa fa-user"></i> <?php echo $_SESSION['fname'];?></a>
        </div>
    </div></div>

<br><br>

<header class="bgimg-1 w3-display-container w3-grayscale-min" id="home">
  <div class="w3-display-left w3-text-white" style="padding:48px">
   <span class="w3-jumbo w3-hide-small">Build your home with MyHome</span><br>
    <span class="w3-xxlarge w3-hide-large w3-hide-medium"></span><br>
    <span class="w3-large">Start shopping today!</span>
    <p><a href="#about" class="w3-button w3-white w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-opacity-off">Want to know more?</a></p>
  </div>

</header>




<br><br><br>
<div class="w3-container w3-light-grey" style="padding:128px 10px">
  <div class="w3-row-padding">
    <div class="w3-col m6">
      <h3>Check our designs</h3>
      <p>Specially designed to suit your home needs and<br>complements your interior. </p>
      <p><a href="#work" class="w3-button w3-black"><i class="fa fa-th"> </i> BEDROOM</a></p>
    </div>
    <div class="w3-col m6">
      <img class="w3-image w3-round-large" src="home2.jpg" alt="Furniture" width="700" height="350">
    </div>
  </div>
</div>
<div class="container">

  <div id="myCarousel" class="carousel slide" data-ride="carousel">

    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>


    <div class="carousel-inner">
      <div class="item active">
        <img src="home3.jpg" alt="furniture" style="width:100%;">
      </div>

      <div class="item">
        <img src="home4.jpg" alt="furniture" style="width:100%;">
      </div>

      <div class="item">
        <img src="home5.jpg" alt="furniture" style="width:100%;">
      </div>
    </div>

    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<div class="w3-container" style="padding:128px 16px" id="about">
  <h3 class="w3-center">ABOUT OUR WEBSITE</h3>
  <p class="w3-center w3-large">Key features of our website</p>
  <div class="w3-row-padding w3-center" style="margin-top:64px">
    <div class="w3-quarter">
      <i class="fa fa-desktop w3-margin-bottom w3-jumbo w3-center"></i>
      <p class="w3-large">Order Online</p>
      <p>Order online and get the items delivered at your doorsteps.</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-heart w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Passion</p>
      <p>Every product is quality tested so as to meet our best standards.</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-diamond w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Design</p>
      <p>Every item is designed to suit your needs</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-cog w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Installment</p>
      <p>Free installation for every product you buy.</p>
    </div>
  </div>
</div>

<div class="w3-container w3-light-grey" style="padding:128px 16px" id="contact">
  <h3 class="w3-center">ABOUT</h3>
  <p class="w3-center w3-large">Know us better!</p>
  <div style="margin-top:48px">
    <p><i class="fa fa-map-marker fa-fw w3-xxlarge w3-margin-right"></i> Montreal, CANADA</p>
    <p><i class="fa fa-phone fa-fw w3-xxlarge w3-margin-right"></i> Phone: +1 7474747474</p>
    <p><i class="fa fa-envelope fa-fw w3-xxlarge w3-margin-right"> </i> Email: xyz@gmail.com</p>
      <br></div></div><button class="open-button" onclick="Formop()">Feedback</button>
    <div class="form-popup" id="myForm">
      <form action="home.php" class="form-container" method="POST">
        <h2>Feedback System</h2>
        <label></label>&nbsp;<label style="color : red"></label>&nbsp;<label style="color : red"><?php echo $usererr;?></label>



        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="<?php echo $_SESSION['email']; ?>" name="email12" disabled required>

        <label for="psw"><b>Feedback</b></label>
        <input type="text" placeholder="Your Feedback" name="mess" required>

        <button type="submit" class="btn" name="feed12">Submit</button>
        <button type="button" class="btn cancel" onclick="close()">Close</button>
      </form>
    </div>

    <script>
    function Formop() {
      document.getElementById("myForm").style.display = "block";
    }

    function close() {
      document.getElementById("myForm").style.display = "none";
    }
    </script>


    <footer class="w3-center w3-black w3-padding-64">
      <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
    <br><br>
      <p>Made with Love from TEAM 4</p>
    </footer>
</body>
</html>
