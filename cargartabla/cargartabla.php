<table class="table table-hover table-bordered" id="actualizartabla">
	<thead>
		<tr>
			<th>N#</th>
			<th>Nombre del Archivo</th>
			<th>Ver archivo</th>
		</tr>
	</thead>
	<tbody>
		<?php
			include '../conexion/conexion.php';
			$sql = "SELECT * FROM  archivos";
			$resultado = mysqli_query($conectar,$sql);
			while ($mostrar = mysqli_fetch_array($resultado)) {
		?>
				<tr>
					<td><?php echo $mostrar['id']; ?></td>
					<td><?php echo $mostrar['nombre']; ?></td>
					<td><a data-href="php/mostrar.php?clave=<?php echo $mostrar['id']?>" class="openPopup" data-toggle="modal"><i class="glyphicon glyphicon-download-alt"></i></a></td>
				</tr>
		<?php
			}

		?>
	</tbody>
</table>

<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog" width="800" height="5000">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Mostrar Archivo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="infor"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary">Aceptar</button>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
	$(document).ready(function(){
		$('.openPopup').on('click',function(){
			 var dataURL = $(this).attr('data-href')
			 $('.infor').load(dataURL,function(){
			 	$("#myModal").modal({show:true});
			 });

		});
	});
</script>

