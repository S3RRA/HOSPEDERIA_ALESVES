<?php

    require './fpdf/fpdf.php';
    
    $pdf = new FPDF();
    $pdf->SetTitle('Reserva Hospedería de Alesves');
    $pdf->AliasNbPages();
    $pdf->SetTopMargin(10);
    $pdf->AddPage();
    $pdf->SetFont('Arial','B',18);
    
    $pdf->Image('images/hospederia-de-alesves.gif');
    $pdf->Cell(50,50,'JUSTIFICANTE RESERVA',1);
    
?>
