<?php
include('connect.php');

    include("connect.php");
    $name1 = $_POST['userr'];
    $pwd1 = $_POST['password'];
    $qy1 = "SELECT * FROM ADMIN WHERE USERNAME1 ='$name1' && PASSWORD1 ='$pwd1'";
    $inform1 = mysqli_query($conn, $qy1);
    $tot1 = mysqli_num_rows($inform1);
    error_reporting(0);
    if ($tot1 == 0) {
        echo "<font color='red'>INCORRECT PASSWORD !!!";
    ?>
        <meta http-equiv="refresh" content="2; url = admin.html" />
        <?php
    }
    else{
        echo "<font color='green'>LOGIN SUCCESSFULL !!!";

        ?>
        <meta http-equiv="refresh" content="2; url = admin.php" />
        <?php
    }