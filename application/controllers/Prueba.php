<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prueba extends CI_Controller 
{
	public function __construct(){
		parent::__construct();
		$this->layout->setLayout("frontend");
	}

	public function index()
	{
		$datos=$this->prueba_model->getTodos();
		/*print_r($datos);exit;*/
		$this->layout->view('index',compact('datos'));

	}
	public function add()
	{
		// Zona de procesamiento de datos
		if ($this->input->post()) {
			if ($this->form_validation->run('add_prueba')) {
				
				// Procesamiento del formulario

				$data=array
				(
					'num_golpe'=>$this->input->post('num_golpe',true),
					'nombre_equipo'=>$this->input->post('nombre_equipo',true),
					'area'=>$this->input->post('area',true),
					'fecha'=>date("Y-m-d"),
				);

				$insertar=$this->prueba_model->insertar($data);
				// echo $insertar;exit;
				$this->session->set_flashdata('css','success');
				$this->session->set_flashdata('mensaje','El registro se ha creado satisfactoriamente');
				redirect(base_url()."prueba");
			}


		}
		// Zona de Visualización
		$this->layout->view('add');
	}

	public function edit($id=null){
		if(!$id){show_404();}
		$datos=$this->prueba_model->getTodosId($id);
		if (sizeof($datos)==0) 
		{
			show_404();
		}

		if ($this->input->post()) {
			if ($this->form_validation->run('add_prueba')) {
				
				// Procesamiento del formulario

				$data=array
				(
					'num_golpe'=>$this->input->post('num_golpe',true),
					'nombre_equipo'=>$this->input->post('nombre_equipo',true),
					'area'=>$this->input->post('area',true),
				);
				$this->prueba_model->update($data,$this->input->post('id',true));
				$this->session->set_flashdata('css','success');
				$this->session->set_flashdata('mensaje','El registro se ha modificado satisfactoriamente');
				redirect(base_url()."prueba");
			}


		}

		$this->layout->view('edit',compact('datos','id'));
	}
	
}