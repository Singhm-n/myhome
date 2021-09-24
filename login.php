<?php
include_once 'conn.php';
$usererr="";
$passerr="";
if(isset($_POST['login-submit'])){
  $email=$_POST['email'];
  $pass=$_POST['psw'];
$sql="SELECT * FROM user WHERE email='$email' and pass='$pass'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
$row=mysqli_fetch_array($result);
       if($pass=$row['pass']){
        session_start();
        $_SESSION['id']=$row['id'];
        $_SESSION['fname']=$row['fname'];
        $_SESSION['lname']=$row['lname'];
        $_SESSION['phone']=$row['phone'];
        $_SESSION['email']=$row['email'];
        $_SESSION['pic']=$row['pic'];
        echo '<script>alert("Logged in Successfully.")</script>';
          echo "<script type'text/javascript'> document.location ='home.php';</script>";
      }}

    else{
      $usererr="User not found!!";
    }
  }

 ?>
<!DOCTYPE html>
<html>
<title>Login</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}

body, html {
  background-position: center;
  background-size: cover;
  background-image: url("loginback.jpg");
  height: 100%;
  line-height: 1.8;
}



.w3-bar .w3-button {
  padding: 16px;
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


  <body>
    <div class="w3-top">
      <div class="w3-bar w3-black w3-card" id="myNavbar">
        <a href="index.php" class="w3-bar-item w3-button w3-wide">HOME</a>
        <a href="login.php" class="w3-bar-item w3-button w3-wide">BEDROOM</a>
        <a href="login.php" class="w3-bar-item w3-button w3-wide">LIVING ROOM</a>
        <a href="login.php" class="w3-bar-item w3-button w3-wide">KITCHEN</a>
        <a href="login.php" class="w3-bar-item w3-button w3-wide">BABIES</a>


        <div class="w3-right w3-hide-small">
          <a href="about.html" class="w3-bar-item w3-button">ABOUT</a>
          <a href="login.php" class="w3-bar-item w3-button"> CART</a>
          <a href="login.php" class="w3-bar-item w3-button"><i class="fa fa-user"></i> LOGIN</a>
        </div>
    </div></div>
<h2>Login Form</h2>

<form action="login.php" method="POST">
  <div class="imgcontainer">
    <img src="avatar.jpg" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="email"><b>Email Add</b></label>
    <input type="text" placeholder="Enter Email" id="email" name="email" required>
<br>
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" id="pass" name="psw" required>
<br>

    <button class="w3-button w3-white w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-opacity-off" id="submit" name="login-submit" type="submit" id="submit">Login</button>
<label></label>&nbsp;<label style="color : red"></label>&nbsp;<label style="color : red"><?php echo $usererr,$passerr;?></label>
  </div>

</form>
  <div class="container" >
    <a href="signup.php"><button type="button" class="w3-button w3-white w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-opacity-off" id="signup">Sign Up</button></a>
  <a href="forgot.php">  <button class="psw w3-button w3-white w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-opacity-off" id="fp">Forgot password?</button></a>
  </div>

</form>
</body></html>
