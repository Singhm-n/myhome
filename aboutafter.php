<?php
include_once 'conn.php';
session_start();

 ?>
<!DOCTYPE html>
<html>
<title></title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}

body, html {
  height: 100%;
  line-height: 1.8;
}



.w3-bar .w3-button {
  padding: 16px;
}
</style>
<body>


  <body>
    <div class="w3-top">
      <div class="w3-bar w3-black w3-card" id="myNavbar">
        <a href="index.php" class="w3-bar-item w3-button w3-wide">HOME</a>
        <a href="bedroom.html" class="w3-bar-item w3-button w3-wide">BEDROOM</a>
        <a href="livingroom.html" class="w3-bar-item w3-button w3-wide">LIVING ROOM</a>
        <a href="kitchen.html" class="w3-bar-item w3-button w3-wide">KITCHEN</a>
        <a href="babies.html" class="w3-bar-item w3-button w3-wide">BABIES</a>


        <div class="w3-right w3-hide-small">
          <a href="aboutafter.php" class="w3-bar-item w3-button">ABOUT</a>
          <a href="#" class="w3-bar-item w3-button"> CART</a>
          <a href="login.html" class="w3-bar-item w3-button"><i class="fa fa-user"></i> <?php echo $_SESSION['fname'];?></a>
        </div>
    </div></div>
    <div class="w3-container w3-row w3-center w3-dark-grey w3-padding-64">
      <div class="w3-quarter">
        <span class="w3-xxlarge">20+</span>
        <br>Distributors
      </div>
      <div class="w3-quarter">
        <span class="w3-xxlarge">100+</span>
        <br>Products
      </div>
      <div class="w3-quarter">
        <span class="w3-xxlarge">100+</span>
        <br>Happy Customers
      </div>
      <div class="w3-quarter">
        <span class="w3-xxlarge">150+</span>
        <br>Orders Delivered
      </div>
    </div>
    <div class="w3-container" style="padding:128px 16px" id="team">
      <h3 class="w3-center">THE TEAM</h3>
      <p class="w3-center w3-large">The ones who runs this website</p>
      <div class="w3-row-padding w3-grayscale" style="margin-top:64px">
        <div class="w3-col l3 m6 w3-margin-bottom">
          <div class="w3-card">
            <img src="image1.jpg" alt="Ranjit" style="width:100%">
            <div class="w3-container">
              <h3>Ranjit</h3>
              <p class="w3-opacity">Team Leader</p>
              <p>The team leader</p>
              <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></p>
            </div>
          </div>
        </div>
        <div class="w3-col l3 m6 w3-margin-bottom">
          <div class="w3-card">
            <img src="image4.jpg" alt="mansimran" style="width:100%">
            <div class="w3-container">
              <h3>Mansimran Singh</h3>
              <p class="w3-opacity">Team Member</p>
              <p>Team Member</p>
              <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></p>
            </div>
          </div>
        </div>
        <div class="w3-col l3 m6 w3-margin-bottom">
          <div class="w3-card">
            <img src="image3.jpg" alt="Manpreet" style="width:100%">
            <div class="w3-container">
              <h3>Manpreet Singh</h3>
              <p class="w3-opacity">Team Member</p>
              <p>Team Member</p>
              <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></p>
            </div>
          </div>
        </div>
        <div class="w3-col l3 m6 w3-margin-bottom">
          <div class="w3-card">
            <img src="image2.jpg" alt="Brinda" style="width:100%">
            <div class="w3-container">
              <h3>Brinda</h3>
              <p class="w3-opacity">Team Member</p>
              <p>Team Member</p>
              <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></p>
            </div>
          </div>
        </div>
      </div>
    </div>
