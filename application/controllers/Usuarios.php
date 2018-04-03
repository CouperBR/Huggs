<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/

class Usuarios extends CI_Controller
{
		public function __construct()
		{
		parent::__construct();
		// Load form helper library
		$this->load->helper('form');
		// Load form validation library
		$this->load->library('form_validation');
        // Load session library  
        $this->load->library('session');

        //Limpando variáveis
        $resultado = NULL;
        $mensagem_deslogar = NULL;
        $error_message = NULL;
		}	

		public function index()
    	{
                $this->form_validation->set_rules('usuario', 'Usuario', 'required');
                $this->form_validation->set_rules('senha', 'Senha', 'required');
                if ($this->form_validation->run() == FALSE)

                { // VERIFICA SE USUARIO ESTÁ LOGADO - SE ESTIVER, LEVA PARA O DASHBOARD, SE NAO, PARA A PAGINA DE LOGIN
                		if ($this->session->has_userdata('logado')) {
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
                else  
                {
                    // CONSULTANDO NO BANCO O USUARIO
                        $this->load->model('usuarios_model');
                        $resultado = $this->usuarios_model->buscarUsuario($this->input->post('usuario'), $this->input->post('senha'));

                        if ($resultado !== NULL) {
                        	$usuario = $this->input->post('usuario');
                            $nome = $resultado['nome'];
                            $sobrenome = $resultado['sobrenome'];
                        	$dados_sessao = array(
                        		'usuario'=>$usuario,
                                'nome'=>$nome,
                                'sobrenome'=>$sobrenome
                        	);
                        	$this->session->set_userdata('logado', $dados_sessao);
                        	$this->load->view('dashboard.php', $dados_sessao);
                        }
                        else { // USUARIO OU SENHA INCORRETOS
                        	$dados = array(
							'error_message' => 'Usuário e/ou senha inválidos.'
							);
                        	$this->load->view('login.php', $dados);
                        }
                } //FIM ELSE
		}     
		public function deslogar(){
            if (isset($_SESSION['logado'])) {

                $mensagem_deslogar = array(
                    'mensagem_deslogar' => 'Você foi deslogado com sucesso.'
                );
                $this->session->sess_destroy();
                unset($_SESSION['logado']);
                $this->load->view('login', $mensagem_deslogar);
                }
            else {
                $this->load->view('login.php');
		}
        }
	}
	?>