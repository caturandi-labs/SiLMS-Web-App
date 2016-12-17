<?php 
	

	class User extends Controller{

		public function showUser(){
			session_start();
	       	$listUser = $this->usermodel->selectUser();
			require APP . 'view/header_view.php';
	        require APP . 'view/user_view.php';
	        require APP . 'view/footer_view.php';
		}

	}
	
?>