<?php
include("connect.php");
$name = $_POST['user'];
$em = $_POST['email'];
$pd = $_POST['password1'];

error_reporting(0);

$qy1="SELECT * FROM REGISTER WHERE USERNAME ='$name' || PASSWORD ='$pd'";
$inform1=mysqli_query($conn,$qy1);
$tot1=mysqli_num_rows($inform1);
$amount;
if($tot1==0)
{
    $hash=password_hash($pd,PASSWORD_DEFAULT);
    $qy="INSERT INTO REGISTER VALUES ('$name','$em','$hash','$amount')";
    $inform=mysqli_query($conn,$qy);
    
    if($inform)
    {
        echo "Data inserted";
    }
    else{
        echo "Data insertion failed";
    }
}
else{
    echo "User Already Exists!!!!";
}
?>
 <meta http-equiv = "refresh" content = "2; url = login.html" />
    <?php
    include("secure.php");
    session_start();
    $qy1 = "SELECT * FROM REGISTER WHERE USERNAME ='$name'";
    $inform1 = mysqli_query($conn, $qy1);
    $row = mysqli_fetch_assoc($inform1);
    $_SESSION['amntt'] = $row['AMOUNT'];
    
error_reporting(0);
