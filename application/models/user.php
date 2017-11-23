<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Model{

	public function findBy($param){
		$query = $this->db->get_where('admin', $param);
		$result = $query->result_array();
		return $result;
	}

	public function insert($param){
		$this->db->insert('admin', $param);
	}
	public function findpart()
	{
		$data = $this->db->get('participant');
		return $data->result_array();
	}
}