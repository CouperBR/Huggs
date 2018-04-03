<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->helper('url');
				// Load session library
		$this->load->library('session');
	}
	
	public function index()
	{
		if(isset($_SESSION['logado'])){
			$dados_sessao = $_SESSION['logado'];
			$usuario = $dados_sessao['usuario'];
			$nome = $dados_sessao['nome'];
			$sobrenome = $dados_sessao['sobrenome'];

			$dados_sessao = array(
				'usuario'=> $usuario,
				'nome'=>$nome,
				'sobrenome'=>$sobrenome
			);			
		$this->load->view('dashboard.php', $dados_sessao);
		}
		else {
			$this->load->view('login.php');
		}
	}
		

}
