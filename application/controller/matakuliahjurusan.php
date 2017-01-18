<?php
	
	class MataKuliahJurusan extends Controller{

		public function index(){
			session_start();
			$listProdi = $this->jurusanmodel->selectJurusan();
			if(!isset($_SESSION['username']) && !isset($_SESSION['id_level'])){
				header('Location:' . URL . 'login');
			}else{
				require APP . 'view/header_view.php';
	        	require APP . 'view/mata_kuliah_jurusan_view.php';
	        	require APP . 'view/footer_view.php';
			}
		}

		public function viewMakulJurusanAjax(){
			$listMj = $this->matakuliahjurusanmodel->selectMataKuliahJurusan();
			echo json_encode($listMj);
		}
		
		public function addMataKuliahJurusan(){
			session_start();
			if(isset($_POST['btn_addmakuldetail'])){
				$this->matakuliahjurusanmodel->insertMataKuliahJurusan($_POST['kode_mk'],$_POST['kode_prodi']);
			}else{
				header('Location:'.URL.'matakuliahjurusan/');
			}
			header('Location:'.URL.'matakuliahjurusan/');
		}

		public function removeMataKuliahJurusan($id){
			session_start();
			if(isset($id)){
				$this->matakuliahjurusanmodel->deleteMataKuliahJurusan($id);
			}

			header('Location:'.URL.'matakuliahjurusan/');
		}

		// public function editMataKuliahJurusan($id){
		// 	session_start();
		// 	if(isset($id)){
		// 		$matakuliah = $this->matakuliahmodel->selectMataKuliahById($kode_mk);
		// 		$listSemester = $this->semestermodel->selectSemester();
		// 		require APP . 'view/header_view.php';
	    //      require APP . 'view/matakuliah_edit_view.php';
	    //      require APP . 'view/footer_view.php';
		// 	}else{
		// 		header('Location:'.URL.'matakuliah/');
		// 	}
		// }

		// public function suntingMataKuliah(){
		// 	if(isset($_POST['btn_addMakul'])){
		// 		$this->matakuliahmodel->updateMataKuliah($_POST['nama_mk'], $_POST['sks'], $_POST['id_semester'],$_POST['kode_mk']);
		// 	}
		// 	header('Location:'.URL.'matakuliah/');
		// }


	}