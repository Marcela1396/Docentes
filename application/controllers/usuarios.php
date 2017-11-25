<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

	public function adicionar_usuario(){
		
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
        
        $this->load->view('footer');
	}


	public function listar_usuarios($par){
		$this->load->view('encabezado');
        $this->load->view('menu_adm');
        $this->load->model('m_usuarios');
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
    	$this->load->view('encabezado');
        $this->load->view('menu_adm');
        $this->load->model('m_usuarios');
		$res['mensaje'] = $this->m_usuarios->eliminar_usuario();
		$this->load->view('mensaje',$res);	
    }


	public function visualizar_usuarios(){
		$this->load->view('encabezado');
		$this->load->view('menu_adm');
        $this->load->library('table');
        $this->load->model('m_usuarios');
        $res['usuarios'] = $this->m_usuarios->consultar_usuarios();
        $this->load->view('administrador/listar_usuarios',$res);
	}
}
