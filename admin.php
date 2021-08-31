<?php
include_once 'conn.php';
$usererr="";
$passerr="";
if(isset($_POST['admin-submit'])){
  $user=$_POST['user'];
  $pass=$_POST['psw'];
  $sql="SELECT * FROM admin WHERE user=?;";
  $stmt = mysqli_stmt_init($conn);
  if(!mysqli_stmt_prepare($stmt,$sql)){
    exit();
  }
  else{
    mysqli_stmt_bind_param($stmt,"s",$user);
    mysqli_stmt_execute($stmt);
    $result=mysqli_stmt_get_result($stmt);
    if($row=mysqli_fetch_assoc($result)){
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
