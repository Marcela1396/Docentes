<div class="row">
    <div class="column">
    	<h3>Nuevo Usuario</h3>
    	<hr>
        <?php
        	echo validation_errors('<div class=error>','</div>');
        	echo form_open('eventos/adicionar_eve');
            
        	echo form_label('*Nombre del Evento','txtnomeve');
            echo form_input('txtnomeve');
            
            
            echo form_label('*Tipo de Evento','txttipoeve');
            echo "<select name='txttipoeve'>";
                echo "<option value='congreso'" . set_select('txttipoeve', 'congreso') . ">Congreso</option>";
                echo "<option value='conversatorio'" . set_select('txttipoeve', 'conversatorio') . ">Conversatorio</option>";
                echo "<option value='seminario'" . set_select('txttipoeve', 'seminario') . ">Seminario</option>";
            echo "</select>";

            
            echo form_label('*Lugar Evento','txtlugeve');
            echo form_input('txtlugeve');

            echo form_label('*Fecha Inicio','txtfechaIneve');
            echo "<input type='date' name='txtfechaIneve' value='" . date('Y-m-d') . "'>";

            echo form_label('*Fecha Finalización','txtfechaFneve');
            echo "<input type='date' name='txtfechaFneve' value='" . date('Y-m-d') . "'>";

            echo "<br>";

            echo form_label('*Valor Evento','txtvaleve');
            echo form_input('txtvaleve');
            
            echo form_label('*Usuario','txtusuario');
            echo "<select name='txtusuario'>";
            foreach ($usuarios as $row) {
                
                echo "<option value=". $row['id_usu'] . set_select('txtusuario', $row['id_usu']) . ">".$row['nombre_usu']."</option>";
            }
            echo "</select>";
            
        	echo "<hr>";
        	echo form_submit('cmdEnviar','Registrar');
        	echo form_close();
        ?>
    </div>
    <div class="column"></div>
 </div>