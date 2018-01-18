<?php
	include 'plantilla.php';
	require 'conexion.php';

	$query = "SELECT nombres, codigo, correo, telefono, asistencia FROM participantes";
	$resultado = $mysqli->query($query);

	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();

	$pdf->SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(80,6,'NOMBRES y APELLIDOS',1,0,'C',1);
	//$pdf->Cell(35,6,'CODIGO',1,0,'C',1);
	$pdf->Cell(70,6,'EMAIL',1,0,'C',1);
	//$pdf->Cell(30,6,'ASISTENCIA',1,0,'C',1);
	$pdf->Cell(30,6,'TELEFONO',1,1,'C',1);


	$pdf->SetFont('Arial','',9);

	while($row = $resultado->fetch_assoc())
	{
		$pdf->Cell(80,6,utf8_decode($row['nombres']),1,0,'C');

    //$pdf->Cell(35,6,utf8_decode($row['codigo']),1,0,'C');
		$pdf->Cell(70,6,$row['correo'],1,0,'C');
		//$pdf->Cell(30,6,$row['asistencia'],1,0,'C');
		$pdf->Cell(30,6,utf8_decode($row['telefono']),1,1,'C');

	}
	$pdf->Output();
?>
