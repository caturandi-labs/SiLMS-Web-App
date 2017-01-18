<?php 

	/**
	*	@author Catur Andi Pamungkas 
	*
	*/
	class Tahunajaran extends Controller {
		
		public function index() {

			session_start();
			$listTahunajaran = $this->tahunajaranmodel->selectTahunajaran();
			if(!isset($_SESSION['username']) && !isset($_SESSION['id_level'])){
				header('Location:' . URL . 'login');
			}else{
				
				require APP . 'view/header_view.php';
	        	require APP . 'view/tahunajaran_view.php';
	        	require APP . 'view/footer_view.php';
			}

		}

		public function addTahunAjaran(){
			session_start();
			if(isset($_POST['btn_addtahunajaran'])){
				$this->tahunajaranmodel->insertTahunAjaran($_POST['tahun']);
			}
			header('Location:'.URL.'tahunajaran/index');
		}

		public function removeTahunAjaran($kode_tahun){
			session_start();
			if(isset($kode_tahun)){
				$this->tahunajaranmodel->deleteTahunAjaran($kode_tahun);
			}
			header('Location:'.URL.'tahunajaran/');
		}

		public function editTahun($kode_tahun){
			session_start();
			if(isset($kode_tahun)){
				$tahun = $this->tahunajaranmodel->selectTahunAjaranById($kode_tahun);
				require APP . 'view/header_view.php';
	        	require APP . 'view/tahun_ajaran_edit_view.php';
	        	require APP . 'view/footer_view.php';
			}else{
				header('Location:'.URL.'tahunajaran/');
			}
		}

		public function suntingTahun(){
			if(isset($_POST['btn_addtahunajaran'])){
				$this->tahunajaranmodel->updateTahunAjaran($_POST['tahun'],$_POST['kode_tahun']);
			}
			// echo "wow salah";
			header('Location:'.URL.'tahunajaran/');
		}

		public function testAjax(){
			$listTahunajaran = $this->tahunajaranmodel->selectTahunajaran();
			echo json_encode($listTahunajaran);
		}

		public function add(){
			session_start();
			$this->tahunajaranmodel->insertTahunAjaran($_POST['tahun']);
			// header('Location:'.URL.'tahunajaran/index');
		}

		public function delete($kode_tahun){
			session_start();
			if(isset($kode_tahun)){
				$this->tahunajaranmodel->deleteTahunAjaran($kode_tahun);
			}
			// header('Location:'.URL.'tahunajaran/');
		}

	}

?>