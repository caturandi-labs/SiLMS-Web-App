<?php

/**
*
* @author Catur Andi Pamungkas
*/
class Absen extends Controller{
	
	public function index(){
		session_start();
		if(!isset($_SESSION['username']) && !isset($_SESSION['id_level'])){
			header('Location:' . URL . 'login');
		}else{
			require APP . 'view/header_view.php';
        	require APP . 'view/absensi_view.php';
        	require APP . 'view/footer_view.php';
		}
	}


}