<?php 
	
	/**
	* @author Catur Andi Pamungkas
	*
	*/

	class Login extends Controller{

		public function index(){
    		require APP . 'view/login_view.php';
		}

		public function masuk(){

			$username = $_POST['username'];
			$password = $_POST['password'];
			$id_level = $_POST['id_level'];

			$row = $this->loginmodel->authenticate($username,$password,$id_level);
			
			if(count($row) == 1){
				if(session_status() == PHP_SESSION_NONE){
					
					session_start();

					foreach($row as $data){
						$username = $data->username;
						$id_level = $data->id_level;
					}
					
					$_SESSION['username'] = $username;
					$_SESSION['id_level'] = $id_level;

		    		header('Location:' . URL . 'home');
				}
			}else{
				# Call The Login Page and Show The Error And then ===> SHUT UP YOUR MOUTH !
				$error = 'Login Gagal, Periksa Kembali Username , Password, dan Hak Akses !';
				require_once APP . 'view/login_view.php';
			}
		}


		public function logout(){
			session_start();
			unset($_SESSION['username']);
			unset($_SESSION['id_level']);
			session_destroy();
			header('Location:' . URL . 'login');
		}
	}
