<?php

include 'conn.php';
if($_POST)
{
    $rollno = $_POST['rollno'];
    $name = $_POST['name'];
    $marks = $_POST['marks'];
    $query = "INSERT INTO stud VALUES ('$rollno','$name','$marks')";
    $p = mysqli_query($conn,$query);
    if($p)
    {
        echo "<script> alert('Successfully Inserted a Row')</script>";
        echo "Successfully Inserted!";
    }
    else
    {
        echo "<script> alert('Failed to Insert Row')</script>";
        echo "</br>Failed To Insert!";
    }
}
else
{
    echo "Form Data Not Received";
}
?>