<html>
    <head>
        <title> Register </title>
    </head>
<body>
<center>
    <table border='1'>
        <form method="POST">
        <!-- all fields are required -->
        <tr><td colspan='2' align='center'>Registration Form</td></tr>
        <tr><td>KTU ID</td><td><input type="text" name="ktu" required ></td></tr>
        <tr><td>Roll No</td><td><input type="text" name="rollno" required ></td></tr>
        <tr><td>Name</td><td><input type="text" name="name" required ></td></tr>
        <tr><td>Semeseter</td><td><input type="text" name="sem" required ></td></tr>
        <tr><td colspan='2' align='center'><input type="submit" name="submit" value="Register"></td></tr>
    </table>
    </form>
</center>
</body>
</html>

<?php
include 'conn.php';
if($_POST)
{
    if(isset($_POST["submit"]))
    {
        $ktu = $_POST["ktu"];
        $rollno = $_POST["rollno"];
        $name = $_POST["name"];
        $sem = $_POST["sem"];
        $s = "INSERT INTO stud VALUES('$ktu','$rollno','$name','$sem');";
        $q = mysqli_query($conn,$s);
        if($q)
        {
            echo "<br>Registration Successful";
        }
        else{
            echo "<br>Registration Failed";
        }
    }
    else{
        echo "<br>Form not submitted";
    }
}
else
{
    echo "<br>No data received";
}
?>