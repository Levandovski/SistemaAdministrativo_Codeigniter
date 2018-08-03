<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{		
		$this->load->view('includes/html_header');
		$this->load->view('includes/menu');	
		$this->load->view('listar_usuario');
		$this->load->view('includes/html_footer');
	}
	public function cadastro()
	{		
		$this->load->view('includes/html_header');
		$this->load->view('includes/menu');	
		$this->load->view('cadastro_usuario');
		$this->load->view('includes/html_footer');
	}
	public function cadastrar(){
		$dados['nome']=$this->input->post('nome');
		$dados['cpf']=$this->input->post('cpf');		
		$dados['email']=$this->input->post('email');
		$dados['senha']=md5($this->input->post('senha'));
		$dados['status']=$this->input->post('status');
		$dados['nivel']=$this->input->post('nivel');
		$dados['endereco']=$this->input->post('endereco');

		if($this->db->insert('usuario',$dados)){
			redirect('usuario');
		}
	}
}
