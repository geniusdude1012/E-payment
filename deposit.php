<?php
include("connect.php");
include("secure.php");
$name = $_SESSION['name'];
$pwd = $_SESSION['pass'];
$amount1 = $_POST['amount'];
if ($amount1 < 0) {
    echo "<font color='red' family='sans-serif'>Invalid entry!!!Try again.....";
    
?>
    <meta http-equiv="refresh" content="1; url = deposit.html" />
<?php
} 
else {
    $qy = "UPDATE REGISTER SET AMOUNT=AMOUNT+$amount1 where USERNAME='$name'";
    $inform = mysqli_query($conn, $qy);
    if ($inform) {
        echo "<font color='green'>Amount Sucessfully Deposited!!!!";
    } else {
        echo "Failed";
    }
    $qy1 = "SELECT * FROM REGISTER WHERE USERNAME ='$name'";
    $inform1 = mysqli_query($conn, $qy1);
    $row = mysqli_fetch_assoc($inform1);
    $_SESSION['amntt'] = $row['AMOUNT'];

?>
    <meta http-equiv="refresh" content="2; url = USER.php" />
<?php
}
error_reporting(0);
