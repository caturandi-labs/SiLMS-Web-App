<?php 
	/**
	* 
	*/
	class Matakuliahmodel extends Model {
		
		public function selectMataKuliah() {
			$sql = "SELECT * FROM mata_kuliah ORDER BY id_semester ASC;";
			$query = $this->db->prepare($sql);
			$query->execute();
			return $query->fetchAll();
		}

		public function insertMataKuliah($kode_mk, $nama_mk, $sks, $id_semester) {
			$sql = "INSERT INTO mata_kuliah VALUES(:kode_mk, :nama_mk, :sks, :id_semester)";
			$query = $this->db->prepare($sql);
			$parameters = array(':kode_mk'=>$kode_mk,
								':nama_mk'=>$nama_mk,
								':sks'=>$sks,
								':id_semester'=>$id_semester);
			$query->execute($parameters);
		}

		public function deleteMataKuliah($kode_mk) {
			$sql = "DELETE FROM mata_kuliah WHERE kode_mk = :kode_mk";
			$query = $this->db->prepare($sql);
			$parameters = array(':kode_mk' => $kode_mk);
			$query->execute($parameters);
		}

		public function selectMataKuliahById($kode_mk){
			$sql = "SELECT * FROM mata_kuliah WHERE kode_mk = :kode_mk";
	        $query = $this->db->prepare($sql);
	        $parameters = [":kode_mk" => $kode_mk];
	        $query->execute($parameters);
	        return $query->fetch();
		}

		public function updateMataKuliah($nama_mk, $sks, $id_semester,$kode_mk){
			$sql = "UPDATE mata_kuliah SET nama_mk = :nama_mk, sks = :sks, id_semester = :id_semester WHERE kode_mk = :kode_mk";
			$query = $this->db->prepare($sql);
			$parameters = [
				':nama_mk'=> $nama_mk,
				':sks' => $sks,
				':id_semester' => $id_semester,
				':kode_mk' => $kode_mk
			];
			$query->execute($parameters);
		}

	}
?>