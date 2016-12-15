<?php 
	
	class Ruangmodel extends Model{
		public function selectRuang(){
			$sql = "SELECT * FROM ruang;";
			$query = $this->db->prepare($sql);
			$query->execute();
			return $query->fetchAll();
		}
	}

?>