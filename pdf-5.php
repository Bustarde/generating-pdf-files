<?php
include "vendor/autoload.php";

use Fpdf\Fpdf;

$pdf = new Fpdf();
$pdf->AddFont('Sensation');
$pdf->AddFont('Bostana');
$pdf->AddFont('Enigma');

$pdf->AddPage();
$pdf->SetFont('Sensation','',35);
$pdf->Write(10,'The future belongs to those who believe in the beauty of their dreams.');
$pdf->Ln(10);
$pdf->Write(10,'- Eleanor Roosevelt');

$pdf->Ln(20);

$pdf->SetFont('Bostana','',20);
$pdf->Write(10,'It is during our darkest moments that we must focus to see the light.');
$pdf->Ln(10);
$pdf->Write(10,'- Aristotle');

$pdf->Ln(20);

$pdf->SetFont('Enigma','',17);
$pdf->Write(10,'Never let the fear of striking out keep you from playing the game.');
$pdf->Ln(10);
$pdf->Write(10,'- Babe Ruth');
$pdf->Output('D', 'pdf-5.pdf');

// Run php vendor/fpdf/fpdf/src/Fpdf/makefont/makefont.php fonts/Enigma.ttf
// Move the generated files to the font folder (vendor/fpdf/fpdf/src/Fpdf/font/)