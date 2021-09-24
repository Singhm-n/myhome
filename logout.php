<?php session_start();
unset($_SESSION["id"]);
unset($_SESSION["fname"]);
unset($_SESSION["lname"]);
unset($_SESSION["phone"]);
unset($_SESSION["email"]);
echo '<script>alert("Logged out Successfully.")</script>';
echo "<script type'text/javascript'> document.location ='login.php';</script>";?>
