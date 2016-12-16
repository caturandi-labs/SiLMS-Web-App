<?php

class Home extends Controller{

	public function __construct()
	{
		if(!isset($_SESSION['username']) && isset($_SESSION['id_level'])){
			header('Location:' . URL . 'login');
		}
	}

    public function index()
    {
		require APP . 'view/header_view.php';
		require APP . 'view/home/index.php';
		require APP . 'view/footer_view.php';
  
    }

}
