<?php 

	/**
	*@author andi
	*
	*/
	class Level extends Controller{

		public function index(){
			session_start();
			$listLevel = $this->levelmodel->selectLevel();
			require APP . 'view/header_view.php';
	        require APP . 'view/level_view.php';
	        require APP . 'view/footer_view.php';
		}
		
		public function addLevel(){
			session_start();
			if($_POST['btn_addlevel']){
				$this->levelmodel->insertLevel($_POST['nama_level']);
			}
			header('Location:'.URL.'level/index');
		}

	}
