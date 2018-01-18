<?php
require 'conexion.php';

$id = $_GET['id'];

$sql = "SELECT * FROM participantes WHERE id = '$id'";
$resultado = $mysqli->query($sql);
$row = $resultado->fetch_array(MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.css">
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <title>Participante PSA-VPDR</title>
  </head>
  <div class="container">
			<div class="row">
				<h3 style="text-align:center">MODIFICAR PARTICIPANTE</h3>
			</div>

			<form class="form-horizontal" method="POST" action="update.php" autocomplete="off">
        <div class="form-group">
					<label for="id" class="col-sm-2 control-label">ID</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="id" name="id" placeholder="ID" value="<?php echo $row['id']; ?>" required>
					</div>
				</div>

				<div class="form-group">
					<label for="nombre" class="col-sm-2 control-label">Nombres</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombres" value="<?php echo $row['nombres']; ?>" required>
					</div>
				</div>

        <input type="hidden" name="id" id="id" value="<?php echo $row['id']; ?>" />

        <div class="form-group">
          <label for="nombre" class="col-sm-2 control-label">Cédula</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="cedula" name="cedula" placeholder="Cédula" value="<?php echo $row['cedula']; ?>" required>
          </div>
        </div>

      	<div class="form-group">
					<label for="email" class="col-sm-2 control-label">Email</label>
					<div class="col-sm-10">
						<input type="email" class="form-control" id="email" name="email" placeholder="Email" value="<?php echo $row['correo']; ?>" required>
					</div>
				</div>

				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">Telefono</label>
					<div class="col-sm-10">
						<input type="tel" class="form-control" id="telefono" name="telefono" value="<?php echo $row['telefono']; ?>" placeholder="Telefono">
					</div>
				</div>

        <div class="form-group">
          <label for="ocupacion" class="col-sm-2 control-label">Ocupación</label>
          <div class="col-sm-10">
            <select class="form-control" id="ocupacion" name="ocupacion">
              <option value="PROFESIONAL" <?php if ($row['ocupacion']=='PROFESIONAL') echo 'selected'; ?>>PROFESIONAL</option>
              <option value="ESTUDIANTE"> <?php if ($row['ocupacion']=='ESTUDIANTE') echo 'selected'; ?>ESTUDIANTE</option>
              <option value="COMERCIANTE" <?php if ($row['ocupacion']=='COMERCIANTE') echo 'selected'; ?>>COMERCIANTE</option>
              <option value="OTRO" <?php if ($row['ocupacion']=='OTRO') echo 'selected'; ?>>OTRO</option>
            </select>
          </div>
        </div>

        <div class="form-group">
          <label for="banco" class="col-sm-2 control-label">Banco</label>
          <div class="col-sm-10">
            <select class="form-control" id="banco" name="banco">
              <option value="VENEZUELA" <?php if ($row['banco']=='VENEZUELA') echo 'selected'; ?>>VENEZUELA</option>
              <option value="MERCANTIL" <?php if ($row['banco']=='MERCANTIL') echo 'selected'; ?>>MERCANTIL</option>
              <option value="BANESCO" <?php if ($row['banco']=='BANESCO') echo 'selected'; ?>>BANESCO</option>
              <option value="PROVINCIAL" <?php if ($row['banco']=='PROVINCIAL') echo 'selected'; ?>>PROVINCIAL</option>
              <option value="BICENTENARIO" <?php if ($row['banco']=='BICENTENARIO') echo 'selected'; ?>>BICENTENARIO</option>
              <option value="BNC" <?php if ($row['banco']=='BNC') echo 'selected'; ?>>BNC</option>
              <option value="BANCARIBE" <?php if ($row['banco']=='BANCARIBE') echo 'selected'; ?>>BANCARIBE</option>
              <option value="TESORO" <?php if ($row['banco']=='TESORO') echo 'selected'; ?>>TESORO</option>
              <option value="BOD" <?php if ($row['banco']=='BOD') echo 'selected'; ?>>BOD</option>
            </select>
          </div>
        </div>

        <div class="form-group">
          <label for="tipo_ope" class="col-sm-2 control-label">Tipo de Operación</label>
          <div class="col-sm-10">
            <select class="form-control" name="tipo_ope" id="tipo_ope">
                <option value="TRANSFERENCIA" <?php if ($row['tipo_ope']=='TRANSFERENCIA') echo 'selected'; ?>>TRANSFERENCIA</option>
                <option value="DEPOSITO" <?php if ($row['tipo_ope']=='DEPOSITO') echo 'selected'; ?>>DEPOSITO</option>
            </select>
          </div>
        </div>

        <div class="form-group">
          <label for="numdepo" class="col-sm-2 control-label">Número Operación</label>
          <div class="col-sm-10">
            <input type="tel" class="form-control" id="numdepo" name="numdepo" value="<?php echo $row['numdepo']; ?>" placeholder="Número de Operación">
          </div>
        </div>

        <div class="form-group">
          <label for="codigo" class="col-sm-2 control-label">Código</label>
          <div class="col-sm-10">
            <input type="tel" class="form-control" id="codigo" name="codigo" value="<?php echo $row['codigo']; ?>" placeholder="Código">
          </div>
        </div>

        <div class="form-group">
          <label for="asistencia" class="col-sm-2 control-label">¿Asistió en la Mañana?</label>
          <div class="col-sm-10">
            <select class="form-control" name="asistencia" id="asistencia" value="<?php echo $row['asistencia']; ?>">
                <option value="NO" <?php if ($row['asistencia']=='NO') echo 'selected'; ?>>NO</option>
                <option value="SI" <?php if ($row['asistencia']=='SI') echo 'selected'; ?>>SI</option>
            </select>
          </div>
        </div>

        <div class="form-group">
          <label for="asistencia" class="col-sm-2 control-label">¿Asistió en la Tarde?</label>
          <div class="col-sm-10">
            <select class="form-control" name="asistencia_t" id="asistencia_t" value="<?php echo $row['asistencia_t']; ?>">
                <option value="NO" <?php if ($row['asistencia_t']=='NO') echo 'selected'; ?>>NO</option>
                <option value="SI" <?php if ($row['asistencia_t']=='SI') echo 'selected'; ?>>SI</option>
            </select>
          </div>
        </div>


				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<a href="index.php" class="btn btn-default">Regresar</a>
						<button type="submit" class="btn btn-primary">Guardar</button>
					</div>
				</div>
			</form>
		</div>
	</body>

</html>
