<?php
include "vendor/autoload.php";


use Fpdf\Fpdf;

class PDF extends Fpdf
{
    // Page header
    function Header()
    {
        // Logo
        $this->Image('images/auf-logo.png', 10, 6, 15);
        // Arial bold 15
        $this->SetFont('Arial', 'B', 15);
        // Move to the right
        $this->Cell(90);
        // Title
        $this->Cell(90, 10, 'Angeles University Foundation');
        // Line break
        $this->Ln(30);
    }

    // Page footer
    function Footer()
    {
        // Position at 1.5 cm from bottom
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial','I',8);
        // Page number
        $this->Cell(0,10,'Page ' . $this->PageNo() . '/{nb}', 0, 0, 'C');
    }
}

// Instanciation of inherited class
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times', '', 12);
// for ($i = 1; $i <= 40; $i++) {
//     $pdf->Cell(0,10,'Printing line number '.$i,0,1);
// }
$pdf->SetFont('Times', 'B', 12);
$pdf->Cell(170, 5,'Brief History of the University');
$pdf->Ln(8);

$pdf->SetFont('Times', '', 12);

$pdf->MultiCell(170, 5,'Angeles University Foundation, a non-stock, non-profit educational institution, was established on May 25, 1962 by Mr. Agustin P. Angeles, Dr. Barbara Y. Angeles, and family. In less than nine years, the Institution was granted University status on April 16, 1971 by the Department of Education, Culture and Sports.'); 
$pdf->Ln(5);
$pdf->MultiCell(170, 5, 'On December 4, 1975, the University was converted to a non-stock, non-profit educational foundation -- the Angeles couple and their children executed a Deed of Donation relinquishing their ownership. AUF was incorporated under Republic Act No. 6055, otherwise known as the Foundation Law, and became a tax-exempt institution approved by the Philippine government. All donations and bequests given to the AUF are tax deductible.');
$pdf->Ln(5);
$pdf->MultiCell(170, 5,'On February 14, 1978, AUF was converted to a Catholic University. As the first Catholic university in Central Luzon, AUF ensures not only professional success but total development which is anchored on Christian education that is holistic, integrated and formative. On February 20, 1990, the five-storey, 125-bed AUF Medical Center was inaugurated which now serves as a private teaching, training and research hospital, the first ever in Central Luzon.');
$pdf->Ln(5);
$pdf->Output();