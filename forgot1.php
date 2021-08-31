<?php
include_once 'conn.php';
$usererr="";


if(isset($_POST['forgot_user'])){
  $email=$_POST['email'];
  $pass=$_POST['psw'];
  $pass1=$_POST['psw1'];
  echo '<script>alert("SQL ERROR1.")</script>';
  if($pass==$pass1){
    echo '<script>alert("SQL ERROR2.")</script>';
$sql="SELECT email FROM user where email=?";
$stmt=mysqli_stmt_init($conn);
if(!mysqli_stmt_prepare($stmt,$sql)){
echo '<script>alert("SQL ERROR.")</script>';
  exit();
}else{
  mysqli_stmt_bind_param($stmt, "s",$email);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_store_result($stmt);
  $resultCheck=mysqli_stmt_num_rows($stmt);
  if($resultCheck > 0){

    $clearq = "UPDATE user SET pass = '$pass' WHERE email = '$email';";
    if (mysqli_query($conn,$clearq)) {
      echo '<script>alert("Password changed successfully.")</script>';
      echo "<script type='text/javascript'> document.location = 'login.php'; </script>";
  }
  }
else{
  $usererr="User does not exist";

}}}
  else{
    $usererr="Password do not match";
  } }?>
