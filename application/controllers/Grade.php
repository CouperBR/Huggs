<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Grade extends CI_Controller {

	public function __construct() 
        {
		parent::__construct();
		// Load form helper library
		$this->load->helper('form');
		// Load form validation library
		$this->load->library('form_validation');
                // Load session library  
                $this->load->library('session');
	}

        public function adicionarGrade()
        {

                $this->form_validation->set_rules('curso', 'Curso', 'required');
                $this->form_validation->set_rules('turno', 'Turno', 'required');

                 if ($this->form_validation->run() == FALSE) {
                        $mensagem['erro_grade'] = "Ocorreu um erro, consulte o administrador";
                        $this->load->view('grade', $mensagem);

                }
                else
                 {
                        $this->load->model('adicionar_model');
                        
                        $tabela = $this->adicionar_model->adicionarGrade($this->input->post('curso'), $this->input->post('turno'));

                        $this->load->view('visualizargrade.php', $tabela);
                }

        }

}


?>