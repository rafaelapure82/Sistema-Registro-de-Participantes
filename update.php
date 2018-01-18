<?php
include 'conexion.php';

$id = $_POST['id'];
$codigo = $_POST['codigo'];
$nombre = $_POST['nombre'];

$cedula = $_POST['cedula'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$ocupacion = $_POST['ocupacion'];
$banco = $_POST['banco'];
$numdepo = $_POST['numdepo'];

$tipo_ope = $_POST['tipo_ope'];
$asistencia = $_POST['asistencia'];

$asistencia_t = $_POST['asistencia_t'];

$sql = "UPDATE participantes SET codigo='$codigo', nombres='$nombre', cedula='$cedula', correo='$email', telefono='$telefono', ocupacion='$ocupacion', banco='$banco', numdepo='$numdepo', tipo_ope='$tipo_ope', asistencia='$asistencia', asistencia_t='$asistencia_t' WHERE id='$id' ";
$resultado = $mysqli->query($sql);

?>

<html lang="es">
<head>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <script src="js/jquery-3.1.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="row" style="text-align:center">
        <?php if($resultado) { ?>
          <h3>PARTICIPANTE MODIFICADO</h3>
          <?php } else { ?>
          <h3>ERROR AL MODIFICAR</h3>
        <?php } ?>

        <a href="index.php" class="btn btn-primary">Regresar</a>

      </div>
    </div>
  </div>
</body>
</html>
