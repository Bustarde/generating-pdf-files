<?php
include "vendor/autoload.php";

use Fpdf\Fpdf;

$pdf = new Fpdf();
$pdf->AddFont('Sensation');
$pdf->AddPage();
$pdf->SetFont('Sensation','',35);
$pdf->Write(10,'The Lord Of The Rings');

$pdf->Ln(20);

$pdf->SetFont('Sensation','',35);
$pdf->Write(10,'Written By John Ronald Reuel Tolkien');
$pdf->Output('D', 'pdf-5.pdf');

// Run php vendor/fpdf/fpdf/src/Fpdf/makefont/makefont.php fonts/Sensation.ttf
// Move the generated files to the font folder (vendor/fpdf/fpdf/src/Fpdf/font/)