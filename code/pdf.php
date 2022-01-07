<?php
session_start();
if (!isset($_SESSION['email'])) {
header("Location: ./signin.php");
}
?>


<?php

if(!empty($_POST['submit']));
{
  $name=$_POST['name'];
  $email=$_POST['email'];
  $age=$_POST['age'];
  $weight=$_POST['weight'];
  $date=$_POST['date'];
  $prescription=$_POST['prescription'];



require("./fpdf.php");
$pdf=new FPDF();
$pdf-> Addpage();
//Patient Info
$pdf-> SetFont("Arial","B",12);
$pdf->Cell(0,10,"Patient Details",1,1,'C');
$pdf->Cell(55,10,"Name.",1,0);
$pdf->Cell(60,10,"Email.",1,0);
$pdf->Cell(20,10,"Age.",1,0);
$pdf->Cell(20,10,"Weight.",1,0);
$pdf->Cell(0,10,"date.",1,1);

$pdf->Cell(55,10,$name,1,0);
$pdf->Cell(60,10,$email,1,0);
$pdf->Cell(20,10,$age,1,0);
$pdf->Cell(20,10,$weight,1,0);
$pdf->Cell(0,10,$date,1,1);
//
// Doctor Info
$pdf->Ln(50);
$pdf-> SetFont("Arial","B",12);
$pdf->Cell(0,10,"Doctor Details",1,1,'C');
$pdf->Cell(50,10,"Name.",1,0);
$pdf->Cell(65,10,"Email.",1,0);
$pdf->Cell(30,10,"Department.",1,0);
$pdf->Cell(0,10,"Phone Number.",1,1);
$demail=$_SESSION['email'];
include('./connect.php');
$view_movie="select * from doctor where Email= '$demail'";
$run=mysqli_query($conn,$view_movie);
while($row=mysqli_fetch_array($run)){
$pdf->Cell(50,10,$row['Name'],1,0,'C');
$pdf->Cell(65,10,$row['Email'],1,0);
$pdf->Cell(30,10,$row['Dept'],1,0);
$pdf->Cell(0,10,$row['Phone'],1,1);

}



//Prescription
$pdf->Ln(60);
$pdf-> SetFont("Arial","B",12);
$pdf->Cell(0,10,"Prescription",1,1,'C');
$pdf->Cell(0,10,  $prescription,0,1);
$pdf->output();



}

 ?>
