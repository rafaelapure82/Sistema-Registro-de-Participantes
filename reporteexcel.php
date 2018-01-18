<?php
  require 'PHPExcel/Classes/PHPExcel.php';
  require 'conexion.php';

  $sql = "SELECT * FROM participantes";
  $resultado = $mysqli->query($sql);

  $fila =2;

  $objPHPExcel = new PHPExcel();
  $objPHPExcel->getProperties()->setCreator("Coordinación de Apoyo Técnico")->setDescription("Reporte de Participantes");

  $objPHPExcel->setActiveSheetIndex(0);
  $objPHPExcel->getActiveSheet()->setTitle("Participantes");

    $objPHPExcel->getActiveSheet()->setCellValue('A1', 'ID');
    $objPHPExcel->getActiveSheet()->setCellValue('B1', 'NOMBRES');
    $objPHPExcel->getActiveSheet()->setCellValue('C1', 'CODIGO');
    $objPHPExcel->getActiveSheet()->setCellValue('D1', 'CEDULA');
    $objPHPExcel->getActiveSheet()->setCellValue('E1', 'TELEFONO');
    $objPHPExcel->getActiveSheet()->setCellValue('F1', 'CORREO');
    $objPHPExcel->getActiveSheet()->setCellValue('G1', 'OCUPACION');
    $objPHPExcel->getActiveSheet()->setCellValue('H1', 'BANCO');
    $objPHPExcel->getActiveSheet()->setCellValue('I1', 'NUMERO TRANSACCION');
    $objPHPExcel->getActiveSheet()->setCellValue('J1', 'TIPO DE OPERACION');
    $objPHPExcel->getActiveSheet()->setCellValue('K1', 'ASISTENCIA');


    while ($row = $resultado->fetch_assoc()) {
      # code...
      $objPHPExcel->getActiveSheet()->setCellValue('A'.$fila, $row['id']);
      $objPHPExcel->getActiveSheet()->setCellValue('B'.$fila, $row['nombres']);
      $objPHPExcel->getActiveSheet()->setCellValue('C'.$fila, $row['codigo']);
      $objPHPExcel->getActiveSheet()->setCellValue('D'.$fila, $row['cedula']);
      $objPHPExcel->getActiveSheet()->setCellValue('E'.$fila, $row['telefono']);
      $objPHPExcel->getActiveSheet()->setCellValue('F'.$fila, $row['correo']);
      $objPHPExcel->getActiveSheet()->setCellValue('G'.$fila, $row['ocupacion']);
      $objPHPExcel->getActiveSheet()->setCellValue('H'.$fila, $row['banco']);
      $objPHPExcel->getActiveSheet()->setCellValue('I'.$fila, $row['numdepo']);
      $objPHPExcel->getActiveSheet()->setCellValue('J'.$fila, $row['tipo_ope']);
      $objPHPExcel->getActiveSheet()->setCellValue('K'.$fila, $row['asistencia']);
    

      $fila++;
    }
      /*
      header("Content-Type: text/html; charset=utf8");
      header("Content-Type: application/vnd.ms-excel");
    	header('Content-Disposition: attachment;filename="ParticipantesPSA.xlsx"');
    	header('Cache-Control: max-age=0');
      header('Content-Length: '.filesize($objPHPExcel));

      $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel,'Excel2007');
        ob_end_clean();

      $objWriter->save('php://output');
      exit;*/



      header("Content-Type: text/html; charset=utf8");
      header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
      header('Content-Disposition: attachment;filename="ParticipantesCPSA.xlsx"');
      header('Cache-Control: max-age=0');
      $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
      ob_end_clean();
      ob_start();
      $objWriter->save('php://output');
      exit;






 ?>
