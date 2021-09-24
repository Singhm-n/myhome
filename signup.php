
<?php
include_once 'conn.php';
$usererr="";
$passerr="";
if(isset($_POST['signup'])){
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$pass=$_POST['password'];
$pass1=$_POST['password1'];
$lene=strlen($phone);
$len1=strlen($pass);
$check_email=mysqli_query($conn, "SELECT email FROM user where email ='$email'");
if($pass!=$pass1){
  $passerr="*Password do not match";
}else if($len1<6){
  $passerr="*Password is less than 6 digits";
}
else if($lene!=10){
  $usererr="*Phone number not valid";
}
else if(mysqli_num_rows($check_email)>0){
  $usererr="*Email already exists";
}
else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
  $usererr="*Email is not corrrect";
}
else{

    $sql="INSERT INTO user(fname,lname,phone,email,pass) VALUES ('$fname','$lname','$phone','$email','$pass')";
    mysqli_query($conn,$sql);

      echo '<script>alert("Sign Up Successfull.")</script>';
    echo "<script type'text/javascript'> document.location ='login.php';</script>";
  }
}

 ?>

<!DOCTYPE html>
<html>
<head>
<title>Register Today!</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}




.w3-bar .w3-button {
  padding: 16px;
}</style>

<link href="signupstyle.css" rel="stylesheet" type="text/css" media="all" />

<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">

</head>
<body>
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
          <a href="login.php" class="w3-bar-item w3-button"> CART</a>
          <a href="login.php" class="w3-bar-item w3-button"><i class="fa fa-user"></i> LOGIN</a>
        </div>
    </div></div>


	<div class="main-w3layouts wrapper">
		<h1>Register </h1>

			<div class="main-agileinfo agileits-top">
				<form action="signup.php" method="POST">
					<input class="text" type="text" name="fname" placeholder="First Name" id="fname" required="">
          <br>
          <input class="text" type="text" name="lname" placeholder="Last Name" id="lname" required=""><br>
          <input class="text" type="text" name="phone" placeholder="Phone Number" id="phone" required="">
					<input class="text email" type="email" name="email" placeholder="Email" id="email" required="">
					<input class="text" type="password" name="password" placeholder="Password" id="pass" required="">
					<input class="text w3lpass" type="password" name="password1" id="pass1" placeholder="Confirm Password" required="">

          <label></label>&nbsp;<label style="color : red"></label>&nbsp;<label style="color : red"><?php echo $usererr,$passerr;?></label>
					<input type="submit" name="signup" id="signup" value="SIGNUP">
				</form>
				<p>Already have an Account? <a href="login.php"> Login Now!</a></p>
			</div>


	</div>
</body>
</html>
