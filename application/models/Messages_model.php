<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Messages_model extends CI_Model {

	function __construct(){
		parent::__construct();
	}
	// Insert simples
	public function insert($data){
		if($this->db->insert('messages', $data)):
			return true;
		else:
			return false;
		endif;
	}
	// Select all
	public function get_all(){
		$sql = 'SELECT msg_id as id, msg_body as msg, msg_date as date, users.user_name as user ';
		$sql .= 'FROM `messages` ';
		$sql .= 'INNER JOIN users on messages.msg_user=users.user_id';
		$query = $this->db->query($sql);
		$row = $query->result_array();
		return $row;
	}
	// Select One
	public function get_one($id){
		$sql = 'SELECT msg_id as id, msg_body as msg, msg_date as date, users.user_name as user ';
		$sql .= 'FROM `messages` ';
		$sql .= 'INNER JOIN users on messages.msg_user=users.user_id ';
		$sql .= 'WHERE msg_id = ?';
		$query = $this->db->query($sql, $id);
		$row = $query->result_array();
		return $row;
	}

}

?>