<?php
include 'conn.php';
if($_POST)
{
  if(isset($_POST["rollno"]))
  {
    $rollno= $_POST["rollno"];
    $s = "SELECT * FROM stud WHERE rollno='$rollno';";
    $q = mysqli_query($conn,$s);
    $row = mysqli_fetch_array($q);
    echo "<br>";
    for($i=0;$i<3;$i++)
    {
        echo " " . $row[$i] . " ";
    }
  }  
}
?>
