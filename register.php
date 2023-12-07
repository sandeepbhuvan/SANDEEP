<html>
    <head>
        <title> Register </title>
    </head>
<body>
<center>
    <form method="POST">
        <!-- all fields are required -->
        <table border='1'>
            <tr>
                <td colspan="2" align="center">Register Teacher</td>
            </tr>
            <tr>
                <td>Enter First Name: </td><td><input type="text" name="fname" required ></td>
            </tr>
            <tr>

                <td>Enter Last Name: </td><td><input type="text" name="lname"></td>
            </tr>
            <tr>
                <td>Enter Email: </td><td><input type="email" name="email"></td>
            </tr>
            <tr>
                <td>Enter Username: </td><td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Enter Password: </td><td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td>Re-enter Password: </td><td><input type="password" name="password2"></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="submit" value="Register"></td>
            </tr>
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
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $email = $_POST["email"];
        $username = $_POST["username"];
        $password = $_POST["password"];
        $password2 = $_POST["password2"];
        if($password == $password2)
        {
            $s = "INSERT INTO login VALUES('$username','$password','$fname','$lname','$email');";
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
            echo "<br>Passwords do not match";
        }
    }
    else{
        echo "<br>Form not submitted";
    }
}
else{
    echo "<br>No data received";
}