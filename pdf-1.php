<?php

include "vendor/autoload.php";

use Fpdf\Fpdf;

$pdf = new Fpdf();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 15);
$pdf->Cell(0, 5, 'Audriel V. Bustarde', 0, 1);
$pdf->SetFont('Arial', 'B', 15);
$pdf->Cell(0, 5,'BSIT', 0, 1);
$pdf->SetFont('Arial', 'B', 15);
$pdf->Cell(0, 5,'bustarde.audriel@auf.edu.ph', 0, 1);
$pdf->SetFont('Arial', 'B', 15);
$pdf->Cell(0, 5,'19-0579-471', 0, 1);
$pdf->Output();