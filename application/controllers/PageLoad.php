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
			
			$this->load->model('materias_model');
			$resultados = $this->materias_model->alimentarMaterias();

			$this->load->view('adicionarprofessores.php', $resultados);
		}
		else {
			redirect(base_url('index.php/Usuarios'));
		}
	}
	public function professoresCadastrados(){

		if($this->checarSessao() == TRUE){
			
			$this->load->model('professores_model');
			$conteudo = $this->professores_model->alimentarProfessoresCadastrados();

			$this->load->view('professorescadastrados.php', $conteudo);
		}
		else {
			redirect(base_url('index.php/Usuarios'));
		}
	}

	public function adicionarMaterias()
	{
		if($this->checarSessao() == TRUE)
		{

			// Acessa o model para alimentar select de cursos
			$this->load->model('cursos_model');
			$resultados = $this->cursos_model->alimentarCursos();

			if ($resultados !== NULL) {

				$this->load->view('adicionarmaterias', $resultados);
			}
			else {
				$this->load->view('adicionarmaterias');
			}
		}
		else {
			redirect(base_url('index.php/Usuarios'));
		}
	}

	public function adicionarCursos(){

		if($this->checarSessao() == TRUE){

			// Acessa o model para alimentar select de cursos
			$this->load->view('adicionarcursos');
		}
		else {
			redirect(base_url('index.php/Usuarios'));
		}
	}

	public function cursosCadastrados(){

		if($this->checarSessao() == TRUE){

			$this->load->model('cursos_model');

			$resultados = $this->cursos_model->alimentarCursosCadastrados();

			$this->load->view('cursoscadastrados.php', $resultados);
		}
		else {
			redirect(base_url('index.php/Usuarios'));
		}
	}
	public function materiasCadastradas()
	{
		if($this->checarSessao() == TRUE){

			$this->load->model('materias_model');

			$resultados = $this->materias_model->alimentarMateriasCadastradas();

			$this->load->view('materiascadastradas.php', $resultados);
		}
		else {
			redirect(base_url('index.php/Usuarios'));
		}
	}

	public function grade()
	{
		if($this->checarSessao() == TRUE){

			$this->load->model('cursos_model');

			$resultados = $this->cursos_model->alimentarCursos();
			
			$this->load->view('grade.php', $resultados);
		}
		else {
			redirect(base_url('index.php/Usuarios'));
		}		
	}

}

 ?>