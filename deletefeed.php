<?php
include_once 'conn.php';
$id = $_GET['id'];
$delete = mysqli_query($conn,"delete from feedback where id = '$id'");
if($delete)
{
    mysqli_close($conn);
    echo "<script type='text/javascript'> document.location = 'feedbackcheck.php'; </script>";
    exit;
}
else
{
    echo '<script>alert("Error deleting feedback.")</script>';
    echo "<script type='text/javascript'> document.location = 'feedback.php'; </script>";
}
?>
