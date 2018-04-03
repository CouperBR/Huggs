<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class PageLoad extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();

		$this->load->library('session');

		if ($this->session->userdata('logado') == NULL) {

		}

	}
	// FUNÇÃO QUE CHECA A SESSÃO ANTES DE REDIRECIONAR PARA A PÁGINA
	public function checarSessao(){

		if ($this->session->userdata('logado') == NULL) {

			return FALSE;
		}

		else {

			return TRUE;
		}
	}

	// CARREGAR O DASHBOARD
	public function dashboard(){

		if($this->checarSessao() == TRUE){
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
			redirect(base_url('index.php/Usuarios'));
		}
	}
	// CARREGAR A PAGNA: ADICIONAR PROFESSORES
	public function adicionarProfessores(){

		if($this->checarSessao() == TRUE){
			$this->load->view('adicionarprofessores.php');
		}
		else {
			redirect(base_url('index.php/Usuarios'));
		}
	}

}

 ?>