<?php 
	
	/**
	* @author Catur Andi Pamungkas 
	*
	*/
	class Tahunajaranmodel extends Model {

		public function selectTahunajaran() {
			$sql = "SELECT * FROM tahun_ajaran;";
			$query = $this->db->prepare($sql);
			$query->execute();
			return $query->fetchAll();
			// json_encode($listTahunJurusan);
		}

		// public function selectTahunajaran() {
		// 	$sql = "SELECT * FROM tahun_ajaran;";
		// 	$query = $this->db->prepare($sql);
		// 	$query->execute();
		// 	return $query->fetchAll();
		// 	echo json_encode(value);
		// }

		public function insertTahunAjaran($tahun){
			$sql = "INSERT INTO tahun_ajaran VALUES(NULL,:tahun)";
			$query = $this->db->prepare($sql);
			$parameters = array(':tahun'=>$tahun);
			$query->execute($parameters);
		}

		public function deleteTahunAjaran($kode_tahun){
			$sql = "DELETE FROM tahun_ajaran WHERE kode_tahun = :kode_tahun";
			$query = $this->db->prepare($sql);
			$parameters = array(':kode_tahun'=>$kode_tahun);
			$query->execute($parameters);
		}

		public function selectTahunAjaranById($kode_tahun){
			$sql = "SELECT * FROM tahun_ajaran WHERE kode_tahun = :kode_tahun";
	        $query = $this->db->prepare($sql);
	        $parameters = [":kode_tahun" => $kode_tahun];
	        $query->execute($parameters);
	        return $query->fetch();
		}

		public function updateTahunAjaran($tahun, $kode_tahun){
			$sql = "UPDATE tahun_ajaran SET tahun = :tahun  WHERE kode_tahun = :kode_tahun";
			$query = $this->db->prepare($sql);
			$parameters = [
				':tahun' => $tahun,
				':kode_tahun' => $kode_tahun
			];
			$query->execute($parameters);
			// echo "EXECUTE";
		}
		
	}
?>