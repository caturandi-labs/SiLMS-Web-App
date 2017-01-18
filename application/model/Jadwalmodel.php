<?php 
	
	class Jadwalmodel extends model{

		public function selectJadwal(){
			$sql = "SELECT  mata_kuliah.nama_mk, dosen.nama_dosen, kelas.nama_kelas, ruang.ruang, jadwal.hari, jadwal.jam_mulai, jadwal.jam_berakhir ,jadwal.id_jadwal,jadwal.kode_kelas FROM jadwal,mata_kuliah,dosen,kelas,ruang WHERE jadwal.kode_mk = mata_kuliah.kode_mk AND jadwal.kode_dosen = dosen.kode_dosen AND jadwal.kode_kelas = kelas.kode_kelas AND jadwal.kode_ruang = ruang.kode_ruang";
			$query = $this->db->prepare($sql);
			$query->execute();
			return $query->fetchAll();
		}

		public function selectJadwalByPertemuan($kode_kelas){
			$sql = "SELECT count(kode_mk) WHERE kode_kelas = :kode_kelas";
			$query = $this->db->prepare($sql);
			$hash = [':kode_kelas' => $kode_kelas];
			$query->execute($hash);
			return $query->fetch();
		}

		public function insertJadwal($kode_mk,$kode_dosen,$kode_ruang,$kode_kelas,$hari,$jam_mulai,$jam_berakhir){
			$sql = "INSERT INTO jadwal VALUES (NULL,:kode_mk,:kode_dosen,:kode_ruang,:kode_kelas,:hari,:jam_mulai,:jam_berakhir)";
			$parameters = [
				':kode_mk' 	  => $kode_mk,
				':kode_dosen' => $kode_dosen,
				':kode_ruang' => $kode_ruang,
				':kode_kelas' => $kode_kelas,
				':hari' => $hari,
				':jam_mulai' => $jam_mulai,
				':jam_berakhir' => $jam_berakhir
			];
			$query = $this->db->prepare($sql);
			$query->execute($parameters);
		}

		public function deleteJadwal($id_jadwal){
			$sql = "DELETE FROM jadwal WHERE id_jadwal = :id_jadwal";
			$query = $this->db->prepare($sql);
			$hash = [':id_jadwal' => $id_jadwal];
			$query->execute($hash);
		}

	}