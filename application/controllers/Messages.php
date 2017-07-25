<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Messages extends CI_Controller {
	// Metodo construtor
	function __construct(){
		parent::__construct();
		$this->load->model('users_model','users');
		$this->load->model('messages_model','msg');
	}
	// Metodo Pirncipal
	public function index($status = NULL){
		$data['status'] = $status;
		$data['data'] = $this->msg->get_all();
		$this->load->view('listMsg', $data);
	}
	// Metodo que chama o formulario
	public function formNew(){
		$data['names'] = $this->users->get_all();
		$this->load->view('newMsg',$data);
	}
	// Metodo que recebe os dados do formulario
	// e conversa com a camada do model
	public function new (){
		// Recebe o POST
		$value = $this->input->post();
		// Formata o array
		$data['msg_body'] = $value['msg'];
		$data['msg_date'] = date("Y-m-d H:i:s");
		$data['msg_user'] = $value['name'];
		// Envia para o Model
		if($this->msg->insert($data)):
			redirect('mensagens/created', 'location');
		else:
			redirect('mensagens/error', 'location');
		endif;
	}
	// Chama o view de uma mensagem
	public function view($id){
		$data['data'] = $this->msg->get_one($id);
		$this->load->view('viewMsg', $data);
	}
} // Final da classe

?>