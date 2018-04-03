<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Usuarios_model extends CI_Model
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function buscarUsuario($usuario, $senha){

		$query = $this->db->query("SELECT nome, sobrenome FROM usuario WHERE usuario = '$usuario' AND senha = '$senha'");

		
		foreach ($query->result() as $row)
		{
		    $results = array(
			'nome'=>$row->nome,
			'sobrenome'=>$row->sobrenome
		);
		}

		if ($query->num_rows() > 0) {
			
			return $results;
		}

		else {
			return NULL;
		}

	}
}

 ?>