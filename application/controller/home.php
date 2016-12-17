<?php

/**
*
* untuk landing page
* @author andi
*/

class Home extends Controller{

	public function __construct()
	{
		session_start();
		// print_r($_SESSION);
		if(!isset($_SESSION['username']) && !isset($_SESSION['id_level'])){
			header('Location:' . URL . 'login');
		}
	}

    public function index()
    {
    	
    	if($_SESSION['id_level'] == 1){

    		require APP . 'view/header_view.php';
			require APP . 'view/home/index.php';
			require APP . 'view/footer_view.php';

    	}else if($_SESSION['id_level'] == 2){
    		require APP . 'view/mahasiswa/header_view_mahasiswa.php';
			require APP . 'view/mahasiswa/index.php';
			require APP . 'view/footer_view.php';
    	
    	}else{
    		require APP . 'view/dosen/header_dosen_view.php';
			require APP . 'view/dosen/index.php';
			require APP . 'view/footer_view.php';
    	}
		
  
    }

}
