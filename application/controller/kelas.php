<?php 
	
	/**
	* 
	*/
	class Kelas extends Controller {

		public function index(){
			session_start();
			$listdatakelas = $this->kelasmodel->selectDatakelas();

			if(!isset($_SESSION['username']) && !isset($_SESSION['id_level'])){
				header('Location:' . URL . 'login');
			}else{
				require APP . 'view/header_view.php';
	        	require APP . 'view/datakelas_view.php';
	        	require APP . 'view/footer_view.php';
			}
			
		}

		public function view(){
			$listdatakelas = $this->kelasmodel->selectDatakelas();
			echo json_encode($listdatakelas);
		}

		public function addKelas(){
			session_start();
			if(isset($_POST['btn_addKelas'])){
				$this->kelasmodel->insertKelas($_POST['nama_kelas']);
			}
			header('Location:'.URL.'kelas/index');
		}

		public function removeKelas($kode_kelas){
			session_start();
			if(isset($kode_kelas)){
				$this->kelasmodel->deleteKelas($kode_kelas);
			}

			header('Location:'.URL.'kelas/index');
		}

		

		public function editKelas($kode_kelas){
			session_start();
			if(isset($kode_kelas)){
				$kelas = $this->kelasmodel->selectKelasById($kode_kelas);
				require APP . 'view/header_view.php';
	        	require APP . 'view/kelas_edit_view.php';
	        	require APP . 'view/footer_view.php';
			}else{
				header('Location:'.URL.'kelas/');
			}
		}

		public function suntingKelas(){
			if(isset($_POST['btn_addkelas'])){
				$this->kelasmodel->updateKelas($_POST['nama_kelas'],$_POST['kode_kelas']);
			}
			header('Location:'.URL.'kelas/');
		}
		
	}
 ?>