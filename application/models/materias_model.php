<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class materias_model extends CI_Model
{

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

	public function alimentarMateriasCadastradas(){
		$count = 0;
		$query = $this->db->query("SELECT * FROM materia");
		$table = [
		    "materiascadastradas" => ""
		];
		foreach ($query->result() as $row) {
			$table['materiascadastradas'] .= "<tr>" .
			"<th scope='row'>" . $count++ . "</th>" . 
 			"<td>" . $row->NomeMateria . "</td>" .
 			"<td>" . $row->Semestre . "</td>" .
 			"<td><button class='btn btn-danger'>Excluir</button> <td>" .
 			"</tr>";
		}

		return $table;

	}
	
}
 ?>

