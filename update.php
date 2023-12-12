<html>
    <head>
        <title>Update</title>
    </head>
    <body>
        <center>
        <form action=" " method="post">
            <select name="ktu">
                <?php
                    include 'conn.php';
                    $s = "SELECT ktuid FROM stud;";
                    $q = mysqli_query($conn,$s);
                    while($r = mysqli_fetch_assoc($q))
                    {
                        echo "<option value='".$r['ktuid']."'>".$r['ktuid']."</option>";
                    }
                ?>
            </select>
            <select name="sub">
                <?php
                    include 'conn.php';
                    $s = "SELECT DISTINCT sub FROM marks;";
                    $q = mysqli_query($conn,$s);
                    while($r = mysqli_fetch_assoc($q))
                    {
                        echo "<option value='".$r['sub']."'>".$r['sub']."</option>";
                    }
                
                ?>
            <input type="submit" name="update" value="Search">
        </form>
        </center>
    </body>
</html>

<?php
include 'conn.php';
if([$_POST['update']])
{
    if(isset($_POST['ktu']) && isset($_POST['sub']))
    {
        $ktu = $_POST['ktu'];
        $sub = $_POST['sub'];
        $s = "SELECT * FROM marks WHERE ktuid = '$ktu' AND sub='$sub';";
        $q = mysqli_query($conn,$s);
        if(mysqli_num_rows($q))
        {
            $ktu1 = $ktu;
            $s1 = "SELECT * FROM marks WHERE ktuid = '$ktu1' AND sub='$sub';";
            $q1 = mysqli_query($conn,$s1);
            if(mysqli_num_rows($q1))
            {
            $r = mysqli_fetch_array($q1);
            $s1 = $r['s1'];
            $s2 = $r['s2'];
            $a1 = $r['a1'];
            $a2 = $r['a2'];
            $att = $r['att'];
            echo "<center>";
            echo "<form action='updatemarks.php' method='post'>";
            echo "<table border='1'>";
            echo "<tr><td colspan='2' align='center'>Update Marks</td></tr>";
            echo "<tr><td>KTU ID</td><td><input type='text' name='ktu' value='$ktu' readonly></td></tr>";
            echo "<tr><td>Subject</td><td><input type='text' name='sub' value='$sub' readonly></td></tr>";
            echo "<tr><td>Series 1 Marks</td><td><input type='text' name='s1' value='$s1'></td></tr>";
            echo "<tr><td>Series 2 Marks</td><td><input type='text' name='s2' value='$s2'></td></tr>";
            echo "<tr><td>Assignment 1 Marks</td><td><input type='text' name='a1' value='$a1'></td></tr>";
            echo "<tr><td>Assignment 2 Marks</td><td><input type='text' name='a2' value='$a2'></td></tr>";
            echo "<tr><td>Attendance</td><td><input type='text' name='att' value='$att'></td></tr>";
            echo "<tr><td colspan='2' align='center'><input type='submit' name='update' value='Update'></td></tr>";
            echo "</table>";
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
        echo "<script> alert('Please select KTU ID!')</script>";
    }
}
else
{
    echo "<script> alert('Please select KTU ID!')</script>";
}