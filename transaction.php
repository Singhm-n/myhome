<?php
include_once 'conn.php';
session_start();
$email=$_SESSION['email'];
$result1=mysqli_query($conn,"select count(*) from cart");
$answer=mysqli_fetch_array($result1);
?>

<!DOCTYPE html>
<html>
<title>TRANSACTIONS</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>.w3-bar .w3-button {
  padding: 16px;
}</style>
<body>
  <div class="w3-top">
    <div class="w3-bar w3-black w3-card" id="myNavbar">
      <a href="home.php" class="w3-bar-item w3-button w3-wide">HOME</a>
      <a href="transaction.php" class="w3-bar-item w3-button w3-wide">TRANSACTIONS</a>
      <a href="logout.php" class="w3-bar-item w3-button w3-wide">LOGOUT</a>


      <div class="w3-right w3-hide-small">
        <a href="aboutafter.html" class="w3-bar-item w3-button">ABOUT</a>
        <a href="cart.php" class="w3-bar-item w3-button"> CART(<?php echo $answer[0]; ?>)</a>

        <a href="profileuser.php" class="w3-bar-item w3-button"><i class="fa fa-user"></i> <?php echo $_SESSION['fname'];?></a>
      </div>
  </div></div>
  <div class="w3-twothird">
          <h5>Previous Transactions</h5>
          <table class="w3-table w3-striped w3-white">
            <tr>

              <td>Date</td>
              <td>Price</td>
            </tr>
            <?php
            $result=mysqli_query($conn,"select * from transaction where email='$email'");
            while($row=mysqli_fetch_array($result)){

             ?>
            <tr>
              <td><i class="fa fa-user w3-text-blue w3-large"></i></td>
              <td><?php echo $row['date']; ?></td>
              <td><?php echo "$".$row['price']; ?></td>

              <tr>
              <?php } ?>
          </table>
        </div>

</div>
</body></html>
