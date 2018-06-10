<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class cursos_model extends CI_Model
{
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
