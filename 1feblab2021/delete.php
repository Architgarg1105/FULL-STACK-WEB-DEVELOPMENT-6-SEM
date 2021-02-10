<?php
include('config.php');
?>

<?php
$id=$_GET['id'];
$sql1= "DELETE FROM student_details WHERE username=$id";
    mysqli_query($conn,$sql1);
$sql= "DELETE FROM users WHERE id=$id";
    mysqli_query($conn,$sql);
    header("Location:details.php");
?>