<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Cursos extends CI_Controller {

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

	public function adicionarCurso()
        {

        	$this->form_validation->set_rules('nomecurso', 'Nome', 'required');
                $this->form_validation->set_rules('qtdsemestres', 'Semestres', 'required');

                if ($this->form_validation->run() == FALSE) {
                	$mensagem['erro_curso'] = "Ocorreu um erro, consulte o administrador";
                	$this->load->view('adicionarmaterias', $mensagem_erro);

                }
                else 
                {
                	$this->load->model('adicionar_model');
                	$this->adicionar_model->adicionarCurso($this->input->post('nomecurso'), $this->input->post('qtdsemestres'));

                	$this->load->model('cursos_model');
                        $conteudo = $this->cursos_model->alimentarCursosCadastrados();

                	$this->load->view('cursoscadastrados', $conteudo);
                }
	}

}


?>