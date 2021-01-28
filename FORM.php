<?php
$name="";
$email="";
$contact="";
$city="";
$course="";    
$arr=array(" ");
$size="";
if(isset($_POST["submit"])){
	$name=$_POST["name"];
	$email=$_POST["email"];
	$contact=$_POST["contact"];
	$city=$_POST["city"];
	$course=$_POST["course"];    
	$arr=($_POST["interests"]);
	$size=count($arr);
	if($size<3)
	{
		echo '<script>alert("Select atleast 3 options")</script>'; 
		$name="";
		$email="";
		$contact="";
		$city="";
		$course="";    
		$arr=array("");
		$_POST["submit"]="";
	}
} 
?> 
<html>
<head>
	<title>FORM</title>
	<style>
		body{
			background-color: black;
			color: white;
		}
		h1{
			text-align: center;
			color: white;
		}
		#table2,#td2,#th2{
			border: 4px solid white;
			border-collapse: collapse;
		}
		table{
			margin: auto;
            border: 4px solid white;
			border-collapse: collapse;
		}
		#submit{
			color: white;
			background-color: skyblue;
			width: 200px;
            height: 30px;
		}
		#submit:hover{
			color: green;
		}
        td{
            font-size: 20px;
        }
	</style>
</head>
<body>

<h1><i>Enter Your Details!</i></h1>
<form method="POST" action="FORM.php">
<table cellspacing=" 35">
	<tr>
		<td>Name*</td>
		<td><input type="text" placeholder="Enter Name" style="width: 300px" name="name" value="<?php echo isset($_POST["name"]) ? $_POST["name"] : '' ?>" required></td>
	</tr>
	<tr>
		<td>E-Mail Address*</td>
		<td><input type="email" placeholder="Enter E-mail" style="width: 300px " name="email" value="<?php echo isset($_POST['email']) ? $_POST['email'] : '' ?>" required></td>
	</tr>
	<tr>
		<td>Contact No*</td>
		<td><input type="text" placeholder="Enter Phone Number" style="width: 300px" name="contact"  pattern="[1-9]{1}[0-9]{9}" title="Enter 10 digit number, number can't start with 0!" value="<?php echo isset($_POST['contact']) ? $_POST['contact'] : '' ?>"  required></td>
	</tr>
	<tr>
		<td>City*</td>
		<td><input type="text" name="city"  style="width: 300px" placeholder="Enter City" value="<?php echo isset($_POST['city']) ? $_POST['city'] : '' ?>"required></td>
	</tr>
	<tr>
		<td>Course*</td>
		<td><input type="text" name="course"  style="width: 300px" placeholder="Enter Course" value="<?php echo isset($_POST['course']) ? $_POST['course'] : '' ?>"required></td>
	</tr>
	<tr>
		<td>Interests*</td>
		<td>Sports<input type="checkbox"  value="Sports" name="interests[]">
			Music<input type="checkbox"  value="Music" name="interests[]">
			Solving Puzzles<input type="checkbox"  value="Solving Puzzles" name="interests[]"><br>
			Travelling<input type="checkbox" value="Travelling" name="interests[]">
			Gaming<input type="checkbox" value="Gaming" name="interests[]">
		</td>
	</tr>
	<tr>
		<td></td>
		<td><input id="submit" type="submit"  value="SUBMIT" name="submit"></td>
	</tr>
</table>
</form>
<table id="table2" cellpadding="20" >
		<tr>
			<th id="th2">Name</th>
			<th id="th2">E-Mail</th>
			<th id="th2">Contact</th>
			<th id="th2">city</th>
			<th id="th2">Course</th>
			<th id="th2">Interests</th>
		</tr>
		<tr>
		   <td id="td2"><?php echo $name ?></td>
		   <td id="td2"><?php echo $email ?></td>
		   <td id="td2"><?php echo $contact ?></td>
		   <td id="td2"><?php echo $city ?></td>
		   <td id="td2"><?php echo $course ?></td>
		   <td id="td2"><?php 
			   for($temp=0;$temp<$size;$temp++)
			   {
			   	 if($arr[$temp]!="")
			   	 {
			   	 	echo $arr[$temp];
			   	 	if($temp!= $size-1 )
			   	 	{
			   	 		echo ", " ;
			   	 	}
			   	 }
			   }
			   ?></td>
		</tr>
</table>
</body>
</html>