<?php
define('FPDF_FONTPATH','/Library/WebServer/Documents/derby/font/');
require( 'fpdf.php' );
$pdf = new FPDF();
$pdf->SetFont('Arial','',72);
$pdf->AddPage();
$pdf->Cell(40,10,"Hello World!",15);
$pdf->Output();
?>