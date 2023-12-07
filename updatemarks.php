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
        $s = "UPDATE marks SET sub='$sub', s1='$s1', s2='$s2', a1='$a1', a2='$a2' WHERE ktuid='$ktu' AND sub='$sub';";
        $q = mysqli_query($conn, $s);

        if ($q) {
            echo "<br>Insertion Successful";
        } else {
            echo "<br>Insertion Failed";
        }
    } else {
        echo "<br>Form not submitted";
    }
} else {
    echo "<br>No data received";
}
?>
