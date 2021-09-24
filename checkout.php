<?php
include_once 'conn.php';
session_start();
$emailuser=$_SESSION['email'];
$proerr="";
if(isset($_POST['submit'])){
  $number=$_POST['cardnumber'];
  $cost=$_SESSION['total'];
  $email=$_SESSION['email'];
  $expiry=$_POST['expiry'];
  $cvv=$_POST['cvv'];
  $len=strlen($number);
  $len1=strlen($cvv);
  $len2=strlen($expiry);
  if($len==16){
    if($len2==4){
      if($len1==3){
        $sql="INSERT into transaction(date,price,email) VALUES(CURDATE(),'$cost','$email')";
        if(mysqli_query($conn,$sql)){
          $sql1="TRUNCATE TABLE cart";
          mysqli_query($conn,$sql1);
            echo '<script>alert("Payment Success")</script>';
         echo "<script type'text/javascript'> document.location ='home.php';</script>";
        }
        echo '<script>alert("Error in payment.")</script>';
        echo "<script type'text/javascript'> document.location ='checkout.php';</script>";
      }else{
        $proerr="cvv error";
      }
    }else{
        $proerr="date error";
    }
  }else{
      $proerr="credit card number not correct";
  }}


?>

<!DOCTYPE html>
<html>
<title>Checkout</title>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <style>
  body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
  .w3-bar .w3-button {
    padding: 16px;
  }
  </style>
  <body class="bg-light">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
      <div class="w3-top">
        <div class="w3-bar w3-black w3-card" id="myNavbar">
          <a href="home.php" class="w3-bar-item w3-button w3-wide">HOME</a>
          <a href="bedroom.php" class="w3-bar-item w3-button w3-wide">BEDROOM</a>
          <a href="livingroom.php" class="w3-bar-item w3-button w3-wide">LIVING ROOM</a>
          <a href="kitchen.php" class="w3-bar-item w3-button w3-wide">KITCHEN</a>
          <a href="babies.php" class="w3-bar-item w3-button w3-wide">BABIES</a>


          <div class="w3-right w3-hide-small">
            <a href="aboutafter.php" class="w3-bar-item w3-button">ABOUT</a>
            <a href="cart.php" class="w3-bar-item w3-button"> CART</a>
            <a href="profileuser.php" class="w3-bar-item w3-button"><i class="fa fa-user"></i> <?php echo $_SESSION['fname'];?></a>
          </div>
      </div></div><br><br><br><br>
      <div class="container">
        <div class="py-5 text-center">
<img src="logo.jpg" height="72" width="72" ></img>
<h2>Checkout Form</h2>
<p class="lead">Please fill the details for payment</p>
</div>
</div>

<div class="container">
<h4 class="mb-3">Payment Details</h4>
<div class="row g-3">
  <div class="col-sm-6">
<form action="checkout.php" method="POST">
  <label></label>&nbsp;<label style="color : red"></label>&nbsp;<label style="color : red"><?php echo $proerr;?></label>
<label for="cardname" class="form-label">Name</label>
<input type="text" class="form-control"  id="cardname" placeholder="Name on the card" value="" required>
<div class="invalid-feedback">
Card name not correct
</div>
<label for="cardnumber" class="form-label">Card Number</label>
<input type="text" class="form-control" id="cardnumber" name="cardnumber" placeholder="Card Number" value="" required maxlength="16" pattern="[0-9]{16,16}">


<div class="col-md-3">
  <label for="cc-expiration" class="form-label">Expiration</label>
  <input type="number" class="form-control" name="expiry" id="cc-expiration" placeholder="MM/YY" required>

</div>
<div class="col-md-3">
  <label for="cc-cvv" class="form-label">CVV</label>
  <input type="number" class="form-control" name="cvv" id="cc-cvv" placeholder="CVV" required>

</div>
<div class="col-md-3">
    <label for="cc-cvv" class="form-label">Address</label><br>
<?php
$sql1="SELECT * from address WHERE email='$emailuser';";
$result=mysqli_query($conn,$sql1);


  while($row=mysqli_fetch_array($result)){ ?>
<input type="radio" name="address" value=<?php echo $row['name']; ?> required><?php echo $row['name'];?></input><br><br><?php }?>
<a href="myaddress.php"><button type="button" >Add an Address</button></a>
</div><br>
<div class="col-md-3">
  <label for="cc-cvv" class="form-label">Total Amount</label>
  <input type="text" class="form-control" id="amount" placeholder="<?php echo "$".$_SESSION['total']; ?>" disabled>

</div>
<br><br>
<p>We don't save any of your payment info</p><br>
<input class="w-100 btn btn-primary btn-lg" type="submit" name="submit" id="fin"></input>
</div>


</form>
</div></div></div>
    </body></html>
