<?php
$conn = mysqli_connect('localhost','root','','student');
if($conn)
{
    echo "Connection Successful!</br>";
}
else{
    echo "Connection Failed!</br>";
}

$s = "SELECT * FROM stud;";
$q = mysqli_query($conn,$s);
echo "<BR>";
if(mysqli_num_rows($q))
{   echo "<table border='1'>
            <tr>
                <th> Roll No </th> <th> Name </th> <th> Marks </th>
            </tr>";
    while($row = mysqli_fetch_assoc($q))
    {
        echo "<tr>";
        echo "<td>" . $row["rollno"]  . "</td>";
        echo "<td>" . $row["name"] . "</td>";
        echo "<td>" . $row["mark"] . "</td>";
        echo "</tr>";
    }
    echo "</table";
}
?>
