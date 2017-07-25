<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends CI_Model {

	function __construct(){
		parent::__construct();
	}
	// Select all
	public function get_all(){
		$this->db->select('user_id as id, user_name as name');
		$this->db->from('users');
		$this->db->where('user_trash', 0);
		$query = $this->db->get();
		$row = $query->result_array();
		return $row;
	}
	// Select one
	public function get_one($id){
		$this->db->select('user_id as id,user_name as name,user_birthday as birthday, user_biography as biography, user_creation as creation, user_address as address, user_phone as phone');
		$this->db->from('users');
		$this->db->where('user_id', $id);
		$query = $this->db->get();
		$row = $query->result_array();
		return $row;
	}
	// Insert simples
	public function insert ($data){
		if($this->db->insert('users', $data)):
			return true;
		else:
			return false;
		endif;
	}
	// Update simples
	public function update ($data,$id){
		$this->db->where('user_id', $id);
		if($this->db->update('users', $data)):
			return true;
		else:
			return false;
		endif;
	}
	// Delete sem apagar do banco de dados
	// Apenas muda uma flag no banco
	// user_trash = 0 -> Usuario ativo
	// user_trash = 1 -> Usuario apagado
	public function delete($id){
		$this->db->where('user_id', $id);
		if($this->db->update('users', array('user_trash' => '1'))):
			return true;
		else:
			return false;
		endif;
	}
}