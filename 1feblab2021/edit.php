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
$val3= $var1['gender'];
$val4= $var1['city'];
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
    $sql_u = "SELECT * FROM users WHERE username='$username'";
    $sql_e = "SELECT * FROM users WHERE email='$email'";
  	$res_u = mysqli_query($conn, $sql_u);
      $res_e = mysqli_query($conn, $sql_e);
    if (mysqli_num_rows($res_u) > 0) 
    {
      echo "Sorry... username already taken"; 	
    }
    else if(mysqli_num_rows($res_e) > 0){
  	  echo "Sorry... email already taken"; 	
  	}
    else{
        $sql= "UPDATE users SET  gender='$gender', city='$city' WHERE id = $id" ;
    mysqli_query($conn,$sql);
    $sql1= "UPDATE student_details SET branch = '$branch', year = '$year' WHERE username = $id" ;
    if(mysqli_query($conn, $sql1)){
        header("Location:details.php");
    }
         echo 'Saved!';
         exit();
    }

}
else{
    echo "Please click Update button to update the data..";
}
?>

<html>
    <head>
        <title>HTML Forms</title>
    </head>
<body>
<form method="POST" action="edit.php?id=<?php echo "$id"?>">
    USERNAME:<?php echo "$val1" ?><br>
    EMAIL-ID:<?php echo "$val2" ?><br>
    <!-- username <input type="text" name="username" value="<?php echo "$val1" ?>" placeholder="Type Your username" required><br> -->
    <!-- E-MAIL <input type="email" name="email" value="<?php echo "$val2" ?>" placeholder="Type Your E-mail" required><br> -->
    GENDER<br> <input type="radio" id="male" name="gender" value="male" <?php if($val3=="male"){echo "checked";}?>>
    <label for="male">Male</label><br>
    <input type="radio" id="female" name="gender" value="female" <?php if($val3=="female"){echo "checked";}?>>
    <label for="female">Female</label><br>
    <input type="radio" id="other" name="gender" value="other" <?php if($val3=="other"){echo "checked";}?>>
    <label for="other">Other</label>
    <br>
    Select City <select name="city">
        <option value="Dehradun" <?php if($val4=="Dehradun"){echo "selected";}?>>Dehradun</option>
        <option value="Delhi" <?php if($val4=="Delhi"){echo "selected";}?>>Delhi</option>
        <option value="Jaipur" <?php if($val4=="Jaipur"){echo "selected";}?>>Jaipur</option>
        <option value="Udaipur" <?php if($val4=="Udaipur"){echo "selected";}?>>Udaipur</option>
        <option value="Kota" <?php if($val4=="Kota"){echo "selected";}?>>Kota</option>
        <option value="Shimla" <?php if($val4=="Shimla"){echo "selected";}?>>Shimla</option>
        <option value="Noida" <?php if($val4=="Noida"){echo "selected";}?>>Noida</option>
        <option value="Srinagar" <?php if($val4=="Srinagar"){echo "selected";}?>>Srinagar</option>
        <option value="Ambala" <?php if($val4=="Ambala"){echo "selected";}?>>Ambala</option>
        <option value="Uana" <?php if($val4=="Uana"){echo "selected";}?>>Uana</option>
        <option value="Alwar" <?php if($val4=="Alwar"){echo "selected";}?>>Alwar</option>
    </select><br>
    BRANCH<input type="text" name="branch" value="<?php echo "$val5" ?>" placeholder="Enter Branch" required><br>
    YEAR<input type="text" name="year" value="<?php echo "$val6" ?>" placeholder="Enter Year" required><br>
    <input type="submit" name="submit" value="Click Here To Update Your Data">
</form>
</body>
</html>