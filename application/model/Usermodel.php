<?php 
	
	class Usermodel extends Model{

		public function selectUser(){
			$sql = "SELECT * FROM user;";
			$query = $this->db->prepare($sql);
			$query->execute();
			return $query->fetchAll();
		}

	}


?>