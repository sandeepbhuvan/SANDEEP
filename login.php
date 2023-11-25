<?php
include 'conn.php';
if($_POST)
{
  if(isset($_POST["username"]))
  {
    $username= $_POST["username"];
    $password= $_POST["password"];
    $s = "SELECT * FROM login WHERE user='$username' AND pass='$password';";
    $q = mysqli_query($conn,$s);
    if(mysqli_num_rows($q)==1)
    {
        header("Location: homeframes.php");
    }
    else{
        echo "<br>Login Failed";
    }
    
  }
  else{
      echo "No username received";
  }
}
else{
    echo "No data received";
}
?>