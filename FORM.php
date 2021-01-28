<?php
$name="";
$email="";
$contact="";
$city="";
$course="";    
$arr=array(" ");
$s="";
if(isset($_POST["submit"])){
	$name=$_POST["name"];
	$email=$_POST["email"];
	$contact=$_POST["contact"];
	$city=$_POST["city"];
	$course=$_POST["course"];    
	$arr=($_POST["interests"]);
	$s=count($arr);
	if($s<3)
	{
		echo '<script>alert("Select atleast 3 options")</script>'; 
		$name="";
		$email="";
		$contact="";
		$city="";
		$course="";    
		$arr=array("");
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
			
		}
		#submit{
			color: white;
			background-color: skyblue;
			width: 200px;
            height: 30px;
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
		<td><input type="text" placeholder="Enter Name" style="width: 300px" name="name" required></td>
	</tr>
	<tr>
		<td>E-Mail Address*</td>
		<td><input type="email" placeholder="Enter E-mail" style="width: 300px " name="email" required></td>
	</tr>
	<tr>
		<td>Contact No*</td>
		<td><input type="text" placeholder="Enter Phone Number" style="width: 300px" name="contact"  minlength="10" required></td>
	</tr>
	<tr>
		<td>City*</td>
		<td><input type="text" name="city"  style="width: 300px" placeholder="Enter City" required></td>
	</tr>
	<tr>
		<td>Course*</td>
		<td><input type="text" name="course"  style="width: 300px" placeholder="Enter Course" required></td>
	</tr>
	<tr>
		<td>Interests*</td>
		<td>Sports<input type="checkbox"  name="interests[]">
			Music<input type="checkbox"  name="interests[]">
			Solving Puzzles<input type="checkbox"  name="interests[]"><br>
			Travelling<input type="checkbox" name="interests[]">
			Gaming<input type="checkbox" name="interests[]">
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
			   for($temp=0;$temp<$s;$temp++)
			   {
			   	 if($arr[$temp]!="")
			   	 {
			   	 	echo $arr[$temp];
			   	 	if($temp!= $s-1 )
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