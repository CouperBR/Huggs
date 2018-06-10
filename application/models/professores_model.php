<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class professores_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function alimentarProfessoresCadastrados()
	{

		$query = $this->db->query("SELECT DISTINCT NomeProfessor FROM professor");

		$table = array('professorescadastrados' => '');
		$count = 0;
		foreach ($query->result() as $row) {
			$table['professorescadastrados'] .= "<tr>" .
			"<th scope='row'>" . $count++ . "</td>" .
 			"<td>" . $row->NomeProfessor . "</td>" .
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
