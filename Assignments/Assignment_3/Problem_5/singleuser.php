<?php
include('config.php');
?>
<html>
    <head>
        <title>Prticular User</title>
    </head>
<body>
<form method="POST">
    USERNAME <input type="text" name="username" placeholder="Type Your Username" required><br>
    <input type="submit" name="submit" value="Click Here">
</form>
</body>
</html>

<?php
if(isset($_POST['submit']))
{
$username= $_POST['username'];
$sql= "SELECT * FROM users where username='$username'";
$result=mysqli_query($conn,$sql);
$data = mysqli_fetch_array($result);
$id=$data['id'];
$sql1= "SELECT * FROM student_details where username='$id'";
$result1=mysqli_query($conn,$sql1);
$result=mysqli_query($conn,$sql);

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
                <input type="button" value="  Edit  "></a></td>
                <td><a href="javascript:confirmDelete('delete.php?id=<?php echo $row['id']?>')">
                <input type="button"value="Delete" name="delete"></a></td>
            </tr>
            <tr>
            <td colspan="8"><a href="details.php">
                <input  type="button" value="Go to Details Page" style="height:30px; width:100%"></a></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
<?php
}
else
{
    echo"No Data Found!";
}
}
?>

<script>
    <?php 
        if(isset($_POST['submit']))
    {?>
    function confirmDelete(delUrl)
    {
        if (confirm("Are you sure you want to delete"))
        {
            document.location = delUrl;
    }
    }
    <?php }
    ?>
</script>