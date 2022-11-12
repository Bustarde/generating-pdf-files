<?php

include "vendor/autoload.php";

use Fpdf\Fpdf;

$pdf = new Fpdf('L', 'mm', 'A5');
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 15);
$pdf->Cell(5, 10, 'Audriel V. Bustarde');
$pdf->SetFont('Arial', 'B', 15);
$pdf->Cell(5, 20,'BSIT');
$pdf->SetFont('Arial', 'B', 15);
$pdf->Cell(5, 30,'bustarde.audriel@auf.edu.ph');
$pdf->SetFont('Arial', 'B', 15);
$pdf->Cell(5, 40,'19-0579-471');
$pdf->Output();