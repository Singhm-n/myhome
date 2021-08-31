<?php
session_start();
unset($_SESSION['user']);
echo "<script type'text/javascript'> document.location ='admin.php';</script>";
 ?>
