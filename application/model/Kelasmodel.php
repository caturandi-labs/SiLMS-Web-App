<?php 

	/**
	* 
	*/
	class Kelasmodel extends Model {
		
		public function selectDatakelas(){
			$sql = "SELECT * FROM kelas ORDER BY nama_kelas;";
			$query = $this->db->prepare($sql);
			$query->execute();
			return $query->fetchAll();
		}

		public function insertKelas($nama_kelas) {
			$sql = "INSERT INTO kelas VALUES(NULL,:nama_kelas)";
			$query = $this->db->prepare($sql);
			$parameters = array(':nama_kelas'=>$nama_kelas);
			$query->execute($parameters);
		}

		public function deleteKelas($kode_kelas) {
			$sql = "DELETE FROM kelas WHERE kode_kelas = :kode_kelas";
			$query = $this->db->prepare($sql);
			$parameters = array(':kode_kelas' => $kode_kelas);
			$query->execute($parameters);
		}

		public function selectKelasById($kode_kelas){
			$sql = "SELECT * FROM kelas WHERE kode_kelas = :kode_kelas";
	        $query = $this->db->prepare($sql);
	        $parameters = [":kode_kelas" => $kode_kelas];
	        $query->execute($parameters);
	        return $query->fetch();
		}

		public function updateKelas($nama_kelas,$kode_kelas){
			$sql = "UPDATE kelas SET nama_kelas = :nama_kelas WHERE kode_kelas = :kode_kelas";
			$query = $this->db->prepare($sql);
			$parameters = [
				':nama_kelas'=>$nama_kelas,
				':kode_kelas' => $kode_kelas
			];
			$query->execute($parameters);
		}
	}
?>