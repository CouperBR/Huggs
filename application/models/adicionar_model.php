<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class adicionar_Model extends CI_Model
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function adicionarCurso($nomeCurso, $qtdSemestres)
	{

		$query = $this->db->query("INSERT INTO curso (NomeCurso, QtdSemestres) VALUES ('$nomeCurso', '$qtdSemestres')");

	}

	public function adicionarMateria($NomeMateria, $Semestre, $Curso)
	{

		$query = $this->db->query("SELECT * FROM materia WHERE NomeMateria = '$NomeMateria'");
		if ($query->num_rows() > 0) {

			$mensagem['materia_existente'] = "Essa matéria já existe.";
			return false;
		}
		else {
		$query = $this->db->query("INSERT INTO materia (NomeMateria, Semestre, idCurso) VALUES ('$NomeMateria', '$Semestre', '$Curso')");

		return true;
		}

	}
	public function adicionarProfessor($NomeProfessor, $DiaDisponivel, $Materia)
	{
		$dias = $DiaDisponivel;
		$materias = $Materia;
		foreach ($dias as $dia) 
		{

			$query = $this->db->query("INSERT INTO professor(NomeProfessor, Dia_idDia) VALUES ('$NomeProfessor', $dia)");

			$ultimo_professor = $this->db->insert_id();

			foreach ($materias as $materia) 
			{
				$cursos = $this->db->query("SELECT curso.idCurso FROM curso INNER JOIN materia ON materia.idCurso = curso.idCurso WHERE idMateria = $materia LIMIT 1");
				foreach ($cursos->result() as $curso) 
				{
					$curso = $curso->idCurso;
				}
			}
			$query = $this->db->query("INSERT INTO informacao(Professor_idProfessor, Professor_Dia_idDia, Materia_idMateria, Materia_idCurso) VALUES ($ultimo_professor, $dia, $materia, $curso)");
		}
		
		return true;
	}

	public function adicionarGrade($Curso, $Turno)
	{
		$grade = "";
		if ($Turno == 1)
		{
			//Segunda
			$query = $this->db->query("SELECT * FROM informacao INNER JOIN professor ON informacao.Professor_idProfessor = professor.idProfessor 
										INNER JOIN materia ON informacao.Materia_idMateria = materia.idMateria 
										INNER JOIN curso ON Materia_idCurso = curso.idCurso 
										WHERE Professor_Dia_idDia = 1 AND curso.idCurso = 1 LIMIT 2");

			if ($query->num_rows() == 2) 
			{
				
				$row = $query->first_row();
				$grade .= "('$row->NomeProfessor - $row->NomeMateria',";

				$row = $query->last_row();
				$grade .= "'$row->NomeProfessor - $row->NomeMateria',";
				
			}
			//Terça	
			$query = $this->db->query("SELECT * FROM informacao INNER JOIN professor ON informacao.Professor_idProfessor = professor.idProfessor 
										INNER JOIN materia ON informacao.Materia_idMateria = materia.idMateria 
										INNER JOIN curso ON Materia_idCurso = curso.idCurso 
										WHERE Professor_Dia_idDia = 4 AND curso.idCurso = 1 LIMIT 2");
			if ($query->num_rows() == 2) 
			{
				
				$row = $query->first_row();
				$grade .= "'$row->NomeProfessor - $row->NomeMateria',";

				$row = $query->last_row();
				$grade .= "'$row->NomeProfessor - $row->NomeMateria',";
					
			}
			$query = $this->db->query("SELECT * FROM informacao INNER JOIN professor ON informacao.Professor_idProfessor = professor.idProfessor 
										INNER JOIN materia ON informacao.Materia_idMateria = materia.idMateria 
										INNER JOIN curso ON Materia_idCurso = curso.idCurso 
										WHERE Professor_Dia_idDia = 7 AND curso.idCurso = 1 LIMIT 2");
			if ($query->num_rows() == 2) 
			{
				
				$row = $query->first_row();
				$grade .= "'$row->NomeProfessor - $row->NomeMateria',";

				$row = $query->last_row();
				$grade .= "'$row->NomeProfessor - $row->NomeMateria',";
			}
			$query = $this->db->query("SELECT * FROM informacao INNER JOIN professor ON informacao.Professor_idProfessor = professor.idProfessor 
										INNER JOIN materia ON informacao.Materia_idMateria = materia.idMateria 
										INNER JOIN curso ON Materia_idCurso = curso.idCurso 
										WHERE Professor_Dia_idDia = 10 AND curso.idCurso = 1 LIMIT 2");
			if ($query->num_rows() == 2) 
			{
				
				$row = $query->first_row();
				$grade .= "'$row->NomeProfessor - $row->NomeMateria',";

				$row = $query->last_row();
				$grade .= "'$row->NomeProfessor - $row->NomeMateria',";
			}
			$query = $this->db->query("SELECT * FROM informacao INNER JOIN professor ON informacao.Professor_idProfessor = professor.idProfessor 
										INNER JOIN materia ON informacao.Materia_idMateria = materia.idMateria 
										INNER JOIN curso ON Materia_idCurso = curso.idCurso 
										WHERE Professor_Dia_idDia = 13 AND curso.idCurso = 1");
			if ($query->num_rows() == 2) 
			{
				
				$row = $query->first_row();
				$grade .= "'$row->NomeProfessor - $row->NomeMateria',";

				$row = $query->last_row();
				$grade .= "'$row->NomeProfessor - $row->NomeMateria',";
			}
			$query = $this->db->query("SELECT * FROM informacao INNER JOIN professor ON informacao.Professor_idProfessor = professor.idProfessor 
										INNER JOIN materia ON informacao.Materia_idMateria = materia.idMateria 
										INNER JOIN curso ON Materia_idCurso = curso.idCurso 
										WHERE Professor_Dia_idDia = 16 AND curso.idCurso = 1 LIMIT 2");
			if ($query->num_rows() == 2) 
			{
				
				$row = $query->first_row();
				$grade .= "'$row->NomeProfessor - $row->NomeMateria',";

				$row = $query->last_row();
				$grade .= "'$row->NomeProfessor - $row->NomeMateria'";
				$grade .= ");";
			}

			//$query = $this->db->query("INSERT INTO grade (Segunda1, Segunda2, Terca1, Terca2, Quarta1, Quarta2, Quinta1, Quinta2, Sexta1, Sexta2, Sabado1, Sabado2) VALUES " . $grade);

			$query = $this->db->query("SELECT * FROM grade");
			foreach ($query->result() as $result) 
			{
				$Segunda1 = $result->Segunda1;
				$Segunda2 = $result->Segunda2;
				$Terca1 = $result->Terca1;
				$Terca2 = $result->Terca2;
				$Quarta1 = $result->Quarta1;
				$Quarta2 = $result->Quarta2;
				$Quinta1 = $result->Quinta1;
				$Quinta2 = $result->Quinta2;
				$Sexta2 = $result->Sexta2;
				$Sexta1 = $result->Sexta1;
				$Sabado2 = $result->Sabado2;
				$Sabado1 = $result->Sabado1;
			}

			$tabela['grade'] = '<table class="table table-sm">
								  <thead class="thead-dark">
								    <tr>
								      <th scope="col">#</th>
								      <th scope="col">Segunda</th>
								      <th scope="col">Terça</th>
								      <th scope="col">Quarta</th>
								      <th scope="col">Quinta</th>
								      <th scope="col">Sexta</th>
								      <th scope="col">Sabado</th>
								    </tr>
								  </thead>
								  <tbody>
								  <tr>
								      <th scope="row">07:15</th>
								      <td>' . $Segunda1 . '</td>
								      <td>' . $Terca1 . '</td>
								      <td>' . $Quarta1 . '</td>
								      <td>' . $Quinta1 . '</td>
								      <td>' . $Sexta1 . '</td>
								      <td>' . $Sabado1 . '</td>
								  </tr>
								  <tr>
								      <th scope="row">09:55</th>
								      <td>' . $Segunda1 . '</td>
								      <td>' . $Terca1 . '</td>
								      <td>' . $Quarta1 . '</td>
								      <td>' . $Quinta1 . '</td>
								      <td>' . $Sexta1 . '</td>
								      <td>' . $Sabado1 . '</td>
								  </tr>
								  <tr>
								      <th scope="row">10:05</th>
								      <td>' . $Segunda2 . '</td>
								      <td>' . $Terca2 . '</td>
								      <td>' . $Quarta2 . '</td>
								      <td>' . $Quinta2 . '</td>
								      <td>' . $Sexta2 . '</td>
								      <td>' . $Sabado2 . '</td>
								  </tr>
								  <tr>
								      <th scope="row">12:45</th>
								      <td>' . $Segunda2 . '</td>
								      <td>' . $Terca2 . '</td>
								      <td>' . $Quarta2 . '</td>
								      <td>' . $Quinta2 . '</td>
								      <td>' . $Sexta2 . '</td>
								      <td>' . $Sabado2 . '</td>
								  </tr>';
			return $tabela;
		}

		elseif ($Turno == 2) 
		{
			
		}

		else 
		{

		}
	}	
}

 ?>