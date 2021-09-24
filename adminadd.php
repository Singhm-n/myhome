<?php
include_once 'conn.php';
session_start();
$proerr="";
if(isset($_POST['add'])){
$table=$_POST['table'];
$name=$_POST['name'];
$price=$_POST['price'];
$detail=$_POST['detail'];
$pic=$_POST['pic'];
$pic1=$_POST['pic1'];

$pic2=$_POST['pic2'];


if(empty($table)){
  $proerr="Please select category";
}
else{  $sql="INSERT INTO $table (name,price,detail,pic,pic1,pic2) VALUES ('$name','$price','$detail','$pic','$pic1','$pic2')";
  mysqli_query($conn,$sql);
  echo '<script>alert("Product added successfully.")</script>';

  echo "<script type'text/javascript'> document.location ='addproducts.php';</script>";
}}
?>
<!DOCTYPE html>
<html>
<title>Admin Dashboard</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>
<body class="w3-light-grey">

  <div class="w3-bar w3-top w3-black w3-large" style="z-index:4">
    <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i>  Menu</button>
    <a href="adminlogout.php"><span class="w3-bar-item w3-right">Logout</span></a>
  </div>


  <nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
    <div class="w3-container w3-row">

      <div class="w3-col s8 w3-bar">
        <span>Welcome, <strong>Admin</strong></span><br>

      </div>
    </div>
    <hr>
    <div class="w3-container">
      <h5>Dashboard</h5>
    </div>
    <div class="w3-bar-block">

      <a href="adminprofile.php" class="w3-bar-item w3-button w3-padding "><i class="fa fa-users fa-fw"></i>  Overview</a>
      <a href="addproducts.php" class="w3-bar-item w3-button w3-padding w3-blue"><i class="fa fa-diamond fa-fw"></i>  Products</a>
      <a href="feedbackcheck.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-envelope"></i>  Feedback</a>

      <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-cog fa-fw"></i>  Settings</a><br><br>
    </div>
  </nav>
  <div class="w3-main" style="margin-left:300px;margin-top:43px;">
    <div class="main-w3layouts wrapper">
      <h1>Add Product </h1>

        <div class="main-agileinfo agileits-top">
          <form action="adminadd.php" method="POST">
            <input type="radio" name="table" value="bedroom">Bedroom</input>
              <input type="radio" name="table" value="kitchen">Kitchen</input>
                <input type="radio" name="table" value="living">Living</input>
                  <input type="radio" name="table" value="babies">Babies</input><br>
            <input class="text" type="text" name="name" placeholder="Product Name" required="">
            <br>
            <input class="text" type="text" name="price" placeholder="Price" required=""><br>
            <textarea class="text"  name="detail" placeholder="Detail" required=""></textarea><br>
            
            <input class="text" type="text" name="pic" placeholder="url for pic 1" required=""><br>
            <input class="text" type="text" name="pic1" placeholder="url for pic 2" required=""><br>
            <input class="text" type="text" name="pic2" placeholder="url for pic 3" required=""><br>


            <label></label>&nbsp;<label style="color : red"></label>&nbsp;<label style="color : red"><?php echo $proerr;?></label>
            <input type="submit" name="add" value="add">
          </form>

        </div>
    </div>

  </div>

  </body></html>
