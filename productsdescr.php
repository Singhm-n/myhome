<?php
include_once 'conn.php';
session_start();
$result1=mysqli_query($conn,"select count(*) from cart");
$answer=mysqli_fetch_array($result1);
//$table="bedroom";
$id=$_GET['id'];
$table=$_GET['table'];
$product=mysqli_query($conn,"select * from $table WHERE id=$id");
$answer1=mysqli_fetch_array($product);
 ?>
<!DOCTYPE html>
<html>
<title><?php echo $answer1['name'];?></title>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
.button2 {background-color: #008CBA;}
.slider {
       width: 500px;
       height: 300px;
       background-color: yellow;
       margin-left: auto;
       margin-right: auto;
       margin-top: 0px;
       text-align: center;
       overflow: hidden;
     }
     .image-container {
       width: 1500px;
       background-color: #fff;
       height: 300px;
       clear: both;
       position: relative;
       -webkit-transition: left 2s;
       -moz-transition: left 2s;
       -o-transition: left 2s;
       transition: left 2s;
     }
     .slide {
       float: left;
       margin: 0px;
       padding: 0px;
       position: relative;
     }
     #slide-1:target ~ .image-container {
       left: 0px;
     }
     #slide-2:target ~ .image-container {
       left: -500px;
     }
     #slide-3:target ~ .image-container {
       left: -1000px;
     }
     .buttons {
       position: relative;
       top: -20px;
     }
     .buttons a {
       display: inline-block;
       height: 15px;
       width: 15px;
       border-radius: 50px;
       background-color: grey;
     }
* {
  box-sizing: border-box;
}
body {
  font-family: Arial, Helvetica, sans-serif;
}
.header {
  grid-area: header;
  background-color: #fff;

  text-align: center;
  font-size: 35px;
}


.grid-container {
  display: grid;
  grid-template-areas:
    'header header header header '
    'left left middle middle '
    'footer footer footer footer';
   grid-column-gap: 10px;
}

.left,
.middle {
  padding: 10px;
  height: 400px;
  width: 400px;
}

.left {
  grid-area: left;
  margin: 10px;
}


.middle {
  grid-area: middle;
  margin: 10px;
}

.w3-bar .w3-button {
  padding: 16px;
}

</style>
</head>
<body>
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
  <br><br><br><br><br>

  <div class="grid-container">
    <div class="header">
      <h2><?php echo $answer1['name'];?></h2>
    </div>

    <div class="left" style="background-color:#fff;"> <div class="slider">
      <span id="slide-1"></span>
      <span id="slide-2"></span>
      <span id="slide-3"></span>
      <div class="image-container">
        <img src="<?php echo $answer1['pic']; ?>" class="slide" width="500" height="300" />
        <img src="<?php echo $answer1['pic1'] ?>" class="slide" width="500" height="300" />
        <img src="<?php echo $answer1['pic2'] ?>" class="slide" width="500" height="300" />
      </div>
      <div class="buttons">
        <a href="#slide-1"></a>
        <a href="#slide-2"></a>
        <a href="#slide-3"></a>
      </div>
    </div></div>
    <div class="middle" style="background-color:#fff;">
<h1> Product Description</h1><br>
<p><?php echo $answer1['detail'];?></p>
<br><p style="color:grey; font-size:20px;">$<?php echo $answer1['price']; ?></p>
<a href="addpr.php?name=<?php echo $answer1['name']; ?>&price=<?php echo $answer1['price']; ?>&pic=<?php echo $answer1['pic']; ?>"><button class="button button2" id="cart">Add to Cart</button></a>
    </div>



  </div>

</body></html>
