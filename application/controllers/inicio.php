<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {

	public function index()
	{
		$this->load->view('encabezado');
		$this->load->view('menu_adm');
		$this->load->view('footer');
	}
}
