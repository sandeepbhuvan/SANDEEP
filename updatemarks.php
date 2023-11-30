<?php
include 'conn.php';
if($_POST)
{
if([$_POST['delete']])
{
    $rollno = $_POST['rollno'];
    $s = "DELETE FROM stud WHERE rollno = '$rollno';";
    $q = mysqli_query($conn,$s);
    if($q)
    {
        echo "Record Deleted Successfully!";
    }
    else{
        echo "Error in deleting record!";
    }
        
}
else
if([$_POST['eng']] && [$_POST['maths']] && [$_POST['phy']] && [$_POST['chem']])
{
    $rollno = $_POST['rollno'];
    $eng = $_POST['eng'];
    $maths = $_POST['maths'];
    $phy = $_POST['phy'];
    $chem = $_POST['chem'];
    $s = "UPDATE marks SET eng = '$eng', maths = '$maths', phy = '$phy', chem = '$chem' WHERE rollno = '$rollno';";
    $q = mysqli_query($conn,$s);
    if($q)
    {
        echo "Record Updated Successfully!";
    }
    else{
        echo "Error in updating record!";
    }
        
}
}
else
{
    echo "Form Data Not Received";
}
