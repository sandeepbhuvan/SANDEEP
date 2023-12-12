<html>
    <head>
        <title>Internal Marks </title>
    </head>
<body>
    <center>
    <form action=" " method="POST">
        <select name="sub">
            <?php
                include 'conn.php';
                $s = "SELECT DISTINCT sub FROM marks;";
                $q = mysqli_query($conn,$s);
                while($r = mysqli_fetch_assoc($q))
                {
                    echo "<option value='".$r['sub']."'>".$r['sub']."</option>";
                }
            ?>
        </select>
        <input type="submit" name="submit" value="Search">
    </form>
            </center>
</body>
</html>

<?php
include 'conn.php';
if($_POST)
{
    if(isset($_POST['submit']))
    {
        $sub = $_POST['sub'];
        
        echo "<center>";
        echo "<table border='1'>";
        echo "<tr><td align='center'> KTU ID </td><td align='center'>Internal Marks</td></tr>";
        $s = "SELECT ktuid,s1,s2,a1,a2,att FROM marks WHERE sub='$sub';";
        $q = mysqli_query($conn,$s);
        while($r = mysqli_fetch_assoc($q))
        {
            $ssum = ((($r['s1']+$r['s2'])/100)*20);
            $asum = (($r['a1']+$r['a2'])/2);
            if($r['att']>=90)
            {
                $attsum = 8;
            }
            else if($r['att']>=85)
            {
                $attsum = 7;
            }
            else if($r['att']>=80)
            {
                $attsum = 6;
            }
            else if($r['att']>=75)
            {
                $attsum = 5;
            }
            else
            {
                $attsum = 0;
            }
            $total = $ssum+$asum+$attsum;
            echo "<tr><td>".$r['ktuid']."</td><td> ".$total." / 40 </td></tr>";
        }
        echo "</table>";
        echo "</center>";
        echo"<br><br>";
        echo "<center><button onclick='window.print()'>Print</button></center>";
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


            
