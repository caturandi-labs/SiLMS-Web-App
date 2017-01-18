<?php 
	/**
	*@author cahyo
	*
	*/
	class Dosenmodel extends Model{

		public function selectDosen(){
	        $sql = "SELECT * FROM dosen";
	        $query = $this->db->prepare($sql);
	        $query->execute();
	        return $query->fetchAll();
	    }

	    public function insertDosen($kode_dosen,$nama_dosen, $alamat_jalan,$kota,$pendidikan){
	    	$sql = "INSERT INTO dosen VALUES (:kode_dosen,:nama_dosen,:alamat_jalan,:kota,:pendidikan)";
			$query = $this->db->prepare($sql);
			$parameters = [
				':kode_dosen'=>$kode_dosen,
				':nama_dosen'=>$nama_dosen,
				':alamat_jalan'=>$alamat_jalan,
				':kota' => $kota,
				':pendidikan'=>$pendidikan
			];
			$query->execute($parameters);
			// echo "EXEC...............................................";

	    }

	    public function deleteDosen($kode_dosen){
			$sql = "DELETE FROM dosen WHERE kode_dosen = :kode_dosen";
			$query = $this->db->prepare($sql);
			$parameters = [':kode_dosen' => $kode_dosen];
			$query->execute($parameters);
		}

		public function selectDosenById($kode_dosen){
			$sql = "SELECT * FROM dosen WHERE kode_dosen = :kode_dosen";
	        $query = $this->db->prepare($sql);
	        $parameters = [":kode_dosen" => $kode_dosen];
	        $query->execute($parameters);
	        return $query->fetch();
		}

		public function updateDosen($nama_dosen, $alamat_jalan,$kota,$pendidikan,$kode_dosen){
			$sql = "UPDATE dosen SET nama_dosen = :nama_dosen , alamat_jalan = :alamat_jalan , kota = :kota, pendidikan = :pendidikan  WHERE kode_dosen = :kode_dosen";
			$query = $this->db->prepare($sql);
			$parameters = [
				':nama_dosen'=> $nama_dosen,
				':alamat_jalan' => $alamat_jalan,
				':kota' => $kota,
				':pendidikan' => $pendidikan,
				':kode_dosen' => $kode_dosen
			];
			$query->execute($parameters);
		}


	}