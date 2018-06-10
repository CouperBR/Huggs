<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Materias extends CI_Controller {

	public function __construct() {
		parent::__construct();
		// Load form helper library
		$this->load->helper('form');
		// Load form validation library
		$this->load->library('form_validation');
        // Load session library  
        $this->load->library('session');
	}

        public function adicionarMateria(){

                $this->form_validation->set_rules('nomemateria', 'NomeMateria', 'required');
                $this->form_validation->set_rules('semestre', 'Semestre', 'required');
                $this->form_validation->set_rules('curso', 'Curso', 'required');

                if ($this->form_validation->run() == FALSE) {

                        $mensagem['erro_materia'] = "Erro ao adicionar";

                        $this->load->view('adicionarmaterias', $mensagem);
                }

                else {
                        $this->load->model('adicionar_model');
                        $boolAdicionar = $this->adicionar_model->adicionarMateria($this->input->post('nomemateria'), $this->input->post('semestre'), $this->input->post('curso'));
                        if ($boolAdicionar == true) {

                        $this->load->model('materias_model');
                        $conteudo = $this->materias_model->alimentarMateriasCadastradas();

                        $this->load->view('materiascadastradas', $conteudo);
                        }

                        else{
                        $mensagem['erro_materia'] = "Matéria já existente!";

                        $this->load->view('adicionarmaterias', $mensagem);    
                        }
                        

                }
        }
}


?>