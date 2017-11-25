<div style="min-height: 200px" class="container">
	<h3 style="color: white"> Listado de Eventos </h3>
		<h4> Seleccione el evento correspondiente </h4>
		<form method="post" action="<?php echo base_url() . 'eventos/' . $opcion;?>">
		<?php
			echo "<select id= 'txt_opc'  name='evento' required>";
			foreach ($eventos as $row) {
				echo "<option value=".$row['id_eve']."> Evento: ".$row["nombre_eve"]." Encargado: ".$row["nombre_usu"]."</option>" ;	
			}
				echo "</select>";
		?>
				
				<div align="center" class="input-field col s12">
						<input  type="submit" value="Seleccionar" class="waves-effect waves-light btn">
				</div>
			</div>
		</form>
</div>