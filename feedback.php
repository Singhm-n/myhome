<?php
include_once 'conn.php';
session_start();
if(isset($_POST['feed12'])){
  $email=$_POST['email12'];
  $mess=$_SESSIOM['mess'];
  if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    $usererr="Enter a valid Email";
}

 ?>
