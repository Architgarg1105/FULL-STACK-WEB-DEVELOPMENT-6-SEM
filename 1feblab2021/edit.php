<?php
include('config.php');

?>


<?php
$id=$_GET['id'];
$fetch1 = mysqli_query($conn,"select * from users where id = $id");
    $var1 = mysqli_fetch_array($fetch1);
$fetch2 = mysqli_query($conn,"select * from student_details where username = $id");
    $var2 = mysqli_fetch_array($fetch2);
$val1= $var1['username'];
$val2= $var1['email'];
$val5= $var2['branch'];
$val6= $var2['year'];
if(isset($_POST['submit']))
{
    $username = $_POST['username'];
    
    $email = $_POST['email'];
    
    $gender = $_POST['gender'];
  
    $city = $_POST['city'];
   
    $branch= $_POST['branch'];
    
    $year= $_POST['year'];
    $sql= "UPDATE users SET username = '$username', email = '$email', gender='$gender', city='$city' WHERE id = $id" ;
    mysqli_query($conn,$sql);
    $sql1= "UPDATE student_details SET branch = '$branch', year = '$year' WHERE username = $id" ;
    mysqli_query($conn,$sql1);
    echo "updated";
}
else{
    echo "Please click submit button to submit the data..";
}
?>



<html>
    <head>
        <title>HTML Forms</title>
    </head>
<body>
<form method="POST">
    USERNAME <input type="text" name="username" value="<?php echo "$val1" ?>" placeholder="Type Your Username" required><br>
    E-MAIL <input type="email" name="email" value="<?php echo "$val2" ?>" placeholder="Type Your E-mail" required><br>
    GENDER<br> <input type="radio" id="male" name="gender" value="male" checked="checked">
    <label for="male">Male</label><br>
    <input type="radio" id="female" name="gender" value="female">
    <label for="female">Female</label><br>
    <input type="radio" id="other" name="gender" value="other">
    <label for="other">Other</label>
    <br>
    Select City <select name="city">
        <option value="Dehradun">Dehradun</option>
        <option value="Delhi">Delhi</option>
        <option value="Jaipur">Jaipur</option>
        <option value="Udaipur">Udaipur</option>
        <option value="Kota">Kota</option>
        <option value="Shimla">Shimla</option>
        <option value="Noida">Noida</option>
        <option value="Srinagar">Srinagar</option>
        <option value="Ambala">Ambala</option>
        <option value="Uana">Uana</option>
        <option value="Alwar">Alwar</option>
    </select><br>
    BRANCH<input type="text" name="branch" value="<?php echo "$val5" ?>" placeholder="Enter Branch" required><br>
    YEAR<input type="text" name="year" value="<?php echo "$val6" ?>" placeholder="Enter Year" required><br>
    <input type="submit" name="submit" value="Click Here To Submit Your Data">
</form>
</body>
</html>