<?php 
	
	/**
	* @author cahyo
	*
	*/

	class Ruang extends Controller{
		public function index(){
			session_start();
			$listRuangs = $this->ruangmodel->selectRuang();
			if(!isset($_SESSION['username']) && !isset($_SESSION['id_level'])){
				header('Location:' . URL . 'login');
			}else{
				require APP . 'view/header_view.php';
	        	require APP . 'view/ruang_view.php';
	        	require APP . 'view/footer_view.php';
			}
		}

		public function addRuang(){
			session_start();
			if(isset($_POST['btn_addRuang'])){
				$this->ruangmodel->insertRuang($_POST['nama_ruang'], $_POST['kapasitas']);
			}
			header('Location:'.URL.'ruang/index');
		}

		public function removeRuang($kode_ruang){
			session_start();
			if(isset($kode_ruang)){
				$this->ruangmodel->deleteRuang($kode_ruang);
			}

			header('Location:'.URL.'ruang/index');
		}

		public function editRuang($kode_ruang){
			session_start();
			if(isset($kode_ruang)){
				$ruang = $this->ruangmodel->selectRuangById($kode_ruang);
				require APP . 'view/header_view.php';
	        	require APP . 'view/ruang_edit_view.php';
	        	require APP . 'view/footer_view.php';
			}else{
				header('Location:'.URL.'ruang/index');
			}
		}

		public function suntingRuang(){
			if(isset($_POST['btn_addruang'])){
				$this->ruangmodel->updateRuang($_POST['nama_ruang'], $_POST['kapasitas'],$_POST['kode_ruang']);
			}
			// echo "wow salah";
			header('Location:'.URL.'ruang/index');
		}
	}
