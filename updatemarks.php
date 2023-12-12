<?php
include 'conn.php';
if ($_POST) {
    if (isset($_POST["update"])) {
        $ktu = $_POST["ktu"];
        $sub = $_POST["sub"];
        $s1 = $_POST["s1"];
        $s2 = $_POST["s2"];
        $a1 = $_POST["a1"];
        $a2 = $_POST["a2"];
        $att = $_POST["att"];
        $s = "UPDATE marks SET sub='$sub', s1='$s1', s2='$s2', a1='$a1', a2='$a2', att='$att' WHERE ktuid='$ktu' AND sub='$sub';";
        $q = mysqli_query($conn, $s);

        if ($q) {
            echo "<script>alert('Marks Updated Successfully')</script>";
        } else {
            echo "<script>alert('Marks Not Updated')</script>";
        }
    } else {
        echo "<script>alert('Button Not Pressed')</script>";
    }
} else {
    echo "<script>alert('Form Not Submitted')</script>";
}
echo "<a href=update.php>Go Back</a>";
?>
