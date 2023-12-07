<html>
    <head>
        <title> Insert Student and Marks </title>
</head>
<body>
    <center>
    <form action="" method="POST">
        <table border='1'>
            <tr>
                <td colspan="2" align="center">Insert Student and Marks</td>
            </tr>
            <tr>
                <td>KTU ID</td>
                <td><select name="ktu">
                    <?php 
                        include 'conn.php';
                        $s = "SELECT ktuid FROM stud;";
                        $q = mysqli_query($conn,$s);
                        while($r = mysqli_fetch_assoc($q))
                        {
                            echo "<option value='".$r['ktuid']."'>".$r['ktuid']."</option>";
                        }
                    ?>
                </td>
            </tr>
            <tr>
                <td>Subject</td>
                <td><select name="sub">
                    <option value="Mathematics"> Maths </option>
                    <option value="Advanced Data Structures"> Data Structures </option>
                    <option value="Digital Fundamentals and Architecture"> Digital Fundamentals </option>
                    <option value="Software Engineering"> Software Engineering </option>
                </td>
            </tr>
            <tr>
                <td>Series 1 Marks: </td>
                <td><input type="text" name="s1" required></td>
            </tr>
            <tr>
                <td>Series 2 Marks: </td>
                <td><input type="text" name="s2" required></td>
            </tr>
            <tr>
                <td>Assignment 1 Marks: </td>
                <td><input type="text" name="a1" required></td>
            </tr>
            <tr>
                <td>Assignment 2 Marks: </td>
                <td><input type="text" name="a2" required></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="submit" value="Insert"></td>
            </tr>
        </table>
    </form>
</center>
</body>
</html>

<!-- php code to insert marks into marks table: -->
<?php
include 'conn.php';
if($_POST)
{
    if(isset($_POST["submit"]))
    {
        $ktu = $_POST["ktu"];
        $sub = $_POST["sub"];
        $s1 = $_POST["s1"];
        $s2 = $_POST["s2"];
        $a1 = $_POST["a1"];
        $a2 = $_POST["a2"];
        $s = "INSERT INTO marks VALUES('$ktu','$sub','$s1','$s2','$a1','$a2');";
        $q = mysqli_query($conn,$s);
        if($q)
        {
            echo "<br>Insertion Successful";
        }
        else{
            echo "<br>Insertion Failed";
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
