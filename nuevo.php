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
				<h3 style="text-align:center">NUEVO REGISTRO</h3>
			</div>

			<form class="form-horizontal" method="POST" action="guardar.php" autocomplete="off">
        <div class="form-group">
					<label for="id" class="col-sm-2 control-label">ID</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="id" name="id" placeholder="CNPSA + CI" required>
					</div>
				</div>

				<div class="form-group">
					<label for="nombre" class="col-sm-2 control-label">Nombres</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombres" required>
					</div>
				</div>



        <div class="form-group">
          <label for="nombre" class="col-sm-2 control-label">Cédula</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="cedula" name="cedula" placeholder="Cédula" required>
          </div>
        </div>

      	<div class="form-group">
					<label for="email" class="col-sm-2 control-label">Email</label>
					<div class="col-sm-10">
						<input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
					</div>
				</div>

				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">Telefono</label>
					<div class="col-sm-10">
						<input type="tel" class="form-control" id="telefono" name="telefono" placeholder="Telefono">
					</div>
				</div>

        <div class="form-group">
          <label for="ocupacion" class="col-sm-2 control-label">Ocupación</label>
          <div class="col-sm-10">
            <select class="form-control" id="ocupacion" name="ocupacion">
              <option value="PROFESIONAL">PROFESIONAL</option>
              <option value="ESTUDIANTE">ESTUDIANTE</option>
              <option value="COMERCIANTE">COMERCIANTE</option>
              <option value="OTRO">OTRO</option>
            </select>
          </div>
        </div>

        <div class="form-group">
          <label for="ocupacion" class="col-sm-2 control-label">Banco</label>
          <div class="col-sm-10">
            <select class="form-control" id="banco" name="banco">
              <option value="VENEZUELA">VENEZUELA</option>
              <option value="MERCANTIL">MERCANTIL</option>
              <option value="BANESCO">BANESCO</option>
              <option value="PROVINCIAL">PROVINCIAL</option>
              <option value="BICENTENARIO">BICENTENARIO</option>
              <option value="BNC">BNC</option>
              <option value="BANCARIBE">BANCARIBE</option>
              <option value="TESORO">TESORO</option>
              <option value="BOD">BOD</option>
            </select>
          </div>
        </div>

        <div class="form-group">
          <label for="tipo_ope" class="col-sm-2 control-label">Tipo de Operación</label>
          <div class="col-sm-10">
            <select class="form-control" name="tipo_ope" id="tipo_ope">
                <option value="TRANSFERENCIA">TRANSFERENCIA</option>
                <option value="DEPOSITO">DEPOSITO</option>
            </select>
          </div>
        </div>

        <div class="form-group">
          <label for="numdepo" class="col-sm-2 control-label">Número Operación</label>
          <div class="col-sm-10">
            <input type="tel" class="form-control" id="numdepo" name="numdepo" placeholder="Número de Operación">
          </div>
        </div>

        <div class="form-group">
          <label for="codigo" class="col-sm-2 control-label">Código</label>
          <div class="col-sm-10">
            <input type="tel" class="form-control" id="codigo" name="codigo" placeholder="CNPSA-000">
          </div>
        </div>

        <div class="form-group">
          <label for="asistencia" class="col-sm-2 control-label">¿Asistió en la Mañana?</label>
          <div class="col-sm-10">
            <select class="form-control" name="asistencia" id="asistencia">
                <option value="NO">NO</option>
                <option value="SI">SI</option>
            </select>
          </div>
        </div>

        <div class="form-group">
          <label for="asistencia_t" class="col-sm-2 control-label">¿Asistió en la Tarde?</label>
          <div class="col-sm-10">
            <select class="form-control" name="asistencia_t" id="asistencia_t">
                <option value="NO">NO</option>
                <option value="SI">SI</option>
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
