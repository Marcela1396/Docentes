<?php
	echo "<h3>Lista de Usuarios del Sistema</h3>";
	$this->table->set_heading(array('Id del Usuario','Cédula del Usuario','Nombre','Contraseña','Rol'));
	echo $this->table->generate($usuarios);
?>