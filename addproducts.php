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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
<style>
.btn {
  background-color: White;
  border: none;
  color: Black;
  padding: 12px 16px;
  font-size: 16px;
  cursor: pointer;
}


.btn:hover {
  background-color: Red;
}
body {
    background-color: #333;
}

#btnStart {
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
}

#message {
    width: 200px;
    height: 100px;
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    color: #fff;
    margin: auto;
    text-align: center;
    display: none;
}
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

    <a href="adminprofile.php" class="w3-bar-item w3-button w3-padding "id="ove"><i class="fa fa-users fa-fw"></i>  Overview</a>
    <a href="addproducts.php" class="w3-bar-item w3-button w3-padding w3-blue" id="pro"><i class="fa fa-diamond fa-fw"></i>  Products</a>
    <a href="feedbackcheck.php" class="w3-bar-item w3-button w3-padding " id="feed"><i class="fa fa-envelope"></i>  Feedback</a>

    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-cog fa-fw"></i>  Settings</a><br><br>
  </div>
</nav>
<div class="w3-main" style="margin-left:300px;margin-top:43px;"><br>
<a href="adminadd.php"><button type="button" id="addpr" class="btn w3-btn w3-blue">Add A Product</button></a><br>
<div class="w3-twothird">
      <br>  <h5>Bedroom</h5>
        <table class="w3-table w3-striped w3-white">
          <tr>
            <td><i class="fa fa-diamond w3-text-blue w3-large"></i></td>
            <td>Name</td>
            <td>Price</td>
            <td>Detail</td>

            <td>Picture</td>

            <td>Delete</td>
          </tr>
          <?php
          $t1="bedroom";
          $result=mysqli_query($conn,"select * from $t1");
          while($row=mysqli_fetch_array($result)){

           ?>
          <tr>
            <td><i class="fa fa-diamond w3-text-blue w3-large"></i></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['price']; ?></td>
            <td><?php echo $row['detail']; ?></td>

            <td><img src="<?php echo $row['pic'];?>" style="height:30px; width:30px;"></td>
            <td><a href="deletepro.php?id=<?php echo $row['id']; ?>&table=<?php echo $t1; ?>"><button class="btn"><i class="fa fa-trash"></i></button></a></td>
            <tr>
            <?php } ?>
        </table>
      </div>
      <div class="w3-twothird">
            <br>  <h5>Living Room</h5>
              <table class="w3-table w3-striped w3-white">
                <tr>
                  <td><i class="fa fa-diamond w3-text-blue w3-large"></i></td>
                  <td>Name</td>
                  <td>Price</td>
                  <td>Detail</td>

                  <td>Picture</td>

                  <td>Delete</td>
                </tr>
                <?php
                $t2="living";
                $result=mysqli_query($conn,"select * from $t2");
                while($row=mysqli_fetch_array($result)){

                 ?>
                <tr>
                  <td><i class="fa fa-diamond w3-text-blue w3-large"></i></td>
                  <td><?php echo $row['name']; ?></td>
                  <td><?php echo $row['price']; ?></td>
                  <td><?php echo $row['detail']; ?></td>

                  <td><img src="<?php echo $row['pic'];?>" style="height:30px; width:30px;"></td>

                  <td><a href="deletepro.php?id=<?php echo $row['id']; ?>&table=<?php echo $t2; ?>"><button class="btn"><i class="fa fa-trash"></i></button></a></td>
                  <tr>
                  <?php } ?>
              </table>
            </div>
            <div class="w3-twothird">
                  <br>  <h5>Kitchen</h5>
                    <table class="w3-table w3-striped w3-white">
                      <tr>
                        <td><i class="fa fa-diamond w3-text-blue w3-large"></i></td>
                        <td>Name</td>
                        <td>Price</td>
                        <td>Detail</td>

                        <td>Picture</td>

                        <td>Delete</td>
                      </tr>
                      <?php
                      $t3="kitchen";
                      $result=mysqli_query($conn,"select * from $t3");
                      while($row=mysqli_fetch_array($result)){

                       ?>
                      <tr>
                        <td><i class="fa fa-diamond w3-text-blue w3-large"></i></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['price']; ?></td>
                        <td><?php echo $row['detail']; ?></td>

                        <td><img src="<?php echo $row['pic'];?>" style="height:30px; width:30px;"></td>

                        <td><a href="deletepro.php?id=<?php echo $row['id']; ?>&table=<?php echo $t3; ?>"><button class="btn"><i class="fa fa-trash"></i></button></a></td>
                        <tr>
                        <?php } ?>
                    </table>
                  </div>
                  <div class="w3-twothird">
                        <br>  <h5>Babies</h5>
                          <table class="w3-table w3-striped w3-white">
                            <tr>
                              <td><i class="fa fa-diamond w3-text-blue w3-large"></i></td>
                              <td>Name</td>
                              <td>Price</td>
                              <td>Detail</td>

                              <td>Picture</td>

                              <td>Delete</td>
                            </tr>
                            <?php
                            $t4="babies";
                            $result=mysqli_query($conn,"select * from $t4");
                            while($row=mysqli_fetch_array($result)){

                             ?>
                            <tr>
                              <td><i class="fa fa-diamond w3-text-blue w3-large"></i></td>
                              <td><?php echo $row['name']; ?></td>
                              <td><?php echo $row['price']; ?></td>
                              <td><?php echo $row['detail']; ?></td>
                              
                              <td><img src="<?php echo $row['pic'];?>" style="height:30px; width:30px;"></td>

                              <td><a href="deletepro.php?id=<?php echo $row['id']; ?>&table=<?php echo $t4; ?>"><button class="btn"><i class="fa fa-trash"></i></button></a></td>
                              <tr>
                              <?php } ?>
                          </table>
                        </div>
</div>

</body></html>
