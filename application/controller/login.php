<?php 

	class Login extends Controller{

		public function index(){
    		require APP . 'view/login_view.php';
		}

		public function masuk(){

			if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['id_level'])){
				$username = $_POST['username'];
				$password = $_POST['password'];
				$id_level = $_POST['id_level'];
			}else{
				echo "<script>alert('Maaf Data Belum Terisi Lengkap!');</script>";
			}

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
				echo "Maaf Username Dan Password Yang Anda Masukkan Salah!";
			}
		}

		public function logout(){
			session_destroy();
			unset($_SESSION['username']);
			unset($_SESSION['id_level']);
			header('Location:' . URL . 'login');
		}
	}
