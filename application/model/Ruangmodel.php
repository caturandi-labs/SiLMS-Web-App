<?php
	
	/**
	* @author Catur Andi Pamungkas
	* 
	*/
	class Ruangmodel extends Model{
		public function selectRuang(){
			$sql = "SELECT * FROM ruang;";
			$query = $this->db->prepare($sql);
			$query->execute();
			return $query->fetchAll();
		}

		public function insertRuang($ruang, $kapasitas) {
			$sql = "INSERT INTO ruang VALUES(NULL, :ruang, :kapasitas)";
			$query = $this->db->prepare($sql);
			$parameters = array(':ruang'=>$ruang,
								':kapasitas'=>$kapasitas);
			$query->execute($parameters);
		}

		public function deleteRuang($kode_ruang) {
			$sql = "DELETE FROM ruang WHERE kode_ruang = :kode_ruang";
			$query = $this->db->prepare($sql);
			$parameters = array(':kode_ruang' => $kode_ruang);
			$query->execute($parameters);
		}

		public function selectRuangById($kode_ruang){
			$sql = "SELECT * FROM ruang WHERE kode_ruang = :kode_ruang";
	        $query = $this->db->prepare($sql);
	        $parameters = [":kode_ruang" => $kode_ruang];
	        $query->execute($parameters);
	        return $query->fetch();
		}

		public function updateRuang($ruang, $kapasitas,$kode_ruang){
			$sql = "UPDATE ruang SET ruang = :ruang, kapasitas = :kapasitas WHERE kode_ruang = :kode_ruang";
			$query = $this->db->prepare($sql);
			$parameters = [
				':ruang' => $ruang,
				':kapasitas' => $kapasitas,
				':kode_ruang' => $kode_ruang
			];
			$query->execute($parameters);
		}
	}

?>