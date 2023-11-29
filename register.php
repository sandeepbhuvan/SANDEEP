<html>
    <head>
        <title> Register </title>
    </head>
<body>
<center>
    <form method="POST">
        <!-- all fields are required -->
        Enter First Name: <input type="text" name="fname" required ><br>
        Enter Last Name: <input type="text" name="lname"><br>
        Enter Email: <input type="email" name="email"><br>
        Enter Username: <input type="text" name="username"><br>
        Enter Password: <input type="password" name="password"><br>
        Re-enter Password: <input type="password" name="password2"><br>
        <input type="submit" name="submit" value="Register">
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