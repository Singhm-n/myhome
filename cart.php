<?php
include_once 'conn.php';
session_start();
$result1=mysqli_query($conn,"select count(*) from cart");
$answer=mysqli_fetch_array($result1);

 ?>

<!DOCTYPE html>
<html>
<title>Cart(<?php echo $answer[0]; ?>)</title>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
  body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
  .w3-bar .w3-button {
    padding: 16px;
  }
  .button {
  background-color: #8080ff;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 12px;
  margin: 4px 2px;
  cursor: pointer;

  transition-duration: 0.4s;
}
.button2:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}

  </style>
  <body>
    <body>
      <div class="w3-top">
        <div class="w3-bar w3-black w3-card" id="myNavbar">
          <a href="home.php" class="w3-bar-item w3-button w3-wide">HOME</a>
          <a href="bedroom.php" class="w3-bar-item w3-button w3-wide">BEDROOM</a>
          <a href="livingroom.php" class="w3-bar-item w3-button w3-wide">LIVING ROOM</a>
          <a href="kitchen.php" class="w3-bar-item w3-button w3-wide">KITCHEN</a>
          <a href="babies.php" class="w3-bar-item w3-button w3-wide">BABIES</a>


          <div class="w3-right w3-hide-small">
            <a href="aboutafter.php" class="w3-bar-item w3-button">ABOUT</a>
            <a href="cart.php" class="w3-bar-item w3-button"> CART(<?php echo $answer[0]; ?>)</a>

            <a href="profileuser.php" class="w3-bar-item w3-button"><i class="fa fa-user"></i><?php echo $_SESSION['fname'];?></a>
          </div>
      </div></div><br><br><br><br>
      <table class="w3-table w3-striped w3-white">
        <tr>
          <td>Name</td>
          <td>Price</td>

          <td>Quantity</td>

          <td>Sub Total</td>
          <td>Picture</td>

          <td>Delete</td>
        </tr>
        <?php

        $result=mysqli_query($conn,"select * from cart");
        while($row=mysqli_fetch_array($result)){

         ?>
        <tr>

          <td><?php echo $row['name']; ?></td>
          <td><?php echo "$".$row['price']; ?></td>
          <td><?php echo $row['quantity']; ?></td>
          <td><?php echo "$".$row['subtotal']; ?></td>
          <td><img src="<?php echo $row['pic'];?>" style="height:70px; width:70px;"></td>
          <td><a href="cartdel.php?id=<?php echo $row['id']; ?> "><button class="btn" id="del"><i class="fa fa-trash"></i></button></a></td>
          <tr>
          <?php } ?>
      </table>
      <br><br>
      <table class="w3-table w3-striped w3-white">
        <tr>
          <td>Total Cost</td>
          <td><b><?php $answer=mysqli_query($conn,"SELECT SUM(subtotal) as total from cart");
          $row=mysqli_fetch_assoc($answer);
          $_SESSION['total']= $row['total'];
          echo "$". $_SESSION['total']; ?></b></td>

        </tr>

        <td>
          <a href="checkout.php"><button class="button button2" id="check"><span>Checkout</button></a>
    </body></html>
