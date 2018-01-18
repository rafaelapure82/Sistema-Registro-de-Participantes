<?php
include 'conexion.php';

$id= $_POST['id'];
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


$sql = "INSERT INTO participantes (id, codigo, nombres, cedula, correo, telefono, ocupacion, banco, numdepo, tipo_ope, asistencia, asistencia_t) VALUES ('$id', '$codigo', '$nombre', '$cedula', '$email', '$telefono', '$ocupacion', '$banco', '$numdepo', '$tipo_ope', '$asistencia', '$asistencia_t')";
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
          <h3>REGISTRO GUARDADO</h3>
          <?php } else { ?>
          <h3>ERROR AL GUARDAR</h3>
        <?php } ?>

        <a href="index.php" class="btn btn-primary">Regresar</a>

      </div>
    </div>
  </div>
</body>
</html>
