<?php
include("connect.php");
$us = $_GET['USERNAME'];
$qry = "SELECT * FROM REGISTER where USERNAME='$us'";
$data = mysqli_query($conn, $qry);
$result = mysqli_fetch_assoc($data);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link rel="stylesheet" type="text/css" href="update.css">
</head>

<body>
    <div class="container">
        <div class="box">
            <div class="admin">
                <h1>UPDATE</h1>
            </div>
            <div class="boxx">
                <form action="#" id="register" class="form1" method="post">
                    <input type="text" class="inpform1" value="<?php echo $result['USERNAME'] ?>" Username" name="user" required>
                    <input type="email" class="inpform1" value="<?php echo $result['EMAIL'] ?>" placeholder="Email" name="email" required>
                    <input type="password" class="inpform1"  placeholder="password" name="password1" required>
                    <input type="checkbox" class="check1"><span>I agree to the terms & conditions</span>
                    <input type="submit" value="update" class="subtn" name="update1">
                </form>
            </div>
        </div>
    </div>
</body>

</html>
<?php
error_reporting(0);
if ($_POST['update1']) {
    $name = $_POST['user'];
    $em = $_POST['email'];
    $pd = $_POST['password1'];
    $hash=password_hash($pd,PASSWORD_DEFAULT);
    $query="UPDATE REGISTER SET USERNAME='$name', EMAIL='$em', PASSWORD='$hash'where USERNAME='$us'";
    $data1=mysqli_query($conn,$query);
    if($data)
    {
         echo "<script>alert('Record Updated')</script>";
         ?>
    <meta http-equiv="refresh" content="0; url = admin.php" />
<?php
    }
    else{
        echo "<font color='red'>Data Update Failed !!!!";

    }
}
