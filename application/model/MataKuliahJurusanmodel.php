<?php
	
/**
*
*	@author Catur Andi Pamungkas
*/
class MataKuliahJurusanmodel extends Model{

	public function selectMataKuliahJurusan(){
		$sql = "SELECT mata_kuliah_detail.kode_mk,mata_kuliah.nama_mk,mata_kuliah.sks,mata_kuliah.id_semester,program_studi.nama_prodi FROM mata_kuliah_detail,mata_kuliah,program_studi WHERE mata_kuliah_detail.kode_mk = mata_kuliah.kode_mk AND mata_kuliah_detail.kode_prodi = program_studi.kode_prodi ";
		$query = $this->db->prepare($sql);
		$query->execute();
		return $query->fetchAll();
	}

	public function insertMataKuliahJurusan($kode_mk, $kode_prodi){
		$sql = "INSERT INTO mata_kuliah_detail VALUES (NULL,:kode_mk,:kode_prodi)";
		$query = $this->db->prepare($sql);
		$hash = [
			':kode_mk' => $kode_mk,
			':kode_prodi' => $kode_prodi
		];
		$query->execute($hash);
	}

	public function deleteMataKuliahJurusan($id) {
		$sql = "DELETE FROM mata_kuliah_detail WHERE id_mata_kuliah_detail = :id_mata_kuliah_detail";
		$query = $this->db->prepare($sql);
		$hash = array(':id_mata_kuliah_detail' => $id);
		$query->execute($hash);
	}

	public function selectMataKuliahJurusanById($id){
		$sql = "SELECT * FROM mata_kuliah WHERE id_mata_kuliah_detail = :id";
        $query = $this->db->prepare($sql);
        $hash = [":id" => $id];
        $query->execute($hash);
        return $query->fetch();
	}

}