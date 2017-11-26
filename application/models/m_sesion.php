<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_sesion extends CI_Model {
	
	function consultar_usr(){
		$log = $this->input->post('txtlog');
		$cla = sha1($this->input->post('txtcla'));
		$this->db->where('cedula_usu',$log);
		$this->db->where('pass_usu',$cla);
		$res = $this->db->get('usuarios');
		if ($res->num_rows()==0){
			return 'Usuario no existe';
		}
		else{
			$reg = $res->row();
			$this->session->set_userdata('cedula',$reg->cedula_usu);
			$this->session->set_userdata('nombres',$reg->nombre_usu);
			$this->session->set_userdata('rol',$reg->rol_usu);
			return $reg->rol_usu;
		}
	}
}