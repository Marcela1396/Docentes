<nav class="navbar navbar-expand-lg navbar-dark pink darken-3">
		<a class="navbar-brand" href="<?php echo base_url()?>inicio">
        <img src="http://www.iconarchive.com/download/i92103/custom-icon-design/pretty-office-13/Users.ico" height="30" class="d-inline-block align-top" alt="">
        Menú Administrador
    	</a>

	    <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
	      	<ul class="navbar-nav ml-auto">
	        	<li class="nav-item active">
	        		<a class="nav-link" href="<?php echo base_url()?>inicio">Inicio </a> 
	        	</li>

	        	<li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Usuarios </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-cyan" aria-labelledby="navbarDropdownMenuLink-4">
                        <a class="dropdown-item"  href="<?php echo base_url()?>usuarios/adicionar_usuario">Nuevo Usuario </a>

		        		<a class="dropdown-item" href="<?php echo base_url()?>usuarios/listar_usuarios/1">Modificar Usuario </a>

	        			<a class="dropdown-item" href="<?php echo base_url()?>usuarios/listar_usuarios/2">Eliminar Usuario </a>
	        	
	        			<a  class="dropdown-item" href="<?php echo base_url()?>usuarios/visualizar_usuarios">Listar Usuarios </a>
                    </div>
                </li>


                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Eventos </a>

                    <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">

	                    <a class="dropdown-item" href="<?php echo base_url()?>eventos/adicionar_eve">Nuevo Evento </a>

	                    <a class="dropdown-item" href="<?php echo base_url()?>eventos/listar_eve/1">Modificar Evento </a>

	                    <a class="dropdown-item" href="<?php echo base_url()?>eventos/listar_eve/2">Eliminar Evento </a>	
	                </div>
	        	</li>

	        	<li class="nav-item active">
	        		<a class="nav-link" href="<?php echo base_url()?>inicio/salir">Salir </a>
	        	</li>
	        </ul>
	     </div>
</nav>

<br> 
<div class="container" >
	<div class="row">
		<div class="col-lg-12 m-auto">
			<div class="card" style="background-color:#ad1457">
				<p id="bienvenida">
					<?php
					$nombres = $this->session->userdata('nombres');
					$rol = $this->session->userdata('rol');

					echo "Bienvenid@: " . $nombres;
					echo "<br>";
					echo "Cargo: " . $rol;
					?>
				</p>
			</div>
		</div>
	</div>
</div> <br>








                







