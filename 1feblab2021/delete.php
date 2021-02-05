<?php
include('config.php');
?>


<?php
$id=$_GET['id'];
$sql1= "DELETE FROM student_details WHERE username=$id";
    mysqli_query($conn,$sql1);
$sql= "DELETE FROM users WHERE id=$id";
    mysqli_query($conn,$sql);
    echo "Deleted";
    // $fetch = mysqli_query($conn,"select * from users where email = '$email'");
    // $data = mysqli_fetch_array($fetch);
    // $id = $data['id'];
    // $sql1 = "insert into student_details (username, branch, year) values ('$id', '$branch', '$year')";
    // mysqli_query($conn,$sql1);

?>