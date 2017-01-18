<?php 
	
	/**
	* 
	*/
	class Matakuliah extends Controller {
		
		public function index(){
			session_start();
			$listMatakuliah = $this->matakuliahmodel->selectMataKuliah();
			$listSemester = $this->semestermodel->selectSemester();
			if(!isset($_SESSION['username']) && !isset($_SESSION['id_level'])){
				header('Location:' . URL . 'login');
			}else{
				require APP . 'view/header_view.php';
		        require APP . 'view/matakuliah_view.php';
	    	    require APP . 'view/footer_view.php';
			}
		}

		

		public function addMataKuliah(){
			session_start();
			if(isset($_POST['btn_addMakul'])){
				$this->matakuliahmodel->insertMataKuliah($_POST['kode_mk'], $_POST['nama_mk'], $_POST['sks'], $_POST['id_semester']);
			}
			header('Location:'.URL.'matakuliah/index');
		}

		public function removeMataKuliah($kode_mk){
			session_start();
			if(isset($kode_mk)){
				$this->matakuliahmodel->deleteMataKuliah($kode_mk);
			}
			header('Location:'.URL.'matakuliah/index');
		}

		public function editMataKuliah($kode_mk){
			session_start();
			if(isset($kode_mk)){
				$matakuliah = $this->matakuliahmodel->selectMataKuliahById($kode_mk);
				$listSemester = $this->semestermodel->selectSemester();
				require APP . 'view/header_view.php';
	        	require APP . 'view/matakuliah_edit_view.php';
	        	require APP . 'view/footer_view.php';
			}else{
				header('Location:'.URL.'matakuliah/');
			}
		}

		public function suntingMataKuliah(){
			if(isset($_POST['btn_addMakul'])){
				$this->matakuliahmodel->updateMataKuliah($_POST['nama_mk'], $_POST['sks'], $_POST['id_semester'],$_POST['kode_mk']);
			}
			header('Location:'.URL.'matakuliah/');
		}

	}
?>