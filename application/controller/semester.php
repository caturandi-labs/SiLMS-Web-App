<?php 

	/**
	* @author cahyo
	*
	*/
	class Semester extends Controller {
		
		public function index() {
			session_start();
			$listSemester = $this->semestermodel->selectSemester();

			if(!isset($_SESSION['username']) && !isset($_SESSION['id_level'])){
				header('Location:' . URL . 'login');
			}else{
				require APP . 'view/header_view.php';
	        	require APP . 'view/semester_view.php';
	        	require APP . 'view/footer_view.php';
			}
		}

		public function addSemester(){
			session_start();
			if($_POST['btn_addsemester']){
				$this->semestermodel->insertSemester($_POST['semester']);
			}
			header('Location:'.URL.'semester/index');
		}

		public function removeSemester($id_semester){
			session_start();
	        if (isset($id_semester)) {
	            $this->semestermodel->deleteSemester($id_semester);
	        }
	        header('location: ' . URL . 'semester/index');
		}

		public function editSemester($id_semester){
			session_start();
			if(isset($id_semester)){
				$semester = $this->semestermodel->selectSemesterById($id_semester);
				require APP . 'view/header_view.php';
	        	require APP . 'view/semester_edit_view.php';
	        	require APP . 'view/footer_view.php';
			}else{
				header('Location:'.URL.'semester/');
			}
		}

		public function suntingSemester(){
			if(isset($_POST['btn_addsemester'])){
				$this->semestermodel->updateSemester($_POST['semester'],$_POST['id_semester']);
			}
			// echo "wow salah";
			header('Location:'.URL.'semester/');
		}

	}
?>