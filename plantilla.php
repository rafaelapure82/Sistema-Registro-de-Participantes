<?php
require 'pdf/fpdf/fpdf.php';

class PDF extends FPDF
	{
		function Header()
		{
			#$this->Image('img/Banner.jpg', 30, 10, 100 );
			$this->SetFont('Arial','B',15);
			$this->Cell(30);
			$this->Cell(120,10, 'UNELLEZ- V.P.D.R APURE',0,0,'C');
      $this->Ln(5);
      $this->Cell(180,10, 'CONGRESO NACIONAL DE PRODUCCION Y SANIDAD ANIMAL',0,0,'C');
			$this->Ln(10);
		}

		function Footer()
		{
			$this->SetY(-15);
			$this->SetFont('Arial','I', 8);
      $this->Cell(180,10, 'Desarrollo: Equipo de Apoyo Tecnico VPDR',0,0,'R');
      $this->Ln(2);
			$this->Cell(0,10, 'Pagina '.$this->PageNo().'/{nb}',0,0,'C' );
		}
	}


?>
