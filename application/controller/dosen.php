<?php 

	/**
	* @author cahyo
	*
	*/
	class Dosen extends Controller {
		
		public function index() {
			session_start();
			$listDosen = $this->dosenmodel->selectDosen();

			if(!isset($_SESSION['username']) && !isset($_SESSION['id_level'])){
				header('Location:' . URL . 'login');
			}else{
				require APP . 'view/header_view.php';
	        	require APP . 'view/dosen_view.php';
	        	require APP . 'view/footer_view.php';
			}
		}

		public function addDosen(){
			session_start();
			if(isset($_POST['btn_addDosen'])){
				$kode_dosen = $_POST['kode_dosen'];
				$nama_dosen = $_POST['nama_dosen'];
				$alamat = $_POST['alamat_jalan'];
				$kota = $_POST['kota'];
				$pendidikan  = $_POST['pendidikan'];
				// print_r($_POST); 	
				$this->dosenmodel->insertDosen($kode_dosen,$nama_dosen,$alamat,$kota,$pendidikan);
			}
			header('Location:'.URL.'dosen/');
		}

		public function removeDosen($kode_dosen){
			session_start();
			if(isset($kode_dosen)){
				$this->dosenmodel->deleteDosen($kode_dosen);
			}

			header('Location:'.URL.'dosen/');
		}

		public function editDosen($kode_dosen){
			session_start();
			if(isset($kode_dosen)){
				$dosen = $this->dosenmodel->selectDosenById($kode_dosen);
				require APP . 'view/header_view.php';
	        	require APP . 'view/dosen_edit_view.php';
	        	require APP . 'view/footer_view.php';
			}else{
				header('Location:'.URL.'dosen/');
			}
		}

		public function suntingDosen(){
			if(isset($_POST['btn_addDosen'])){
				$kode_dosen = $_POST['kode_dosen'];
				$nama_dosen = $_POST['nama_dosen'];
				$alamat = $_POST['alamat_jalan'];
				$kota = $_POST['kota'];
				$pendidikan  = $_POST['pendidikan'];
				$this->dosenmodel->updateDosen($nama_dosen,$alamat,$kota,$pendidikan,$kode_dosen);
			}
			header('Location:'.URL.'dosen/');
		}

	}
?>