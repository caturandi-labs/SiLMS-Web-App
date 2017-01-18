<?php 
	
	/**
	* 
	* @author cahyo
	*/

	class User extends Controller{

		public function index(){
			session_start();
	       	$listUser = $this->usermodel->selectUser();
	       	$listLevel = $this->levelmodel->selectLevel();
			require APP . 'view/header_view.php';
	        require APP . 'view/user_view.php';
	        require APP . 'view/footer_view.php';
		}

		public function addUser(){
			session_start();
			if($_POST['btn_adduser']){
				$this->usermodel->insertUser($_POST['username'],$_POST['password'],$_POST['id_level']);
			}else{
				header('Location:'.URL.'level/');
			}
		}

		public function removeUser($id_user){
			session_start();
			if(isset($id_user)){
				$this->usermodel->deleteUser($id_user);
			}else{
				header('Location:'.URL.'user/');
			}

			
		}

	}
	
?>