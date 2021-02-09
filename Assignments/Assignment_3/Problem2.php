<html>
    <head>
        <title>Sum of 2 numbers</title>
    </head>
    <body style="margin-left:45%;">
    <h1>Enter Numbers</h1>
        <form  method="post" action="Problem2.php">
            Number 1 <input type="number" name="var1"><br><br>
            Number 2 <input type="number" name="var2"><br><br>
            <input style="margin-left:13%;" type="submit" name="submit">
        </form>
    </body>
</html>

<?php
    if(isset($_POST['submit'])){
        if(empty($_POST['var1']) || empty($_POST['var2'])){
            echo "No Input Provided..First enter values";
        }
        else{
            $n1= $_POST['var1'];
            $n2=$_POST['var2'];
            $sum = $n1+$n2;
            echo "<font size='6'>";
            echo "Sum of $n1 and $n2 is $sum.";
            echo "</font>";
        }
    }
?>