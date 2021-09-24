<?php
include_once 'conn.php';
session_start();
$email=$_SESSION['email'];
if(isset($_POST['submit'])){
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$phone=$_POST['phone'];
$pic=$_POST['pic'];
if(empty($pic)){
$sql="UPDATE user SET fname='$fname', lname='$lname',phone='$phone' WHERE email='$email';";
mysqli_query($conn,$sql);

echo '<script>alert("Info changed successfully. Please Login again.")</script>';
unset($_SESSION["id"]);
unset($_SESSION["fname"]);
unset($_SESSION["lname"]);
unset($_SESSION["phone"]);
unset($_SESSION["email"]);
unset($_SESSION["pic"]);
  echo "<script type'text/javascript'> document.location ='login.php';</script>";
}else{
  $sql="UPDATE user SET fname='$fname', lname='$lname',phone='$phone', pic='$pic' WHERE email='$email';";
  mysqli_query($conn,$sql);

  echo '<script>alert("Info changed successfully. Please Login again.")</script>';
  unset($_SESSION["id"]);
  unset($_SESSION["fname"]);
  unset($_SESSION["lname"]);
  unset($_SESSION["phone"]);
  unset($_SESSION["email"]);
  unset($_SESSION["pic"]);
    echo "<script type'text/javascript'> document.location ='login.php';</script>";
}
}
 ?>
