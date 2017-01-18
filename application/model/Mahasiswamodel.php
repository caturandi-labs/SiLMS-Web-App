<?php 

	/**
	*
	* @author Catur Andi Pamungkas
	*/
	

	class Mahasiswamodel extends Model{

		public function select(){
	        $sql = "SELECT m.nim,m.nama_lengkap,m.alamat_jalan,m.kota,m.kodepos,m.tempat_lahir,m.tanggal_lahir,m.agama,m.jenis_kelamin,m.semester_aktif, p.nama_prodi, k.nama_kelas FROM mahasiswa as m ,program_studi as p,kelas as k WHERE m.kode_prodi = p.kode_prodi AND m.kode_kelas = k.kode_kelas";
	        $query = $this->db->prepare($sql);
	        $query->execute();
	        return $query->fetchAll();
	    }

	    public function selectMahasiswaByKelas($kode_kelas){
	        $sql = "SELECT * FROM mahasiswa WHERE kode_kelas  = :kode_kelas";
	        $query = $this->db->prepare($sql);
	        $hash = [
	        	':kode_kelas' => $kode_kelas
	        ];
	        $query->execute($hash);
	        return $query->fetchAll();
	    }
	   	
	   	# INSERT MAHASISWA
	    public function insertMahasiswa($nim, $id_user ,$nama, $alamatJalan,$kota,$kodepos,$tempatLahir,
	     $tanggal_lahir, $agama,$jenis_kelamin,$kode_prodi,$kode_kelas,$kode_tahun,$semester_aktif){

	        $sql = "INSERT INTO mahasiswa (nim,nama_lengkap,alamat_jalan,kota,kodepos,tempat_lahir,tanggal_lahir,agama,jenis_kelamin,id_user,kode_prodi,kode_kelas,kode_tahun,semester_aktif) VALUES (:nim,:nama, :alamatJalan, :kota ,:kodepos,:tempatLahir,:tanggal_lahir,:agama,:jenisKelamin,:id_user,:kode_prodi,:kodeKelas,:kode_tahun,:semester_aktif)";
	        $query = $this->db->prepare($sql);
	        $parameters = array(
	        	':nim' 			 => $nim,
	        	':id_user'		 => $id_user,
	        	':nama'			 => $nama,
	        	':alamatJalan'	 => $alamatJalan,
	        	':kota' 		 => $kota,
	        	':kodepos' 		 => $kodepos,
	        	':tempatLahir' 	 => $tempatLahir,
	        	':tanggal_lahir' => $tanggal_lahir,
	        	':agama' 		 => $agama,
	        	':jenisKelamin'  => $jenis_kelamin,
	        	':kode_prodi'  	 => $kode_prodi,
	        	':kodeKelas' 	 => $kode_kelas,
	        	':kode_tahun'	 => $kode_tahun,
	        	':semester_aktif' => $semester_aktif
	        );

	  		// 	 echo "<pre>";
				// print_r($parameters);
			 // echo "</pre>";
			 // die();

	        $query->execute($parameters);
	    }

	    public function updateMahasiswa($nim,$id_user,$nama, $alamatJalan,$kota,$kodepos,$tempatLahir,
	     $tanggal_lahir, $agama,$jenis_kelamin,$kode_prodi,$kode_kelas,$kode_tahun){

	        $sql = "UPDATE mahasiswa SET nama_lengkap=:nama,alamat_jalan=:alamat_jalan,kota=:kota,kodepos=:kodepos,tempat_lahir=:tempat_lahir,tanggal_lahir=:tanggal_lahir,agama=:agama,jenis_kelamin=:jenis_kelamin,kode_prodi=:kode_prodi,id_user = :id_user, kode_kelas=:kode_kelas,kode_tahun=:kode_tahun WHERE nim=:nim";
	        $query = $this->db->prepare($sql);
	        $parameters = array(
	        	':nim' 			 => $nim,
	        	':id_user'		 => $id_user,
	        	':nama'			 => $nama,
	        	':alamat_jalan'	 => $alamatJalan,
	        	':kota' 		 => $kota,
	        	':kodepos' 		 => $kodepos,
	        	':tempat_lahir'	 => $tempatLahir,
	        	':tanggal_lahir' => $tanggal_lahir,
	        	':agama' 		 => $agama,
	        	':jenis_kelamin' => $jenis_kelamin,
	        	':kode_prodi'  	 => $kode_prodi,
	        	':kode_kelas' 	 => $kode_kelas,
	        	':kode_tahun'	 => $kode_tahun
	        );

  		// 	 echo "<pre>";
				// print_r($parameters);
			 // echo "</pre>";
			 // die();

	        $query->execute($parameters);
	    }

	    
	    
	    public function getMahasiswa($nim) {
	        $sql = "SELECT mahasiswa.* , program_studi.nama_prodi, user.* FROM mahasiswa INNER JOIN program_studi INNER JOIN user ON mahasiswa.kode_prodi = program_studi.kode_prodi AND mahasiswa.id_user = user.id_user WHERE nim = :nim";
	        $query = $this->db->prepare($sql);
	        $parameters = array(':nim' => $nim);
	        $query->execute($parameters);
	        return $query->fetch();
	    }

	    public function deleteMahasiswa($nim){
			$sql = "DELETE FROM mahasiswa WHERE nim = :nim";
			$query = $this->db->prepare($sql);
			$parameters = [':nim' => $nim];
			$query->execute($parameters);
		}

		public function selectMahasiswaById($nim){
			$sql = "SELECT * FROM mahasiswa WHERE nim = :nim";
	        $query = $this->db->prepare($sql);
	        $parameters = [":nim" => $nim];
	        $query->execute($parameters);
	        return $query->fetch();
		}


	}

?>