<html>
    <head>
        <title>Update</title>
    </head>
    <body>
        <center>
        <form action=" " method="post">
            <input type="text" name="rollno" placeholder="Enter Roll No">
            <input type="submit" name="update" value="Update">
        </form>
        </center>
    </body>
</html>

<?php
include 'conn.php';
if([$_POST['update']])
{
    if(isset($_POST['rollno']))
    {
        $rollno = $_POST['rollno'];
        $s = "SELECT * FROM stud WHERE rollno = '$rollno';";
        $q = mysqli_query($conn,$s);
        if(mysqli_num_rows($q))
        {
            $rollno1 = $rollno;
            $s1 = "SELECT * FROM marks WHERE rollno = '$rollno1';";
            $q1 = mysqli_query($conn,$s1);
            if(mysqli_num_rows($q1))
            {
            echo "<center>";
            echo "<form action='updatemarks.php' method='post'>";
            echo "<input type='text' name='rollno' value='$rollno' readonly><br>";
            echo "<input type='text' name='eng' placeholder='Enter English Marks'><br>";
            echo "<input type='text' name='maths' placeholder='Enter Maths Marks'><br>";
            echo "<input type='text' name='phy' placeholder='Enter Physics Marks'><br>";
            echo "<input type='text' name='chem' placeholder='Enter Chemistry Marks'><br><br>";
            echo "<input type='submit' name='update' value='Update'><br><br>";
            echo "<input type='submit' name='delete' value='Delete Student'>";
            echo "</form>";
            echo "</center>";
            }
            else{
                echo "No such student found!";
            }
        }
        else{
            echo "<script> alert('No such record found!')</script>";
        }

    }
    else{
        echo "<script> alert('Please enter roll no!')</script>";
    }
}
else
{
    echo "<script> alert('Please enter roll no!')</script>";
}