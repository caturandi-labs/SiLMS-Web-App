<?php 
	
	class Ruang extends Controller{
		public function index(){
			$listRuangs = $this->ruangmodel->selectRuang();
			require APP . 'view/header_view.php';
	        require APP . 'view/ruang_view.php';
	        require APP . 'view/footer_view.php';
		}
	}

?>