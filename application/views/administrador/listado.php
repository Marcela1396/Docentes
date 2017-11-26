<div class="container">
	<div class="row">
        <div class="col-lg-8 m-auto">
			<p  id="titles" style="text-align: left;"> Listado de Usuarios </p>

				<p id="contenido"> Seleccione el usuario correspondiente </p>
				<form method="post" action="<?php echo base_url() . 'usuarios/' . $opcion;?>">
				<?php
					echo "<select class='selectpicker'data-style='btn btn-unique' id= 'txt_opc'  name='victima' required>";
					foreach ($usuarios as $row) {
						echo "<option value=".$row['id_usu'].">".$row["nombre_usu"]."</option>" ;	
					}
						echo "</select>";
				?>
						
						<div align="center">
								<input  type="submit" value="Seleccionar" class="btn btn-indigo lighten-1">
						</div>
					</div>
				</form>
		</div>
	</div>
</div>