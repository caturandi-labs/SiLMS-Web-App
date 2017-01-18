<?php 

	/**
	* @author Catur Andi Pamungkas  
	*
	*/
	class Semestermodel extends Model {		
		
		public function selectSemester() {
			$sql = "SELECT * FROM semester;";
			$query = $this->db->prepare($sql);
			$query->execute();
			return $query->fetchAll();
		}

		public function insertSemester($semester){
			$sql = "INSERT INTO semester VALUES (NULL,:semester)";
			$query = $this->db->prepare($sql);
			$parameters = [':semester'=>$semester];
			$query->execute($parameters);
		}

		public function deleteSemester($id_semester){
			$sql = "DELETE FROM semester WHERE id_semester = :id_semester";
			$query = $this->db->prepare($sql);
			$parameters = [':id_semester' => $id_semester];
			$query->execute($parameters);
		}

		public function selectSemesterById($id_semester){
			$sql = "SELECT * FROM semester WHERE id_semester = :id_semester";
	        $query = $this->db->prepare($sql);
	        $parameters = [":id_semester" => $id_semester];
	        $query->execute($parameters);
	        return $query->fetch();
		}

		public function updateSemester($semester,$id_semester){
			$sql = "UPDATE semester SET semester = :semester WHERE id_semester = :id_semester";
			$query = $this->db->prepare($sql);
			$parameters = [
				':semester'=> $semester,
				':id_semester' => $id_semester
			];
			$query->execute($parameters);
		}

	}

?>