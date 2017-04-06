<?php

/**
* 
*/
class Prueba_model extends CI_Model
{
	
	public function __construct()
	{
		parent::__construct();
	}
	// Métodos de consulta
	public function getTodosPaginacion($pagina,$porpagina,$quehago)
	{
		switch ($quehago) {
			case 'limit':
				$query = $this->db
					->select("id_panel,fecha,num_golpe,nombre_equipo,area")
					->from('panel')
					->limit($porpagina,$pagina)
					->order_by("id_panel","desc")
					->get();
				return $query->result();
			break;

			case 'cuantos':
				$query = $this->db
					->select("id_panel,fecha,num_golpe,nombre_equipo,area")
					->from('panel')
					->count_all_results();
				return $query;
			break;
			
			default:
				break;
		}

	}
	public function getTodos()
	{
		$query = $this->db
				->select("id_panel,fecha,num_golpe,nombre_equipo,area")
				->from('panel')
				->order_by("id_panel","desc")
				->get();

		/*Muestra descripción consulta*/
		/*echo $this->db->last_query();exit;*/
		return $query->result();
	}
	public function getTodosId($id)
	{
		$query = $this->db
				->select("id_panel,fecha,num_golpe,nombre_equipo,area")
				->from('panel')
				->where(array("id_panel"=>$id))
				->get();

		/*Muestra descripción consulta*/
		/*echo $this->db->last_query();exit;*/
		return $query->row();
	}

	public function insertar($data=array())
	{
		$this->db->insert('panel',$data);
		return $this->db->insert_id();
	}

	public function update($data=array(),$id)
	{
		$this->db->where('id_panel',$id);
		$this->db->update('panel',$data);
	}

	public function delete($id)
	{
		$this->db->where('id_panel',$id);
		$this->db->delete('panel');
	}
}