<?php
include 'config.php';
?>

<?php
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
        $sql = "INSERT INTO users (username, email, gender, city) VALUES ('$username', '$email', '$gender', '$city')";
        mysqli_query($conn, $sql);
        $fetch = mysqli_query($conn,"select * from users where email = '$email'");
        $data = mysqli_fetch_array($fetch);
        $id = $data['id'];
        $sql1 = "insert into student_details (username, branch, year) values ('$id', '$branch', '$year')";
        mysqli_query($conn,$sql1);
  	}
    
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
<form method="POST" action="form.php">
    USERNAME <input type="text" name="username" placeholder="Type Your Username" required><br>
    E-MAIL <input type="email" name="email" placeholder="Type Your E-mail" required><br>
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
    BRANCH<input type="text" name="branch" placeholder="Enter Branch" required><br>
    YEAR<input type="text" name="year" placeholder="Enter Year" required><br>
    <input type="submit" name="submit" value="Click Here To Submit Your Data">
</form>
</body>
</html>

