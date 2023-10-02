<?php

$servername = "localhost";
$user = "root";
$password = "";
$dbasename = "proj1";
$conn = mysqli_connect($servername, $user, $password, $dbasename);
$name = $_POST['userr'];
$pd = $_POST['password'];
session_start();
$_SESSION['name']=$name;
$_SESSION['pass']=$pd;
$qy1="SELECT * FROM REGISTER WHERE USERNAME ='$name' && PASSWORD ='$pd'";
$inform1=mysqli_query($conn,$qy1);
$tot1=mysqli_num_rows($inform1);
error_reporting(0);
if($tot1==0)
{
    echo "<font color='red'>INCORRECT PASSWORD !!!";
    ?>
    <meta http-equiv = "refresh" content = "2; url = login.html" />
       <?php
}
else{
    $qy1="SELECT * FROM REGISTER WHERE USERNAME ='$name' || PASSWORD ='$pwd'";
    $inform1=mysqli_query($conn,$qy1);
    $row=mysqli_fetch_assoc($inform1);
    $_SESSION['amntt']=$row['AMOUNT'];
    ?>
 <meta http-equiv = "refresh" content = "2; url = USER.php" />
    <?php
    echo "<font color='green'>LOGIN SUCCESSFUL !!!!";
}

error_reporting(0);
