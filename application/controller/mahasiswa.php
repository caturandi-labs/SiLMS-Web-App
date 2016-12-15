<?php 
	

	class Mahasiswa extends Controller{
		
		public function index(){
			$listMahasiswa = $this->mahasiswamodel->select();
			require APP . 'view/header_view.php';
	        require APP . 'view/mahasiswa_view.php';
	        require APP . 'view/footer_view.php';
		}

	}

?>