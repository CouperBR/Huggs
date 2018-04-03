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
}
 ?>