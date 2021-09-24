<?php
include_once 'conn.php';
session_start();
$result1=mysqli_query($conn,"select count(*) from cart");
$answer=mysqli_fetch_array($result1);
$table="bedroom";

 ?>
<!DOCTYPE html>
<html>
<title>Bedroom</title>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;

  margin: auto;
  text-align: center;
  font-family: arial;
  font-size:15px;
}

.price {
  color: grey;
  font-size: 20px;
}

.card button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

.card button:hover {
  opacity: 0.7;
}
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}





.w3-bar .w3-button {
  padding: 16px;
}
.grid-container {
  display: grid;
  grid-column-gap: 50px;
  grid-row-gap:50px;
  grid-template-columns: auto auto auto;
  background-color: white;
  padding: 10px;
}

.grid-item {
  background-color: rgba(0, 0, 0, 0);

  padding: 2px;
  font-size: 20px;
  text-align: center;
}

</style>
</head>
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

          <a href="profileuser.php" class="w3-bar-item w3-button"><i class="fa fa-user"></i> <?php echo $_SESSION['fname'];?></a>
        </div>
    </div></div>
  <br><br><br><br><br>
  <div class="grid-container">
    <?php
    $result=mysqli_query($conn,"select * from $table");
    while($row=mysqli_fetch_array($result)){

      ?>

  <div class="grid-item"><div class="card">

  <img src="<?php echo $row['pic'];?>" alt="Bed" style="height:200px; width:200px;">
  <h2><?php echo $row['name'];?></h2>
  <p class="price"><?php echo "$".$row['price'];?></p>

  <a href="productsdescr.php?id=<?php echo $row['id']; ?>&table=<?php echo $table;?>"><p><button >View Product</button></p></a>

  <a href="addpr.php?name=<?php echo $row['name']; ?>&price=<?php echo $row['price']; ?>&pic=<?php echo $row['pic']; ?>"><p><button >Add to Cart</button></p></a>
</div></div>
<?php } ?>
</div>


</body>
</html>
