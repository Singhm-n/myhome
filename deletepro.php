<?php
include_once 'conn.php';
$id = $_GET['id'];
$table=$_GET['table'];
$delete = mysqli_query($conn,"delete from $table where id = '$id'");
if($delete)
{
    mysqli_close($conn);
    echo '<script>alert("Product deleted successfully.")</script>';

    echo "<script type='text/javascript'> document.location = 'addproducts.php'; </script>";
    exit;
}
else
{
    echo '<script>alert("Error deleting user.")</script>';
    echo "<script type='text/javascript'> document.location = 'addproducts.php'; </script>";
}
?>
