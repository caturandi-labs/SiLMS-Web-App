<?php

/**
* @author Catur Andi Pamungkas
*
*/
class Prodi extends Controller{

	public function index(){
		session_start();
		$listDosen = $this->dosenmodel->selectDosen();
		$listProdi = $this->jurusanmodel->selectJurusan();

		if(!isset($_SESSION['username']) && !isset($_SESSION['id_level'])){
			header('Location:' . URL . 'login');
		}else{
			require APP . 'view/header_view.php';
        	require APP . 'view/prodi_view.php';
        	require APP . 'view/footer_view.php';
		}
	}

	public function addProdi(){
		session_start();
		if(isset($_POST['btn_addprodi'])){
			$kode_prodi = $_POST['kode_prodi'];
			$nama_prodi = $_POST['nama_prodi'];
			$tahun = $_POST['tahun_berdiri'];
			$no_sk  = $_POST['no_sk'];
			$jenjang = $_POST['jenjang'];
			$kode_dosen = $_POST['kode_dosen'];
			$this->jurusanmodel->insertJurusan($kode_prodi,$nama_prodi,$tahun,$no_sk,$jenjang,$kode_dosen);
		}
		header('Location:'.URL.'prodi/index');
	}

	public function removeProdi($kode_prodi){
		session_start();
		if(isset($kode_prodi)){
			$this->jurusanmodel->deleteJurusan($kode_prodi);
		}
		header('Location:'.URL.'prodi/index');
	}

	public function editProdi($kode_prodi){
			session_start();
			if(isset($kode_prodi)){
				$prodi = $this->jurusanmodel->selectJurusanById($kode_prodi);
				$listDosen = $this->dosenmodel->selectDosen();
				require APP . 'view/header_view.php';
	        	require APP . 'view/prodi_edit_view.php';
	        	require APP . 'view/footer_view.php';
			}else{
				header('Location:'.URL.'prodi/');
			}
		}

		public function suntingProdi(){
			if(isset($_POST['btn_addprodi'])){
				$kode_prodi = $_POST['kode_prodi'];
				$nama_prodi = $_POST['nama_prodi'];
				$tahun = $_POST['tahun_berdiri'];
				$no_sk  = $_POST['no_sk'];
				$jenjang = $_POST['jenjang'];
				$kode_dosen = $_POST['kode_dosen'];
				$this->jurusanmodel->updateJurusan($nama_prodi,$tahun,$no_sk,$jenjang,$kode_dosen,$kode_prodi);
			}
			header('Location:'.URL.'prodi/');
		}

}
