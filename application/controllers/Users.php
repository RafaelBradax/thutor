<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {
	// Metodo construtor
	function __construct(){
		parent::__construct();
		$this->load->model('users_model','users');
	}
	// Metodo principal
	public function index($status = NULL){
		// Variavel 'status' recebe [created,updated,deleted ou error]
		// para mostrar uma mensagem para o usuario
		$data['status'] = $status;
		// Pega os registros
		$data['data'] = $this->users->get_all();
		// Chama a view
		$this->load->view('listUsers',$data);
	}
	// Chama o formulario de cadastro
	public function formNew(){
		// Inicializa a variavel errors
		$data['errors'] = NULL;
		$this->load->view('newUser',$data);
	}
	// Chama o formulario de atualizacao de cadastro
	public function formUpd($id){
		$data['id'] = $id;
		$data['data'] = $this->users->get_one($id);
		$this->load->view('updUser',$data);
	}
	// Chama o view de um usuario
	public function view($id){
		$data['id'] = $id;
		$data['data'] = $this->users->get_one($id);
		$this->load->view('viewUser',$data);
	}
	// Recupera, valida e executa o cadastro do usuario
	public function new(){
		// Inicializa a variavel errors
		$data['errors'] = NULL;
		// Modifica a mensagem que sera informada ao usuario em caso de erros na validacao do formulario
		$msg_errors['required'] = 'O campo <strong>{field}</strong> não foi preenchido corretamente.<br>Verifique o campo e tente novamente.';
		$msg_errors['numeric'] = $msg_errors['required'];

		// Define as regras de validacao do formulario
		$this->form_validation->set_rules('name', 'Nome', 'trim|required',$msg_errors);
		$this->form_validation->set_rules('day', 'Dia', 'required',$msg_errors);
		$this->form_validation->set_rules('mounth', 'Mês', 'required',$msg_errors);
		$this->form_validation->set_rules('year', 'Ano', 'required');
		$this->form_validation->set_rules('biography', 'Biografia', 'trim|required',$msg_errors);
		$this->form_validation->set_rules('cep', 'CEP', 'trim|required',$msg_errors);
		$this->form_validation->set_rules('street', 'Rua', 'trim|required',$msg_errors);
		$this->form_validation->set_rules('neighborhood', 'Bairro', 'trim|required',$msg_errors);
		$this->form_validation->set_rules('number', 'Número', 'trim|required|numeric',$msg_errors);
		$this->form_validation->set_rules('complement', 'Complemento', 'trim|required',$msg_errors);
		$this->form_validation->set_rules('city', 'Cidade', 'trim|required',$msg_errors);
		$this->form_validation->set_rules('uf', 'Estado', 'trim|required',$msg_errors);
		// Executa a validacao
		if($this->form_validation->run() == FALSE):
			$data['errors'] = validation_errors('<li>','</li>');
			$this->load->view('newUser',$data);
		else:
			// Obtem os dados do formulario
			$value = $this->input->post();

			// Formata a data de nascimento
			$date = $value['day'].'-'.$value['mounth'].'-'.$value['year'];
			$dateTime = new DateTime($date);
			$formatted_date=date_format ( $dateTime, 'Y-m-d' );
			// Monta o array de dados
			$data = array();
			$data['user_name'] = $value['name'];
			$data['user_birthday'] = $formatted_date;
			$data['user_biography'] = $value['biography'];
			$data['user_creation'] = date("Y-m-d H:i:s");
			$data['user_address'] = $value['cep'].';'.$value['street'].';'.$value['neighborhood'].';'.$value['number'].';'.$value['complement'].';'.$value['city'].';'.$value['uf'];
			$data['user_phone'] = $value['phone'];
			// Conversa com o model
			if($this->users->insert($data)):
				redirect('usuarios/created', 'location');
			else:
				redirect('usuarios/error', 'location');
			endif;
		endif;
	}
	public function update(){
		// Recupera os dados
		$value = $this->input->post();
		// Monta o array de dados
		$date = $value['day'].'-'.$value['mounth'].'-'.$value['year'];
		$dateTime = new DateTime($date);
		$formatted_date=date_format ( $dateTime, 'Y-m-d' );
		$id = $value['id'];
		$data = array();
		$data['user_name'] = $value['name'];
		$data['user_birthday'] = $formatted_date;
		$data['user_biography'] = $value['biography'];
		$data['user_creation'] = date("Y-m-d H:i:s");
		$data['user_address'] = $value['cep'].';'.$value['street'].';'.$value['neighborhood'].';'.$value['number'].';'.$value['complement'].';'.$value['city'].';'.$value['uf'];
		$data['user_phone'] = $value['phone'];
		// Conversa com o model
		if($this->users->update($data,$id)):
			redirect('usuarios/updated', 'location');
		else:
			redirect('usuarios/error', 'location');
		endif;
	}
	// Metodo para o delete de um usuario
	public function delete($id){
		if($this->users->delete($id)):
			redirect('usuarios/deleted', 'location');
		else:
			redirect('usuarios/error', 'location');
		endif;
	}

}
