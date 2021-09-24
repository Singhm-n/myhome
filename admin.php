<?php
include_once 'conn.php';
$usererr="";
$passerr="";
if(isset($_POST['admin-submit'])){
  $user=$_POST['user'];
  $pass=$_POST['psw'];
  $sql="SELECT * FROM admin WHERE user='$user' and pass='$pass'";
  $result=mysqli_query($conn,$sql);
  if(mysqli_num_rows($result)>0){
  $row=mysqli_fetch_array($result);


      if($pass!=$row['pass']){
        $passerr="Passwords do not match";
      }
      else if($pass=$row['pass']){
        session_start();

        $_SESSION['user']=$row['user'];

          echo "<script type'text/javascript'> document.location ='adminprofile.php';</script>";
      }
    }
    else{
      $usererr="User not found!!";
    }
  }

 ?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="adminstyle.css">
<title> ADMIN ONLY </title>
</head>
<body>
  <body>
    <div class="login-page">
      <div class="form">
        <div class="login">
          <div class="login-header">
            <h3>LOGIN</h3>
            <p>Please enter your credentials to login.</p>
          </div>
        </div>
        <form class="login-form" action="admin.php" method="POST">
          <label></label>&nbsp;<label style="color : red"></label>&nbsp;<label style="color : red"><?php echo $passerr,$usererr;?></label>
          <input type="text" placeholder="username" name="user" required/>
          <input type="password" placeholder="password" name="psw" required/>
          <button type="submit" name="admin-submit">login</button>
          <p class="message">Came here by Mistake? <a href="index.php">Go to Home</a></p>
        </form>
      </div>
    </div>
</body>
</body>
</html>
