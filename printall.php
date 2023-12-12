<?php
include 'conn.php';
echo "<center>";
$s = "SELECT * FROM marks;";
$q = mysqli_query($conn,$s);
echo "<BR>";
if(mysqli_num_rows($q))
{   echo "<table border='1'>
            <tr>
                <th> KTU ID </th> <th> Subject </th> <th> Series 1 </th> <th> Series 2 </th> <th> Assignment 1 </th> <th> Assignment 2 </th> <th> Attendance </th>
            </tr>";
    while($row = mysqli_fetch_assoc($q))
    {
        echo "<tr>";
        echo "<td>" . $row["ktuid"]  . "</td>";
        echo "<td>" . $row["sub"] . "</td>";
        echo "<td>" . $row["s1"] . "</td>";
        echo "<td>" . $row["s2"] . "</td>";
        echo "<td>" . $row["a1"] . "</td>";
        echo "<td>" . $row["a2"] . "</td>";
        echo "<td>" . $row["att"] . "</td>";
        echo "</tr>";
    }
    echo "</table><br>";
    echo "<button onclick='window.print()'>Print</button>";
    echo "</center>";
}
?>
