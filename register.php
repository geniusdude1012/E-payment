<?php
$servername = "localhost";
$user = "root";
$password = "";
$dbasename = "proj1";
$conn = mysqli_connect($servername, $user, $password, $dbasename);
$name = $_POST['user'];
$em = $_POST['email'];
$pd = $_POST['password1'];
session_start();
$qy1="SELECT * FROM REGISTER WHERE USERNAME ='$name' || PASSWORD ='$pd'";
$inform1=mysqli_query($conn,$qy1);
$tot1=mysqli_num_rows($inform1);
$amount;
if($tot1==0)
{
    $qy="INSERT INTO REGISTER VALUES ('$name','$em','$pd','$amount')";
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
error_reporting(0);
