<?php
include_once 'conn.php';
$id = $_GET['id'];
$delete = mysqli_query($conn,"delete from user where id = '$id'");
if($delete)
{
    mysqli_close($conn);
    echo "<script type='text/javascript'> document.location = 'adminprofile.php'; </script>";
    exit;
}
else
{
    echo '<script>alert("Error deleting user.")</script>';
    echo "<script type='text/javascript'> document.location = 'adminprofile.php'; </script>";
}
?>
