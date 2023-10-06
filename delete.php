<?php
include("connect.php");
$us = $_GET['USERNAME'];
$qy="DELETE FROM REGISTER WHERE USERNAME='$us'";
$data=mysqli_query($conn,$qy);
if($data)
{
    echo "<font color='green'>Record Deleted!!!";
}
else
{
    echo "<font color='red'>Failed!!!";
}
?>
<meta http-equiv="refresh" content="2; url = admin.php" />
        