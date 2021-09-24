<?php
include_once 'conn.php';
session_start();
$result1=mysqli_query($conn,"select count(*) from user");
$answer=mysqli_fetch_array($result1);
$result2=mysqli_query($conn,"select count(*) from feedback");
$answer1=mysqli_fetch_array($result2);

?>

<!DOCTYPE html>
<html>
<title>Admin Dashboard</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
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

    <a href="adminprofile.php" class="w3-bar-item w3-button w3-padding w3-blue "id="ove"><i class="fa fa-users fa-fw"></i>  Overview</a>
    <a href="addproducts.php" class="w3-bar-item w3-button w3-padding " id="pro"><i class="fa fa-diamond fa-fw"></i>  Products</a>
    <a href="feedbackcheck.php" class="w3-bar-item w3-button w3-padding " id="feed"><i class="fa fa-envelope"></i>  Feedback</a>

    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-cog fa-fw"></i>  Settings</a><br><br>
  </div>
</nav>




<div class="w3-main" style="margin-left:300px;margin-top:43px;">


  <header class="w3-container" style="padding-top:22px">
    <h5><b><i class="fa fa-dashboard"></i> My Dashboard</b></h5>
  </header>

  <div class="w3-row-padding w3-margin-bottom">
    <div class="w3-quarter">
      <div class="w3-container w3-blue w3-padding-16">
        <div class="w3-left"><i class="fa fa-comment w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3><?php echo $answer1[0]; ?></h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Feedback</h4>
      </div>
    </div>


    <div class="w3-quarter">
      <div class="w3-container w3-black w3-text-white w3-padding-16">
        <div class="w3-left"><i class="fa fa-users w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3><?php echo $answer[0]; ?></h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Users</h4>
      </div>
    </div>
  </div>





  <div class="w3-twothird">
          <h5>Users</h5>
          <table class="w3-table w3-striped w3-white">
            <tr>
              <td><i class="fa fa-user w3-text-blue w3-large"></i></td>
              <td>fname</td>
              <td>lname</td>
              <td>phone</td>
              <td>email</td>
              <td>delete</td>
            </tr>
            <?php
            $result=mysqli_query($conn,"select * from user");
            while($row=mysqli_fetch_array($result)){

             ?>
            <tr>
              <td><i class="fa fa-user w3-text-blue w3-large"></i></td>
              <td><?php echo $row['fname']; ?></td>
              <td><?php echo $row['lname']; ?></td>
              <td><?php echo $row['phone']; ?></td>
              <td><?php echo $row['email']; ?></td>
              <td><a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
              <tr>
              <?php } ?>
          </table>
        </div>






  <footer class="w3-container w3-padding-16 w3-light-grey">
    <h4>Admin</h4>
    <p>Created by team 4</p>
  </footer>


</div>

<script>

var mySidebar = document.getElementById("mySidebar");


var overlayBg = document.getElementById("myOverlay");


function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
    overlayBg.style.display = "none";
  } else {
    mySidebar.style.display = 'block';
    overlayBg.style.display = "block";
  }
}

function w3_close() {
  mySidebar.style.display = "none";
  overlayBg.style.display = "none";
}
</script>

</body>
</html>
