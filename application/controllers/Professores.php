<?php 

/**
* 
*/
class Professores extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');		

	}

	public function index(){
		// VERIFICA SE USUARIO ESTÁ LOGADO - SE ESTIVER, PROSSEGUE PARA A PAGINA
		if ($this->form_validation->run() == FALSE)
		{ //INICIO IF
            if (isset($_SESSION['logado'])) 
        	{
            	$this->load->view('adicionarprofessores.php');
        	}
            else {
           	$this->load->view('login.php');
            }
        } //FIM IF
	}

	public function adicionarProfessor()
	{

		$this->form_validation->set_rules('nomeprofessor', 'NomeProfessor', 'required');
        $this->form_validation->set_rules('dia[]', 'Dia', 'required');
        $this->form_validation->set_rules('materia[]', 'Materia', 'required');
        if ($this->form_validation->run() == FALSE) 
        {
            $mensagem['erro_materia'] = "Erro ao adicionar";

            $this->load->view('adicionarprofessores', $mensagem);
        }

        else 
        {
        	$this->load->model('adicionar_model');

        	$boolAdicionar = $this->adicionar_model->adicionarProfessor($this->input->post('nomeprofessor'), $this->input->post('dia'), $this->input->post('materia'));
        	if($boolAdicionar)
        	{

        		$this->load->model('professores_model');
            $conteudo = $this->professores_model->alimentarProfessoresCadastrados();

            $this->load->view('professorescadastrados.php', $conteudo);
        	}

        	else 
        	{
        		$mensagem['erro_professor'] = "Erro ao adicionar";
        		$this->load->view('adicionarprofessores', $mensagem);
        	}
        }
	}
}
 ?>