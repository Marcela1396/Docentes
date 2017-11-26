<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {

	public function index()
	{
		// Valida el inicio de sesion 

		if ($this->session->userdata('rol')) { 
		//si la sesion esta activa lo redirije a usuarios
            redirect('usuarios');
        } else {
            $this->load->view('encabezado');
            $this->form_validation->set_rules('txtlog','Login','required');
            $this->form_validation->set_rules('txtcla','Clave','required');
            if ($this->form_validation->run()==FALSE){
                $this->load->view('login');
            }
            else{
                $this->load->model('m_sesion');
                $res['mensaje'] = $this->m_sesion->consultar_usr();
                if ($res['mensaje']=='Usuario no existe'){
                    $this->load->view('mensaje',$res);
                }
                else{
                    redirect('usuarios');
                }
            }

        }			
	}
	public function salir(){
		// Destruye la sesion
		$this->session->sess_destroy();
		redirect('inicio');
	}
}
