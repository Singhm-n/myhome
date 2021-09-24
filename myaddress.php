<?php
include_once 'conn.php';
session_start();
$email=$_SESSION['email'];
$adderr="";
if(isset($_POST['add'])){
  $name=$_POST['name'];
  $ap=$_POST['ap'];
  $add1=$_POST['add1'];
  $add2=$_POST['add2'];
  $city=$_POST['city'];
  $zip=$_POST['zip'];
  $province=$_POST['province'];
  $lene=strlen($zip);
  if($lene!=6){
    $adderr="Please enter a valid Zip Code";
  }else{
    $sql="INSERT INTO address(name,ap,add1,add2,city,zipcode,province,email) VALUES ('$name','$ap','$add1','$add2','$city','$zip','$province','$email')";
    mysqli_query($conn,$sql);
    echo "<script type'text/javascript'> document.location ='myaddress.php';</script>";

  }
  $adderr="Something wrong has happened";


}
$result1=mysqli_query($conn,"select count(*) from cart");
$answer=mysqli_fetch_array($result1); ?>
<!DOCTYPE html>
<html>
<title></title>
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
<br><br><br><br>
<div class="w3-main" style="margin-left:300px;margin-top:43px;">
  <div class="main-w3layouts wrapper">
    <h1>Add New Address </h1>

      <div class="main-agileinfo agileits-top">
        <form action="myaddress.php" method="POST">
          <input class="text" type="text" name="name" placeholder="Name to be saved" required="">
          <br>
          <input class="text" type="text" name="ap" placeholder="Apartment, Flat no." required="">
          <br>
          <input class="text" type="text" name="add1" placeholder="Address Line 1" required=""><br>
          <input class="text" type="text" name="add2" placeholder="Address Line 2" ><br>
          <input class="text" type="text" name="city" placeholder="City" required=""><br>
          <input class="text" type="text" name="zip" placeholder="ZIP CODE" required=""><br>
          <select name="province">
<option  value="AB">AB</option>
<option  value="BC">BC</option>
<option  value="QC">QC</option>
<option  value="MB">MB</option>
<option  value="ON">ON</option>
<option  value="PEI">PEI</option>
<option  value="NS">NS</option>
<option value="NB">NB</option>
<option  value="NFL">NFL</option>
<option  value="NV">NV</option>
<option  value="SK">SK</option>
<option  value="NW">NW</option>
<option  value="YK">YK</option>
          </select>

          <label></label>&nbsp;<label style="color : red"></label>&nbsp;<label style="color : red"><?php echo $adderr;?></label>
          <input type="submit" name="add" value="add">
        </form>

      </div>
  </div>
  <div class="w3-twothird">
          <h5>Address Saved</h5>
          <table class="w3-table w3-striped w3-white">
            <tr>
              <td><i class="fa fa-user w3-text-blue w3-large"></i></td>
              <td>Name</td>
              <td>Apartment/Flat no</td>
              <td>Address Line 1</td>
              <td>Address Line 2</td>
              <td>City</td>
              <td>Zip Code</td>
              <td>Province</td>
            </tr>
            <?php
            $result=mysqli_query($conn,"select * from address where email='$email'");
            while($row=mysqli_fetch_array($result)){

             ?>
            <tr>
              <td><i class="fa fa-user w3-text-blue w3-large"></i></td>
              <td><?php echo $row['name']; ?></td>
              <td><?php echo $row['ap']; ?></td>
              <td><?php echo $row['add1']; ?></td>
              <td><?php echo $row['add2']; ?></td>
              <td><?php echo $row['city']; ?></td>
              <td><?php echo $row['zipcode']; ?></td>
              <td><?php echo $row['province']; ?></td>
              <td><a href="deleteaddress.php?id=<?php echo $row['id']; ?>">Delete</a></td>
              <tr>
              <?php } ?>
          </table>
        </div>

</div>

</body></html>
