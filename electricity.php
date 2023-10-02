<?php
$servername = "localhost";
$user = "root";
$password = "";
$dbasename = "proj1";
$conn = mysqli_connect($servername, $user, $password, $dbasename);
$name = $_POST['cust-name'];
$id = $_POST['cust-id'];
$cn = $_POST['counter'];
$mn = $_POST['month'];
$units = $_POST['unit'];
$date = $_POST['date'];
error_reporting(0);
$sum = 0;
$tax = 0;
$total = 0;
$ser=150;
if ($units <= 100)
    $sum = $units * 5;
else if ($units <= 200)
    $sum = 100 * 1 + ($units - 100) * 6;
else if ($units <= 300)
    $sum = 100 * 1 + 100 * 2 + ($units - 200) * 7;
else if ($units > 300)
    $sum = 100 * 1 + 100 * 2 + 100 * 3 + ( $units - 300) * 8;
$tax = $sum * 13 / 100;
$total=$sum+$ser+$tax;
error_reporting(0);
?>
<?php
require("fpdf1867/fpdf1.php");
$epdf= new FPDF();
$epdf->AddPage();
$epdf->SetFont("Arial","B",16);
$epdf->cell(0,20,"ELECTRICITY - BILL",1,1,'C');
$epdf->SetFont("Arial","",13);
$epdf->cell(50,15,"Customer-Name  :",0,0);
$epdf->cell(0,15,"$name",0,1);
$epdf->cell(50,15,"Customer-ID  :",0,0);
$epdf->cell(0,15,"$id",0,1);
$epdf->cell(50,15,"Counter-no. :",0,0);
$epdf->cell(0,15,"$cn",0,1);
$epdf->cell(50,15,"Month :",0,0);
$epdf->cell(0,15,"$mn",0,1);
$epdf->cell(50,15,"Units :",0,0);
$epdf->cell(0,15,"$units",0,1);
$epdf->cell(50,15,"Date of Enquiry :",0,0);
$epdf->cell(0,15,"$date",0,1);
$epdf->ln(10);
$epdf->Line(5,120,200,120);
$epdf->cell(50,15,"Units Amount :",0,0);
$epdf->cell(0,15,"$sum",0,1);
$epdf->cell(50,15,"Tax Included :",0,0);
$epdf->cell(0,15,"$tax",0,1);
$epdf->cell(50,15,"Service Charges :",0,0);
$epdf->cell(0,15,"$ser",0,1);
$epdf->Line(5,180,200,180);
$epdf->ln(8);
$epdf->cell(50,15,"Total :",0,0);
$epdf->cell(0,15,"$total",0,1);
$epdf->Output();