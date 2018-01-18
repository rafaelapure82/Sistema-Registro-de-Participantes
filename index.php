<?php
require 'conexion.php';
$where = "";

if (!empty($_POST)) {

  $valor = $_POST['campo'];
    if (!empty($valor)) {
      $where = "WHERE  cedula LIKE '%$valor%'";
    }

}

$sql = "SELECT * FROM participantes $where LIMIT 500";
$resultado = $mysqli->query($sql);


?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <center><a href="http://www.unellez.edu.ve" target="new"> <img class="image" src="img/bannerpsa.jpg" width="85%" height="40%"></a> </center>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.css">
    <link rel="stylesheet" href="css/jquery.dataTables.min.css">
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.dataTables.min.js"></script>

<script>
$(document).ready(function(){
  $('#mitabla').DataTable({
    "order": [[1, "asc"]],
    "language":{
      "lengthMenu": "Mostrar _MENU_ registros por pagina",
      "info": "Mostrando pagina _PAGE_ de _PAGES_",
      "infoEmpty": "No hay registros disponibles",
      "infoFiltered": "(filtrada de _MAX_ registros)",
      "loadingRecords": "Cargando...",
      "processing":     "Procesando...",
      "search": "Buscar:",
      "zeroRecords":    "No se encontraron registros coincidentes",
      "paginate": {
        "next":       "Siguiente",
        "previous":   "Anterior"
      },
    }
  });
});
</script>



    <title>Congreso PSA</title>
  </head>
  <body>
      <div class="container">
        <div class="row">
          <h2 style="text-align:center">Congreso Producción y Sanidad Animal</h2>
        </div>
        <br>

          <!-- BOTON DE MENU -->
<div class="btn-group">
<button type="button" class="btn btn-danger">Menu</button>
<button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  <span class="caret"></span>
  <span class="sr-only">Toggle Dropdown</span>
</button>
<ul class="dropdown-menu">
  <li><a href="nuevo.php">Nuevo Participante</a></li>
  <li><a href="reporte.php" target="newtab">Reporte PDF</a></li>
  <li><a href="reporteexcel.php" target="newtab">Reporte Excel</a></li>
  <li role="separator" class="divider"></li>
  <li><a href="http://www.unellez.edu.ve" target="newtab">UNELLEZ</a></li>
</ul>
</div>


        <br>
          <form class="" action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
            <b>Participante:</b><input type="text" name="campo" id="campo" />
            <input type="submit" name="enviar" id="enviar" value="Buscar" class="btn btn-info" />
          </form>
          <br>


          <div class="row table-responsive">
            <table class="display" id="mitabla">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Código</th>
                    <th>Nombres y Apellidos</th>
                    <th>Cédula</th>
                    <th>Correo</th>
                    <th>Asistencia M</th>
                    <th>Asistencia T</th>
                    <th></th>
                    <th></th>

                  </tr>
                </thead>
                <tbody>
                  <?php while ($row = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>
                      <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['codigo'] ?></td>
                        <td><?php echo $row['nombres']; ?></td>

                        <td><?php echo $row['cedula']; ?></td>
                        <td><?php echo $row['correo']; ?></td>
                        <td><?php echo $row['asistencia']; ?></td>
                        <td><?php echo $row['asistencia_t']; ?></td>
                        <td><a href="modificar.php?id=<?php echo $row['id']; ?>"><span class="glyphicon glyphicon-pencil"></span></a></td>
                        <td><a href="#" data-href="eliminar.php?id=<?php echo $row['id']; ?>" data-toggle="modal" data-target="#confirm-delete"><span class="glyphicon glyphicon-trash"></span></a></td>
                      </tr>
                      <?php } ?>
                </tbody>
            </table>

          </div>



      </div>



      <!-- Modal  Eliminar -->
      		<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      			<div class="modal-dialog">
      				<div class="modal-content">

      					<div class="modal-header">
      						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      						<h4 class="modal-title" id="myModalLabel">Eliminar Registro</h4>
      					</div>

      					<div class="modal-body">
      						¿Desea eliminar este registro?
      					</div>

      					<div class="modal-footer">
      						<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
      						<a class="btn btn-danger btn-ok">Delete</a>
      					</div>
      				</div>
      			</div>
      		</div>

      		<script>
      			$('#confirm-delete').on('show.bs.modal', function(e) {
      				$(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));

      				$('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');
      			});
      		</script>
      <marquee>
        <footer>
          <center>
          <a href="http://www.unellez.edu.ve" target="new"> <img src="img/footerpsa.jpg" width="70%" height="80%"></a>
        </center>
        </footer>
      </marquee>
  </body>
</html>
