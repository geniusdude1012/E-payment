<?php
include("connect.php");
$name = $_POST['cust-name'];
$id = $_POST['cust-id'];
$cn = $_POST['counter'];
$mn = $_POST['month'];
$date = $_POST['date'];
$sum=0;
$tax=0;
$total=0;
$sum=$mn*100;
$tax = $sum* 10 / 100;
$total=$sum+$tax;
?>
<?php
require("fpdf1867/fpdf2.php");

$epdf= new FPDF();
$epdf->AddPage();
$epdf->SetFont("Arial","B",16);
$epdf->cell(0,20,"WATER - BILL",1,1,'C');
$epdf->SetFont("Arial","",13);
$epdf->cell(50,15,"Customer-Name  :",0,0);
$epdf->cell(0,15,"$name",0,1);
$epdf->cell(50,15,"Customer-ID  :",0,0);
$epdf->cell(0,15,"$id",0,1);
$epdf->cell(50,15,"Counter-no. :",0,0);
$epdf->cell(0,15,"$cn",0,1);
$epdf->cell(50,15,"Total no. Of Months :",0,0);
$epdf->cell(0,15,"$mn",0,1);
$epdf->cell(50,15,"Date of Enquiry :",0,0);
$epdf->cell(0,15,"$date",0,1);
$epdf->ln(10);
$epdf->Line(5,105,200,105);
$epdf->ln(1);
$epdf->cell(50,15,"Monthly Amount :",0,0);
$epdf->cell(0,15,"$sum",0,1);
$epdf->cell(50,15,"Tax Included :",0,0);
$epdf->cell(0,15,"$tax",0,1);
$epdf->Line(5,150,200,150);
$epdf->ln(8);
$epdf->cell(50,15,"Total :",0,0);
$epdf->cell(0,15,"$total",0,1);
$epdf->Output();
