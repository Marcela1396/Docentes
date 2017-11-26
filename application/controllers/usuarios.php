<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

	public function index(){
		if ($this->session->userdata('rol') == 'administrador')
		{
			// Si es un administrador valida entra al menu respectivo
			$this->load->view('encabezado');            
			$this->load->view('menu_adm');
			$this->load->view('cuerpo');	
		}
		elseif ($this->session->userdata('rol') == 'docente')
		{
			// Si es docentre entra al menu Docente
			$this->load->view('encabezado');
			$this->load->view('menu_doc');
		}
		else{
			$res['mensaje'] = "Sesión no inicializada";
			$this->load->view('mensaje',$res);
		}

		$this->load->view('footer');

	}

	public function adicionar_usuario(){
		
		// Si el Adm. Desea Agregar un nuevo usuario
		// Por defecto la contraseña = cedula de usuario
		if ($this->session->userdata('rol') != 'administrador') redirect('inicio');
		$this->load->view('encabezado');
		$this->load->view('menu_adm');
		$this->form_validation->set_rules('txtcedusu','Cedula','required');
		$this->form_validation->set_rules('txtnomusu','Nombre','required');
		$this->form_validation->set_rules('txtrolusu','Rol','required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('administrador/nuevo_usuario');
		} else {
            $this->load->model('m_usuarios');
			$res['mensaje'] = $this->m_usuarios->nuevo_usuario();
            $this->load->view('mensaje',$res);
		}
        
	}


	public function listar_usuarios($par){
		// Segunda Opcion del menu
		// Si el par = 1 la opcion es modificar, si es 2 = eliminar

		if ($this->session->userdata('rol') != 'administrador') redirect('inicio');
		$this->load->view('encabezado');
        $this->load->view('menu_adm');
        $this->load->model('m_usuarios');
        // Consultamos usuarios, para tener sus datos y mostrarlos en el listado de seleccion
		$arr['usuarios'] = $this->m_usuarios->consultar_usuarios();

		if($par == '1'){
			//Modificar
			$arr['opcion'] = 'modificar_usuario';
		}
		else{
			// Eliminar
			$arr['opcion'] = 'eliminar_usuario';
		}
		$this->load->view('administrador/listado',$arr);
	}


	public function modificar_usuario(){
		//Opción Modificar Usuario

		if ($this->session->userdata('rol') != 'administrador') redirect('inicio');
        $this->load->view('encabezado');
        $this->load->view('menu_adm');
        $this->load->model('m_usuarios');
		$arr['usuarios'] = $this->m_usuarios->buscar_usuario();

        $this->form_validation->set_rules('txtcedusu','Cedula','required');
		$this->form_validation->set_rules('txtnomusu','Nombre','required');
		//$this->form_validation->set_rules('txtpassusu','Contraseña','required');
		$this->form_validation->set_rules('txtrolusu','Rol','required');

		if ($this->form_validation->run() == FALSE) {
			$arr['usuarios'] = $this->m_usuarios->buscar_usuario();
			$this->load->view('administrador/modifica_usuario', $arr);
		} else {
            $this->load->model('m_usuarios');
			$res['mensaje'] = $this->m_usuarios->actualiza_usuario();
            $this->load->view('mensaje',$res);
		}
    }

    public function eliminar_usuario(){
    	// Opcion Eliminar Usuario
    	if ($this->session->userdata('rol') != 'administrador') redirect('inicio');
    	$this->load->view('encabezado');
        $this->load->view('menu_adm');
        $this->load->model('m_usuarios');
		$res['mensaje'] = $this->m_usuarios->eliminar_usuario();
		$this->load->view('mensaje',$res);	
    }


	public function visualizar_usuarios(){
		//Opcion Visualizar Usuarios
		if ($this->session->userdata('rol') != 'administrador') redirect('inicio');

		$this->load->view('encabezado');
		$this->load->view('menu_adm');
        $this->load->library('table');
        $this->load->model('m_usuarios');
        $res['usuarios'] = $this->m_usuarios->consultar_usuarios();
        $this->load->view('administrador/listar_usuarios',$res);
	}
}
