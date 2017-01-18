<?php 

	class Jurusanmodel extends Model{

		public function selectJurusan(){
	        $sql = "SELECT * FROM program_studi";
	        $query = $this->db->prepare($sql);
	        $query->execute();
	        return $query->fetchAll();
	    }

	    public function insertJurusan($kode_prodi, $nama_prodi,$tahun_berdiri,$no_sk,$jenjang,$kode_dosen) {
			$sql = "INSERT INTO program_studi VALUES(:kode_prodi,:nama_prodi,:tahun_berdiri,:no_sk,:jenjang,:kode_dosen)";
			$query = $this->db->prepare($sql);
			$parameters = [
				':kode_prodi' => $kode_prodi,
				':nama_prodi' => $nama_prodi,
				':tahun_berdiri' => $tahun_berdiri,
				':no_sk' => $no_sk,
				':jenjang' => $jenjang,
				':kode_dosen' => $kode_dosen
			];
			$query->execute($parameters);
		}

		public function deleteJurusan($kode_prodi){
			$sql = "DELETE FROM program_studi WHERE kode_prodi = :kode_prodi";
			$query = $this->db->prepare($sql);
			$parameters = [":kode_prodi" => $kode_prodi];
			$query->execute($parameters);
		}

		public function selectJurusanById($kode_prodi){
			$sql = "SELECT * FROM program_studi WHERE kode_prodi = :kode_prodi";
	        $query = $this->db->prepare($sql);
	        $parameters = [":kode_prodi" => $kode_prodi];
	        $query->execute($parameters);
	        return $query->fetch();
		}

		public function updateJurusan($nama_prodi,$tahun_berdiri,$no_sk,$jenjang,$kode_dosen,$kode_prodi){
			$sql = "UPDATE program_studi SET nama_prodi = :nama_prodi, tahun_berdiri = :tahun_berdiri, no_sk_dikti=:no_sk, jenjang = :jenjang , kode_dosen=:kode_dosen WHERE kode_prodi = :kode_prodi";
			$query = $this->db->prepare($sql);
			$parameters = [
				':nama_prodi'=>$nama_prodi,
				':tahun_berdiri'=>$tahun_berdiri,
				':no_sk'=>$no_sk,
				':jenjang'=>$jenjang,
				':kode_dosen'=>$kode_dosen,
				':kode_prodi' => $kode_prodi
			];
			$query->execute($parameters);
		}

		
	   
	}