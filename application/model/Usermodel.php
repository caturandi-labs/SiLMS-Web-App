<?php 
	
	/**
	* @author cahyo
	*
	*/
	
	class Usermodel extends Model{

		public function selectUser(){
			$sql = "SELECT * FROM user;";
			$query = $this->db->prepare($sql);
			$query->execute();
			return $query->fetchAll();
		}

		public function insertUser($username,$password,$id_level){
			$sql = "INSERT INTO user VALUES(:id_user,:username,:password,:id_level)";
			$query = $this->db->prepare($sql);
			$parameters = [
				':id_user'=>$username,
				':username'=>$username,
				':password'=>$password,
				':id_level'=>$id_level
			];
			$query->execute($parameters);
		}

		public function updateUser($id_user){
			$sql = "UPDATE user SET username=:username, password = :password WHERE id_user = :id_user";
			$query = $this->db->prepare($sql);
			$parameters = [
				':username' => $username,
				":password" => $password,
				":id_user"  => $id_user
			];
			$query->execute($parameters);
		}

		public function deleteUser($id_user){
			$sql = "DELETE FROM user WHERE id_user = :id_user";
			$query = $this->db->prepare($sql);
			$parameters = [
				":id_user"  => $id_user
			];
			$query->execute($parameters);
		}


	}


?>