<?php
include('config.php');
?>
<?php
$sql= "SELECT * FROM users";
$sql1= "SELECT * FROM student_details";
$result=mysqli_query($conn,$sql);
$result1=mysqli_query($conn,$sql1);
echo "<font size='6'>";
echo nl2br("\nUsers Table Data");
            echo "</font>";
if($result->num_rows >0){?>
    <table border="1px">
        <thead>
            <tr>
                <th>Name</th>
                <th>E-mail</th>
                <th>Gender</th>
                <th>City</th>
                <th>Branch</th>
                <th>Year</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
        <?php
        while($row=$result->fetch_assoc() and $row1=$result1->fetch_assoc()){?>
            <tr>
                <td><?php echo $row['username']?></td>
                <td><?php echo $row['email']?></td>
                <td><?php echo $row['gender']?></td>
                <td><?php echo $row['city']?></td>
                <td><?php echo $row1['branch']?></td>
                <td><?php echo $row1['year']?></td>
                <td><a href="edit.php?id=<?php echo $row['id']?>">
                <input type="button" value="Edit"></a></td>
                <td><a href="delete.php?id=<?php echo $row['id']?>" onclick="return confirm('Are you sure you want to delete?')">
                <input type="button" value="Delete"></a></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
<?php
}
?>

<html>
    <head>
        <title>User Details</title>
    </head>
    <body>
    </body>
</html>
