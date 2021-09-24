<?php
include_once 'conn.php';
$usererr="";
if(isset($_POST['forgot_user'])){
  $email=$_POST['email'];
  $pass=$_POST['psw'];
  $pass1=$_POST['psw1'];
  if($pass==$pass1){
$sql="SELECT email FROM user where email='$email'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
    $clearq = "UPDATE user SET pass = '$pass' WHERE email = '$email';";
    if (mysqli_query($conn,$clearq)) {
      echo '<script>alert("Password changed successfully.")</script>';
      echo "<script type='text/javascript'> document.location = 'login.php'; </script>";
  }
  }
else{
  $usererr="User does not exist";

}}  else{
    $usererr="Password do not match";
  } }?>
<!DOCTYPE html>
<html>
<title>Forgot Password</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
  .w3-bar .w3-button {
    padding: 16px;
  }
  body, html {
    background-position: center;
    background-size: cover;
    background-image: url("error.jpg");
    height: 100%;
    line-height: 1.8;
  }
  body {font-family: Arial, Helvetica, sans-serif;}


  input[type=text], input[type=password] {
    width: 20%;
    padding: 12px 20px;
    margin: 8px 0px;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;

  }

  button {

    padding: 14px 20px;
    margin: 20px 0;
    border: none;
    cursor: pointer;
    width: 20%;
  }

  button:hover {
    opacity: 0.8;
  }

  .cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
  }
  .cancelbtn:hover {
    width: auto;
    opacity: 0.8;
    padding: 10px 18px;
    background-color: #f44336;
  }

  .imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
  }

  img.avatar {
    width: 10%;
    border-radius: 50%;
  }

  .container {
  position: center;
    padding:20px;
  }

  span.psw {
    float: right;
    padding-top: 16px;
  }


  </style>
  <body>
    <div class="w3-top">
      <div class="w3-bar w3-black w3-card" id="myNavbar">
        <a href="index.php" class="w3-bar-item w3-button w3-wide">HOME</a>
        <a href="bedroom.php" class="w3-bar-item w3-button w3-wide">BEDROOM</a>
        <a href="livingroom.php" class="w3-bar-item w3-button w3-wide">LIVING ROOM</a>
        <a href="kitchen.php" class="w3-bar-item w3-button w3-wide">KITCHEN</a>
        <a href="babies.php" class="w3-bar-item w3-button w3-wide">BABIES</a>


        <div class="w3-right w3-hide-small">
          <a href="about.html" class="w3-bar-item w3-button">ABOUT</a>
          <a href="cart.php" class="w3-bar-item w3-button"> CART</a>
          <a href="login.php" class="w3-bar-item w3-button"><i class="fa fa-user"></i> LOGIN</a>
        </div>
    </div></div><br><br>
    <form action="forgot.php" method="POST">
      <div class="imgcontainer">
        <img src="error1.jpg" alt="Avatar" class="avatar">
      </div>

      <div class="container">
        <h1>Forgot Password</h1><br>
        <label></label>&nbsp;<label style="color : red"></label>&nbsp;<label style="color : red"><?php echo $usererr;?></label><br>



        <label for="email"><b>Email Address</b></label>
        <input type="text" placeholder="Enter Email" id="email" name="email" required>
    <br>
        <label for="psw"><b>New Password</b></label>
        <input type="password" placeholder="Enter Password" id="pass" name="psw" required>
    <br>
    <label for="psw1"><b>New Password</b></label>
    <input type="password" placeholder="Enter Password" id="pass1" name="psw1" required><br>
        <button class="w3-button w3-white w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-opacity-off" name="forgot_user" id="submit" type="submit">Change Password</button>

      </div>

    </form>
    </body></html>
