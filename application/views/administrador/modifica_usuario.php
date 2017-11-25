<div class="row">
    <div class="column">
    	<h3>Actualizar Información de Usuario</h3>
    	<hr>
        <?php
        	echo validation_errors('<div class=error>','</div>');
        	echo form_open('usuarios/modificar_usuario');
            
            echo form_hidden('txtidusu', $usuarios['id_usu']);

            echo form_label('*Cédula del Usuario','txtcedusu');
            echo form_input('txtcedusu', $usuarios['cedula_usu']);
            
            echo form_label('*Nombre del Usuario','txtnomusu');
            echo form_input('txtnomusu', $usuarios['nombre_usu']);
            
            //echo form_label('*Clave de Acceso','txtpassusu');
            //echo form_password('txtpassusu');
            
            echo form_label('*Rol del Usuario','txtrolusu');
            echo "<select name='txtrolusu'>";
            if($usuarios['rol_usu'] == 'administrador'){
                echo "<option selected <option  value='administrador'" . set_select('txtrolusu', 'administrador'). " >Administrador</option>"; 
                echo "<option value='docente'" . set_select('txtrolusu', 'docente').">Docente</option>";
            }
            else{
                echo "<option selected <option ". " value='docente'" . set_select('txtrolusu', 'docente') . ">Docente</option>";
                 echo "<option value='administrador'" . set_select('txtrolusu', 'administrador') . ">Administrador</option>";
            }
            echo "</select>";
        	echo "<hr>";
        	echo form_submit('cmdEnviar','Actualizar');
        	echo form_close();
        ?>
    </div>
    <div class="column"></div>
 </div>