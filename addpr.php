<?php
include_once 'conn.php';

$name = $_GET['name'];
$price = $_GET['price'];

$pic = $_GET['pic'];
$check=mysqli_query($conn,"SELECT * FROM cart where name='$name'");
if(mysqli_num_rows($check)>0){
  $update=mysqli_query($conn,"UPDATE cart SET quantity = quantity +1 WHERE name = '$name';");
  $update1=mysqli_query($conn,"UPDATE cart SET subtotal = price *quantity WHERE name = '$name';");


  echo "<script type='text/javascript'> document.location = 'cart.php'; </script>";
}

else {
  $add = mysqli_query($conn,"INSERT into cart (name,price,quantity,pic,subtotal) VALUES ('$name','$price',1,'$pic','$price')");
  if($add)
{
    mysqli_close($conn);
    echo "<script type='text/javascript'> document.location = 'cart.php'; </script>";
    exit;
}
else
{
    echo '<script>alert("Error deleting user.")</script>';
    echo "<script type='text/javascript'> document.location = 'cart.php'; </script>";
}}
?>
