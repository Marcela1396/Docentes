<div class="row">
    <div class="column">
    	<h3>Nuevo Usuario</h3>
    	<hr>
        <?php
        	echo validation_errors('<div class=error>','</div>');
        	echo form_open('usuarios/adicionar_usuario');
            
        	echo form_label('*Cédula del Usuario','txtcedusu');
            echo form_input('txtcedusu');
            
            echo form_label('*Nombre del Usuario','txtnomusu');
            echo form_input('txtnomusu');
                        
            echo form_label('*Rol del Usuario','txtrolusu');
        	echo "<select name='txtrolusu'>";
                echo "<option value='administrador'" . set_select('txtrolusu', 'administrador') . ">Administrador</option>";
                echo "<option value='docente'" . set_select('txtrolusu', 'docente') . ">Docente</option>";
            echo "</select>";
            
        	echo "<hr>";
        	echo form_submit('cmdEnviar','Registrar');
        	echo form_close();
        ?>
    </div>
    <div class="column"></div>
 </div>