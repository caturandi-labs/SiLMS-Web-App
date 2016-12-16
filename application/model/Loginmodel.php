<?php 
	
	class Loginmodel extends Model{

		public function authenticate($username,$password,$level){
			$sql = "SELECT * FROM user WHERE username=:username AND password=:password AND id_level=:id_level";
			$query = $this->db->prepare($sql);
			$params = [':username'=>$username, ":password" => $password,":id_level" => $level];
			$query->execute($params);
			return $query->fetchAll();
		}
		

	}

