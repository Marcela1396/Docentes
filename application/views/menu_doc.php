<h1> Bienvenido Perfil Docente </h1>

<?php
$nombres = $this->session->userdata('nombres');
$rol = $this->session->userdata('rol');

echo "<br>";
echo "Bienvenid@: " . $nombres;
echo "<br>";
echo "Cargo: " . $rol;
echo "<br><br>"; 
?>

<nav>
	 <div> 
	    <ul>
	    	<li><a href="<?php echo base_url()?>inicio/salir">Salir </a> </li>
	    </ul>
	</div>
</nav>