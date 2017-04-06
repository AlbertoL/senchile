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

	public function listado()
	{
		/*zona configuración inicial de la página*/
		if ($this->uri->segment(3)) 
		{
			$pagina = $this->uri->segment(3);
		}
		else
		{
			$pagina = 0;
		}
		$porpagina = 1;

		/*Zona carga de datos*/
		$datos = $this->prueba_model->getTodosPaginacion($pagina,$porpagina,"limit");
		$cuantos = $this->prueba_model->getTodosPaginacion($pagina,$porpagina,"cuantos");

		/*Zona de configuración de la librería pagination*/
		$config['base_url'] = base_url()."prueba/listado";
		$config['total_rows'] = $cuantos;
		$config['per_page'] = $porpagina;
		$config['uri_segment'] = '3';
		$config['num_links'] = '4';
		$config['first_link'] = 'Primero';
		$config['next_link'] = 'Siguiente';
		$config['prev_link'] = 'Anterior';
		$config['last_link'] = 'Último';
		$config['full_tag_open'] = '<ul class="pagination">';

		$config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li><a><b>';
        $config['cur_tag_close'] = '</b></a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';

		$config['full_tag_close'] = '</ul>';

		$this->pagination->initialize($config);

		$this->layout->view('listado',compact('datos','cuantos','pagina'));

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

	public function edit($id=null,$pagina=null){
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

		$this->layout->view('edit',compact('datos','id','pagina'));
	}

	public function delete($id=null){

		if(!$id){show_404();}
		$datos=$this->prueba_model->getTodosId($id);
		if (sizeof($datos)==0) 
		{
			show_404();
		}
		$this->prueba_model->delete($id);

		$this->session->set_flashdata('css','success');
		$this->session->set_flashdata('mensaje','El registro se ha eliminado satisfactoriamente');
		redirect(base_url()."prueba");

	}
	
}