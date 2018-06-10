<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class alimentacao_model extends CI_Model
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
/*
	public function alimentarCursos (){

		$query = $this->db->query("SELECT * FROM curso");

		$opcao = array('opcao_cursos' => '');
		
		foreach ($query->result() as $row)
		{
			$opcao['opcao_cursos'] .= '<option value="'.$row->idCurso.'">'.$row->NomeCurso.'</option>';
		}

		if ($query->num_rows() > 0) {
			
			return $opcao;
		}

		else {
			return NULL;
		}
	}
	*/

	public function alimentarMaterias(){

		$query = $this->db->query("SELECT * FROM materia INNER JOIN curso ON materia.idCurso = curso.idCurso ORDER BY curso.idCurso");

		$opcao = array('opcao_materia' =>'');

		foreach ($query->result() as $row) 
		{
			$opcao['opcao_materia'] .= "<label class='form-check-label'>" .
			"<input class = 'form-check-input' type='checkbox' name='materia[]' value='" . $row->idMateria . "'>  " . $row->NomeMateria . "(" . $row->NomeCurso . ")" .
			"</label>";
		} 

		if ($query->num_rows() > 0) {
			return $opcao;
		}
		else {

			return NULL;
		}
	}

	public function alimentarCursosCadastrados(){

		$query = $this->db->query("SELECT * FROM curso");

		$table = array('cursoscadastrados' => '');

		foreach ($query->result() as $row) {
			$table['cursoscadastrados'] .= "<tr>" .
 			"<th scope='row'>" . $row->idCurso . "</th>" .
 			"<td>" . $row->NomeCurso . "</td>" .
 			"<td>" . $row->QtdSemestres. "</td>" .
 			"<td><button class='btn btn-primary'>Editar</button> <button class='btn btn-danger'>Excluir</button> <td>" .
 			"</tr>";
		}

		if ($query->num_rows() > 0) {
			return $table;
		}
		else {

			return NULL;
		}
		
	}
}
 ?>

