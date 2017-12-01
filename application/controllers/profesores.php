<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profesores extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('grocery_CRUD');
	}

	public function _example_output($output = null)
	{
		//$this->load->view('menu_doc');
		$this->load->view('docentes/docentes.php',(array)$output);
	}

	public function index()
	{
		
		$this->_example_output((object)array('output' => '' , 'js_files' => array() , 'css_files' => array()));
	}

	public function formacion(){
		
		$crud = new grocery_CRUD();

		$crud->set_table('estudios')
		// Campos que va a mostrar
		->columns('id_est','titulo_est','fecha_grado_est','nivel_form_est','modalidad_est','usuario') 
		// Campos que puede editar
		->fields('titulo_est','fecha_grado_est','nivel_form_est','modalidad_est','usuario') 
		// Cambia el titulo de Añadir Registro por Añadir Inmbueble
		->set_subject('estudio')
		// Titulo de la tabla de codtip por Tipo de inmueble
		->display_as('id_est', 'Id')
		->display_as('titulo_est', 'Titulo')
		->display_as('fecha_grado_est', 'Fecha Grado')
		->display_as('nivel_form_est', 'Nivel Formación')
		->display_as('modalidad_est', 'Modalidad')
		->display_as('usuario', 'Docente')
		//Campos requeridos
		->required_fields('titulo_est','fecha_grado_est','nivel_form_est','modalidad_est','usuario') 
		//Reglas de validacion
		
		// Relacionar con la tabla ventas y que se muestre el nombre del tipo
		->set_relation('usuario','usuarios','nombre_usu');
		

		$output = $crud->render();
		$this->_example_output($output);
		
	}

	public function productividad(){
		
		$crud = new grocery_CRUD();

		$crud->set_table('productividad')
		// Campos que va a mostrar
		->columns('id_prod','titulo_prod','tipo_prod','fecha_real_prod','lugar_prod','descripcion_prod', 'usuario') 
		// Campos que puede editar
		->fields('titulo_prod','tipo_prod','fecha_real_prod','lugar_prod','descripcion_prod', 'certificado', 'usuario') 
		// Cambia el titulo de Añadir Registro por Añadir Inmbueble
		->set_subject('productividad')
		// Titulo de la tabla de codtip por Tipo de inmueble
		->display_as('id_prod', 'Id')
		->display_as('titulo_prod', 'Titulo')
		->display_as('tipo_prod', 'Tipo')
		->display_as('fecha_real_prod', 'Fecha Producción')
		->display_as('lugar_prod', 'Lugar de Producción')
		->display_as('descripcion_prod', 'Descripción')
		->display_as('usuario', 'Docente')

		//Campos requeridos
		->required_fields('titulo_prod','tipo_prod','fecha_real_prod','lugar_prod','descripcion_prod', 'usuario') 
		//Reglas de validacion
		
		// Relacionar con la tabla ventas y que se muestre el nombre del tipo
		->set_relation('usuario','usuarios','nombre_usu');
		

		$output = $crud->render();
		$this->_example_output($output);
	}


	public function  eventos(){

	}

}
