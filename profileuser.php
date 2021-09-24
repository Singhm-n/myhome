<?php
include_once 'conn.php';
session_start();
$result1=mysqli_query($conn,"select count(*) from cart");
$answer=mysqli_fetch_array($result1); ?>
<!DOCTYPE html>
<html>
<title></title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" crossorigin="anonymous"></script>
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

      <a href="myaddress.php" class="w3-bar-item w3-button w3-wide">MY ADDRESS</a>


      <div class="w3-right w3-hide-small">
        <a href="aboutafter.html" class="w3-bar-item w3-button">ABOUT</a>
        <a href="cart.php" class="w3-bar-item w3-button"> CART(<?php echo $answer[0]; ?>)</a>

        <a href="logout.php" class="w3-bar-item w3-button"><i class="fa fa-user"></i> LOGOUT</a>
      </div>
  </div></div>
<br><br><br><br>
<img src="<?php echo $_SESSION['pic'];?>" alt="avatar.jpg" width="150px" height="150px"></img>
<br><br>
  <table class="w3-table w3-striped w3-white">
    <tr>
      Details

<td>First Name<?php echo ":   ".$_SESSION['fname'];?></td>
<td>Last Name<?php echo ":   ".$_SESSION['lname'];?></td>

</tr>
<tr>
<td>Phone Number<?php echo ":   ".$_SESSION['phone'];?></td>
<td>Email<?php echo ":   ".$_SESSION['email'];?></td>
</tr>
  </table>
  <button type="button" class="btn btn-primary" data-target="#firstpopup" data-toggle="modal">Edit Info</button>

	<div class="modal fade" id="firstpopup">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">×</button>
					<h4 class="modal-title">Edit the Information</h4>
				</div>
				<div class="modal-body">
          <form action="edituser.php" method="POST">
            <label for="fname">First Name</label>
          <input type="text" placeholder="<?php echo $_SESSION['fname'];?>" name="fname" required></input><br>
          <label for="lname">Last Name</label>
          <input type="text" placeholder="<?php echo $_SESSION['lname'];?>" name="lname" required></input><br>
          <label for="phone">Phone No. </label>
          <input type="text" placeholder="<?php echo $_SESSION['phone'];?>" name="phone" required></input><br>
          <label for="pic">Profile P. </label>
          <input type="text" placeholder="url" name="pic"></input><br>
          <input type="submit" name="submit"></input>

          </form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
		</div>
	</div>
</body></html>
