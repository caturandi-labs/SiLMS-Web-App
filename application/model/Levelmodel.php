<?php 
	
	class Levelmodel extends Model{

		public function selectLevel(){
			$sql = "SELECT * FROM level";
			$query = $this->db->prepare($sql);
			$query->execute();
			return $query->fetchAll();
		}

		public function insertLevel($level){
			$sql = "INSERT INTO level VALUES(NULL,:level)";
			$query = $this->db->prepare($sql);
			$parameters = array(':level'=>$level);
			$query->execute($parameters);
		}
	}

?>