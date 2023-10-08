<?php
include("connect.php");
$name = $_POST['userr'];
$pd = $_POST['password'];


$qy1 = "SELECT * FROM REGISTER WHERE USERNAME ='$name'";
$inform1 = mysqli_query($conn, $qy1);
$tot1 = mysqli_num_rows($inform1);
error_reporting(0);
if ($tot1 == 0) {
    echo "<font color='red'>LOGIN FAILED !!!";
?>
    <meta http-equiv="refresh" content="2; url = login.html" />
    <?php
} else {
    $data = mysqli_fetch_assoc($inform1);
    $verify = password_verify($pd, $data['PASSWORD']);
    if ($verify == 1) {

    ?>
        <meta http-equiv="refresh" content="2; url = USER.php" />
    <?php
        echo "<font color='green'>LOGIN SUCCESSFUL !!!!";
    } else {
        echo "<font color='red'>INCORRECT PASSWORD !!!!";
    ?>
        <meta http-equiv="refresh" content="1; url = login.html" />
<?php
    }
    session_start();
    $_SESSION['name'] = $name;
    $_SESSION['pass'] = $pd;
    $qy1 = "SELECT * FROM REGISTER WHERE USERNAME ='$name'";
    $inform1 = mysqli_query($conn, $qy1);
    $row = mysqli_fetch_assoc($inform1);
    $_SESSION['amntt'] = $row['AMOUNT'];
}

error_reporting(0);
