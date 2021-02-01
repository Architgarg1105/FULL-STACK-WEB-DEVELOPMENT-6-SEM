<?php
include('config.php');
?>

<?php
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $city = $_POST['city'];
    $branch= $_POST['branch'];
    $year= $_POST['year'];
    $sql = "INSERT INTO 'users' ('username', 'email', 'gender', 'city') VALUES ('$username', '$email', '$gender', '$city')";
    $sql1 = "INSERT INTO 'student_details' ('username', 'branch', 'year') VALUES ('$username', '$branch', '$year')";
    mysqli_query($conn, $sql);
    mysqli_query($conn, $sql1);
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
<form method="POST" action="formwithdatabase.php">
    USERNAME <input type="text" name="username" placeholder="Type Your Username" required><br>
    E-MAIL <input type="email" name="email" placeholder="Type Your E-mail" required><br>
    GENDER<br> <input type="radio" id="male" name="gender" value="male">
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