<?php
$conn = mysqli_connect('localhost','root','','student');
if($conn)
{
    echo "Connection Successful!";
}
else{
    echo "Connection Failed!";
}
?>