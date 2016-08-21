<!DOCTYPE html>
<html>
<body>
<?php
require('fpdf.php');

class PDF extends FPDF
{
// Page header

// Page footer
function Footer()
{
	// Position at 1.5 cm from bottom
	$this->SetY(-15);
	// Arial italic 8
	$this->SetFont('Arial','I',8);
	// Page number
	$this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

// Instanciation of inherited class
$pdf = new PDF();
$pdf->AliasNbPages();

$pdf->AddPage();

$pdf->SetFont('Times','',12);
$pdf->Image('page.PNG', 1, 5.7, $fpdf->w, $fpdf->h);

$pdf -> SetY(28.5); 
$pdf -> SetX(37); 
$pdf->Cell(50,10,'2016',10,1);
$pdf -> SetY(29);

$pdf -> SetX(99); 
$pdf->Cell(50,10,'X',10,1);

$pdf -> SetY(29); 
$pdf -> SetX(190); 
$pdf->Cell(50,10,'3',10,1);

$pdf -> SetY(42); 
$pdf -> SetX(14);
$pdf->Cell(50,10,'201',10,1);

$pdf -> SetY(42); 
$pdf -> SetX(27);
$pdf->Cell(50,10,'378',10,1);

$pdf -> SetY(42); 
$pdf -> SetX(40);
$pdf->Cell(50,10,'961',10,1);

$pdf -> SetY(42); 
$pdf -> SetX(90);
$pdf->Cell(50,10,'42',10,1);

$pdf -> SetY(42); 
$pdf -> SetX(90);
$pdf->Cell(50,10,'42',10,1);

$pdf -> SetY(42); 
$pdf -> SetX(115);
$pdf->Cell(50,10,'819',10,1);

$pdf -> SetY(42); 
$pdf -> SetX(128);
$pdf->Cell(50,10,'123',10,1);


$pdf -> SetY(42); 
$pdf -> SetX(143);
$pdf->Cell(50,10,'671',10,1);

$pdf -> SetY(42); 
$pdf -> SetX(189);
$pdf->Cell(50,10,'42',10,1);

$pdf -> SetY(52); 
$pdf -> SetX(10);
$pdf->Cell(50,10,'Dela Cruz, Juan Castro',10,1);

$pdf -> SetY(52); 
$pdf -> SetX(110);
$pdf->Cell(50,10,'Dela Cruz, Maria Clara',10,1);


$pdf -> SetY(61); 
$pdf -> SetX(10);
$pdf->Cell(50,10,'#71 Gen. S. De Jesus St., San Juan City',10,1);

$pdf -> SetY(61); 
$pdf -> SetX(110);
$pdf->Cell(50,10,'#71 Gen. S. De Jesus St., San Juan City',10,1);

$pdf -> SetY(70); 
$pdf -> SetX(5);
$pdf->Cell(50,10,'0 8   2  1   1   9   7   0',10,1);

$pdf -> SetY(70); 
$pdf -> SetX(50);
$pdf->Cell(50,10,'1 1 1 0',10,1);

$pdf -> SetY(70); 
$pdf -> SetX(75);
$pdf->Cell(50,10,'951-2290',10,1);

$pdf -> SetY(70); 
$pdf -> SetX(105);
$pdf->Cell(50,10,'1  0   1   5   1   9   7   5',10,1);

$pdf -> SetY(70); 
$pdf -> SetX(153);
$pdf->Cell(50,10,'1 1 1 0',10,1);

$pdf -> SetY(70); 
$pdf -> SetX(177);
$pdf->Cell(50,10,'951-2290',10,1);

$pdf -> SetY(81); 
$pdf -> SetX(10);
$pdf->Cell(50,10,'Physician',10,1);


$pdf->SetFont('Times','',9);

$pdf -> SetY(75); 
$pdf -> SetX(94);
$pdf->Cell(50,10,'X',10,1);

$pdf->SetFont('Times','',12);

$pdf -> SetY(81); 
$pdf -> SetX(120);
$pdf->Cell(50,10,'Nurse',10,1);

$pdf->SetFont('Times','',9);

$pdf -> SetY(75.7); 
$pdf -> SetX(194);
$pdf->Cell(50,10,'X',10,1);

$pdf->Output();
?>
</body>
</html>