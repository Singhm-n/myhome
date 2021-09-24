<?php
include_once 'conn.php';
$id = $_GET['id'];

$delete = mysqli_query($conn,"delete from address where id = '$id'");
if($delete)
{
    mysqli_close($conn);
    echo "<script type='text/javascript'> document.location = 'myaddress.php'; </script>";
    exit;
}
else
{
    echo '<script>alert("Error deleting Addrress.")</script>';
    echo "<script type='text/javascript'> document.location = 'myaddress.php'; </script>";
}
?>
